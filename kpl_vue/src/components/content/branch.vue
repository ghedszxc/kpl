<template>
    <div>

        <v-card flat :class="$route.path == '/branch' ? 'animate_one' : ''" style="border-radius: 0;">
            <v-card-text class="text-center py-12">
                <span class="display-2 grey--text text--darken-3">OUR BRANCH</span>
            </v-card-text>
        </v-card>
        <v-layout wrap row class="mt-2">
            <v-flex xs12 sm6 class="px-1 py-1">
                <v-card flat style="border-radius: 0;" class="text-center branch_one">
                    <v-card-title>
                        <v-spacer></v-spacer>
                        <span class="headline font-weight-bold grey--text text--darken-1">
                            QUIRINO, QUEZON CITY
                        </span>
                        <v-spacer></v-spacer>
                    </v-card-title>
                    <GmapMap style="width: 100%; height: 350px;"
                        :center="{lat:14.6894942, lng:-238.972941}" :zoom="17" map-type-id="terrain"
                        :options="googleMap">
                        <gmap-marker :position="{lat:14.6894942, lng:-238.972941}">
                        </gmap-marker>
                    </GmapMap>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <span class="body-2 grey--text text--darken-2">
                            <v-icon small>local_library</v-icon>
                            536 Quirino Hwy, Novaliches, Quezon City, Metro Manila
                        </span>
                        <v-spacer></v-spacer>
                    </v-card-actions>
                </v-card>
            </v-flex>
            <v-flex xs12 sm6 class="px-1 py-1">
                <v-card flat style="border-radius: 0;" class="text-center branch_two">
                    <v-card-title>
                        <v-spacer></v-spacer>
                        <span class="headline font-weight-bold grey--text text--darken-1">
                            MARILAO, BULACAN
                        </span>
                        <v-spacer></v-spacer>
                    </v-card-title>
                    <GmapMap style="width: 100%; height: 350px;"
                        :center="{lat:14.7907806, lng:120.9322321}" :zoom="18" map-type-id="terrain"
                        :options="googleMap">
                            <gmap-marker :position="{lat:14.7907806, lng:120.9322321}">
                            </gmap-marker>
                    </GmapMap>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <span class="body-2 grey--text text--darken-2">
                            <v-icon small>local_library</v-icon>
                            281 MacArthur Highway, Bocaue, 3018 Bulacan
                        </span>
                        <v-spacer></v-spacer>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
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