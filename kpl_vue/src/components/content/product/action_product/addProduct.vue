<template>
    <div>
        <v-card flat>
            <v-card-title>
                <span>Add Product</span>
            </v-card-title>
            <v-card-text>
                <v-layout wrap v-for="(item, index) in form" :key="index">
                    <v-flex xs12 sm3>
                        <v-text-field
                            label="Item Name"
                            v-model="item.name"
                            
                            outlined dense>
                        </v-text-field>
                    </v-flex>
                    <v-flex xs12 sm3>
                        <v-text-field
                            label="Description"
                            v-model="item.description"
                            
                            outlined dense>
                        </v-text-field>
                    </v-flex>
                    <v-flex xs12 sm3>
                        <v-select
                            label="Category"
                            v-model="item.category"

                            :items="categoryList"
                            item-text="category_name"
                            item-value="id"
                            
                            outlined dense>
                        </v-select>
                    </v-flex>
                    <v-flex xs12 sm3>
                        <!-- @change="onFilePicked" -->
                        <!-- <v-file-input
                            label="Image"
                            v-on:change="onImageChange"
                            outlined dense>
                        </v-file-input> -->
                        <!-- <input type="file" v-on:change="onImageChange" @change="onChangeImage(index)"> -->
                        <input type="file" v-on:change="onImageChange">
                    </v-flex>
                </v-layout>
                <v-layout wrap>
                    <v-flex xs12>
                        <v-btn class="primary" @click="addRow()">Add Item</v-btn>
                    </v-flex>
                    <v-flex xs12>
                        <v-btn class="success" @click="addProudct()">Submit</v-btn>
                    </v-flex>
                </v-layout>
            </v-card-text>
        </v-card>
    </div>
</template>
<script>
export default {
    data:() => ({
        form: [{
            name: '',
            description: '',
            category: '',
            image_link: ''
        }],
        image: ''
    }),
    methods: {
        addRow(){
            const self = this;
            self.form.push({ name: '', description: '', category: '', image_link: '' })
        },
        addProudct(){
            const self = this;
            console.log(self.form)
        },
        // onImageChange(e) {
        //     // var fileReader = new FileReader()

        //     // fileReader.readAsDataURL(e.target.files[0])

        //     // fileReader.onload = (e) => {
        //     //     this.owner_info = e.target.result
        //     // }

        //     this.image = e.target.files[0].name
        //     console.log("image: ", e.target.files[0].name)

        // },
        // onChangeImage(index){
        //     this.form[index].image_link = this.image;
        // }
        onImageChange(e) {
            let files = e.target.files || e.dataTransfer.files;
            if (!files.length)
                return;
            this.createImage(files[0]);
        },
        createImage(file) {
            let reader = new FileReader();
            let vm = this;
            reader.onload = (e) => {
                vm.image = e.target.result;
            };
            reader.readAsDataURL(file);
        },
    }
}
</script>