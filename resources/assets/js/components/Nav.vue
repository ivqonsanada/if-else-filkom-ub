<template>
  <div>
    <v-toolbar color="light-blue darken-4" dark fixed app clipped-right>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>{{ title }}</v-toolbar-title>
      <v-spacer></v-spacer>
    </v-toolbar>
    <v-navigation-drawer fixed v-model="drawer" app temporary>
      <v-flex align-center justify-center layout text-center>
        <v-list>
          <v-list-tile avatar>
            <v-list-tile-avatar :size="avatarSize" :tile="true">
              <img src="https://static.ivqonsanada.com/if-else/img/logo-noname.svg" />
            </v-list-tile-avatar>
          </v-list-tile>
        </v-list>
      </v-flex>

      <v-list dense>
        <v-list-tile :href="url.login">
          <v-list-tile-action>
            <v-icon>exit_to_app</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Login</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-divider></v-divider>

        <v-list-tile :href="url.home">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile :href="url.rules">
          <v-list-tile-action>
            <v-icon>error_outline</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Rules</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile :href="url.documentation">
          <v-list-tile-action>
            <v-icon>photo_library</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Documentation</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile :href="url.faq">
          <v-list-tile-action>
            <v-icon>question_answer</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Frequently Asked Questions (FAQ)</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>

     <script>
export default {
  props: ["title"],
  data() {
    return {
      drawer: false,
      url: {
        home: "/",
        faq: "/faq",
        documentation: "/documentation",
        rules: "/rules",
        login: "/login",
        nilai: "/nilai",
        tugas: "/tugas"
      },
      avatarSize: "100px"
    };
  }
};
</script>
