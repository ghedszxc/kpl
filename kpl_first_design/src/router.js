import Vue from "vue";
import Router from "vue-router";
import Index from "./components/globalLayout/index";

import Home from "./components/content/home";
import About from "./components/content/about";
import Services from "./components/content/service";
import Contact from "./components/content/contact";

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
          path: "/about",
          component: About
        },
        {
          path: "/services",
          component: Services
        },
        {
          path: "/contact",
          component: Contact
        }
      ]
    }
  ]
});
