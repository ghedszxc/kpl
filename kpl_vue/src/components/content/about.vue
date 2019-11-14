<template>
    <div>
        <div class="text-center">
            <v-parallax :class="$route.path == '/about' ? 'about_one' : ''" height="400" src="https://cdn.vuetifyjs.com/images/parallax/material2.jpg">
                <v-container fluid align="center" justify="center">
                    <v-card flat style="background: rgba(0, 0, 0, 0.1); border-radius: 0; padding: 5%;">
                        <span class="display-2 white--text">ABOUT US</span>
                        <div class="ml-12 mr-12">
                            <span class="subtitle-1 font-italic white--text">Aliquam sagittis ligula et sem lacinia sagittis ligula et sem lacinia sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</span>
                        </div>
                        <v-btn outlined small color="white"
                            style="border-radius: 0;"
                            v-if="$route.path == '/'"
                            @click="goTo()">
                            See More...
                        </v-btn>
                    </v-card>
                </v-container>
            </v-parallax>
        </div>
        <div  v-if="$route.path == '/about'">
            <v-layout wrap row class="mb-2">
                <v-flex xs12 sm6 class="px-2 mt-3 about_two">
                    <v-card flat style="border-radius: 0;">
                        <v-card-title>
                            <v-spacer></v-spacer>
                            <v-icon style="font-size: 80px;" color="green">language</v-icon>
                            <v-spacer></v-spacer>
                        </v-card-title>
                        <v-card-text class="text-center">
                            <span class="display-1 font-weight-medium">Mission</span><br>
                            <span class="subtitle-2 font-weight-light grey--text">Aliquam sagittis ligula et sem lacinia sagittis ligula et sem lacinia sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</span>
                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm6 class="px-2 mt-3 about_three">
                    <v-card flat style="border-radius: 0;">
                        <v-card-title>
                            <v-spacer></v-spacer>
                            <v-icon style="font-size: 80px;" color="green">supervised_user_circle</v-icon>
                            <v-spacer></v-spacer>
                        </v-card-title>
                        <v-card-text class="text-center">
                            <span class="display-1 font-weight-medium">Vision</span><br>
                            <span class="subtitle-2 font-weight-light grey--text">Aliquam sagittis ligula et sem lacinia sagittis ligula et sem lacinia sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</span>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
            <v-card flat class="mt-3 mb-3 px-3" style="border-radius: 0;">
                <v-timeline :dense="$vuetify.breakpoint.smAndDown">
                    <v-timeline-item class="animate_one" color="purple lighten-2" fill-dot right small>
                        <template v-slot:opposite>
                            <span class="headline font-weight-medium purple--text">
                            1985
                            </span>
                        </template>
                        <v-card>
                            <v-card-title class="purple lighten-2">
                                <v-icon dark class="mr-4">mdi-magnify</v-icon>
                                <h2 class="title white--text">History 101</h2>
                            </v-card-title>
                            <v-container>
                                <v-row>
                                    <v-col cols="12" md="10">
                                        Lorem ipsum dolor sit amet, no nam oblique veritus. Commune scaevola imperdiet nec ut, sed euismod convenire principes at. Est et nobis iisque percipit.
                                    </v-col>
                                    <v-col class="hidden-sm-and-down text-right" md="2">
                                        <v-icon size="64">mdi-calendar-text</v-icon>
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-card>
                    </v-timeline-item>

                    <v-timeline-item class="animate_two" color="cyan lighten-1" left>
                        <template v-slot:opposite>
                            <span class="headline font-weight-medium cyan--text">
                            1990
                            </span>
                        </template>
                        <v-card>
                            <v-card-title class="cyan lighten-1">
                                <v-icon class="mr-4" dark>mdi-email-outline</v-icon>
                                <h2 class="title white--text">History 2</h2>
                            </v-card-title>
                            <v-container>
                                <v-row>
                                    <v-col v-for="n in 2" :key="n" cols="12" md="6">
                                    Lorem ipsum dolor sit amet, no nam oblique veritus no nam oblique.
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-card>
                    </v-timeline-item>

                    <v-timeline-item class="animate_three" color="red lighten-1" fill-dot right small>
                        <template v-slot:opposite>
                            <span class="headline font-weight-medium red--text">
                            2000
                            </span>
                        </template>
                        <v-card>
                            <v-card-title class="red lighten-1">
                                <v-icon dark>mdi-account-multiple-outline</v-icon>
                                <h2 class="title ml-4 white--text">History 3</h2>
                            </v-card-title>
                            <v-container>
                                <v-row>
                                    <v-col class="hidden-sm-and-down" md="2">
                                        <v-icon size="64">mdi-server-network</v-icon>
                                    </v-col>
                                    <v-col cols="12" md="10">
                                    Lorem ipsum dolor sit amet, no nam oblique veritus. Commune scaevola imperdiet nec ut, sed euismod convenire principes at. Est et nobis iisque percipit, an vim zril disputando voluptatibus.
                                    </v-col>
                                </v-row>
                            </v-container>
                        </v-card>
                    </v-timeline-item>
                </v-timeline>
            </v-card>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        goTo(){
            const self = this;
            self.$router.push('/about')
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    }
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
  
  .about_one {
    animation-name: fadeInTop;
    background-position: bottom top;
    animation-duration: 2s;
  } 
  .about_two {
    animation-name: fadeInLeft;
    background-position: bottom top;
    animation-duration: 2s;
  } 
  .about_three {
    animation-name: fadeInRight;
    background-position: bottom top;
    animation-duration: 2s;
  } 
</style>