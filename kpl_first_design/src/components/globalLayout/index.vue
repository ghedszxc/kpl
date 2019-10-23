<template>
    <div>
        <tool-bar></tool-bar>
        <v-content app>
            <v-container>
                <router-view></router-view>
            </v-container>
        </v-content>
    </div>
</template>
<script>
import toolBar from './toolbar'
import home from '../content/home'
export default {
    components: {
        'tool-bar': toolBar,
        'home-page': home
    }
}
</script>