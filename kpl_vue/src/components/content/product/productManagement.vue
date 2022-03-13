<template>
    <div class="mt-2">
        <v-layout wrap row class="hidden-md-and-down">
            <v-flex xs2 class="about_one">
                <glimpse-product></glimpse-product>
            </v-flex>
            <v-flex xs10 class="about_two">
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
        glimpseProduct,
        productList
    },
    mounted() {
        const self = this;
        if (!self.productList) {
            self.$store.dispatch('global/getProductList')
        }
    },
    beforeDestroy(){
        const self = this;
        self.$store.dispatch("global/removeAllSelectedSite")
    }
}
</script>
<style scoped>
  @keyframes fadeInLeft {
    0% { opacity: 0; transform: translateX(-20px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  @keyframes fadeInRight {
    0% { opacity: 0; transform: translateX(20px); }
    100% { opacity: 1; transform: translateX(0); }
  }

  .about_one {
    animation-name: fadeInLeft;
    background-position: bottom top;
    animation-duration: 2s;
  } 
  .about_two {
    animation-name: fadeInRight;
    background-position: bottom top;
    animation-duration: 2s;
  } 
</style>
