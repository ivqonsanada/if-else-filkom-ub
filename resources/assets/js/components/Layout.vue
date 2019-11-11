<template>
  <v-app>
    <v-app-bar
      app
      clipped-right
      color="light-blue darken-4"
      dark
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />
      <v-toolbar-title>{{ this.$route.name }}</v-toolbar-title>
      <v-spacer />
    </v-app-bar>

    <v-navigation-drawer
      v-model="drawer"
      fixed
      temporary
      app
      width="264"
    >
      <v-flex
        layout
        text-center
      >
        <v-btn
          text
          icon
          class="pa-3 closeNav"
          aria-label="Close Navigation"
          @click="drawer = false"
        >
          <v-icon>menu</v-icon>
        </v-btn>
        <v-list-item-avatar
          :height="avatarSize+4"
          :width="avatarSize"
          :tile="true"
          class="menu menuLogo"
        >
          <v-img src="http://ifelse.filkom.ub.ac.id/public/img/logo-noname.svg" />
        </v-list-item-avatar>
      </v-flex>
      <v-list
        nav
        dense
      >
        <v-divider />

        <v-list-item-group color="primary">
          <div v-if="isLoggedIn">
            <v-list-item :to="pages.profile">
              <!-- <v-list-item> -->
              <v-list-item-action>
                <v-icon>person</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>{{ nama }}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
            <v-divider />
          </div>

          <v-list-item
            v-if="!isLoggedIn"
            :to="pages.login"
          >
            <v-list-item-action>
              <v-icon>exit_to_app</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>Login</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <template v-if="isLoggedIn">
            <v-list-item
              v-for="page in pages.auth"
              :key="page.name"
              :to="page.url"
            >
              <v-list-item-action>
                <v-icon>{{ page.icon }}</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>{{ page.name }}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>

            <v-list-item
              v-if="isLoggedIn"
              @click.stop="dialog = true"
            >
              <v-list-item-action>
                <v-icon>exit_to_app</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>Logout</v-list-item-title>
              </v-list-item-content>
            </v-list-item>

            <v-divider />

            
            <v-list-item
              v-for="page in pages.basic"
              :key="page.name"
              :to="page.url"
            >
              <v-list-item-action>
                <v-icon>{{ page.icon }}</v-icon>
              </v-list-item-action>
              <v-list-item-content>
                <v-list-item-title>{{ page.name }}</v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </template>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>

    <slot />

    <v-footer
      dark
      height="auto"
      padless
    >
      <v-flex xs12>
        <v-card
          flat
          tile
          class="light-blue darken-4 white--text text-center pt-2"
        >
          <v-card-text class="white--text pb-1">
            Follow sosial media kami ya!
          </v-card-text>

          <v-card-text class="py-4">
            <v-btn
              v-for="sosmed in sosmeds"
              :key="sosmed.icon"
              class="mx-3 white--text"
              text
              icon
              :href="sosmed.link"
              target="_blank"
              :aria-label="sosmed.name"
            >
              <v-icon size="24px">
                {{ sosmed.icon }}
              </v-icon>
            </v-btn>
          </v-card-text>

          <v-divider />

          <v-card-text class="white--text">
            Part of
            <strong>
              <a
                href="http://hmif.filkom.ub.ac.id/"
                target="_blank"
                class="cleanURL"
              >HMIF FILKOM UB</a>
            </strong>
          </v-card-text>
        </v-card>
      </v-flex>
    </v-footer>
    <v-snackbar
      v-model="snackbar"
      :timeout="timeout"
      :color="snackcolor"
      top
    >
      {{ text }}
      <v-btn
        text
        @click="snackbar = false"
      >
        Close
      </v-btn>
    </v-snackbar>
    <v-dialog
      v-model="dialog"
      max-width="290"
    >
      <v-card>
        <v-card-title class="headline">
          Apakah anda ingin Logout?
        </v-card-title>

        <v-card-actions>
          <v-spacer />

          <v-btn
            color="red lighten-1"
            dark 
            @click="logout"
          >
            Ya, Logout
          </v-btn>

          <v-btn
            color="red lighten-1"
            text
            @click="dialog = false"
          >
            Tidak
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-app>
</template>
<script>
import { loadProgressBar } from "axios-progress-bar";
loadProgressBar();

