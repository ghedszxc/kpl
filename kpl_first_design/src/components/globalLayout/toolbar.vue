<template>
    <div class="green">
        <v-toolbar class="green ml-12 mr-12 hidden-sm-and-down" flat height="50">
            <v-toolbar-title class="white--text main_font hidden-sm-and-down">INSERT KPL LOGO</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items v-for="(item, index) in items" :key="index">
                <v-btn text class="white--text">{{item.title}}</v-btn>
            </v-toolbar-items>


            <v-toolbar-items class="hidden-lg-and-up">
                <v-menu open-on-hover bottom offset-y>
                    <template v-slot:activator="{ on }">
                        <v-btn text class="green" dark v-on="on">
                            Products
                        </v-btn>
                    </template>
                </v-menu>
            </v-toolbar-items>
        </v-toolbar>
        <v-toolbar class="green hidden-md-and-up" flat height="50">
            <v-app-bar-nav-icon color="white"  @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
            <v-spacer></v-spacer>
            <v-toolbar-title class="white--text main_font">INSERT KPL LOGO</v-toolbar-title>
        </v-toolbar>

        <v-navigation-drawer v-model="drawer" class="hidden-md-and-up"
            hide-overlay clipped app floating fixed>
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