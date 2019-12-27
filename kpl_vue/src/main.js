import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";
import vuetify from "./plugins/vuetify";
import vueResource from "vue-resource";
import VeeValidate from "vee-validate";
import "material-icons";
import * as VueGoogleMaps from "vue2-google-maps";

import resizing from "./components/mixins/resize";
import product from "./components/mixins/product";

Vue.use(vueResource);
Vue.use(VeeValidate);
Vue.use(VueGoogleMaps, {
  load: {
    key: "AIzaSyB_WhUHEz1vlPiBEC4-9Z2Xf6TvrJ2gZjI",
    libraries: "places"
  }
});
Vue.http.options.root = "http://localhost:8000";
// Vue.http.options.root = "http://kpllaravel.webstarterz.com";

Vue.mixin(resizing);
Vue.mixin(product);

Vue.config.productionTip = false;

new Vue({
  router,
  store,
  vuetify,
  render: h => h(App)
}).$mount("#app");
