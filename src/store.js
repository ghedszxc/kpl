import Vue from "vue";
import Vuex from "vuex";

import globalModule from "./vuex/global/global_store";
import inquireModule from "./vuex/inquire/inquire_store";

Vue.use(Vuex);

export default new Vuex.Store({
  namespaced: true,
  modules: {
    global: globalModule,
    inquire: inquireModule
  },
  state: {},
  mutations: {},
  actions: {}
});
