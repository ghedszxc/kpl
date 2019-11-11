import Vue from 'vue'
export default {
  GET_USER_FOR_INQUIRE: (state, payload) => {
    state.userForInquire = payload;
  },
  CHECKBOX(state,payload){
    Vue.set(state,'checkbox',payload);
  }
};
