<template>
    <div>
        <v-navigation-drawer 
            permanent hide-overlay clipped app floating fixed
            width="30%" class="green darken-1">
            <!-- <v-list-item>
                <v-list-item-content>
                        <v-list-item-icon>
                            <v-icon style="font-size: 250px;">person</v-icon>
                        </v-list-item-icon>
                        <v-list-item-content>
                            <v-list-item-title>
                                <h3 class="white--text main_font">KPL Industrial</h3>
                            </v-list-item-title>
                        </v-list-item-content>
                </v-list-item-content>
            </v-list-item> -->
            <!-- <v-card flat class="green">
                    <v-spacer></v-spacer>
                <v-card-text>
                    <v-icon style="font-size: 250px;">person</v-icon>
                    <h3 class="white--text main_font">KPL Industrial</h3>
                </v-card-text>
                    <v-spacer></v-spacer>
            </v-card> -->
            <v-card flat class="transparent" style="border-radius: 0;">
                <v-layout row wrap style="margin-top: 10%;">
                    <v-flex offset-xs5>
                        <v-icon style="font-size: 100px;" color="white">polymer</v-icon>
                    </v-flex>
                    <v-flex offset-xs4>
                        <v-card-text>
                            <span class="headline white--text main_font">KPL Industrial</span> <br>
                            <!-- <span class="white--text">
                                Sed turpis nunc, laoreet sit amet fermentum sed, 
                                euismod ac justo. Class aptent taciti sociosqu.
                            </span> -->
                        </v-card-text>
                    </v-flex>
                </v-layout>
            </v-card>
            <!-- <v-divider></v-divider> -->

            <v-list class="mt-4">
                <div v-for="item in items" :key="item.title">
                    <v-list-item @click="onSelectPage(item.link)">
                        <!-- :class="$route.path == item.link ? 'active' : ''" -->
                        <v-list-item-icon>
                            <v-icon color="white">{{ item.icon }}</v-icon>
                        </v-list-item-icon>

                        <v-list-item-content>
                            <v-list-item-title class="white--text">{{ item.title }}</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </div>
            </v-list>
        </v-navigation-drawer>
    </div>
</template>
<script>
export default {
    data: () => ({
        drawer: null,
        items: [
          { title: 'Home', icon: 'home', link: '/' },
          { title: 'Contact Us', icon: 'phone', link: '/contact' },
          { title: 'About Us', icon: 'supervisor_account', link: '/about' },
          { title: 'Product & Services', icon: 'shopping_cart', link: '/services' }
        ]
    }),
    methods: {
        onSelectPage(data){
            const self = this;
            self.$router.push(data)
        }
    }
}
</script>
