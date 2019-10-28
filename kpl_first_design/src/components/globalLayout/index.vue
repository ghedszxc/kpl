<template>
    <v-app>
        <tool-bar></tool-bar>
        
        <v-content>
            <v-container>
                <router-view></router-view>
            </v-container>
        </v-content>
    </v-app>
    <!-- <div>
        <tool-bar></tool-bar>
        <v-content>
            <v-container fluid style="padding: 0;">
                <v-row>
                    <v-spacer></v-spacer>
                        <router-view></router-view>
                    <v-spacer></v-spacer>
                </v-row>
            </v-container>
        </v-content>
    </div> -->
</template>
<script>
import toolBar from './toolbar'
export default {
    components: {
        'tool-bar': toolBar
    }
}
</script>
