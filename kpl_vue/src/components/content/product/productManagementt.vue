<template>
    <div>
        <v-layout wrap row class="hidden-md-and-down">
            <v-flex xs3 class="px-3 mt-2">
                <glimpse-product></glimpse-product>
            </v-flex>
            <v-flex xs9 class="px-3">
                <product-list></product-list>
            </v-flex>
        </v-layout>
        <div class="hidden-lg-and-up">
            <product-list></product-list>
        </div>
    </div>
</template>
<script>
import glimpseProduct from '../home/glimpseProduct'
import productList from './productList'
export default {
    components: {
        'glimpse-product': glimpseProduct,
        'product-list': productList
    }
}
</script>
<style scoped>

</style>
