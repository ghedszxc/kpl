<template>
    <div v-resize="onResize">
        <v-card flat tile :class="$route.path == '/branch' ? 'animate_one' : ''">
            <v-card-title class="text-center mt-4 mb-2">
                <v-spacer></v-spacer>
                <span class="display-2 font-weight-bold">OUR BRANCHES</span>
                <v-spacer></v-spacer>
            </v-card-title>
        </v-card>

        <v-card flat tile :class="$route.path == '/branch' ? 'animate_one transparent' : 'transparent'">
            <v-layout wrap class="pb-3">
                <v-flex xs12 sm6 class="pr-2 pb-4">
                    <v-card flat tile class="branch_one">
                        <v-card-text>
                            <GmapMap style="width: 100%; height: 350px;"
                                :center="{lat:14.6894942, lng:-238.972941}" :zoom="18" map-type-id="terrain"
                                :options="googleMap">
                                <gmap-marker :position="{lat:14.6894942, lng:-238.972941}">
                                </gmap-marker>
                            </GmapMap>
                        </v-card-text>
                        <v-card-actions>
                            <v-layout wrap class="px-2">
                                <v-flex xs12 class="headline font-weight-bold">
                                    QUIRINO, QUEZON CITY
                                </v-flex>
                                <v-flex xs12 class="subtitle-1 font-weight-medium grey--text text--darken-4 text-truncate">
                                    <v-icon color="red" class="mb-1">navigation</v-icon>
                                    526 Quirino Hwy, Novaliches, Quezon City, Metro Manila
                                </v-flex>
                            </v-layout>
                        </v-card-actions>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm6 class="pl-2 pb-4">
                    <v-card flat tile class="branch_two">
                        <v-card-text>
                            <GmapMap style="width: 100%; height: 350px;"
                                :center="{lat:14.7907806, lng:120.9322321}" :zoom="18" map-type-id="terrain"
                                :options="googleMap">
                                <gmap-marker :position="{lat:14.7907806, lng:120.9322321}">
                                </gmap-marker>
                            </GmapMap>
                        </v-card-text>
                        <v-card-actions>
                            <v-layout wrap class="px-2">
                                <v-flex xs12 class="headline font-weight-bold">
                                    BOCAUE, BULACAN
                                </v-flex>
                                <v-flex xs12 class="subtitle-1 font-weight-medium grey--text text--darken-4 text-truncate">
                                    <v-icon color="red" class="mb-1">navigation</v-icon>
                                    281 MacArthur Highway, Bocaue, 3018 Bulacan
                                </v-flex>
                            </v-layout>
                        </v-card-actions>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm6 class="pr-2 pb-4">
                    <v-card flat tile class="branch_one">
                        <v-card-text>
                            <GmapMap style="width: 100%; height: 350px;"
                                :center="{lat:15.4454223, lng:120.5977456}" :zoom="18" map-type-id="terrain"
                                :options="googleMap">
                                <gmap-marker :position="{lat:15.4455400, lng:120.5977456}">
                                </gmap-marker>
                            </GmapMap>
                        </v-card-text>
                        <v-card-actions>
                            <v-layout wrap class="px-2">
                                <v-flex xs12 class="headline font-weight-bold">
                                    TARLAC CITY
                                </v-flex>
                                <v-flex xs12 class="subtitle-1 font-weight-medium grey--text text--darken-4 text-truncate">
                                    <v-icon color="red" class="mb-1">navigation</v-icon>
                                    #22 Mc Arthur Highway Brgy. Paraiso Tarlac City
                                </v-flex>
                            </v-layout>
                        </v-card-actions>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm6 class="pl-2 pb-4">
                    <v-card flat tile class="branch_two">
                        <v-card-text>
                            <GmapMap style="width: 100%; height: 350px;"
                                :center="{lat:15.4296148, lng:120.9385931}" :zoom="18" map-type-id="terrain"
                                :options="googleMap">
                                <gmap-marker :position="{lat:15.4296148, lng:120.9385931}">
                                </gmap-marker>
                            </GmapMap>
                        </v-card-text>
                        <v-card-actions>
                            <v-layout wrap class="px-2">
                                <v-flex xs12 class="headline font-weight-bold">
                                    NUEVA ECIJA
                                </v-flex>
                                <v-flex xs12 class="subtitle-1 font-weight-medium grey--text text--darken-4 text-truncate">
                                    <v-icon color="red" class="mb-1">navigation</v-icon>
                                    Maharlika Highway Valenzuela 3101 Sta Rosa Nueva Ecija
                                </v-flex>
                            </v-layout>
                        </v-card-actions>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-card>
    </div>
</template>
<script>
export default {
    data:() => ({
        googleMap : {
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: true,
            rotateControl: false,
            fullscreenControl: false,
            disableDefaultUi: false
        }
    })
}
</script>
<style scoped>

  @keyframes fadeInTop {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeInLeft {
    0% { opacity: 0; transform: translateX(-20px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  @keyframes fadeInRight {
    0% { opacity: 0; transform: translateX(20px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  
  .animate_one {
    animation-name: fadeInTop;
    background-position: bottom top;
    animation-duration: 2s;
  } 
  .branch_one {
    animation-name: fadeInLeft;
    background-position: bottom top;
    animation-duration: 2s;
  } 
  .branch_two {
    animation-name: fadeInRight;
    background-position: bottom top;
    animation-duration: 2s;
  } 
</style>