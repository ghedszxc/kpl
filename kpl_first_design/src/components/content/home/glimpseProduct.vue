<template>
    <div>
        <!-- THIS IS TO DISPLAY LARGE VIEW -->
        <v-card flat class="hidden-md-and-down" style="border-radius: 0;">
            <v-list dense>
                <v-list-item @click="goTo()">
                    <v-list-item-icon>
                        <v-icon color="black">list</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <span class="main_font">Products</span>
                    </v-list-item-title>
                </v-list-item>
                <div v-for="(item, index) in sample_items" :key="index">
                    <v-menu open-on-hover right offset-x transition="scale-transition">
                        <template v-slot:activator="{ on }">
                            <v-list-item v-on="on" style="border-bottom: 1px solid #E0E0E0;">
                                <v-list-item-title>{{item.cat}}</v-list-item-title>
                                <v-list-item-icon>
                                    <v-icon>keyboard_arrow_right</v-icon>
                                </v-list-item-icon>
                            </v-list-item>
                        </template>

                        <v-list dense>
                            <div v-for="(data, key) in item.subhead" :key="key">
                                <v-list-item link>
                                    <v-list-item-title>{{ data }}</v-list-item-title>
                                </v-list-item>
                                <v-divider class="ml-4 mr-4"></v-divider>
                            </div>
                        </v-list>
                    </v-menu>
                </div>
            </v-list>
        </v-card>

        <!-- THIS IS TO DISPLAY SMALL VIEW -->
        <v-list dense class="hidden-lg-and-up">
            <v-list-item @click="goTo()" :class="$route.path == '/product' ? 'green' : ''">
                <v-list-item-icon>
                    <v-icon :color="$route.path == '/product' ? 'white' : 'grey darken-2'">list</v-icon>
                </v-list-item-icon>
                <v-list-item-title :class="$route.path == '/product' ? 'white--text' : 'grey--text text--darken-2'">
                    Products
                </v-list-item-title>
            </v-list-item>
            <v-list-group v-for="(item, index) in sample_items" :key="index" color="green">
                <template v-slot:activator>
                    <v-list-item-title class="main_subheader grey-text text--darken-2">
                        {{item.cat}}
                    </v-list-item-title>
                </template>
                <v-list-item v-for="(data, key) in item.subhead" :key="key" link>
                    <v-list-item-title>
                        <span class="main_subheader grey-text text--darken-2 ml-4">
                            {{data}}
                        </span>
                    </v-list-item-title>
                </v-list-item>
            </v-list-group>
        </v-list>
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
        ['Settings', 'settings'],
      ],

      sample_items: [
          {
              cat: 'Soap',
              subhead: [ 'Safeguard', 'Dove', 'Silka' ]
          },
          {
              cat: 'Shampoo',
              subhead: [ 'Head & Shoulder', 'Clear', 'Tresemme', 'Palmolive', 'Vaseline' ]
          },
          {
              cat: 'Toothpaste',
              subhead: [ 'Close Up', 'Colgate' ]
          },
          {
              cat: 'Clothings',
              subhead: [ 'Bench', 'H&M', 'Uniqlo', 'Tribal', 'Oxygen']
          },
          {
              cat: 'Shoes',
              subhead: [ 'Nike', 'Jordan', 'Vans', 'Converse']
          },
          {
              cat: 'Restaurant',
              subhead: [ 'Jollibee', 'Mcdonalds', 'KFC']
          },
          {
              cat: 'Gadgets',
              subhead: [ 'Apple', 'Sample', 'Asus', 'Nintendo']
          },
          {
              cat: 'Cafe',
              subhead: [ 'Starbucks', 'Tullys', "Seattle's Best", 'Miao Cat Cafe']
          }
      ]
    }),
    methods: {
        goTo(){
            const self = this;
            if (self.$router.path != '/product') {
                self.$router.push('/product')
            }
        }
    },
}
</script>
<style scoped>
    div >>> .v-list-item__title {
        font-weight: 400 !important;
    }
    div >>> .v-application .primary--text {
        color: green !important;
    }
</style>