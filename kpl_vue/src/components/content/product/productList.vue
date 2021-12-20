<template>
  <div>
    <v-card flat class="ml-2">
      <v-card-title>
        <span class="font-weight-bold pl-3">
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

      <v-card-text>
        <v-layout wrap row class="mt-1 mx-1">
          <v-flex xs12 sm6 md4 class="px-1 mt-2" v-for="(item, index) in filter_productList" :key="index">
            <v-card flat outlined @click="addToInquire(item)" v-if="userForInquire">
              <v-card-text>
                <v-img
                  :src="item.item_image? url+'/api/image/'+item.item_image : 'http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp'"
                  height="250px" class="text-left align-end"
                  @click="item.checkbox ? !item.checkbox : true">
                </v-img>
              </v-card-text>

              <v-card-actions>
                <v-layout wrap class="px-4 grey--text text--darken-3"
                    @click="item.checkbox ? !item.checkbox : true">
                    <v-icon color="grey darken-1">
                      {{ selectedItem.findIndex(find => find.id == item.id) != -1 || item.checkbox == true ? 'check' : 'crop_square' }}
                    </v-icon>
                    <span class="body-1 font-weight-bold text-capitalize col-10 text-truncate">
                      {{item.item_name}}
                    </span>
                </v-layout>
              </v-card-actions>
            </v-card>
            
            <v-card v-else flat outlined>
              <v-card-text>
                <v-img :src="item.item_image? url+'/api/image/'+item.item_image : 'http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp'"
                  height="250px" class="text-left align-end">
                </v-img>
              </v-card-text>

              <v-card-actions>
                <v-layout wrap row class="px-3 grey--text text--darken-3">
                  <span class="body-1 font-weight-bold text-capitalize col-10 text-truncate">
                    {{item.item_name}}
                  </span>
                </v-layout>
              </v-card-actions>
            </v-card>
          </v-flex>

          <v-flex xs12 class="px-1 mt-2">
            <v-pagination
              v-if="productList"
              v-model="productList.current_page"
              :length="productList.last_page"
              @input="onChangePage(productList.current_page)">
            </v-pagination>
          </v-flex>
        </v-layout>
      </v-card-text>
    </v-card>
  </div>
</template>
<script>
export default {
  data: () => ({
    search_product: '',

    checkbox: [],
    page:0
  }),
  computed: {
    filter_productList(){
      return this.$store.state.global.productList && this.$store.state.global.productList.data ? this.$store.state.global.productList.data.filter(value => {
        return value.item_name.toLowerCase().includes(this.search_product.toLowerCase())
      }) : null
    },
    // PARA MALAMAN KUNG MAG IINQUIRE BA O HINDI
    userForInquire() {
      return this.$store.state.inquire.userForInquire;
    },
    url(){
      return this.$http.options.root
    }
  },
  methods: {
    addToInquire(item){
      const self = this;
      let index = this.selectedItem.findIndex(find => find.id == item.id)
      if (index == -1) {
        // TO ADD IN LIST
        self.$store.dispatch('global/updateSelectedItem', item)
      } else {
        // TO REMOVE IN LIST
        self.$store.dispatch('global/removeCheckboxInProductList', item.id)
      }
    }
  }
};
</script>
<style scoped>
  .v-card--reveal {
    align-items: center;
    bottom: 0;
    justify-content: center;
    opacity: 0.7;
    position: absolute;
    width: 100%;
  }
  .custom-checkbox {
    position: absolute;
    top: 0;
    right: 0;
    border-radius: 0;
  }
</style>
