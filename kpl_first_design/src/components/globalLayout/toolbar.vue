<template>
    <div>
        <v-navigation-drawer 
            permanent hide-overlay clipped app floating fixed 
            
            :mini-variant.sync="mini"
            mini-variant-width="60"

            @mouseover.native.stop="mouseIn"
            @mouseleave.native.stop="mouseOut">
            <v-list-item class="green">
                <v-list-item-content v-if="!mini">
                    <v-list-item-title>
                        <h3 class="white--text main_font">KPL Industrial</h3>
                    </v-list-item-title>
                    <!-- <v-list-item-subtitle>
                        <span class="white--text">
                            Corporation chuchu
                        </span>
                    </v-list-item-subtitle> -->
                </v-list-item-content>
            </v-list-item>

            <v-divider></v-divider>

            <v-list dense nav>
                <v-list-item v-for="item in items" :key="item.title" link>
                    <v-list-item-icon>
                        <v-icon>{{ item.icon }}</v-icon>
                    </v-list-item-icon>

                    <v-list-item-content>
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
    </div>
</template>
<script>
export default {
    data: () => ({
        mini: true,
        drawer: null,
        items: [
          { title: 'Home', icon: 'home' },
          { title: 'About Us', icon: 'supervisor_account' },
          { title: 'Product & Services', icon: 'shopping_cart' },
          { title: 'Contact Us', icon: 'phone' }
        ]
    }),
    methods: {
        mouseIn(){
            const self = this;
            if(self.mini) { self.mini = false; }
        },
        mouseOut(){
            const self = this;
            if(!self.mini) { self.mini = true; }
        }
    },
}
</script>