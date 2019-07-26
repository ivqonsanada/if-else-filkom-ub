require("./bootstrap");

import Vue from "vue";
import Vuetify from "vuetify";
import VueRouter from "vue-router";
import VeeValidate from "vee-validate";
import routes from "./router.js";
import vueHeadful from "vue-headful";
import Layout from "./components/Layout.vue";

Vue.use(Vuetify);
Vue.use(VueRouter);
Vue.use(VeeValidate, { inject: false });

Vue.component("layout", Layout);
Vue.component("vue-headful", vueHeadful);

Vue.prototype.$appUrl = "http://127.0.0.1:8000";

const router = new VueRouter({
  mode: "history",
  routes
});

const app = new Vue({
  el: "#app",
  vuetify: new Vuetify({
    icons: {
      iconfont: "md"
    }
  }),
  router
});
