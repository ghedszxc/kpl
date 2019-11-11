import Vue from "vue";
export default {
  getProductList: ({ commit }) => {
    Vue.http.get("api/item").then(response => {
      commit("GET_PRODUCT_LIST", response.body);
    });
  },
  getCatergoryList: ({ commit }) => {
    Vue.http.get("api/catergory").then(response => {
      commit("GET_CATEGORY_LIST", response.body);
    });
  },
  getProductListClearCheckbox: ({ commit }) => {
    commit("GET_PRODUCT_LIST_CLEAR_CHECKBOX");
  },

  // WHEN USER SELECT A ITEM THAT HE/SHE WANTS TO INQUIRE
  updateSelectedItem: ({ commit }, data) => {
    commit("UPDATE_SELECTED_ITEM", data);
  },

  // TO REMOVE SELECTION IN CHECKBOX
  removeCheckboxInProductList: ({ commit }, data) => {
    commit("REMOVE_CHECKBOX_IN_PRODUCT_LIST", data);
  },

  // WHEN USER REMOVED ITEM
  removeSelectedItem: ({ commit }, data) => {
    commit("REMOVE_SELECTED_ITEM", data);
  },

  // REMOVE ALL SELECTED ITEM
  removeAllCheckboxInProductList: ({ commit }) => {
    commit("REMOVE_ALL_CHECKBOX_IN_PRODUCT_LIST");
  }
};
