<template>
  <v-app>
    <v-app-bar app clipped-right color="light-blue darken-4" dark>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>{{ this.$route.name }}</v-toolbar-title>
      <v-spacer></v-spacer>
    </v-app-bar>

    <v-navigation-drawer fixed v-model="drawer" temporary app width="264">
      <v-flex layout text-center>
        <v-btn
          text
          icon
          v-on:click="drawer = false"
          class="pa-3 closeNav"
          aria-label="Close Navigation"
        >
          <v-icon>menu</v-icon>
        </v-btn>
        <v-list-item-avatar
          :height="avatarSize+4"
          :width="avatarSize"
          :tile="true"
          class="menu menuLogo"
        >
          <v-img src="http://ifelse.filkom.ub.ac.id/public/img/logo-noname.svg"></v-img>
        </v-list-item-avatar>
      </v-flex>
      <v-list nav dense>
        <v-divider></v-divider>

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
            <v-divider></v-divider>
          </div>

          <v-list-item :to="pages.login" v-if="!isLoggedIn">
            <v-list-item-action>
              <v-icon>exit_to_app</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>Login</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-list-item v-for="page in pages.auth" :key="page.name" :to="page.url" v-if="isLoggedIn">
            <v-list-item-action>
              <v-icon>{{ page.icon }}</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>{{ page.name }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-list-item v-if="isLoggedIn" @click.stop="dialog = true">
            <v-list-item-action>
              <v-icon>exit_to_app</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>Logout</v-list-item-title>
            </v-list-item-content>
          </v-list-item>

          <v-divider></v-divider>
          <v-list-item v-for="page in pages.basic" :key="page.name" :to="page.url">
            <v-list-item-action>
              <v-icon>{{ page.icon }}</v-icon>
            </v-list-item-action>
            <v-list-item-content>
              <v-list-item-title>{{ page.name }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>

    <slot></slot>

    <v-footer dark height="auto" padless>
      <v-flex xs12>
        <v-card flat tile class="light-blue darken-4 white--text text-center pt-2">
          <v-card-text class="white--text pb-1">Follow sosial media kami ya!</v-card-text>

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
              <v-icon size="24px">{{ sosmed.icon }}</v-icon>
            </v-btn>
          </v-card-text>

          <v-divider></v-divider>

          <v-card-text class="white--text">
            Part of
            <strong>
              <a href="http://hmif.filkom.ub.ac.id/" target="_blank" class="cleanURL">HMIF FILKOM UB</a>
            </strong>
          </v-card-text>
        </v-card>
      </v-flex>
    </v-footer>
    <v-snackbar v-model="snackbar" :timeout="timeout" :color="snackcolor" top>
      {{ text }}
      <v-btn @click="snackbar = false" text>Close</v-btn>
    </v-snackbar>
    <v-dialog v-model="dialog" max-width="290">
      <v-card>
        <v-card-title class="headline">Apakah anda ingin Logout?</v-card-title>

        <v-card-actions>
          <v-spacer></v-spacer>

          <v-btn color="green darken-1" text @click="logout">Ya, Logout</v-btn>

          <v-btn color="green darken-1" text @click="dialog = false">Tidak</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-app>
</template>
<script>
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
  methods: {
    closeMenu() {
      this.drawer = false;
    },
    logout() {
      this.drawer = false;
      this.dialog = false;
      this.$store.dispatch("logout");
      this.$router.push("/");
      this.snackbar = true;
      this.text = "Berhasil Logout.";
      this.snackcolor = "success";
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
        this.$router.push("/");
      });
  },
  computed: {
    isLoggedIn() {
      return this.$store.getters.isLoggedIn;
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
</style>