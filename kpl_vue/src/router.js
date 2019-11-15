import Vue from "vue";
import Router from "vue-router";
import Index from "./components/globalLayout/index";

import Home from "./components/content/home";
import About from "./components/content/about";
import Branch from "./components/content/branch";
import Product from "./components/content/product/productManagement";

Vue.use(Router);

export default new Router({
  mode: "history",
  routes: [
    {
      path: "/",
      component: Index,
      children: [
        {
          path: "/",
          component: Home
        },
        {
          path: "/product",
          component: Product
        },
        {
          path: "/about",
          component: About
        },
        {
          path: "/branch",
          component: Branch
        }
      ]
    }
  ]
});
