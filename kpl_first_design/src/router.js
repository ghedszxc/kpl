import Vue from "vue";
import Router from "vue-router";
import Index from "./components/globalLayout/index";

import Home from "./components/content/home";
import About from "./components/content/about";
import Contact from "./components/content/contact";
import Product from "./components/content/product/productManagementt";

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
          path: "/contact",
          component: Contact
        }
      ]
    }
  ]
});
