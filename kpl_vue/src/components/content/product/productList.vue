<template>
  <div>
    <!-- DISPLAY WHEN VIEW IS LARGE -->
    <!-- class="hidden-sm-and-down" -->
    <v-layout wrap row class="ma-1">
      <v-flex xs12 sm6 md3 class="px-1 mt-2" v-for="(item, index) in productList.data" :key="index">
        <v-card flat style="border-radius: 0;">
          <v-img
            class="white--text align-end" height="200px"
            src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp">
            <!-- src="http://localhost:8000/api/image" -->
            </v-img>
          <v-card-text>
            <v-checkbox
              v-if="userForInquire"

              v-model="item.checkbox"
              @change="addToInquire(item)"
              color="green"
              :label="`${item.item_name}`">
            </v-checkbox>
            <p v-else class="overline">{{item.item_name}}</p>
            <span style="font-size: 12px;" class="font-weight-light">
              {{item.item_description}}
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
      <v-flex xs12 class="px-1 mt-2">
        <v-pagination
          v-if="productList"
          v-model="productList.current_page"
          @input="showPage($http.options.root+'/api/item?page='+productList.current_page)"
          :length="productList.last_page"
          flat>

        </v-pagination>
      </v-flex>
    </v-layout>
    <!-- DISPLAY WHEN VIEW IS SMALL -->
    <!-- <v-layout wrap row class="hidden-md-and-up">
      <v-flex xs6 sm4 class="px-1 mt-2" v-for="(item, index) in products" :key="index">
        <v-hover v-slot:default="{ hover }">
          <v-card :elevation="hover ? 12 : 0">
            <v-list-item three-line>
              <v-list-item-avatar tile size="80" color="grey">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  class="white--text align-end">
                </v-img>
              </v-list-item-avatar>
              <v-list-item-content>
                <v-list-item-title>
                  <v-checkbox
                    v-if="userForInquire"

                    v-model="item.checkbox"
                    @change="addToInquire(item)"
                    color="green"
                    :label="`${item.name}`"
                  ></v-checkbox>
                  <p v-else class="overline">{{item.name}}</p>
                </v-list-item-title>
                <v-list-item-subtitle class="overline">{{item.description}}</v-list-item-subtitle>
              </v-list-item-content>
            </v-list-item>
          </v-card>
        </v-hover>
      </v-flex>
    </v-layout> -->
  </div>
</template>
<script>
import productMixin from "../../mixins/product"
export default {
  mixins : [productMixin],
  data: () => ({
    checkbox: [],
    page:0
  }),
  computed: {
    // PARA MALAMAN KUNG MAG IINQUIRE BA O HINDI
    userForInquire() {
      return this.$store.state.inquire.userForInquire;
    },
    productList(){
      return this.$store.state.global.productList
    },
    selectedItem(){
        return this.$store.state.global.selectedItem;
    }
  },
  methods: {
    addToInquire(item){
      const self = this;
      let index = this.selectedItem.findIndex(find => find.id == item.id)
      console.log('index',index)
      console.log('index',this.selectedItem)
      if (index == -1) {
        // TO ADD IN LIST
        self.$store.dispatch('global/updateSelectedItem', item)
      } else {
        // TO REMOVE IN LIST
        self.$store.dispatch('global/removeCheckboxInProductList', item.id)
      }
    },
    showPage(page_url){
      this.$store.dispatch('global/getProductList',page_url)
      console.log("page url",page_url)
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
