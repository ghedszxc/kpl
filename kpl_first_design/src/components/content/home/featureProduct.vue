<template>
    <div>
        <v-card flat style="border-radius: 0;">
            <v-carousel
                cycle height="377"
                hide-delimiter-background
                show-arrows-on-hover>
                <v-carousel-item v-for="(slide, i) in slides" :key="i">
                    <v-sheet height="100%" tile>
                        <v-img height="377" :src="photos[i]" class="white--text align-end">
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
        colors: [ 'secondary', 'yellow darken-4', 'red lighten-2', 'orange darken-1' ],
        photos: [
            'https://st3.depositphotos.com/1177973/18796/i/1600/depositphotos_187964538-stock-photo-plumber-items-draft.jpg',
            'https://cdn4.vectorstock.com/i/1000x1000/93/28/modern-sale-and-promotion-banner-design-template-vector-14299328.jpg',
            'https://www.forrich.net/wp-content/uploads/2019/03/5-Ways-to-Make-a-Customer-Satisfied-752x440.jpg'
        ],
        slides: [
          'Suspendisse imperdiet, felis eu hendrerit pretium, sapien mauris blandit arcu, et accumsan neque est ut erat. Vivamus eget tellus euismod, interdum nibh at, eleifend justo. Quisque placerat ante in ex tempor, ultrices bibendum nunc finibus. Etiam luctus nec eros vel pulvinar.',
          'Donec ut lectus semper, sollicitudin risus blandit, mattis felis. Nam non malesuada odio. Vestibulum vaius, arcu eget rutrum consequat, arcu lacus imperdiet arcu, id pulvinar arcu erat vel magna.',
          'Ut commodo malesuada eros, quis consequat ante tincidunt ut. Suspendisse malesuada augue vitae nisi sollicitudin placerat.'
        ],

    })
}
</script>