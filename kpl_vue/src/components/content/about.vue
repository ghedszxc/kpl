<template>
    <div v-resize="onResize">
        <div class="text-center">
            <v-parallax :class="$route.path == '/about' ? 'about_top' : ''" height="400" src="http://www.collab2.co.za/wp-content/uploads/2017/06/contact-us-background.jpg">
                <v-container fluid align="center" justify="center">
                    <v-card flat style="background: rgba(0, 0, 0, 0.3); border-radius: 0; padding: 5%;">
                        <span class="display-2 white--text">ABOUT US</span>
                        <div class="ml-12 mr-12">
                            <span class="subtitle-1 font-italic white--text">
                                <b>KPL Industrial Supply</b> was founded since 2012, started by well-trained people and number of years 
                                experienced before started in services industry. We are focusing on providing your needs and services 
                                with the highest level of customer satisfaction. And do everything to meet your expectations.
                            </span>
                        </div>
                        <v-btn outlined tile small color="white"
                            v-if="$route.path == '/'"
                            @click="goTo()">
                            See More...
                        </v-btn>
                    </v-card>
                </v-container>
            </v-parallax>
        </div>
        <div  v-if="$route.path == '/about'">

            <!-- MEET THE TEAM -->
            <v-card flat tile class="my-3 px-3">
                <v-layout wrap>
                    <v-flex xs12 class="text-center mt-4 about_top">
                        <span class="display-2">
                            Meet our Team
                        </span>
                    </v-flex>
                    <v-flex xs12 sm4 class="px-2 my-3 about_left">
                        <v-card flat style="border-radius: 0; height: 100%;">
                            <v-img src="../../../public/team/romy.jpg" height="250" width="100%"
                                aspect-ratio="1">
                            </v-img>
                            <v-card-text>
                                <div class="headline font-weight-black black--text mt-2" style="margin-bottom: -5px;">
                                    Romy Galang
                                </div>
                                <div class="subtitle-2 font-weight-medium grey--text text--darken-4">
                                    Proprietor
                                </div>
                                <div class="subtitle-2 font-weight-light grey--text text--darken-4">
                                    (02) 286-3632 / 0917 624 4069
                                </div>
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="px-2 my-3 about_bottom">
                        <v-card flat style="border-radius: 0; height: 100%;">
                            <v-img src="../../../public/team/liza.jpg" height="250" width="100%"
                                aspect-ratio="1">
                            </v-img>
                            <v-card-text>
                                <div class="headline font-weight-black black--text mt-2" style="margin-bottom: -5px;">
                                    Liza Manuel
                                </div>
                                <div class="subtitle-2 font-weight-medium grey--text text--darken-4">
                                    Marketing Coordinator
                                </div>
                                <div class="subtitle-2 font-weight-light grey--text text--darken-4">
                                    (02) 952-4265 / 0942 464 3933
                                </div>
                            </v-card-text>
                        </v-card>
                    </v-flex>
                    <v-flex xs12 sm4 class="px-2 my-3 about_right">
                        <v-card flat style="border-radius: 0; height: 100%;">
                            <v-img src="../../../public/team/jenny.jpg" height="250" width="100%"
                                aspect-ratio="1">
                            </v-img>
                            <v-card-text>
                                <div class="headline font-weight-black black--text mt-2" style="margin-bottom: -5px;">
                                    Jenny Ann Valenzuela
                                </div>
                                <div class="subtitle-2 font-weight-medium grey--text text--darken-4">
                                    Secretary
                                </div>
                                <div class="subtitle-2 font-weight-light grey--text text--darken-4">
                                    0915 975 2532 / 0920 541 4800
                                </div>
                            </v-card-text>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-card>
            <v-layout wrap class="text-center my-3">
                <v-flex xs12 class="about_left">
                    <v-card tile flat class="pa-4">
                        <v-layout wrap style="background: rgba(0, 0, 0, 0.03);">
                            <v-flex :class="windowSize.x >= 959 ? 'xs4' : 'xs12'">
                                <v-row align="center" justify="center" :style="{ 'height': windowSize.x >= 959 ? '250px' : 'auto' }">
                                    <v-icon color="green" :style="{ 'font-size': windowSize.x >= 959 ? '200px' : '100px' }">
                                        supervised_user_circle
                                    </v-icon>
                                </v-row>
                            </v-flex>
                            <v-flex :class="windowSize.x >= 959 ? 'xs8' : 'xs12'">
                                <v-row align="center" justify="center" :style="{ 'height': windowSize.x >= 959 ? '250px' : 'auto' }">
                                    <v-layout wrap>
                                        <v-flex xs12 class="display-1 font-weight-black black--text">
                                            Vision
                                        </v-flex>
                                        <v-flex xs12 class="subtitle-1 font-weight-light black--text" style="padding-left: 10%; padding-right: 10%;">
                                            To be the company that best understands and satisfies the product, service and self-fulfillment needs of our customers.
                                        </v-flex>
                                    </v-layout>
                                </v-row>
                            </v-flex>
                        </v-layout>
                    </v-card>
                </v-flex>
                <v-flex xs12 class="about_right">
                    <v-card tile flat class="px-4">
                        <v-layout wrap style="background: rgba(0, 0, 0, 0.03);">

                            <v-flex xs12 v-if="windowSize.x <= 960">
                                <v-row align="center" justify="center" :style="{ 'height': windowSize.x >= 959 ? '250px' : 'auto' }">
                                    <v-icon color="green" :style="{ 'font-size': windowSize.x >= 959 ? '200px' : '100px' }">
                                        language
                                    </v-icon>
                                </v-row>
                            </v-flex>
                            <v-flex :class="windowSize.x >= 959 ? 'xs8' : 'xs12'">
                                <v-row align="center" justify="center" :style="{ 'height': windowSize.x >= 959 ? '250px' : 'auto' }">
                                    <v-layout wrap>
                                        <v-flex xs12 class="display-1 font-weight-black black--text">
                                            Mission
                                        </v-flex>
                                        <v-flex xs12 class="subtitle-1 font-weight-light black--text" style="padding-left: 10%; padding-right: 10%;">
                                            To provide each of our clients with the most satisfying products, services and supplies to their heart's content
                                        </v-flex>
                                    </v-layout>
                                </v-row>
                            </v-flex>
                            <v-flex xs4 v-if="windowSize.x >= 959">
                                <v-row align="center" justify="center" :style="{ 'height': windowSize.x >= 959 ? '250px' : 'auto' }">
                                    <v-icon color="green" :style="{ 'font-size': windowSize.x >= 959 ? '200px' : '100px' }">
                                        language
                                    </v-icon>
                                </v-row>
                            </v-flex>
                        </v-layout>
                    </v-card>
                </v-flex>
                <v-flex xs12 class="about_left">
                    <v-card tile flat class="pa-4">
                        <v-layout wrap style="background: rgba(0, 0, 0, 0.03);">
                            <v-flex :class="windowSize.x >= 959 ? 'xs4' : 'xs12'">
                                <v-row align="center" justify="center" :style="{ 'height': windowSize.x >= 959 ? '250px' : 'auto' }">
                                    <v-icon color="green" :style="{ 'font-size': windowSize.x >= 959 ? '200px' : '100px' }">
                                        stars
                                    </v-icon>
                                </v-row>
                            </v-flex>
                            <v-flex :class="windowSize.x >= 959 ? 'xs8' : 'xs12'">
                                <v-row align="center" justify="center" :style="{ 'height': windowSize.x >= 959 ? '250px' : 'auto' }">
                                    <v-layout wrap>
                                        <v-flex xs12 class="display-1 font-weight-black black--text">
                                            Goal
                                        </v-flex>
                                        <v-flex xs12 class="subtitle-1 font-weight-light black--text" style="padding-left: 10%; padding-right: 10%;">
                                            To product people who are willing to expand their knowledge in sales and services industry
                                        </v-flex>
                                    </v-layout>
                                </v-row>
                            </v-flex>
                        </v-layout>
                    </v-card>
                </v-flex>
            </v-layout>
        </div>
    </div>
</template>
<script>
export default {
    data:() => ({
        team: [
            { name: 'Romy Galang', position: 'Proprietor', contact: '(02) 286-3632 / 0917 624 4069', link: '../../../public/team/romy.jpg' },
            { name: 'Liza Manuel', position: 'Marketing Coordinator', contact: '(02) 952-4265 / 0942 464 3933', link: '../../../public/team/liza.jpg' },
            { name: 'Jenny Ann Valenzuela', position: 'Secretary', contact: '0915 975 2532 / 0920 541 4800', link: '../../../public/team/jenny.jpg' }
        ]
    }),
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
  @keyframes fadeInBottom {
    0% { opacity: 0; transform: translateY(20px); }
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
  .about_right {
    animation-name: fadeInRight;
    background-position: bottom top;
    animation-duration: 2s;
  } 
  .about_bottom {
    animation-name: fadeInBottom;
    background-position: bottom top;
    animation-duration: 2s;
  } 
</style>