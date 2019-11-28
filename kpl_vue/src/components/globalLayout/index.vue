<template>
    <v-app class="grey lighten-3" v-resize="onResize">
        <tool-bar class="mb-2"></tool-bar>
        
        <div :style="{ 'margin-top': windowSize.x >= '960' ? '120px' : '60px' }">
            <router-view :style="{
                'height': '100%',
                'overflow-y': 'hidden',
                'overflow-x': 'hidden',
                'margin-left': windowSize.x >= '960' ? '18%' : '',
                'margin-right': windowSize.x >= '960' ? '18%' : '' }">
            </router-view>
        </div>
        <inquire-view v-if="$route.path == '/product'"></inquire-view>
        <v-btn color="green" rounded x-large dark v-if="$route.path == '/'"
            style="position: fixed; right: 10px; bottom: 1%;"
            @click="$router.push('/product')">
            Inquire Now!
        </v-btn>
    </v-app>
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
        self.$store.dispatch("global/getProductList",self.$route.params.id? 'api/item/'+self.$route.params.id : null)
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
