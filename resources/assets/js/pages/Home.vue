
<template>
  <v-content>
    <vue-headful title="Home | IF ELSE"></vue-headful>
    <div class="parallax">
      <v-container fluid fill-height>
        <v-flex align-center justify-space-between layout text-center column class="white--text">
          <div></div>

          <div>
            <v-avatar :tile="true" :size="logoSize" class="mb-4">
              <img src="https://static.ivqonsanada.com/if-else/img/logo-noname.svg" />
            </v-avatar>

            <h1
              class="mt-3 mb-1"
              :class="{'display-2': $vuetify.breakpoint. smAndDown, 'display-3': $vuetify.breakpoint. mdAndUp}"
            >Cooming Soon</h1>
            <h2
              :class="{'display-1': $vuetify.breakpoint. smAndDown, 'display-2': $vuetify.breakpoint. mdAndUp}"
            >Rangkaian 1</h2>
          </div>

          <v-btn
            ref="button"
            color="light-blue darken-4"
            fab
            large
            dark
            class="elevation-24"
            id="my-5"
            @click="$vuetify.goTo(target, options)"
          >
            <v-icon>keyboard_arrow_down</v-icon>
          </v-btn>
        </v-flex>
      </v-container>
    </div>

    <div class="blue-grey darken-3" id="ifelse">
      <v-container fluid>
        <v-layout justify-center>
          <v-flex
            align-center
            justify-center
            layout
            text-center
            column
            class="white--text"
            md6
            sm12
          >
            <h1 class="display-2 mt-4 mb-1">IF ELSE</h1>
            <h2 class="display-1 mb-4">"Berdiri Bersama Informatika"</h2>
            <h3
              class="headline pb-4"
            >IF ELSE merupakan singkatan dari Informatics Education and Learning for Society Enhancement yang merupakan sebuah Program Pembinaan Mahasiswa Baru (Probin Maba) Teknik Informatika pada tahun 2019.</h3>
          </v-flex>
        </v-layout>
      </v-container>
    </div>

    <v-container fluid class="mb-3">
      <v-flex text-center class="display-2 pt-4" id="news">News</v-flex>
      <v-layout justify-center>
        <v-flex wrap>
          <v-container fluid grid-list-md>
            <v-layout wrap>
              <v-flex v-for="post in news.data" :key="post.title" md3 sm6 xs12>
                <v-hover>
                  <template v-slot:default="{ hover }">
                    <v-card class="mx-1 my-3 lekung" color="grey lighten-4" :to="post.link">
                      <v-img
                        :aspect-ratio="16/9"
                        :src="`http://ifelse.filkom.ub.ac.id/public/img/blog/${post.img}`"
                      ></v-img>
                      <v-card-text class="pt-4" style="position: relative;">
                        <div class="font-weight-light grey--text subheading mb-2">{{ post.tgl }}</div>
                        <h3 class="title font-weight-light mb-2">{{ post.title }}</h3>
                      </v-card-text>

                      <v-fade-transition>
                        <v-overlay v-if="hover" absolute color="light-blue darken-4">
                          <v-btn>See more info</v-btn>
                        </v-overlay>
                      </v-fade-transition>
                    </v-card>
                  </template>
                </v-hover>
              </v-flex>
            </v-layout>
          </v-container>
          <div class="text-center">
            <v-pagination v-model="page" :length="news.last_page" @input="watchCurrentPage"></v-pagination>
          </div>
        </v-flex>
      </v-layout>
    </v-container>
  </v-content>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      logoSize: "120px",
      selector: "#ifelse",
      duration: 500,
      offset: 0,
      easing: "easeInOutCubic",
      page: 1,
      news: [],
      overlay: false
    };
  },
  methods: {
    watchCurrentPage(page) {
      axios
        .get(`${this.$appUrl}/nyoba?page=${page}`)
        .then(response => {
          this.news = response.data;
        })
        .catch(e => {
          this.errors.push(e);
        });
    }
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
  },

  beforeCreate() {
    axios
      .get(`${this.$appUrl}/nyoba?page=1`)
      .then(response => {
        this.news = response.data;
      })
      .catch(e => {
        this.errors.push(e);
      });
  }
};
</script>

<style>
.parallax {
  /* The image used */
  background-image: url("http://ifelse.filkom.ub.ac.id/public/img/bg2.png");

  /* Set a specific height */
  height: 95vh;

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
  opacity: 0.95;
  position: absolute;
  width: 100%;
}
.end {
  margin-top: auto;
}
.lekung {
  border-radius: 5px;
}

#my-5 {
  margin-top: 48px !important;
  margin-bottom: 48px !important;
}
</style>