<template>
    <div>
        <v-card flat tile class="px-3 transparent hidden-md-and-down">
            <!-- style="height: calc(100vh - 115px); overflow-y: hidden; overflow-x: hidden;" -->
            <v-list dense class="transparent">
                <v-list-item @click="onSelectProduct()">
                    <v-list-item-title>
                        <v-icon small color="grey darken-2">list</v-icon>
                        <span class="caption font-weight-medium grey--text text--darken-2 ml-2">Products</span>
                    </v-list-item-title>
                </v-list-item>
                <div :style="{
                    'height': $route.path != '/product' ? '315px' : '',
                    'overflow-y': $route.path != '/product' ? 'auto' : '',
                    'overflow-x': $route.path != '/product' ? 'hidden' : '' }">
                    <div v-for="(item, index) in categoryList" :key="index">
                        <v-list-item @click="onFilterByCategory(item)"
                            style="border-bottom: 1px solid #E0E0E0;"
                            :class="item.id == category_id ? 'grey lighten-2' : ''">
                            <v-list-item-title class="caption">
                                {{item.category_name}}
                            </v-list-item-title>
                        </v-list-item>
                    </div>
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