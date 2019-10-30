<template>
    <div style="position: fixed; right: 10px; bottom: 1%;">
        <v-card>
            <v-card-title style="height: 50px;" class="green white--text">
                <span class="overline mr-12">Inquire Module</span>
                
                <v-btn icon small class="ml-12">
                    <v-icon small color="white">remove</v-icon>
                </v-btn>
                <v-btn icon small>
                    <v-icon small color="white">clear</v-icon>
                </v-btn>
            </v-card-title>

            <v-card-text>
                <v-list dense>
                    <v-list-item>
                        <v-list-item-title>
                            Hydraulic Achuchu
                        </v-list-item-title>
                    </v-list-item>
                    <v-divider></v-divider>
                    <v-list-item>
                        <v-list-item-title>
                            Hydraulic Chenes
                        </v-list-item-title>
                    </v-list-item>
                    <v-divider></v-divider>
                </v-list>
            </v-card-text>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn class="primary" text small>Submit</v-btn>
            </v-card-actions>
        </v-card>
    </div>
</template>
<script>
export default {
    
}
</script>
<style scoped>

</style>
