import Vue from "vue";
import Router from "vue-router";
import Index from "./components/globalLayout/index";

Vue.use(Router);

export default new Router({
  mode: "history",
  routes: [
    {
      path: "/",
      component: Index
    }
  ]
});
