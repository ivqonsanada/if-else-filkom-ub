/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");

window.Vue = require("vue");

import Vue from "vue";
import Vuetify from "vuetify";
import VueRouter from "vue-router";
import VeeValidate from "vee-validate";
import routes from "./router.js";
import vueHeadful from "vue-headful";

Vue.use(Vuetify);
Vue.use(VueRouter);
Vue.use(VeeValidate, { inject: false });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component("home", require("./components/Dashboard.vue"));
Vue.component("vue-headful", vueHeadful);

const router = new VueRouter({
  mode: "history",
  routes // short for `routes: routes`
});

// router.beforeEach((to, from, next) => {
//   document.title = to.meta.title;
//   next();
// });

const app = new Vue({
  el: "#app",
  router
});
