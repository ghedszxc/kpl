<template>
  <div v-resize="onResize">
    <v-card flat tile class="pa-2 mt-2">
      <v-carousel cycle height="100%" hide-delimiter-background show-arrows-on-hover>
        <v-carousel-item>
          <v-sheet height="100%" tile>
            <v-img height="100%" class="white--text align-end"
                src="../../../../public/banner/fuel_dispenser.jpg">
            </v-img>
          </v-sheet>
        </v-carousel-item>

        <v-carousel-item>
          <v-sheet height="100%" tile>
            <v-img height="100%" class="white--text align-end"
                src="../../../../public/banner/gasoline_station.jpg">
            </v-img>
          </v-sheet>
        </v-carousel-item>
        
        <v-carousel-item>
          <v-sheet height="100%" tile>
            <v-img height="100%" class="white--text align-end"
                src="../../../../public/banner/hose_penumatic_fittings.jpg">
            </v-img>
          </v-sheet>
        </v-carousel-item>
        <v-carousel-item>
          <v-sheet height="100%" tile>
            <v-img height="100%" class="white--text align-end"
                src="../../../../public/banner/pneumatic_fittings.jpg">
            </v-img>
          </v-sheet>
        </v-carousel-item>
      </v-carousel>
    </v-card>
  </div>
</template>
<script>
export default {};
</script>
