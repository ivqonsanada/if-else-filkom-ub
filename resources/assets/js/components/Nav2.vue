<template>
  <div>
    <v-toolbar color="light-blue darken-4" dark fixed app clipped-right>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>{{ title }}</v-toolbar-title>
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
        <v-list-tile @click.stop="left = !left">
          <v-list-tile-action>
            <v-icon>account_box</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Labib Alfaruqi Ibrahim</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-divider></v-divider>

        <v-list-tile @click.stop="left = !left" :href="url.tugas">
          <v-list-tile-action>
            <v-icon>assignment</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Tugas</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile @click.stop="left = !left" :href="url.nilai">
          <v-list-tile-action>
            <v-icon>assessment</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Nilai</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile @click.stop="left = !left" :href="url.logout">
          <v-list-tile-action>
            <v-icon>exit_to_app</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Logout</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-divider></v-divider>

        <v-list-tile @click.stop="left = !left" :href="url.home">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile @click.stop="left = !left" :href="url.rules">
          <v-list-tile-action>
            <v-icon>error_outline</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Rules</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile @click.stop="left = !left" :href="url.documentation">
          <v-list-tile-action>
            <v-icon>photo_library</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Documentation</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile @click.stop="left = !left" :href="url.faq">
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
      left: null,
      url: {
        home: "/",
        faq: "/faq",
        documentation: "/documentation",
        rules: "/rules",
        login: "/login",
        nilai: "/nilai",
        tugas: "/tugas",
        logout: "/logout"
      },
      avatarSize: "100px",
      logoSize: "400px",
      snackbar: true,
      y: "top",
      x: "right",
      mode: "multi-line",
      timeout: 6000,
      text: "IF-ELSE Coming Soon"
    };
  }
};
</script>
