import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import vuetify from "./plugins/vuetify";
import vueResource from "vue-resource";
import "material-icons";


Vue.use(vueResource);
Vue.http.options.root = "http://localhost:8000";

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  vuetify,
  render: h => h(App)
}).$mount("#app");
