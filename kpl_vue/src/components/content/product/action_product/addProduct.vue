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
                        <input type="file" ref="product" v-on:change="onImageChange">
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
            self.form.push({ name: '', description: '', category: '', image_link: '', image: '' })
        },
        addProudct(){
            const self = this;
            self.form.forEach((element,index) => {
                let formData = new FormData();
                formData.append("image",self.$refs.product[index].files[0]);
                formData.append("name",self.form[index].name);
                formData.append("description",self.form[index].description);
                formData.append("category",self.form[index].category);
                // multiform.push(formData)
                self.$http.post("api/item", formData, {
                    headers: {
                            "Content-Type": "multipart/form-data"
                        },
                    progress: (progress) => {
                            console.log(`progress: ${(progress.loaded / progress.total * 100).toFixed(2)}%`)
                        }
                }).then(response => {
                    console.log("response", response.data)
                    // self.$store.dispatch('show_snackbar',{
                    //     snackbar: true,
                    //     message: 'Image successfully added',
                    //     color: 'success',
                    // });
                    // self.dialog = false;
                })

            });
        },
        
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