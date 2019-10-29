<template>
    <div>
        <v-card class="pa-4">
            <v-layout wrap row  class="pa-4">
                <v-flex xs12>
                    <v-layout wrap row>
                        <v-flex xs3 class="px-2 hidden-md-and-down">
                            <glimpse-product></glimpse-product>
                        </v-flex>
                        <v-flex xs12 sm12 md12 lg7>
                            <feature-product></feature-product>
                        </v-flex>
                        <v-flex xs2 class="px-2 hidden-md-and-down">
                            <promo-list></promo-list>
                        </v-flex>
                    </v-layout>
                </v-flex>
            </v-layout>
        </v-card>
    </div>
</template>
<script>
import featureProduct from './home/featureProduct'
import glimpseProuct from './home/glimpseProduct'
// import topProduct from './home/topProduct'
import promoList from './home/promo'
export default {
    components: {
        'feature-product': featureProduct,
        'glimpse-product': glimpseProuct,
        // 'top-product': topProduct,
        'promo-list': promoList
    }
}
</script>