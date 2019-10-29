<template>
    <div class="grey lighten-3">
        <tool-bar></tool-bar>
        <!-- <v-content class="grey lighten-2">
            <v-container> -->
                <router-view
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
