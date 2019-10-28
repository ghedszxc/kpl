<template>
    <div resize>
        <tool-bar></tool-bar>
        <v-content>
            <v-container fluid fill-height style="padding: 0;">
                <v-row>
                    <v-spacer></v-spacer>
                        <router-view style="width: 55%;"></router-view>
                    <v-spacer></v-spacer>
                </v-row>
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
