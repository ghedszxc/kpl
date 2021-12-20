<template>
    <div style="position: fixed; right: 10px; bottom: 0;">
        <v-card v-if="!closeInquireBox && userForInquire"
            style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
            <v-card-title class="green white--text" @click="showInquireBox = !showInquireBox"
            style="height: 50px; cursor: pointer; border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
                <span class="overline mr-12">
                    Inquire Module <b>({{form.name}})</b>
                </span>
                
                <v-btn icon small class="ml-12">
                    <v-icon small color="white" @click="showInquireBox = !showInquireBox">remove</v-icon>
                </v-btn>
                <v-btn icon small>
                    <v-icon small color="white" @click="closeInquireBox = !closeInquireBox">clear</v-icon>
                </v-btn>
            </v-card-title>
            <div v-if="showInquireBox">
                <v-list dense v-if="selectedItem.length"
                    style="height: calc(35vh - 115px); overflow-y: auto; overflow-x: hidden;">
                    <div v-for="(item, index) in selectedItem" :key="index">
                        <v-list-item :disabled="onLoad" class="text-capitalize">
                            <v-list-item-title>
                                {{index+1}}. {{item.item_name}}
                            </v-list-item-title>
                        </v-list-item>
                        <v-divider class="mx-2"></v-divider>
                    </div>
                </v-list>
                <v-layout wrap row v-else style="height: 50px;">
                    <v-flex xs12 class="text-center mt-3">
                        <span class="body-2 grey--text text--darken-2">No item selected</span>
                    </v-flex>
                </v-layout>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn class="primary" tile text small
                        :loading="onLoad"
                        @click="sendInquire(selectedItem)">
                        Submit
                    </v-btn>
                </v-card-actions>
            </div>
        </v-card>

        <v-dialog v-model="showInquireDialog" persistent max-width="500">
            <v-card>
                <v-card-title>
                    <span class="main_title">Inquire Form</span>
                    <v-spacer></v-spacer>
                    <v-btn icon @click="closeDialog()">
                        <v-icon color="black">close</v-icon>
                    </v-btn>
                </v-card-title>
                <v-card-text>
                    <v-layout wrap>
                        <v-flex xs12 class="px-1">
                            <v-text-field
                                label="Name"
                                v-model="form.name"
                                height="20">
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 class="px-1">
                            <v-text-field
                                label="Email"
                                v-model="form.email"
                                height="20">
                            </v-text-field>
                        </v-flex>
                        <v-flex xs12 class="px-1">
                            <v-text-field
                                label="Contact Number"
                                v-model="form.contact"
                                height="20">
                            </v-text-field>
                        </v-flex>
                    </v-layout>
                </v-card-text>
                <v-card-actions style="margin-top: -5%;">
                    <v-spacer></v-spacer>
                    <v-btn text class="green white--text mr-2"
                        @click="onSubmit(form)">
                        Submit
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>
<script>
export default {
    data:() => ({
        onLoad: false,
        showInquireBox: true,
        closeInquireBox: false,

        showInquireDialog: true,
        form: {
            name: '',
            email: '',
            contact: ''
        }
    }),
    computed: {
        // PARA MALAMAN KUNG MAG IINQUIRE BA O HINDI
        userForInquire(){
            return this.$store.state.inquire.userForInquire;
        }
    },
    mounted(){
        if (localStorage.getItem("name") && localStorage.getItem("email") && localStorage.getItem("contact") ) {
            this.showInquireDialog = false;
            this.form.name = localStorage.getItem("name");
            this.form.email = localStorage.getItem("email");
            this.form.contact = localStorage.getItem("contact");
            this.$store.dispatch('inquire/getUserForInquire', true);
        }
    },
    methods: {
        closeDialog(){
            const self = this;
            self.showInquireDialog = false;
            self.$store.dispatch('inquire/getUserForInquire', false);
        },
        onSubmit(form){
            const self = this;
            self.showInquireDialog = false;
            localStorage.setItem("name",form.name)
            localStorage.setItem("email",form.email)
            localStorage.setItem("contact",form.contact)
            self.$store.dispatch('inquire/getUserForInquire', true);
        },
        sendInquire(data){
            const self = this;

            self.onLoad = true;
            self.form.checkbox = data
            self.$http.post('api/inquire', self.form).then(response => {
                console.log('send email', response.body)
                self.onLoad = false;
                self.$store.dispatch('inquire/showSnackbar',{
                    snackbar: true, timeout: 3000, color: 'info', y: 'top',
                    message: `Inquired item sent!`
                })

                self.$store.dispatch('global/removeAllCheckboxInProductList')
                

                
            });
        }
    }
}
</script>
