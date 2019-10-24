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
                        <v-card flat class="transparent text-center">
                            <v-card-text>
                                <span>{{ slide }}</span>
                            </v-card-text>
                        </v-card>
                    </v-row>
                </v-sheet>
            </v-carousel-item>
        </v-carousel>

        <v-parallax src="../../../public/home/pic_1.jpg" height="300">
            <v-row align="center" justify="center">
                <v-col class="text-center" cols="12">
                    <h1 class="display-1 font-weight-thin mb-4">Vuetify.js</h1>
                    <h4 class="subheading">Build your application today!</h4>
                </v-col>
            </v-row>
        </v-parallax>

        
        <v-parallax src="https://cdn.vuetifyjs.com/images/backgrounds/vbanner.jpg" height="300">
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
        slides: [
          'Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at, eleifend justo. Quisque placerat ante in ex tempor, ultrices bibendum nunc finibus. Etiam luctus nec eros vel pulvinar.',
          'Donec ut lectus semper, sollicitudin risus blandit, mattis felis. Nam non malesuada odio. Vestibulum vaius, arcu eget rutrum consequat, arcu lacus imperdiet arcu, id pulvinar arcu erat vel magna.',
          'Ut commodo malesuada eros, quis consequat ante tincidunt ut. Suspendisse malesuada augue vitae nisi sollicitudin placerat.'
        ]
    })
}
</script>