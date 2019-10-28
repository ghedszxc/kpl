<template>
    <div>
        <v-toolbar class="green" flat height="70">
            <!-- <v-spacer></v-spacer> -->
            <v-toolbar-title class="white--text main_font">INSERT KPL LOGO</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-toolbar-items v-for="(item, index) in items" :key="index">
                <v-btn text class="white--text">{{item.title}}</v-btn>
            </v-toolbar-items>
            <v-toolbar-items>
                <v-menu open-on-hover bottom offset-y>
                    <template v-slot:activator="{ on }">
                        <v-btn text class="green lighten-1" dark v-on="on">
                            Products
                        </v-btn>
                    </template>
                </v-menu>
            </v-toolbar-items>
            <!-- <v-spacer></v-spacer> -->
        </v-toolbar>
    </div>
</template>
<script>
// import productList from "../content/products/productList"
export default {
    // components : {
    //     'product-list': productList
    // },
    data: () => ({
        drawer: null,
        items: [
          { title: 'Home', icon: 'home', link: '/' },
          { title: 'Contact Us', icon: 'phone', link: '/contact' },
          { title: 'About Us', icon: 'supervisor_account', link: '/about' }
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
