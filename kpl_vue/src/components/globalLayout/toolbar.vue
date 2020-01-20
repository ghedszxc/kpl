<template>
    <div>
        <v-app-bar app flat clipped-left extended class="green hidden-sm-and-down"
            style="padding-left: 18%; padding-right: 18%;">

            <v-layout>
                <v-flex xs12 class="text-start pl-2">
                    <v-toolbar-title class="main_font hidden-sm-and-down">
                        <img src="../../../public/home/final_kpl.png"
                        alt="kpl" class="mt-2 mr-2" style="height: 60px;">
                    </v-toolbar-title>
                </v-flex>
                <v-flex xs12 class="text-end mt-1">
                    <v-layout row>
                        <v-flex xs12>
                            <span class="caption font-weight-bold white--text"
                                style="cursor: default;">
                                <v-icon style="font-size: 15px;" color="white" class="mr-1">phone</v-icon>
                                <span class="font-weight-light white--text"> (02) 8952 4265 | (02) 8294 4050</span>
                            </span>
                        </v-flex>
                        <v-flex xs12 style="margin-top: -1%;">
                            <span class="caption font-weight-bold white--text"
                                style="cursor: default;">
                                <v-icon style="font-size: 15px;" color="white" class="mr-1">phone_iphone</v-icon>
                                <span class="font-weight-light white--text"> (+639) 1597 52532 | (+639) 2054 14800</span>
                            </span>
                        </v-flex>
                        <v-flex xs12 style="margin-top: -1%;">
                            <span class="caption font-weight-light white--text"
                                style="cursor: default;">
                                <v-icon style="font-size: 15px;" color="white" class="mr-1">navigation</v-icon>
                                536 Quirino Hwy, Novaliches, Quezon City, Metro Manila
                            </span>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>

            <template #extension>
                <v-tabs background-color="green" dark height="40"
                    style="position: absolute; bottom: -3px;">
                    <v-tab v-for="(item, index) in items" :key="index"
                        :class="$route.path == item.link ? 'active-class' : ''"
                        @click="onSelectPage(item.link)">
                        <span class="caption font-weight-medium">{{item.title}}</span>
                    </v-tab>
                    <contact-us></contact-us>
                </v-tabs>
                <v-spacer></v-spacer>
            </template>
        </v-app-bar>

        <v-app-bar app flat clipped-left class="green hidden-md-and-up">
            <v-app-bar-nav-icon color="white" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-spacer></v-spacer>
            <v-toolbar-title class="black--text font-weight-light">
                <img src="../../../public/home/final_kpl.png"
                alt="kpl" class="mt-2 " style="height: 45px;">
            </v-toolbar-title>
        </v-app-bar>

        <v-navigation-drawer v-model="drawer" class="hidden-md-and-up" hide-overlay app>
            <v-list dense>
                <div v-for="(item, index) in items" :key="index">
                    <v-list-item @click="onSelectPage(item.link)"
                        :class="$route.path == item.link ? 'green' : ''">
                        <v-list-item-icon>
                            <v-icon :color="$route.path == item.link ? 'white' : 'grey darken-2'">{{item.icon}}</v-icon>
                        </v-list-item-icon>
                        <v-list-item-title :class="$route.path == item.link ? 'white--text' : 'grey--text text--darken-2'">
                            {{item.title}}
                        </v-list-item-title>
                    </v-list-item>
                </div>
                <contact-us></contact-us>
            </v-list>
        </v-navigation-drawer>
    </div>
</template>
<script>
import contactUs from "../content/contact"
export default {
    components: {
        'contact-us': contactUs
    },
    data: () => ({
        drawer: null,
        items: [
          { title: 'Home', icon: 'home', link: '/' },
          { title: 'Product', icon: 'shopping_cart', link: '/product' },
          { title: 'About Us', icon: 'supervisor_account', link: '/about' },
          { title: 'Branch', icon: 'store', link: '/branch' }
        ]
    }),
    methods: {
        onSelectPage(data){
            const self = this;
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
            self.$router.push(data)
        }
    }
}
</script>
<style scoped>
    div >>> .v-list-item__title {
        font-weight: 400 !important;
    }
</style>