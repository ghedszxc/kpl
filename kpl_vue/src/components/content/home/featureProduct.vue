<template>
    <div>
        <v-card flat tile>
            <v-carousel
                cycle height="377"
                hide-delimiter-background
                show-arrows-on-hover>
                <v-carousel-item v-for="(slide, i) in slides" :key="i">
                    <v-sheet height="100%" tile>
                        <v-img height="100%" :src="photos[i]" class="white--text align-end">
                        <!-- <v-card-title class="main_title">{{ slide }}</v-card-title> -->
                        
                            <!-- <v-row class="fill-height" align="center" justify="center">
                                <v-card flat class="transparent text-center">
                                    <v-card-text>
                                        <span>{{ slide }}</span>
                                    </v-card-text>
                                </v-card>
                            </v-row> -->
                        </v-img>
                    </v-sheet>
                </v-carousel-item>
            </v-carousel>
        </v-card>
    </div>
</template>
<script>
export default {
    data: () => ({
        photos: [
            'https://i.alicdn.com/img/tfs/TB19VaCiubviK0jSZFNXXaApXXa-990-400.png',
            'https://i.alicdn.com/img/tfs/TB1TAdKeuH2gK0jSZFEXXcqMpXa-990-400.jpg',
            'https://i.alicdn.com/img/tfs/TB11pyGg1bviK0jSZFNXXaApXXa-990-400.jpg'
        ],
        slides: [
          'Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at, eleifend justo. Quisque placerat ante in ex tempor, ultrices bibendum nunc finibus. Etiam luctus nec eros vel pulvinar.',
          'Donec ut lectus semper, sollicitudin risus blandit, mattis felis. Nam non malesuada odio. Vestibulum vaius, arcu eget rutrum consequat, arcu lacus imperdiet arcu, id pulvinar arcu erat vel magna.',
          'Ut commodo malesuada eros, quis consequat ante tincidunt ut. Suspendisse malesuada augue vitae nisi sollicitudin placerat.'
        ],

    })
}
</script>