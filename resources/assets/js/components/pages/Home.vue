
<template>
  <v-content transition="fade-transition">
    <vue-headful title="Home | IF ELSE"></vue-headful>
    <!-- ['https://ub.ac.id/wp-content/uploads/2019/02/ub-2018-09.mp4'] -->
    <video-bg :sources="video" img="http://ifelse.filkom.ub.ac.id/public/img/bg2.png">
      <v-container fluid fill-height>
        <v-flex align-center justify-space-between layout text-center column class="white--text">
          <div></div>

          <div>
            <v-avatar :tile="true" :size="logoSize" class="mb-4">
              <img src="http://ifelse.filkom.ub.ac.id/public/img/logo-noname.svg" />
            </v-avatar>

            <h1
              class="mt-3 mb-1"
              :class="{'display-2': $vuetify.breakpoint. smAndDown, 'display-3': $vuetify.breakpoint. mdAndUp}"
            >Coming Soon</h1>
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
    </video-bg>

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
                  <v-card
                    slot-scope="{ hover }"
                    class="mx-1 my-3 lekung"
                    color="grey lighten-4"
                    :to="`news${post.link}`"
                  >
                    <v-img
                      :aspect-ratio="16/9"
                      :src="`http://ifelse.filkom.ub.ac.id/public/img/blog/${post.img}`"
                      class="homenews"
                    >
                      <v-expand-transition>
                        <div
                          v-if="hover"
                          class="d-flex transition-fast-in-fast-out light-blue darken-4 v-card--reveal display-1 white--text"
                          style="height: 100%;"
                        >Read more</div>
                      </v-expand-transition>
                    </v-img>
                    <v-card-text class="pt-4" style="position: relative;">
                      <div class="font-weight-light grey--text subheading mb-2">{{ post.tgl }}</div>
                      <h3 class="title font-weight-light mb-2">{{ post.title }}</h3>
                    </v-card-text>
                  </v-card>
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
  <!-- https://ub.ac.id/wp-content/uploads/2019/02/ub-2018-09.mp4 -->
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
      video: ["https://ub.ac.id/wp-content/uploads/2019/02/ub-2018-09.mp4"],
      news: {
        data: [
          {
            title: "News 4",
            tgl: "",
            link: "",
            img: "loading.png"
          },
          {
            title: "News 3",
            tgl: "",
            link: "",
            img: "loading.png"
          },
          {
            title: "News 2",
            tgl: "",
            link: "",
            img: "loading.png"
          },
          {
            title: "News 1",
            tgl: "",
            link: "",
            img: "loading.png"
          }
        ]
      }
    };
  },
  methods: {
    watchCurrentPage(page) {
      axios.get(`${this.$appUrl}/nyoba?page=${page}`).then(response => {
        this.news = response.data;
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
    axios.get(`${this.$appUrl}/nyoba?page=1`).then(response => {
      this.news = response.data;
    });
  }
};
</script>

<style>
.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: 0.9;
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

.VideoBg__content {
  background: rgba(0, 0, 0, 0.6);
}

.homenews {
  height: 264px;
}

@media (min-width: 800px) {
  .homenews {
    height: 450px;
  }
}
</style>