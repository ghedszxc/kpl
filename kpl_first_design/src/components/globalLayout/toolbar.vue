<template>
    <div class="green">
        <v-toolbar class="green ml-12 mr-12" flat height="50">
            <v-toolbar-title class="white--text main_font">INSERT KPL LOGO</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items v-for="(item, index) in items" :key="index">
                <v-btn text class="white--text">{{item.title}}</v-btn>
            </v-toolbar-items>
        </v-toolbar>
    </div>
</template>
<script>
export default {
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
