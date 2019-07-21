
<template>
  <v-content>
    <vue-headful title="Home | IF-ELSE"></vue-headful>
    <div class="parallax">
      <v-container fluid fill-height>
        <v-flex align-center justify-center layout text-xs-center column class="white--text">
          <v-avatar :tile="true" :size="logoSize" class="mb-4">
            <img src="https://static.ivqonsanada.com/if-else/img/logo-noname.svg" />
          </v-avatar>

          <h1 class="display-3 mt-4 mb-1">Cooming Soon</h1>
          <h2 class="display-2 mb-4">Rangkaian 1</h2>

          <v-btn
            ref="button"
            color="light-blue darken-4"
            fab
            large
            dark
            class="my-5 elevation-24"
            @click="$vuetify.goTo(target, options)"
          >
            <v-icon>keyboard_arrow_down</v-icon>
          </v-btn>
        </v-flex>
      </v-container>
    </div>

    <v-container fluid>
      <v-flex align-center justify-center text-xs-center class="display-2 my-4">Apa itu IF-ELSE?</v-flex>
      <v-flex align-center justify-center layout text-xs-center class="white--text" wrap>
        <v-card>
          <v-avatar :tile="true" :size="logoHMIFSize" class="pa-3 ma-3">
            <img src="https://static.ivqonsanada.com/if-else/img/logo-hmif.png" />
          </v-avatar>
        </v-card>
        <v-card>
          <v-avatar :tile="true" :size="logoHMIFSize" class="pa-3 ma-3">
            <div class="blockquote pa-3">{{ card_text }}</div>
          </v-avatar>
        </v-card>
      </v-flex>
    </v-container>

    <v-container fluid>
      <v-flex align-center justify-center text-xs-center class="display-2 pt-4" id="news">NEWS</v-flex>
      <v-layout justify-center>
        <v-flex xs12 sm6>
          <v-container fluid grid-list-md>
            <v-layout column>
              <v-flex v-for="card in cards" :key="card.title" v-bind="{ [`xs6`]: true }">
                <v-hover>
                  <v-card
                    slot-scope="{ hover }"
                    class="mx-auto my-3"
                    color="grey lighten-4"
                    :href="card.link"
                  >
                    <v-img :aspect-ratio="16/9" :src="card.src">
                      <v-expand-transition>
                        <div
                          v-if="hover"
                          class="d-flex transition-fast-in-fast-out light-blue darken-4 v-card--reveal display-1 white--text"
                          style="height: 100%;"
                        >Read more</div>
                      </v-expand-transition>
                    </v-img>
                    <v-card-text class="pt-4" style="position: relative;">
                      <div class="font-weight-light grey--text title mb-2">21 Juli 2019</div>
                      <h3 class="display-1 font-weight-light mb-2">Launching IF-ELSE 2019</h3>
                    </v-card-text>
                  </v-card>
                </v-hover>
              </v-flex>
            </v-layout>
          </v-container>
        </v-flex>
      </v-layout>
    </v-container>

    <v-container fluid class="mb-3">
      <v-flex align-center justify-center text-xs-center class="display-2 my-4">Bagian dari</v-flex>
      <v-flex align-center justify-center layout text-xs-center class="white--text" wrap>
        <v-card>
          <v-avatar :tile="true" :size="logoHMIFSize" class="pa-3 ma-3">
            <img src="https://static.ivqonsanada.com/if-else/img/logo-hmif.png" />
          </v-avatar>
        </v-card>
        <v-card>
          <v-avatar :tile="true" :size="logoHMIFSize" class="pa-3 ma-3">
            <div class="blockquote pa-3">{{ card_text }}</div>
          </v-avatar>
        </v-card>
      </v-flex>
    </v-container>
  </v-content>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      logoSize: "120px",
      logoHMIFSize: "280px",
      snackbar: true,
      card_text:
        "Himpunan Mahasiswa Informatika Fakultas Ilmu Komputer Universitas Brawijaya (HMIF FILKOM UB) adalah organisasi yang mewadahi, menaungi dan beranggotakan seluruh mahasiswa Informatika FILKOM UB.",
      y: "top",
      x: "right",
      mode: "multi-line",
      timeout: 6000,
      text: "IF-ELSE Coming Soon!",
      selector: "#news",
      duration: 300,
      offset: 0,
      easing: "easeInOutCubic",
      cards: [
        {
          title: "Launching IF-ELSE 2019",
          src: "https://static.ivqonsanada.com/if-else/img/launch-if-else.png",
          link: "http://ifelse.filkom.ub.ac.id/news/1"
        }
      ]
    };
  },
  computed: {
    target() {
      return this.selector;
    },
    options() {
      return {
        duration: this.duration,
        offset: this.offset,
        easing: this.easing
      };
    }
  }
};
</script>

<style>
.parallax {
  /* The image used */
  background-image: url("https://static.ivqonsanada.com/if-else/img/home.jpg");

  /* Set a specific height */
  height: 720px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: 0.5;
  position: absolute;
  width: 100%;
}
</style>