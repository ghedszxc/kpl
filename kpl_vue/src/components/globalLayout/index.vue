<template>
    <div class="grey lighten-3">
        <tool-bar class="mb-2"></tool-bar>
        <div class="hidden-sm-and-down">
            <router-view
                style="height: 100%; overflow-y: hidden; overflow-x: hidden; margin-left: 10%; margin-right: 10%;">
            </router-view>
        </div>
        <div class="hidden-md-and-up">
            <router-view style="height: 100%; overflow-y: hidden; overflow-x: hidden;"></router-view>
        </div>
        <inquire-view v-if="$route.path == '/product'"></inquire-view>
        <v-btn color="green" rounded x-large dark v-if="$route.path == '/'"
            style="position: fixed; right: 10px; bottom: 1%;"
            @click="$router.push('/product')">
            Inquire Now!
        </v-btn>
    </div>
</template>
<script>
import toolBar from './toolbar'
import inquire from '../content/inquire/inquire'
export default {
    components: {
        'tool-bar': toolBar,
        'inquire-view': inquire
    },
    mounted() {
        const self = this;
        self.$store.dispatch("global/getProductList")
        self.$store.dispatch("global/getCatergoryList")
    }
}
</script>
<style scoped>
    .v-btn {
        animation: wiggle 2.5s infinite;
    }

    @keyframes wiggle {
        0% { transform: rotate(1deg); }
        10% { transform: rotate(-1deg); }
        20% { transform: rotate(2deg); }
        30% { transform: rotate(-2deg); }
        40% { transform: rotate(1deg); }
        50% { transform: rotate(-1deg); }
        60% { transform: rotate(2deg); }
        70% { transform: rotate(-2deg); }
        80% { transform: rotate(1deg); }
        90% { transform: rotate(-2deg); }
        100% { transform: rotate(2deg); }
    }
</style>
