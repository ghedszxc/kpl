<template>
    <div style="margin-top: 80px;">
        <v-list dense class="transparent">
            <v-list-item @click="onSelectProduct()" :class="!category_id ? 'grey lighten-2' : ''">
                <v-list-item-title>
                    <v-icon color="grey darken-2">list</v-icon>
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
    </div>
</template>
<script>
export default {
    data: () => ({
        
    })
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