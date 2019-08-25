// 1. Define route components.
// These can be imported from other files
import Home from "./components/pages/Home.vue";
import Rules from "./components/pages/Rules.vue";
import Documentation from "./components/pages/Documentation.vue";
import FAQ from "./components/pages/FAQ.vue";
import Login from "./components/pages/Login.vue";
import Page404 from "./components/error/Page404.vue";
import News from "./components/pages/News.vue";
import Nilai from "./components/pages/Nilai.vue";
import Tugas from "./components/pages/Tugas.vue";

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [
  {
    path: "/",
    component: Home,
    name: "Home"
  },
  {
    path: "/rules",
    component: Rules,
    name: "Rules"
  },
  {
    path: "/documentation",
    component: Documentation,
    name: "Documentation"
  },
  {
    path: "/faq",
    component: FAQ,
    name: "FAQ"
  },
  {
    path: "/login",
    component: Login,
    name: "Login"
  },
  {
    path: "/news/:id",
    component: News,
    name: "News"
  },
  {
    path: "/nilai",
    component: Nilai,
    name: "Nilai",
    meta: {
      requiresAuth: true
    }
  },
  {
    path: "/tugas",
    component: Tugas,
    name: "Tugas",
    meta: {
      requiresAuth: true
    }
  },
  {
    path: "/*",
    component: Page404
  }
];

export default routes;
