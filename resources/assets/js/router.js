// 1. Define route components.
// These can be imported from other files
import Home from "./pages/Home.vue";
import Rules from "./pages/Rules.vue";
import Documentation from "./pages/Documentation.vue";
import FAQ from "./pages/FAQ.vue";
import Login from "./pages/Login.vue";
import Page404 from "./components/error/Page404.vue";
import News from "./pages/News.vue";

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
    path: "/blog/:id",
    component: News,
    name: "News"
  },
  {
    path: "/*",
    component: Page404
  }
];

export default routes;
