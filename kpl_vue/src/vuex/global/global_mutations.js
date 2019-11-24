export default {
  GET_PRODUCT_LIST: (state, payload) => {
    state.productList = payload;
  },
  GET_CATEGORY_LIST: (state, payload) => {
    state.categoryList = payload;
  },
  GET_PRODUCT_LIST_CLEAR_CHECKBOX: state => {
    state.productList.map(value => {
      value.checkbox = "";
    });
  },

  // WHEN USER SELECT A ITEM THAT HE/SHE WANTS TO INQUIRE
  UPDATE_SELECTED_ITEM: (state, payload) => {
    state.selectedItem.push(payload);
  },

  // TO REMOVE SELECTION IN CHECKBOX
  REMOVE_CHECKBOX_IN_PRODUCT_LIST: (state, payload) => {
    
    let find_index = state.selectedItem.findIndex(find => find.id == payload);
    if (find_index != -1) {
      state.selectedItem.splice(find_index, 1);
    }
  },

  // WHEN USER REMOVED ITEM
  REMOVE_SELECTED_ITEM: (state, payload) => {
    let index = state.selectedItem.findIndex(find => find == payload);
    if (index != -1) {
      state.selectedItem.splice(index, 1);
    }
  },

  // REMOVE ALL SELECTED ITEM
  REMOVE_ALL_CHECKBOX_IN_PRODUCT_LIST: state => {
    state.selectedItem = [];

    state.productList.map(value => {
      value.checkbox = "";
    });
  },

  REMOVE_ALL_SELECTED_SITE: state => {
    state.selectedItem = [];
  }
};
