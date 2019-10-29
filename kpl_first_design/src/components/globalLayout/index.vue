<template>
    <v-app>
        <tool-bar></tool-bar>
        <v-content class="grey lighten-2">
            <v-container>
                <router-view></router-view>
            </v-container>
        </v-content>
    </v-app>
</template>
<script>
import toolBar from './toolbar'
export default {
    components: {
        'tool-bar': toolBar
    }
}
</script>
