<template>
    <div style="position: fixed; right: 10px; bottom: 0;">
        <v-card v-if="!closeInquireBox && userForInquire">
            <v-card-title class="green white--text" @click="showInquireBox = !showInquireBox"
            style="height: 50px; cursor: pointer; border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
                <span class="overline mr-12">Inquire Module</span>
                
                <v-btn icon small class="ml-12">
                    <v-icon small color="white" @click="showInquireBox = !showInquireBox">remove</v-icon>
                </v-btn>
                <v-btn icon small>
                    <v-icon small color="white" @click="closeInquireBox = !closeInquireBox">clear</v-icon>
                </v-btn>
            </v-card-title>
            <div v-if="showInquireBox">
                <v-card-text>
                    {{form.name}}
                    <v-divider></v-divider>
                    <v-list dense>
                        <v-list-item>
                            <v-list-item-title>
                                Hydraulic Achuchu
                            </v-list-item-title>
                        </v-list-item>
                        <v-divider></v-divider>
                        <v-list-item>
                            <v-list-item-title>
                                Hydraulic Chenes
                            </v-list-item-title>
                        </v-list-item>
                        <v-divider></v-divider>
                    </v-list>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn class="primary" text small>Submit</v-btn>
                </v-card-actions>
            </div>
        </v-card>

        <v-dialog v-model="showInquireDialog" persistent max-width="50%">
            <v-card>
                <v-card-title>
                    <span class="main_title">Inquire Form</span>
                    <v-spacer></v-spacer>
                    <v-btn icon @click="closeDialog()">
                        <v-icon color="black">close</v-icon>
                    </v-btn>
                </v-card-title>
                <v-card-text>
                    <v-layout wrap row>
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
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn text small class="green white--text mr-2"
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
        }
    }
}
</script>
<style scoped>

</style>
