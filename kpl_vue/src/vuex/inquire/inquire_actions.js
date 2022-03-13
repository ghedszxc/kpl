export default {
  getUserForInquire: ({ commit }, data) => {
    commit("GET_USER_FOR_INQUIRE", data);
  },
  getClearCheckbox: ({ commit }, data) => {
    commit("GET_CLEAR_CHECKBOX", data);
  },
  showSnackbar: ({ commit }, data) => {
    commit("SHOW_SNACKBAR", data);
  }
};
