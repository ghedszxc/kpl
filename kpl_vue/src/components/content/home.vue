<template>
    <div class="animate_one">
        <v-card flat tile>
            <feature-product></feature-product>
        </v-card>
        <top-product class="mb-2 mx-2"></top-product>
        <about-us class="mb-2"></about-us>
        <our-branch class="mb-2"></our-branch>
    </div>
</template>
<script>
import featureProduct from './home/featureProduct'
import topProduct from './home/topProduct'
import ourBranch from './branch'
import aboutUs from './about'
export default {
    components: {
        'feature-product': featureProduct,
        'top-product': topProduct,
        'our-branch': ourBranch,
        'about-us': aboutUs
    }
}
</script>
<style scoped>

  @keyframes fadeInTop {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  .animate_one {
    animation-name: fadeInTop;
    background-position: bottom top;
    animation-duration: 2s;
  } 
</style>