export default {
  data() {
    return {
      snackbar: false,
      text: "Aku rindu.",
      timeout: 3000,
      snackcolor: "",
      drawer: false,
      nama: "Profile",
      dialog: false,
      pages: {
        basic: {
          home: {
            url: "/",
            icon: "home",
            name: "Home"
          },
          rules: {
            url: "/rules",
            icon: "error_outline",
            name: "Rules"
          },
          documentation: {
            url: "/documentation",
            icon: "photo_library",
            name: "Documentation"
          },
          faq: {
            url: "/faq",
            icon: "question_answer",
            name: "Frequently Asked Questions"
          }
        },
        auth: {
          tugas: {
            url: "/tugas",
            icon: "assignment",
            name: "Tugas"
          },
          nilai: {
            url: "/nilai",
            icon: "assessment",
            name: "Nilai"
          }
        },
        login: "/login",
        home: "/",
        profile: "/profile"
      },
      avatarSize: "100px",
      sosmeds: [
        {
          icon: "fab fa-youtube",
          link: "/youtube",
          name: "Youtube"
        },
        {
          icon: "fab fa-instagram",
          link: "https://www.instagram.com/ifelsefilkomub/",
          name: "Instagram"
        },
        {
          icon: "fab fa-line",
          link: "https://line.me/R/ti/p/%40ifelsefilkomub",
          name: "Line"
        }
      ]
    };
  },
  computed: {
    isLoggedIn() {
      return this.$store.getters.isLoggedIn;
    }
  },
  beforeCreate() {
    let config = {
      headers: {
        Authorization: "Bearer " + localStorage.getItem("token")
      }
    };
    let bodyParameters = {};
    axios
      .post(`${this.$appUrl}/api/details`, bodyParameters, config)
      .then(response => {
        this.nama = response.data.success.nama;
      })
      .catch(e => {
        this.$store.dispatch("logout");
      });
  },
  methods: {
    closeMenu() {
      this.drawer = false;
    },
    logout() {
      this.drawer = false;
      this.dialog = false;
      this.nama = "Profile";
      this.$store.dispatch("logout");
      this.$router.push("/");
      this.snackbar = true;
      this.text = "Berhasil Logout.";
      this.snackcolor = "success";
    }
  }
};
</script>

<style>
.cleanURL {
  text-decoration: unset;
  color: white !important;
}
.cleanURL:hover {
  text-decoration: unset;
  color: #1976d2 !important;
}

.v-divider {
  margin-bottom: 4px;
}

.closeNav {
  top: 8px;
  left: 5px;
  height: 48px !important;
}

.menuLogo {
  margin-top: 30px !important;
  margin-left: 30px !important;
}


/* Make clicks pass-through */
#nprogress {
  pointer-events: none;
}

#nprogress .bar {
  background: #2196F3;

  position: fixed;
  z-index: 1031;
  top: 0;
  left: 0;

  width: 100%;
  height: 2px;
}

/* Fancy blur effect */
#nprogress .peg {
  display: block;
  position: absolute;
  right: 0px;
  width: 100px;
  height: 100%;
  box-shadow: 0 0 10px #2196F3, 0 0 5px #2196F3;
  opacity: 1;

  -webkit-transform: rotate(3deg) translate(0px, -4px);
  -ms-transform: rotate(3deg) translate(0px, -4px);
  transform: rotate(3deg) translate(0px, -4px);
}

/* Remove these to get rid of the spinner */
#nprogress .spinner {
  display: block;
  position: fixed;
  z-index: 1031;
  top: 15px;
  right: 15px;
}

#nprogress .spinner-icon {
  width: 18px;
  height: 18px;
  box-sizing: border-box;

  border: solid 2px transparent;
  border-top-color: #2196F3;
  border-left-color: #2196F3;
  border-radius: 50%;

  -webkit-animation: nprogress-spinner 400ms linear infinite;
  animation: nprogress-spinner 400ms linear infinite;
}

.nprogress-custom-parent {
  overflow: hidden;
  position: relative;
}

.nprogress-custom-parent #nprogress .spinner,
.nprogress-custom-parent #nprogress .bar {
  position: absolute;
}

@-webkit-keyframes nprogress-spinner {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes nprogress-spinner {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>