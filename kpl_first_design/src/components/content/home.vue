<template>
    <div>
        <v-layout wrap row>
            <v-flex xs12 sm9 class="px-2 mt-2">
                <feature-product></feature-product>
            </v-flex>
            <v-flex xs12 sm3 class="px-2 mt-2">
                <promo-list></promo-list>
            </v-flex>
            <v-flex xs12 class="mt-2">
                <top-product></top-product>
            </v-flex>
            <!-- <v-flex xs12 class="px-2 mt-2">
                <glimpse-product></glimpse-product>
            </v-flex> -->
        </v-layout>
    </div>
</template>
<script>
import featureProduct from './home/featureProduct'
// import glimpseProuct from './home/glimpseProduct'
import topProduct from './home/topProduct'
import promoList from './home/promo'
export default {
    components: {
        'feature-product': featureProduct,
        // 'glimpse-product': glimpseProuct,
        'top-product': topProduct,
        'promo-list': promoList
    }
}
</script>