// import Vue from "vue"
export default {
  GET_USER_FOR_INQUIRE: (state, payload) => {
    state.userForInquire = payload;
  },
  GET_CLEAR_CHECKBOX: state => {
    state.checkbox = [];
  },
  SHOW_SNACKBAR: (state, payload) => {
    state.showSnackbar = payload;
  },
  CHECKBOX(state, payload) {
    state.checkbox.push(payload);
    // Vue.set(state, "checkbox", payload);
  },
  REMOVE_SELECTED_ITEM(state, payload) {
    let index = state.checkbox.findIndex(find => find == payload);
    if (index != -1) {
      state.checkbox.splice(index, 1);
    }
  }
};
