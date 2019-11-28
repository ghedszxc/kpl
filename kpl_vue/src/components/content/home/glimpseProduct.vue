<template>
    <div>
        <!-- THIS IS TO DISPLAY LARGE VIEW -->
        <v-card flat class="px-3 transparent hidden-md-and-down" style="border-radius: 0;">
            <v-list dense class="transparent">
                <v-list-item @click="onSelectProduct()">
                    <v-list-item-title>
                        <v-icon small color="grey darken-2">list</v-icon>
                        <span class="caption font-weight-medium grey--text text--darken-2 ml-2">Products</span>
                    </v-list-item-title>
                </v-list-item>
                <div v-for="(item, index) in categoryList" :key="index">
                    <v-menu open-on-hover right offset-x transition="scale-transition">
                        <template v-slot:activator="{ on }">
                            <v-list-item @click="onFilterByCategory(item)" v-on="on"
                                style="border-bottom: 1px solid #E0E0E0;"
                                :class="item.category_id == category_id ? 'grey lighten-2' : ''">
                                <v-list-item-title class="caption">
                                    <v-icon small>keyboard_arrow_right</v-icon>
                                    {{item.category_name}}
                                </v-list-item-title>
                            </v-list-item>
                        </template>

                        <v-list dense>
                            <div v-for="(data, key) in item.brands" :key="key">
                                <v-list-item @click="onFilterByBrand(data)"
                                :class="data.brand_id == brand_id ? 'grey lighten-2' : ''">
                                    <v-list-item-title>{{ data.brand_name }}</v-list-item-title>
                                </v-list-item>
                                <v-divider class="ml-4 mr-4"></v-divider>
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
    }),
    computed: {
        categoryList() {
            return this.$store.state.global.categoryList;
        }
    },
    methods: {
        goTo(id){
            const self = this;
            if (self.$router.path != '/product') {
                if (id) {
                    self.$router.push(`/product/${id}`)
                } else {
                    self.$router.push('/product')
                }
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