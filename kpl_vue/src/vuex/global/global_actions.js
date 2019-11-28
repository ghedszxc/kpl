import Vue from "vue";
export default {
  // GET ALL ITEMS
  getProductList: ({ commit }) => {
    Vue.http.get("api/item").then(response => {
      commit("GET_PRODUCT_LIST", response.body);
    });
  },
  // ITEM FILTERED BY CATEGORY
  getFilteredProductByCategory: ({ commit }, data) => {
    Vue.http.get(`api/item/${data}`).then(response => {
      commit("GET_FILTERED_PRODUCT_BY_CATERGORY", response.body);
    });
  },
  // ITEM FILTERED BY BRAND
  getFilteredProductByBrand: ({ commit }, data) => {
    Vue.http.get(`api/item/filterByBrand/${data}`).then(response => {
      commit("GET_FILTERED_PRODUCT_BY_BRAND", response.body);
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
  },

  removeAllSelectedSite: ({ commit }) => {
    commit("REMOVE_ALL_SELECTED_SITE");
  },

  filterItemByCategory: ({ commit }, data) => {
    commit("FILTER_ITEM_BY_CATEGORY", data);
  },

  // ON CHANGE ALL ITEM PAGE (PAGINATION)
  onChangePage: ({ commit }, url) => {
    Vue.http.get(url ? url : "api/item").then(response => {
      commit("GET_PRODUCT_LIST", response.body);
    });
  },

  // ON CHANGE CATEGORY PAGE (PAGINATION)
  onChangePageForCategory: ({ commit }, data) => {
    // eslint-disable-next-line prettier/prettier
    Vue.http.get(data.for_page ? data.for_page : `api/item/${data.category_id}`)
      .then(response => {
        commit("GET_PRODUCT_LIST", response.body);
      });
  },

  // ON CHANGE BRAND PAGE (PAGINATION)
  onChangePageForBrand: ({ commit }, data) => {
    // eslint-disable-next-line prettier/prettier
    Vue.http.get(data.for_page ? data.for_page : `api/item/filterByBrand/${data.brand_id}`)
      .then(response => {
        commit("GET_PRODUCT_LIST", response.body);
      });
  }
};
