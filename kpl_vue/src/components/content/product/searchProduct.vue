<template>
    <div>
        <v-card flat class="ml-2">
            <v-card-title>
                <span class="font-weight-bold">
                    {{
                        categoryList.find(find => find.id == category_id) ? categoryList.find(find => find.id == category_id).category_name : "Products"
                    }}
                </span>
                <v-spacer></v-spacer>
                <v-text-field
                    v-model="search_product"
                    @click:append="search_product = ''"
                    
                    placeholder="Search ..."
                    prepend-inner-icon="search"

                    outlined dense
                    hide-details
                    
                    class="pr-2"
                    style="width: 0px;"
                ></v-text-field>
            </v-card-title>
        </v-card>
    </div>
</template>