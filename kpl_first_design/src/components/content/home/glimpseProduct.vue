<template>
    <div>
        <v-card flat style="border-radius: 0;">
            <v-list dense>
                <v-list-item>
                    <v-list-item-icon>
                        <v-icon color="black">list</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                        <span class="main_font">My Markets</span>
                    </v-list-item-title>
                </v-list-item>
                <div v-for="(item, index) in sample_items" :key="index">
                    <v-menu open-on-hover right offset-x>
                        <template v-slot:activator="{ on }">
                            <v-list-item v-on="on" style="border-bottom: 1px solid #E0E0E0;">
                                <v-list-item-title>{{item.cat}}</v-list-item-title>
                                <v-list-item-icon>
                                    <v-icon>keyboard_arrow_right</v-icon>
                                </v-list-item-icon>
                            </v-list-item>
                        </template>

                        <v-list dense class="pa-3">
                            <div v-for="(data, key) in item.subhead" :key="key"
                                style="border-bottom: 1px solid #E0E0E0;">
                                <v-list-item @click="goTo()">
                                    <v-list-item-title>{{ data }}</v-list-item-title>
                                </v-list-item>
                            </div>
                        </v-list>
                    </v-menu>
                </div>
            </v-list>
        </v-card>
    </div>
</template>
<script>
export default {
    data: () => ({
      fav: true,
      menu: false,
      checkbox: false,
      sample_items: [
          {
              cat: 'Soap',
              subhead: [ 'Safegaurd', 'Dove', 'Silka' ]
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

        }
    },
}
</script>
<style scoped>
    div >>> .v-list-item__title {
        font-weight: 400 !important;
    }
</style>