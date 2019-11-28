<template>
  <div>
    <!-- DISPLAY WHEN VIEW IS LARGE -->
    <v-layout wrap row class="mt-1 ml-1">
      <v-flex xs12 sm6 md3 class="px-1 mt-2" v-for="(item, index) in productList.data" :key="index">
        <v-item-group multiple  v-if="userForInquire">
           <v-item v-slot:default="{ active, toggle }">
             <v-card @click="addToInquire(item)" style="border-radius: 0;">
                <v-img
                  src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
                  height="150" class="text-left align-end px-1"
                  @click="toggle">
                </v-img>
                <v-layout wrap row class="px-4 py-1 grey--text text--darken-1" @click="toggle">
                  <v-flex xs2>
                    <v-icon color="grey darken-1" large>
                      {{ active ? 'check' : 'crop_square' }}
                    </v-icon>
                  </v-flex>
                  <v-flex class="pl-4">
                    <v-layout wrap row>
                      <v-flex xs12 style="font-size: 14px;"
                        class="font-weight-bold text-capitalize">
                        {{item.item_name}}
                      </v-flex>
                      <v-flex xs12 style="font-size: 12px; margin-top: -2%;"
                        class="font-weight-light text-capitalize">
                        {{item.item_description}}
                      </v-flex>
                    </v-layout>
                  </v-flex>
                </v-layout>
             </v-card>
            </v-item>
        </v-item-group>
        
        <v-card v-else style="border-radius: 0;">
          <v-img src="http://sc02.alicdn.com/kf/HTB11nerKeuSBuNjSsziq6zq8pXaJ/High-Quality-Sublimation-8-in-1-Combo.jpg_220x220.jpg_.webp"
            height="150" class="text-left align-end px-1">
          </v-img>

          <v-layout wrap row class="px-4 py-1 grey--text text--darken-1">
            <v-flex class="px-4">
              <v-layout wrap row>
                <v-flex xs12 class="overline">
                  {{item.item_name}}
                </v-flex>
                <v-flex xs12 style="font-size: 12px;" class="font-weight-light text-capitalize">
                  {{item.item_description}}
                </v-flex>
              </v-layout>
            </v-flex>
          </v-layout>
        </v-card>
      </v-flex>
      <v-flex xs12 class="px-1 mt-2">
        <v-pagination
          v-if="productList"
          v-model="productList.current_page"
          :length="productList.last_page" flat>
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
    },
    selectedItem(){
        return this.$store.state.global.selectedItem;
    },
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
    },
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
