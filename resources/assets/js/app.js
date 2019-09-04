require("./bootstrap");

import Vue from "vue";
import Vuex from "vuex";
import Vuetify from "vuetify";
import VueRouter from "vue-router";
import VeeValidate from "vee-validate";
import VideoBg from "vue-videobg";
import vueHeadful from "vue-headful";
import routes from "./router.js";
import App from "./components/App.vue";
import Layout from "./components/Layout.vue";
// import VAvatarUploader from "vuetify-avatar-uploader";

Vue.use(Vuex);
Vue.use(Vuetify);
Vue.use(VueRouter);
Vue.use(VeeValidate, { inject: false });

Vue.component("app", App);
Vue.component("layout", Layout);
Vue.component("video-bg", VideoBg);
Vue.component("vue-headful", vueHeadful);
// Vue.component("VAvatarUploader", VAvatarUploader);

Vue.prototype.$appUrl = "http://ifelse.filkom.ub.ac.id";

const LOGIN = "LOGIN";
const LOGIN_SUCCESS = "LOGIN_SUCCESS";
const LOGOUT = "LOGOUT";
const SOUND = "SOUND";
const DEFAULT = "DEFAULT";

const store = new Vuex.Store({
  state: {
    isLoggedIn: !!localStorage.getItem("token"),
    isSoundON: false,
    name: localStorage.getItem("nama")
  },
  mutations: {
    [LOGIN](state) {
      state.pending = true;
    },
    [LOGIN_SUCCESS](state) {
      state.isLoggedIn = true;
      state.pending = false;
    },
    [LOGOUT](state) {
      state.isLoggedIn = false;
    },
    [SOUND](state) {
      state.isSoundON = !state.isSoundON;
    },
    [DEFAULT](state) {
      state.isSoundON = false;
    }
  },
  actions: {
    login({ commit }) {
      commit(LOGIN);
      return new Promise(resolve => {
        setTimeout(() => {
          commit(LOGIN_SUCCESS);
          resolve();
        }, 1000);
      });
    },
    logout({ commit }) {
      localStorage.removeItem("token");
      localStorage.removeItem("nama");
      commit(LOGOUT);
    },
    sound({ commit }) {
      commit(SOUND);
    },
    default({ commit }) {
      commit(DEFAULT);
    }
  },
  getters: {
    isLoggedIn: state => {
      return state.isLoggedIn;
    },
    isSoundON: state => {
      return state.isSoundON;
    }
  }
});

const router = new VueRouter({
  mode: "history",
  routes,
  scrollBehavior(to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition;
    } else {
      return { x: 0, y: 0 };
    }
  }
});

router.beforeEach((to, from, next) => {
  const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
  if (requiresAuth && !store.state.isLoggedIn) {
    next("/login");
  } else {
    next();
  }
});

const app = new Vue({
  el: "#main",
  vuetify: new Vuetify({
    icons: {
      iconfont: "md"
    }
  }),
  router,
  store
});
