<template>
    <div>
        <v-card flat :class="$route.path == '/contact' ? 'animate_one' : ''" style="border-radius: 0; padding-bottom: 1%;">
            <v-layout wrap row>
                <v-flex xs12 class="text-center mt-4 mb-12">
                    <span class="display-2 grey--text text--darken-2">OUR BRANCH</span>
                </v-flex>
                <v-flex xs12 sm6>
                    <v-card flat style="border-radius: 0;" class="px-5 text-center">
                        <v-card-text>
                            <v-layout wrap row class="mb-2">
                                <v-flex xs12>
                                    <span class="body-1 font-weight-medium grey--text text--darken-1">
                                        QUIRINO, QUEZON CITY
                                    </span>
                                </v-flex>
                                <v-flex xs12>
                                    <span class="caption grey--text text--darken-2">
                                        <v-icon small>local_library</v-icon>
                                        536 Quirino Hwy, Novaliches, Quezon City, Metro Manila
                                    </span>
                                </v-flex>
                            </v-layout>
                            <GmapMap style="width: 100%; height: 250px;"
                                :center="{lat:14.6894942, lng:-238.972941}" :zoom="17" map-type-id="terrain"
                                :options="googleMap">
                                <gmap-marker :position="{lat:14.6894942, lng:-238.972941}">
                                </gmap-marker>
                            </GmapMap>
                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm6>
                    <v-card flat style="border-radius: 0;" class="px-5 text-center">
                        <v-card-text>
                            <v-layout wrap row class="mb-2">
                                <v-flex xs12>
                                    <span class="body-1 font-weight-medium grey--text text--darken-1">
                                        MARILAO, BULACAN
                                    </span>
                                </v-flex>
                                <v-flex xs12>
                                    <span class="caption grey--text text--darken-2">
                                        <v-icon small>local_library</v-icon>
                                        281 MacArthur Highway, Bocaue, 3018 Bulacan
                                    </span>
                                </v-flex>
                            </v-layout>
                            <GmapMap style="width: 100%; height: 250px;"
                                :center="{lat:14.7907806, lng:120.9322321}" :zoom="18" map-type-id="terrain"
                                :options="googleMap">
                                    <gmap-marker :position="{lat:14.7907806, lng:120.9322321}">
                                    </gmap-marker>
                            </GmapMap>
                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm6>
                    <v-card flat style="border-radius: 0;" class="px-5 text-center">
                        <v-card-text>
                            <v-layout wrap row class="mb-2">
                                <v-flex xs12>
                                    <span class="body-1 font-weight-medium grey--text text--darken-1">
                                        TARLAC
                                    </span>
                                </v-flex>
                                <v-flex xs12>
                                    <span class="caption grey--text text--darken-2">
                                        <v-icon small>local_library</v-icon>
                                        Tarlac, Tarlac North Luzon
                                    </span>
                                </v-flex>
                            </v-layout>
                            <GmapMap style="width: 100%; height: 250px;"
                                :center="{lat:14.7907806, lng:120.9322321}" :zoom="18" map-type-id="terrain"
                                :options="googleMap">
                                    <gmap-marker :position="{lat:14.7907806, lng:120.9322321}">
                                    </gmap-marker>
                            </GmapMap>
                        </v-card-text>
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
  
  .animate_one {
    animation-name: fadeInTop;
    background-position: bottom top;
    animation-duration: 2s;
  } 
  .animate_two {
    animation-name: fadeInTop;
    background-position: bottom top;
    animation-duration: 4s;
  } 
</style>