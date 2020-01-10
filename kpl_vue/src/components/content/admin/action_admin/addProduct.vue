<template>
    <div>
        <v-btn class="primary" @click="addProductDialog = true">Add Product</v-btn>
        <v-dialog v-model="addProductDialog" persistent max-width="800">
            <v-card flat>
                <v-card-title>
                    <span>Add Product</span>
                    <v-spacer></v-spacer>
                    <v-btn icon @click="addRow()">
                        <v-icon color="primary">add</v-icon>
                    </v-btn>
                    <v-btn icon @click="addProductDialog = false">
                        <v-icon color="black">close</v-icon>
                    </v-btn>
                </v-card-title>
                <v-card-text>
                    <v-layout wrap v-for="(item, index) in form" :key="index">
                        <v-flex xs4 class="px-1">
                            <v-text-field
                                label="Item Name"
                                v-model="item.name"
                                
                                outlined dense>
                            </v-text-field>
                        </v-flex>
                        <v-flex xs4 class="px-1">
                            <v-select
                                label="Category"
                                v-model="item.category"

                                :items="categoryList"
                                item-text="category_name"
                                item-value="id"
                                
                                outlined dense>
                            </v-select>
                        </v-flex>
                        <v-flex xs4 class="px-1">
                            <input type="file" ref="product">
                        </v-flex>
                    </v-layout>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn class="success" @click="addProudct()">Submit</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>
<script>
export default {
    data:() => ({
        addProductDialog: false,
        form: [{
            name: '',
            category: '',
            image_link: '',
            image: ''
        }],
        
    }),
    methods: {
        addRow(){
            const self = this;
            self.form.push({ name: '', category: '', image_link: '', image: '' })
        },
        addProudct(){
            const self = this;
            self.form.forEach((element,index) => {
                let formData = new FormData();
                formData.append("image",self.$refs.product[index].files[0]);
                formData.append("name",self.form[index].name);
                formData.append("category",self.form[index].category);

                // multiform.push(formData)
                self.$http.post("api/item", formData, { headers: { "Content-Type": "multipart/form-data" },
                    progress: (progress) => { console.log(`progress: ${(progress.loaded / progress.total * 100).toFixed(2)}%`) }
                })

            });
            self.addProductDialog = false;
            self.form = [{ name: '', category: '', image_link: '', image: '' }]
        }
    },
}
</script>