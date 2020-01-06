<template>
  <div>
    <v-layout wrap row class="mt-1 mx-1">
      <v-flex xs12 sm6 md3 class="px-1 mt-2" v-for="(item, index) in productList.data" :key="index">
        <v-card tile @click="addToInquire(item)" v-if="userForInquire">
          <!-- <v-img
            src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
            height="150" class="text-left align-end px-1"
            @click="item.checkbox ? !item.checkbox : true">
          </v-img> -->
          <v-img
            :src="item.item_image? $http.options.root+'/api/image/'+item.item_image : 'http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp'"
            height="150" class="text-left align-end px-1"
            @click="item.checkbox ? !item.checkbox : true">
          </v-img>
          <v-layout wrap row class="px-4 grey--text text--darken-1"
              @click="item.checkbox ? !item.checkbox : true">
              <v-icon color="grey darken-1">
                {{ selectedItem.findIndex(find => find.id == item.id) != -1 || item.checkbox == true ? 'check' : 'crop_square' }}
              </v-icon>
              <span class="caption font-weight-bold text-capitalize col-10 text-truncate">
                {{item.item_name}}
              </span>
          </v-layout>
        </v-card>
        
        <v-card v-else tile>
          <!-- <v-img src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
            height="150" class="text-left align-end px-1">
          </v-img> -->
          <v-img :src="item.item_image? $http.options.root+'/api/image/'+item.item_image : 'http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp'"
            height="150" class="text-left align-end px-1">
          </v-img>

          <v-layout wrap row class="px-3 grey--text text--darken-1">
            <span class="caption font-weight-bold text-capitalize col-10 text-truncate">
              {{item.item_name}}
            </span>
          </v-layout>
        </v-card>
      </v-flex>

      <v-flex xs12 class="px-1 mt-2">
        <v-pagination
          v-if="productList"
          v-model="productList.current_page"
          :length="productList.last_page"
          @input="onChangePage(productList.current_page)">
          <!-- @input="showPage($http.options.root+'/api/item?page='+productList.current_page)" -->
        </v-pagination>
      </v-flex>
    </v-layout>
  </div>
</template>
<script>
export default {
  data: () => ({
    checkbox: [],
    page:0
  }),
  computed: {
    // PARA MALAMAN KUNG MAG IINQUIRE BA O HINDI
    userForInquire() {
      return this.$store.state.inquire.userForInquire;
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
