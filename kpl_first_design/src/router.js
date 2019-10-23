import Vue from 'vue'
import VueRouter from 'vue-router'
import Index from './components/globalLayout/index'

Vue.use(VueRouter)

// eslint-disable-next-line no-undef
export default new Router({
  mode: "history",
  routes: [
    {
      path: "/",
      component: Index,
      // meta: {
      //   forVisitors: true
      // }
    }
  ]
});