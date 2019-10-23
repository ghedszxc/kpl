<template>
    <div>
        <v-carousel
            continuous cycle
            :show-arrows="false"
            hide-delimiter-background
            delimiter-icon="mdi-minus"
            height="300">
            <v-carousel-item v-for="(slide, i) in slides" :key="i">
                <v-sheet :color="colors[i]" height="100%" tile>
                    <v-row class="fill-height" align="center" justify="center">
                        <div class="display-3">{{ slide }} Slide</div>
                    </v-row>
                </v-sheet>
            </v-carousel-item>
        </v-carousel>

        
        <v-parallax src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg">
            <v-row align="center" justify="center">
                <v-col class="text-center" cols="12">
                    <h1 class="display-1 font-weight-thin mb-4">Vuetify.js</h1>
                    <h4 class="subheading">Build your application today!</h4>
                </v-col>
            </v-row>
        </v-parallax>
    </div>
</template>
<script>
export default {
    data: () => ({
        colors: [
          'secondary',
          'yellow darken-4',
          'red lighten-2',
          'orange darken-1',
        ],
        cycle: false,
        slides: [
          'First',
          'Second',
          'Third',
          'Fourth',
        ]
    })
}
</script>