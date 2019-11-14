<template>
    <div>
        <v-snackbar
            :timeout="showSnackbar.timeout"
            :top="showSnackbar.y === 'top'"
            :multi-line="showSnackbar.mode === 'multi-line'"
            :vertical="showSnackbar.mode === 'vertical'"
            :color="showSnackbar.color"
            v-model="showSnackbar.snackbar">
            {{ showSnackbar.message }}
        </v-snackbar>
        <v-layout wrap row class="hidden-md-and-down">
            <v-flex xs3 class="mt-3 about_one">
                <glimpse-product></glimpse-product>
            </v-flex>
            <v-flex xs9 class="about_two">
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
    },
    computed: {
        showSnackbar(){
            return this.$store.state.inquire.showSnackbar;
        }
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
