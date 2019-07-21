<template>
  <v-app>
    <v-toolbar color="light-blue darken-4" dark app>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>{{ this.$route.name }}</v-toolbar-title>
      <v-spacer></v-spacer>
    </v-toolbar>
    <v-navigation-drawer fixed v-model="drawer" app temporary>
      <v-flex align-center justify-center layout text-xs-center>
        <v-list>
          <v-list-tile avatar>
            <v-list-tile-avatar :size="avatarSize" :tile="true">
              <img src="https://static.ivqonsanada.com/if-else/img/logo-noname.svg" />
            </v-list-tile-avatar>
          </v-list-tile>
        </v-list>
      </v-flex>

      <v-list dense>
        <v-list-tile :to="pages.login">
          <v-list-tile-action>
            <v-icon>exit_to_app</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Login</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-divider></v-divider>

        <v-list-tile :to="pages.home">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile v-for="page in pages.basic" :key="page.name" :to="page.url">
          <v-list-tile-action>
            <v-icon>{{ page.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>{{ page.name }}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>

    <slot></slot>

    <v-footer light height="auto">
      <v-flex xs12>
        <v-card flat tile class="light-blue darken-4 white--text text-xs-center">
          <v-card-text class="white--text">Follow Sosial Media lainnya juga ya!</v-card-text>
          <v-divider></v-divider>

          <v-card-text>
            <v-btn v-for="icon in icons" :key="icon" class="white--text" icon>
              <v-icon size="24px">{{ icon }}</v-icon>
            </v-btn>
          </v-card-text>
        </v-card>
      </v-flex>
    </v-footer>
  </v-app>
</template><script>
export default {
  data() {
    return {
      drawer: false,
      pages: {
        basic: {
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
            name: "Frequently Asked Questions (FAQ)"
          }
        },
        login: "/login",
        home: "/",
        nilai: "/nilai",
        tugas: "/tugas"
      },
      avatarSize: "100px",
      icons: [
        "fab fa-facebook",
        "fab fa-twitter",
        "fab fa-instagram",
        "fab fa-line"
      ]
    };
  }
};
</script>