<template>
    <div>
        <v-card flat style="border-radius: 0; padding-bottom: 1%;">
            <v-layout wrap row>
                <v-flex xs12 class="text-center mt-4 mb-12">
                    <span class="display-2 grey--text text--darken-2">CONTACT US</span>
                </v-flex>
                <v-flex xs12 sm6 class="px-4 mt-3">
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
                <v-flex xs12 sm6 class="px-4 mt-3">
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
                <v-flex xs12 class="mt-6 px-4">
                    <GmapMap ref="mapRef" :center="{lat:14.6894942, lng:-238.972941}"
                            :zoom="16" map-type-id="terrain" style="width: 100%; height: 400px;">
                            <gmap-marker :position="{lat:14.6894942, lng:-238.972941}">
                            </gmap-marker>
                    </GmapMap>
                </v-flex>
            </v-layout>
        </v-card>
    </div>
</template>
<script>
export default {
    data:() => ({
        form: {
            name: '',
            contact_number: '',
            email_address: '',
            message: '',
        }
    })
}
</script>