<template>
  <v-app>
    <v-app-bar app clipped-right color="light-blue darken-4" dark>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <v-toolbar-title>{{ this.$route.name }}</v-toolbar-title>
      <v-spacer></v-spacer>
    </v-app-bar>

    <v-navigation-drawer fixed v-model="drawer" temporary app width="264">
      <v-flex align-center justify-center layout text-center>
        <v-list>
          <v-list-item avatar>
            <v-list-item-avatar
              :height="avatarSize+4"
              :width="avatarSize"
              :tile="true"
              class="mr-0"
            >
              <v-img src="https://static.ivqonsanada.com/if-else/img/logo-noname.svg"></v-img>
            </v-list-item-avatar>
          </v-list-item>
        </v-list>
      </v-flex>

      <v-list dense>
        <v-list-item :to="pages.login">
          <v-list-item-action>
            <v-icon>exit_to_app</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Login</v-list-item-title>
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
      </v-list>
    </v-navigation-drawer>

    <slot></slot>

    <v-footer dark height="auto" padless>
      <v-flex xs12>
        <v-card flat tile class="light-blue darken-4 white--text text-center pt-2">
          <v-card-text class="white--text pb-1">Follow sosial media kami ya!</v-card-text>

          <v-card-text class="pa-0">
            <v-btn
              v-for="sosmed in sosmeds"
              :key="sosmed.icon"
              class="mx-3 white--text pt-0 mt-0"
              icon
              :href="sosmed.link"
              target="_blank"
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
  </v-app>
</template>
<script>
export default {
  data() {
    return {
      drawer: false,
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
        login: "/login",
        home: "/",
        nilai: "/nilai",
        tugas: "/tugas"
      },
      avatarSize: "100px",
      sosmeds: [
        {
          icon: "fab fa-youtube",
          link: "https://www.youtube.com/channel/UCaAZt3JB9xgqj7xRosdtsig"
        },
        {
          icon: "fab fa-instagram",
          link: "https://www.instagram.com/ifelsefilkomub/"
        },
        {
          icon: "fab fa-line",
          link: "https://line.me/R/ti/p/%40ifelsefilkomub"
        }
      ]
    };
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
</style>