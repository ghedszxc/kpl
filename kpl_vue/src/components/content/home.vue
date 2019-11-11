<template>
    <div>
        <v-card flat class="pa-4 mb-2 ml-2 mr-2" style="border-radius: 0;">
            <v-layout wrap row class="pa-4">
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
                <v-flex xs12>
                    <top-product></top-product>
                </v-flex>
            </v-layout>
        </v-card>
        <about-us class="pa-2"></about-us>
        <contact-us class="pa-2"></contact-us>
    </div>
</template>
<script>
import featureProduct from './home/featureProduct'
import glimpseProuct from './home/glimpseProduct'
import topProduct from './home/topProduct'
import promoList from './home/promo'
import contactUs from './contact'
import aboutUs from './about'
export default {
    components: {
        'feature-product': featureProduct,
        'glimpse-product': glimpseProuct,
        'top-product': topProduct,
        'promo-list': promoList,
        'contact-us': contactUs,
        'about-us': aboutUs
    }
}
</script>