<template>
    <div>
        <v-list-item @click="onShow()" class="hidden-md-and-up">
            <v-list-item-icon>
                <v-icon color="grey darken-2">phone</v-icon>
            </v-list-item-icon>
            <v-list-item-title class="grey--text text--darken-2">
                Contact Us
            </v-list-item-title>
        </v-list-item>

        <v-tab class="hidden-sm-and-down" @click="onShow()"
            style="margin-top: 8%;">
            <span class="caption font-weight-medium">Contact Us</span>
        </v-tab>

        <v-dialog v-model="contact_dialog" persistent max-width="700">
            <v-card>
                <v-card-title>
                    <span class="headline font-weight-light grey--text text--darken-2">LEAVE US A MESSAGE</span>
                    <v-spacer></v-spacer>
                    <v-btn icon @click="onClose()">
                        <v-icon>close</v-icon>
                    </v-btn>
                </v-card-title>
                <v-card-text>
                    <v-layout wrap row>
                        <v-flex xs12 sm6 class="px-2">
                            <v-text-field
                                label="Name"
                                v-model="form.name"
                                outlined dense

                                v-validate="'required'"
                                data-vv-scope="add"
                                data-vv-name="name"
                                :error-messages="errors.collect('add.name')"
                                data-vv-validate-on="blur">
                                
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 sm6 class="px-2">
                            <v-text-field
                                label="Contact Number"
                                v-model="form.contact_number"
                                outlined dense

                                v-validate="'required|digits:11'"
                                data-vv-scope="add"
                                data-vv-name="contact_number"
                                :error-messages="errors.collect('add.contact_number')"
                                data-vv-validate-on="blur">
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 class="px-2">
                            <v-text-field
                                label="Email Address"
                                v-model="form.email_address"
                                outlined dense

                                v-validate="'required|email'"
                                data-vv-scope="add"
                                data-vv-name="email_address"
                                :error-messages="errors.collect('add.email_address')"
                                data-vv-validate-on="blur">
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 class="px-2">
                            <v-text-field
                                label="Write your message"
                                v-model="form.message"
                                outlined dense

                                v-validate="'required'"
                                data-vv-scope="add"
                                data-vv-name="message"
                                :error-messages="errors.collect('add.message')"
                                data-vv-validate-on="blur">
                                
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 class="px-2">
                            <v-btn text tile class="success" @click="onSubmit(form)">
                                Send Message
                            </v-btn>
                        </v-flex>
                    </v-layout>
                </v-card-text>
            </v-card>
        </v-dialog>
    </div>
</template>
<script>
export default {
    data:() => ({
        contact_dialog: false,
        form: {
            name: '',
            contact_number: '',
            email_address: '',
            message: '',
        }
    }),
    methods: {
        onClose() {
            const self = this;
            self.contact_dialog = false;
            self.form = { name: '', contact_number: '', email_address: '', message: '' }
        },
        onShow(){
            const self = this;
            self.contact_dialog = true;
        },
        onSubmit(form){
            const self = this;

            self.$validator.validateAll('add')
                .then(result => {
                if (result) {
                    self.$http.post('api/contact',form).then((response) => {
                        console.log('response',response.data)
                    })
                }
            });
        }
    }
}
</script>