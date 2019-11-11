<template>
  <div>
    <!-- DISPLAY WHEN VIEW IS LARGE -->
    <v-layout wrap row class="hidden-sm-and-down">
      <v-flex xs12 sm4 md3 class="px-1 mt-2" v-for="(item, index) in productList" :key="index">
        <v-card flat style="height: calc(47vh - 115px); border-radius: 0;">
          <v-img
            class="white--text align-end"
            height="200px"
            src="https://3.imimg.com/data3/AC/LW/MY-7375549/hydax-items-full-range-500x500.jpg"></v-img>
          <v-card-text>
            <v-checkbox
              v-if="userForInquire"

              v-model="item.checkbox"
              @change="addToInquire(item)"
              color="green"
              :label="`${item.name}`">
            </v-checkbox>
            <p v-else class="overline">{{item.name}}</p>
            <span style="font-size: 12px;" class="font-weight-light">
              {{item.description}}
            </span>
          </v-card-text>
        </v-card>
      </v-flex>
     
    </v-layout>
    <!-- DISPLAY WHEN VIEW IS SMALL -->
    <v-layout wrap row class="hidden-md-and-up">
      <v-flex xs6 sm4 class="px-1 mt-2" v-for="(item, index) in productList" :key="index">
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
    </v-layout>
  </div>
</template>
<script>
export default {
  data: () => ({
    checkbox: []
  }),
  computed: {
    // PARA MALAMAN KUNG MAG IINQUIRE BA O HINDI
    userForInquire() {
      return this.$store.state.inquire.userForInquire;
    },
    vueCheckbox() {
      return this.$store.state.inquire.checkbox;
    },
    productList() {
      return this.$store.state.global.productList;
    }
  },
  watch: {
    vueCheckbox(to) {
      if (to.length == 0) {
        // self.$store.commit('global/getProductListClearCheckbox')
        return;
      }
    }
  },
  methods: {
    addToInquire(item){
      const self = this;
      if (item.checkbox) {
        // TO ADD IN LIST
        self.$store.dispatch('global/updateSelectedItem', item.name)
      } else {
        // TO REMOVE IN LIST
        self.$store.dispatch('global/removeCheckboxInProductList', item.name)
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
