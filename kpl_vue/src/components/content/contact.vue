<template>
    <div>
        <v-card flat :class="$route.path == '/contact' ? 'animate_one' : ''" style="border-radius: 0; padding-bottom: 1%;">
            <v-layout wrap row>
                <v-flex xs12 class="text-center mt-4 mb-12">
                    <span class="display-2 grey--text text--darken-2">CONTACT US</span>
                </v-flex>
                <v-flex xs12 sm6>
                    <v-card flat style="border-radius: 0;" class="px-5 text-center">
                        <v-card-text>
                            <v-layout wrap row class="mb-2">
                                <v-flex xs12>
                                    <span class="body-1 font-weight-medium grey--text text--darken-1">
                                        QUIRINO, QUEZON CITY
                                    </span>
                                </v-flex>
                                <v-flex xs12>
                                    <span class="caption grey--text text--darken-2">
                                        <v-icon small>local_library</v-icon>
                                        536 Quirino Hwy, Novaliches, Quezon City, Metro Manila
                                    </span>
                                </v-flex>
                            </v-layout>
                            <GmapMap style="width: 100%; height: 250px;"
                                :center="{lat:14.6894942, lng:-238.972941}" :zoom="17" map-type-id="terrain"
                                :options="googleMap">
                                <gmap-marker :position="{lat:14.6894942, lng:-238.972941}">
                                </gmap-marker>
                            </GmapMap>
                        </v-card-text>
                    </v-card>
                </v-flex>
                <v-flex xs12 sm6>
                    <v-card flat style="border-radius: 0;" class="px-5 text-center">
                        <v-card-text>
                            <v-layout wrap row class="mb-2">
                                <v-flex xs12>
                                    <span class="body-1 font-weight-medium grey--text text--darken-1">
                                        MARILAO, BULACAN
                                    </span>
                                </v-flex>
                                <v-flex xs12>
                                    <span class="caption grey--text text--darken-2">
                                        <v-icon small>local_library</v-icon>
                                        281 MacArthur Highway, Bocaue, 3018 Bulacan
                                    </span>
                                </v-flex>
                            </v-layout>
                            <GmapMap style="width: 100%; height: 250px;"
                                :center="{lat:14.7907806, lng:120.9322321}" :zoom="18" map-type-id="terrain"
                                :options="googleMap">
                                    <gmap-marker :position="{lat:14.7907806, lng:120.9322321}">
                                    </gmap-marker>
                            </GmapMap>
                        </v-card-text>
                    </v-card>
                </v-flex>
            </v-layout>
        </v-card>
        <v-card flat style="border-radius: 0; padding-bottom: 1%;"
             :class="$route.path == '/contact' ? 'animate_two mt-3 mb-4' : 'mt-3 mb-4'">
            <v-layout wrap row>
                <!-- SHOW INFO WHEN SCREEN IS LARGE -->
                <v-flex xs12 sm6 class="px-4 mt-3 hidden-xs-only">
                    <v-layout wrap row class="ml-12">
                        <v-flex xs12 class="mb-4">
                            <span class="headline font-weight-light grey--text text--darken-2">CONTACT INFORMATION</span>
                        </v-flex>
                        <v-flex xs12>
                            <span class="title grey--text text--darken-2">Address</span>
                            <br>
                            <span class="body-2 grey--text text--darken-1">
                                536 Quirino Hwy, Novaliches, Quezon City, Metro Manila
                            </span>
                        </v-flex>
                        <v-flex xs12>
                            <span class="title grey--text text--darken-2">Phone</span>
                            <br>
                            <span class="body-2 grey--text text--darken-1">
                                (02) 8952 4265
                            </span>
                        </v-flex>
                        <v-flex xs12>
                            <span class="title grey--text text--darken-2">Email</span>
                            <br>
                            <span class="body-2 grey--text text--darken-1">
                                inquiry@kplindustrial.com
                            </span>
                        </v-flex>
                    </v-layout>
                </v-flex>
                <!-- SHOW INFO WHEN SCREEN IS SMALL -->
                <v-flex xs12 sm6 class="px-4 mt-3 hidden-sm-and-up">
                    <v-layout wrap row class="text-center">
                        <v-flex xs12 class="mb-4">
                            <span class="headline font-weight-light grey--text text--darken-2">CONTACT INFORMATION</span>
                        </v-flex>
                        <v-flex xs12>
                            <span class="body-2 grey--text text--darken-1">
                                <b>ADDRESS : </b> 536 Quirino Hwy, Novaliches, Quezon City, Metro Manila
                            </span>
                        </v-flex>
                        <v-flex xs12>
                            <span class="body-2 grey--text text--darken-1">
                                <b>PHONE : </b> (02) 8952 4265
                            </span>
                        </v-flex>
                        <v-flex xs12>
                            <span class="body-2 grey--text text--darken-1">
                                <b>EMAIL : </b> inquiry@kplindustrial.com
                            </span>
                        </v-flex>
                    </v-layout>
                </v-flex>
                <!-- SHOW FORM WHEN SCREEN IS LARGE -->
                <v-flex xs12 sm6 class="px-4 mt-3 hidden-xs-only">
                    <v-layout wrap row class="mr-12">
                        <v-flex xs12 class="px-2 mb-4">
                            <span class="headline font-weight-light grey--text text--darken-2">LEAVE US A MESSAGE</span>
                        </v-flex>
                        <v-flex xs12 sm6 class="px-2">
                            <v-text-field
                                label="Name"
                                v-model="form.name"
                                
                                outlined dense>
                                
                                <!-- v-validate="'required|ip'"
                                data-vv-scope="add"
                                :data-vv-name="item.validate_ip_address"
                                :error-messages="errors.collect(`add.${item.validate_ip_address}`)"
                                data-vv-validate-on="blur" -->
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 sm6 class="px-2">
                            <v-text-field
                                label="Contact Number"
                                v-model="form.contact_number"
                                
                                outlined dense>
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 class="px-2" style="margin-top: -2%;">
                            <v-text-field
                                label="Email Address"
                                v-model="form.email_address"
                                
                                outlined dense>
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 class="px-2" style="margin-top: -2%;">
                            <v-textarea
                                label="Write your message"
                                v-model="form.message"

                                outlined dense>
                            </v-textarea>
                        </v-flex>
                        <v-flex xs12 class="px-2" style="margin-top: -2%;">
                            <v-btn text class="success" style="border-radius: 0;">
                                Send Message
                            </v-btn>
                        </v-flex>
                    </v-layout>
                </v-flex>
                <!-- SHOW FORM WHEN SCREEN IS SMALL -->
                <v-flex xs12 sm6 class="px-4 mt-3 hidden-sm-and-up">
                    <v-layout wrap row class="text-center">
                        <v-flex xs12 class="px-2 mb-4">
                            <span class="headline font-weight-light grey--text text--darken-2">LEAVE US A MESSAGE</span>
                        </v-flex>
                        <v-flex xs12 sm6 class="px-4">
                            <v-text-field
                                label="Name"
                                v-model="form.name"
                                
                                outlined dense>
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 sm6 class="px-4" style="margin-top: -2%;">
                            <v-text-field
                                label="Contact Number"
                                v-model="form.contact_number"
                                
                                outlined dense>
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 class="px-4" style="margin-top: -2%;">
                            <v-text-field
                                label="Email Address"
                                v-model="form.email_address"
                                
                                outlined dense>
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 class="px-4" style="margin-top: -2%;">
                            <v-textarea
                                label="Write your message"
                                v-model="form.message"

                                outlined dense>
                            </v-textarea>
                        </v-flex>
                        <v-flex xs12 class="px-4" style="margin-top: -2%;">
                            <v-btn text class="success" style="border-radius: 0; width: 100%;">
                                Send Message
                            </v-btn>
                        </v-flex>
                    </v-layout>
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
        },
        form: {
            name: '',
            contact_number: '',
            email_address: '',
            message: '',
        }
    })
}
</script>
<style scoped>

  @keyframes fadeInTop {
    0% { opacity: 0; transform: translateY(-20px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  .animate_one {
    animation-name: fadeInTop;
    background-position: bottom top;
    animation-duration: 2s;
  } 
  .animate_two {
    animation-name: fadeInTop;
    background-position: bottom top;
    animation-duration: 4s;
  } 
</style>