<template>
    <div>
        <v-layout wrap row>
            <v-flex xs12 sm8 class="px-4">
                <v-layout wrap row>
                    <v-flex xs12 sm6 class="px-2">
                        <v-text-field
                            label="Name"
                            v-model="form.name"
                            
                            outlined
                            color="green">
                            
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
                            
                            outlined
                            color="green">
                        </v-text-field>
                    </v-flex>
                    <v-flex xs12 class="px-2" style="margin-top: -2%;">
                        <v-text-field
                            label="Email Address"
                            v-model="form.email_address"
                            
                            outlined
                            color="green">
                        </v-text-field>
                    </v-flex>
                    <v-flex xs12 class="px-2" style="margin-top: -2%;">
                        <v-textarea
                            label="Write your message"
                            v-model="form.message"

                            outlined
                            color="green">
                        </v-textarea>
                    </v-flex>
                    <v-flex xs12 class="px-2" style="margin-top: -2%;">
                        <v-btn text class="primary" style="border-radius: 0;">
                            Send Message
                        </v-btn>
                    </v-flex>
                </v-layout>
            </v-flex>
            <v-flex xs12 sm4 class="px-4">
                <v-layout wrap row>
                    <v-flex xs12 class="mt-6 mb-4">
                        <span class="display-1 font-weight-bold">Contact Info</span>
                    </v-flex>
                    <v-flex xs12>
                        <span class="title">Address</span>
                        <br>
                        <span class="body-2 grey--text text--darken-1">
                            #3 Vinegar st., Llenado subd., Karuhatan Valenzuela city
                        </span>
                    </v-flex>
                    <v-flex xs12>
                        <span class="title">Phone</span>
                        <br>
                        <span class="body-2 grey--text text--darken-1">
                            +639 174 768 910
                        </span>
                    </v-flex>
                    <v-flex xs12>
                        <span class="title">Email</span>
                        <br>
                        <span class="body-2 grey--text text--darken-1">
                            sample@kplindustrial.com
                        </span>
                    </v-flex>
                    <v-flex xs12>
                        <div style="border: 1px solid green;">
                            INSERT HERE MAP
                        </div>
                    </v-flex>
                </v-layout>
            </v-flex>
        </v-layout>
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