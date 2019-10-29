<template>
    <div>
        <tool-bar></tool-bar>
        <!-- <v-content class="grey lighten-2">
            <v-container> -->
                <router-view class="mt-3 ml-12 mr-12 grey lighten-2"
                    style="height: 100%; overflow-y: hidden; overflow-x: hidden;">

                </router-view>
            <!-- </v-container>
        </v-content> -->
    </div>
</template>
<script>
import toolBar from './toolbar'
export default {
    components: {
        'tool-bar': toolBar
    }
}
</script>
