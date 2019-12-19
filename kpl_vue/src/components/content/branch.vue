<template>
    <div v-resize="onResize">
        <v-card flat tile :class="$route.path == '/branch' ? 'animate_one' : ''"
            :style="{ 'height': (windowSize.y-140)+'px' }">
            <v-card-title class="text-center py-12">
                <v-spacer></v-spacer>
                <span class="display-2 black--text">OUR BRANCH</span>
                <v-spacer></v-spacer>
            </v-card-title>

            <v-layout wrap>
                <v-flex xs12 sm6 class="px-4 py-1">
                    <v-card flat tile class="branch_one">
                        <GmapMap style="width: 100%; height: 350px;"
                            :center="{lat:14.6894942, lng:-238.972941}" :zoom="17" map-type-id="terrain"
                            :options="googleMap">
                            <gmap-marker :position="{lat:14.6894942, lng:-238.972941}">
                            </gmap-marker>
                        </GmapMap>
                        <v-layout wrap class="px-4 pt-2">
                            <v-flex xs12 class="body-1 font-weight-bold">
                                QUIRINO, QUEZON CITY
                            </v-flex>
                            <v-flex xs12 class="body-2 font-weight-light">
                                <v-icon small>local_library</v-icon>
                                536 Quirino Hwy, Novaliches, Quezon City, Metro Manila
                            </v-flex>
                        </v-layout>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm6 class="px-4 py-1">
                    <v-card flat tile class="branch_two">
                        <GmapMap style="width: 100%; height: 350px;"
                            :center="{lat:14.7907806, lng:120.9322321}" :zoom="18" map-type-id="terrain"
                            :options="googleMap">
                                <gmap-marker :position="{lat:14.7907806, lng:120.9322321}">
                                </gmap-marker>
                        </GmapMap>
                        <v-layout wrap class="px-4 pt-2">
                            <v-flex xs12 class="body-1 font-weight-bold">
                                MARILAO, BULACAN
                            </v-flex>
                            <v-flex xs12 class="body-2 font-weight-light">
                                <v-icon small>local_library</v-icon>
                                281 MacArthur Highway, Bocaue, 3018 Bulacan
                            </v-flex>
                        </v-layout>
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