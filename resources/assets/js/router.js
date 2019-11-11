// 1. Define route components.
// These can be imported from other files
import Home from "./components/pages/Home.vue";
// import Rules from "./components/pages/Rules.vue";
import Documentation from "./components/pages/Documentation.vue";
import FAQ from "./components/pages/FAQ.vue";
import Login from "./components/pages/Login.vue";
import Page404 from "./components/error/Page404.vue";
import News from "./components/pages/News.vue";
import Nilai from "./components/pages/Nilai.vue";
import Tugas from "./components/pages/Tugas.vue";
import Profile from "./components/pages/Profile.vue";
import Kuis from "./components/pages/Kuis.vue";

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
  // {
  //   path: "/rules",
  //   component: Rules,
  //   name: "Rules"
  // },
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
    path: "/profile",
    component: Profile,
    name: "Profile",
    meta: {
      requiresAuth: true
    }
  },
  {
    path: "/tugas/4-1",
    component: Kuis,
    name: "Tugas 4.1",
    meta: {
      title: "Tugas 4.1 | IF ELSE FILKOM UB",
      requiresAuth: true
    }
  },
  {
    path: "/tugas/4-2",
    component: Kuis,
    name: "Tugas 4.2",
    meta: {
      title: "Tugas 4.2 | IF ELSE FILKOM UB",
      requiresAuth: true
    }
  },
  {
    path: "/tugas/4-3",
    component: Kuis,
    name: "Tugas 4.3",
    meta: {
      title: "Tugas 4.3 | IF ELSE FILKOM UB",
      requiresAuth: true
    }
  },
  {
    path: "/tugas/4-4",
    component: Kuis,
    name: "Tugas 4.4",
    meta: {
      title: "Tugas 4.4 | IF ELSE FILKOM UB",
      requiresAuth: true
    }
  },
  {
    path: "/tugas/4-5",
    component: Kuis,
    name: "Tugas 4.5",
    meta: {
      title: "Tugas 4.5 | IF ELSE FILKOM UB",
      requiresAuth: true
    }
  },
  {
    path: "/tugas/4-6",
    component: Kuis,
    name: "Tugas 4.6",
    meta: {
      title: "Tugas 4.6 | IF ELSE FILKOM UB",
      requiresAuth: true
    }
  },
  {
    path: "/tugas/4-7",
    component: Kuis,
    name: "Tugas 4.7",
    meta: {
      title: "Tugas 4.7 | IF ELSE FILKOM UB",
      requiresAuth: true
    }
  },
  {
    path: "/*",
    component: Page404
  }
];

export default routes;
