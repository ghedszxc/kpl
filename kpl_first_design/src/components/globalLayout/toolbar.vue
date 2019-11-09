<template>
    <div class="white">
        <v-toolbar class="hidden-md-and-down" flat height="50"
            style="margin-left: 10%; margin-right: 9%;">
            <v-toolbar-title class="main_font hidden-sm-and-down">
                <img src="../../../public/home/kpl_logo.png"
                alt="kpl"  style="height: 45px;">
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items v-for="(item, index) in items" :key="index">
                <v-btn text @click="onSelectPage(item.link)">{{item.title}}</v-btn>
            </v-toolbar-items>
        </v-toolbar>

        <v-toolbar class="hidden-lg-and-up" flat height="50">
            <v-app-bar-nav-icon color="black" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-spacer></v-spacer>
            <v-toolbar-title class="black--text font-weight-light">
                <img src="../../../public/home/kpl_logo.png"
                alt="kpl"  style="height: 45px;">
            </v-toolbar-title>
        </v-toolbar>

        <v-navigation-drawer v-model="drawer" class="hidden-lg-and-up" hide-overlay app>
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
                    <v-divider class="mr-2 ml-2"></v-divider>
                </div>
                <glimpse-product></glimpse-product> 
            </v-list>
        </v-navigation-drawer>
    </div>
</template>
<script>
import glimpseProduct from '../content/home/glimpseProduct';
export default {
    data: () => ({
        drawer: null,
        items: [
          { title: 'Home', icon: 'home', link: '/' },
          { title: 'Contact Us', icon: 'phone', link: '/contact' },
          { title: 'About Us', icon: 'supervisor_account', link: '/about' }
        ]
    }),
    components: {
        'glimpse-product': glimpseProduct
    },
    methods: {
        onSelectPage(data){
            const self = this;
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