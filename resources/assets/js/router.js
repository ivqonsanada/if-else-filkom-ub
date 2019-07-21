// 1. Define route components.
// These can be imported from other files
import Home from "./pages/Home.vue";
import Rules from "./pages/Rules.vue";
import Documentation from "./pages/Documentation.vue";
import FAQ from "./pages/FAQ.vue";
import Login from "./pages/Login.vue";
// import UserEdit from './components/user/UserEdit.vue';
// import MobilIndex from './components/mobil/MobilIndex.vue';
// import MobilCreate from './components/mobil/MobilCreate.vue';
// import MobilEdit from './components/mobil/MobilEdit.vue';
// import SupplierIndex from './components/supplier/
import Page404 from "./components/error/Page404.vue";

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [
  {
    path: "/",
    component: Home,
    name: "Home",
    meta: {
      title: "Home | IF-ELSE"
    }
  },
  {
    path: "/rules",
    component: Rules,
    name: "Rules",
    meta: {
      title: "Rules | IF-ELSE"
    }
  },
  {
    path: "/documentation",
    component: Documentation,
    name: "Documentation",
    meta: {
      title: "Documentation | IF-ELSE"
    }
  },
  {
    path: "/faq",
    component: FAQ,
    name: "FAQ",
    meta: {
      title: "FAQ | IF-ELSE"
    }
  },
  {
    path: "/login",
    component: Login,
    name: "Login",
    meta: {
      title: "Login | IF-ELSE"
    }
  },
  {
    path: "/*",
    component: Page404,
    meta: {
      title: "Page404 | IF-ELSE"
    }
  }
];

export default routes;
