<template>
    <div>
        <div class="text-center" v-if="$route.path == '/'">
            <v-parallax src="https://cdn.vuetifyjs.com/images/parallax/material2.jpg">
                <h1 class="display-2 font-weight-bold">About Us</h1>
                <span class="subtitle-1 font-italic font-weight-light">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. <br>
                    <v-btn outlined small color="white"
                        style="border-radius: 0;"
                        v-if="$route.path == '/'"
                        @click="$router.push('/about')">
                        See More...
                    </v-btn>
                </span>
            </v-parallax>
        </div>
        <div v-else>
            <v-layout wrap row class="mt-2">
                <v-flex xs12 class="px-4">
                    hehe
                </v-flex>
            </v-layout>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>
    /* .about_card {
        opacity: .7;
    } */
</style>