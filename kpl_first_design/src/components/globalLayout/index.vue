<template>
    <div>
        <tool-bar></tool-bar>
        <v-content>
            <v-container fluid style="height: 100%; padding: 0px; position: relative; overflow: hidden;">
                <router-view></router-view>
            </v-container>
        </v-content>
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
