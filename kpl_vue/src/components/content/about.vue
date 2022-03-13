<template>
    <div v-resize="onResize">
        <div  v-if="$route.path == '/about'">
            <!-- MEET THE TEAM -->
            <v-card flat tile class="my-3 px-3">
                <v-layout wrap>
                    <v-flex xs12 class="text-center mt-4 about_top">
                        <span class="display-2 black--text">
                            MEET OUR TEAM
                        </span>
                    </v-flex>
                    <v-flex xs12 class="px-2 my-3 about_left">
                        <v-card flat style="border-radius: 0; height: 100%;">
                            <v-img src="../../../public/team_2022.jpg" :height="windowSize.x <= '500' ? 250 : 500" width="100%"
                                aspect-ratio="1" class="white--text align-end">

                                <div style="background: rgba(0, 0, 0, 0.4); padding: 1%;" v-if="windowSize.x >= '500'">
                                    <span class="subtitle-1">
                                        <b>KPL Industrial Supply</b> was founded since 2012, started by well-trained people and number of years 
                                        experienced before started in services industry. We are focusing on providing your needs and services 
                                        with the highest level of customer satisfaction. And do everything to meet your expectations.
                                    </span>
                                </div>
                            </v-img>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-card>
        </div>
        <div class="text-center" v-if="$route.path == '/' || windowSize.x <= '500'">
        <v-parallax height="400" src="../../../public/contact-us-background.jpg">
                <v-container fluid align="center" justify="center">
                    <v-card flat style="background: rgba(0, 0, 0, 0.4); border-radius: 0; padding: 5%;">
                        <span class="display-2 white--text">ABOUT US</span>
                        <div>
                            <span class="subtitle-1 font-italic white--text">
                                <b>KPL Industrial Supply</b> was founded since 2012, started by well-trained people and number of years 
                                experienced before started in services industry. We are focusing on providing your needs and services 
                                with the highest level of customer satisfaction. And do everything to meet your expectations
                            </span>
                        </div>
                        <v-btn outlined small color="white"
                            v-if="$route.path == '/'"
                            @click="goTo()">
                            See More...
                        </v-btn>
                    </v-card>
                </v-container>
            </v-parallax>
        </div>
        <div  v-if="$route.path == '/about'">
            <v-layout wrap class="text-center my-3">
                <v-flex md4 xs12 class="about_bottom">
                    <v-card tile flat class="pa-4" :style="{ 'height': windowSize.x >= 959 ? '220px' : 'auto' }">
                        <v-card-title class="display-1 font-weight-black black--text">
                            <v-spacer></v-spacer>
                            <v-icon color="green" size="50" class="mr-2">supervised_user_circle</v-icon> Vision
                            <v-spacer></v-spacer>
                        </v-card-title>
                        <v-card-text class="subtitle-1 font-weight-light black--text">
                            To be the company that best understands and satisfies the product, service and self-fulfillment needs of our customers.
                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex md4 xs12 class="about_bottom">
                    <v-card tile flat class="pa-4" :style="{ 'height': windowSize.x >= 959 ? '220px' : 'auto' }">
                        <v-card-title class="display-1 font-weight-black black--text">
                            <v-spacer></v-spacer>
                            <v-icon color="green" size="50" class="mr-2">language</v-icon> Mission
                            <v-spacer></v-spacer>
                        </v-card-title>
                        <v-card-text class="subtitle-1 font-weight-light black--text">
                            To provide each of our clients with the most satisfying products, services and supplies to their heart's content
                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex md4 xs12 class="about_bottom">
                    <v-card tile flat class="pa-4" :style="{ 'height': windowSize.x >= 959 ? '220px' : 'auto' }">
                        <v-card-title class="display-1 font-weight-black black--text">
                            <v-spacer></v-spacer>
                            <v-icon color="green" size="50" class="mr-2">stars</v-icon> Goal
                            <v-spacer></v-spacer>
                        </v-card-title>
                        <v-card-text class="subtitle-1 font-weight-light black--text">
                            To product people who are willing to expand their knowledge in sales and services industry
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        goTo(){
            this.$router.push('/about')
            document.body.scrollTop = 0
            document.documentElement.scrollTop = 0
        }
    }
}
</script>
<style scoped>

  @keyframes fadeInTop {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  @keyframes fadeInBottom {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeInLeft {
    0% { opacity: 0; transform: translateX(-20px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  
  .about_top {
    animation-name: fadeInTop;
    background-position: bottom top;
    animation-duration: 2s;
  } 
  .about_left {
    animation-name: fadeInLeft;
    background-position: bottom top;
    animation-duration: 2s;
  }
  .about_bottom {
    animation-name: fadeInBottom;
    background-position: bottom top;
    animation-duration: 2s;
  } 
</style>