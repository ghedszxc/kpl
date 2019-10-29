<template>
    <div>
        <v-layout wrap row>
            <v-flex xs12 sm9 class="px-2 mt-2">
                <feature-product></feature-product>
            </v-flex>
            <v-flex xs12 sm3 class="px-2 mt-2">
                <product-list></product-list>
            </v-flex>
            <v-flex xs12 class="mt-2">
                <top-product></top-product>
            </v-flex>
        </v-layout>
    </div>
</template>
<script>
import productList from './product'
import featureProduct from './home/featureProduct'
import topProduct from './home/topProduct'
export default {
    components: {
        'product-list': productList,
        'feature-product': featureProduct,
        'top-product': topProduct
    }
}
</script>