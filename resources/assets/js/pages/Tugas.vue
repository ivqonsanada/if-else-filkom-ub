
<template>
  <!-- <v-app id="inspire">
  <Nav2 title="Tugas"></Nav2>-->

  <v-content>
    <v-container fluid fill-height>
      <v-flex align-center justify-center layout text-xs-center>
        <v-avatar :tile="true" :size="logoSize">
          <img src="https://static.ivqonsanada.com/if-else/img/logo.svg" />
        </v-avatar>
      </v-flex>

      <v-snackbar v-model="snackbar" bottom="true" right="true" multi-line="true">
        {{ text }}
        <v-btn color="pink" flat @click="snackbar = false">Close</v-btn>
      </v-snackbar>
    </v-container>
  </v-content>
  <!-- <Footer></Footer>
  </v-app>-->
</template>
       <script>
// import Nav2 from "../components/Nav2.vue";
// import Footer from "../components/Footer.vue";

export default {
  // components: {
  //   Nav2,
  //   Footer
  // },
  data() {
    return {
      logoSize: "400px",
      snackbar: true,
      y: "top",
      x: "right",
      mode: "multi-line",
      timeout: 6000,
      text: "IF-ELSE Coming Soon!"
    };
  }
};
</script>


