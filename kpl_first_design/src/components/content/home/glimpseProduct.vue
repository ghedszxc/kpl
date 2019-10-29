<template>
    <div style="border: 1px solid red;">
        <v-layout wrap row class="ma-1">
            <v-flex xs2>
                <!-- <v-menu
                    v-model="menu"
                    :close-on-content-click="false"
                    :nudge-width="200" offset-x>
                    <template v-slot:activator="{ on }">
                        <v-btn color="indigo" dark v-on="on">
                            Menu as Popover
                        </v-btn>
                    </template>

                    <v-card>
                        <v-list>
                        <v-list-item>
                            <v-list-item-avatar>
                                <img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John">
                            </v-list-item-avatar>

                            <v-list-item-content>
                                <v-list-item-title>John Leider</v-list-item-title>
                                <v-list-item-subtitle>Founder of Vuetify.js</v-list-item-subtitle>
                            </v-list-item-content>

                            <v-list-item-action>
                                <v-btn :class="fav ? 'red--text' : ''"
                                    icon @click="fav = !fav">
                                    <v-icon>mdi-heart</v-icon>
                                </v-btn>
                            </v-list-item-action>
                        </v-list-item>
                        </v-list>
                    </v-card>
                </v-menu> -->
                <v-list dense>
                    <v-list-item>
                        <v-list-item-icon> <v-icon>mdi-home</v-icon> </v-list-item-icon>
                        <v-list-item-title>Home</v-list-item-title>
                    </v-list-item>
            
                    <v-list-group prepend-icon="account_circle" value="true">
                        <template v-slot:activator>
                            <v-list-item-title>Users</v-list-item-title>
                        </template>
                
                        <v-list-group no-action sub-group value="true">
                            <template v-slot:activator>
                            <v-list-item-content>
                                <v-list-item-title>Admin</v-list-item-title>
                            </v-list-item-content>
                            </template>
                
                            <v-list-item v-for="(admin, i) in admins" :key="i" link>
                            <v-list-item-title v-text="admin[0]"></v-list-item-title>
                            <v-list-item-icon>
                                <v-icon v-text="admin[1]"></v-icon>
                            </v-list-item-icon>
                            </v-list-item>
                        </v-list-group>
                    </v-list-group>
                </v-list>
            </v-flex>
            <v-flex xs12 sm10>
                
                <v-layout wrap row class="ma-1">
                    <v-flex xs12 sm4 class="px-1 mt-2">
                        <v-card>
                            <v-img class="white--text align-end" height="200px"
                                src="https://www.bidlink.net/news/wp-content/uploads/2019/08/12_ton_hydraulic_tripod_jack.jpg">
                            </v-img>
                            <v-card-text>
                                <p class="main_font"> Hydraulic Tripod Jack </p>
                                <span class="font-weight-light">Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at</span>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn text class="light-blue lighten-2 white--text">
                                    Inquire
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="px-1 mt-2">
                        <v-card>
                            <v-img class="white--text align-end" height="200px"
                                src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg">
                            </v-img>
                            <v-card-text>
                                <p class="main_font"> Hydraulic Chuchu </p>
                                <span class="font-weight-light">Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at</span>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn text class="light-blue lighten-2 white--text">
                                    Inquire
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="px-1 mt-2">
                        <v-card>
                            <v-img class="white--text align-end" height="200px"
                                src="https://dewaldfluidpower.com/wp-content/uploads/2017/10/pro-top-2.jpg">
                            </v-img>
                            <v-card-text>
                                <p class="main_font"> Hydraulic Chuchu </p>
                                <span class="font-weight-light">Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at</span>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn text class="light-blue lighten-2 white--text">
                                    Inquire
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
    </div>
</template>
<script>
export default {
    data: () => ({
      fav: true,
      menu: false,
      checkbox: false,
      admins: [
          ['Management', 'people_outline'],
          ['Settings', 'settings']
      ]
    })
}
</script>