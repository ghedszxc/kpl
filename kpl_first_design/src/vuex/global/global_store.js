import state from "./global_state";
import mutations from "./global_mutations";
import actions from "./global_actions";
import getters from "./global_getters";

export default {
  namespaced: true,
  state,
  actions,
  mutations,
  getters
};
