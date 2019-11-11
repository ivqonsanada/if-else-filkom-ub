
<template>
  <v-content transition="fade-transition">
    <vue-headful title="Home | IF ELSE FILKOM UB" />
    <video-bg
      :sources="video"
      img="http://ifelse.filkom.ub.ac.id/public/img/bg2.png"
    >
      <v-container
        fluid
        fill-height
      >
        <v-flex
          align-center
          justify-space-between
          layout
          text-center
          column
          class="white--text"
        >
          <div />

          <transition name="fade">
            <div v-show="!isSoundON">
              <v-avatar
                :tile="true"
                :size="logoSize"
                class="mb-4"
              >
                <img src="http://ifelse.filkom.ub.ac.id/public/img/logo-noname.svg">
              </v-avatar>

              <h1
                class="mt-3 mb-1"
                :class="{'display-2': $vuetify.breakpoint. smAndDown, 'display-3': $vuetify.breakpoint. mdAndUp}"
              >
                Coming Soon
                <!-- {{ dday }} -->
              </h1>
              <h2
                :class="{'display-1': $vuetify.breakpoint. smAndDown, 'display-2': $vuetify.breakpoint. mdAndUp}"
              >
                Rangkaian 3
              </h2>
            </div>
          </transition>

          <transition name="fade">
            <div v-show="!isSoundON">
              <v-btn
                id="my-5"
                ref="button"
                color="light-blue darken-4"
                fab
                large
                dark
                class="elevation-24"
                @click="$vuetify.goTo(target, options)"
              >
                <v-icon>keyboard_arrow_down</v-icon>
              </v-btn>
            </div>
          </transition>
        </v-flex>
      </v-container>
    </video-bg>

    <div
      id="ifelse"
      class="blue-grey darken-3"
    >
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
            <h2 class="display-2 mt-4 mb-1">
              IF ELSE
            </h2>
            <h3 class="display-1 mb-4">
              "Berdiri Bersama Informatika"
            </h3>
            <h4
              class="headline pb-4"
            >
              IF ELSE merupakan singkatan dari Informatics Education and Learning for Society Enhancement yang merupakan sebuah Program Pembinaan Mahasiswa Baru (Probin Maba) Teknik Informatika pada tahun 2019.
            </h4>
          </v-flex>
        </v-layout>
      </v-container>
    </div>

    <v-container
      fluid
      class="mb-3"
    >
      <v-flex
        id="news"
        text-center
        class="display-2 pt-4"
      >
        News
      </v-flex>
      <v-layout justify-center>
        <v-flex wrap>
          <v-container
            fluid
            grid-list-md
          >
            <v-layout wrap>
              <v-flex
                v-for="post in news.data"
                :key="post.title"
                md3
                sm6
                xs12
              >
                <v-hover>
                  <v-card
                    slot-scope="{ hover }"
                    class="mx-1 my-3 lekung"
                    color="grey lighten-4"
                    :to="`news${post.link}`"
                  >
                    <v-img
                      :aspect-ratio="1"
                      :src="`http://ifelse.filkom.ub.ac.id/public/img/blog/${post.img}`"
                    >
                      <v-expand-transition>
                        <div
                          v-if="hover"
                          class="d-flex transition-fast-in-fast-out light-blue darken-4 v-card--reveal display-1 white--text"
                          style="height: 100%;"
                        >
                          Read more
                        </div>
                      </v-expand-transition>
                    </v-img>
                    <v-card-text
                      class="pt-4"
                      style="position: relative;"
                    >
                      <div class="font-weight-light grey--text subheading mb-2">
                        {{ post.tgl }}
                      </div>
                      <h3 class="title font-weight-light mb-2">
                        {{ post.title }}
                      </h3>
                    </v-card-text>
                  </v-card>
                </v-hover>
              </v-flex>
            </v-layout>
          </v-container>
          <div class="text-center">
            <v-pagination
              v-model="page"
              :length="news.last_page"
              @input="watchCurrentPage" 
            />
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

      video: ["http://ifelse.filkom.ub.ac.id/public/video/h-2.mp4"],
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
    },
    isSoundON() {
      return this.$store.getters.isSoundON;
    },
    dday() {
      // let d = new Date();
      // let n = d.getDate();

      return `D-Day`
    }
  },
  beforeCreate() {
    axios.get(`${this.$appUrl}/nyoba?page=1`).then(response => {
      this.news = response.data;
    });
    this.$store.dispatch("default");
  },
  // mounted() {
  //   let d = new Date();
  //   let n = d.getDate();
  //   document.getElementsByTagName("h1")[0].innerHTML = `H-${31 - n}`;
  // },
  methods: {
    watchCurrentPage(page) {
      axios.get(`${this.$appUrl}/nyoba?page=${page}`).then(response => {
        this.news = response.data;
      });
    }
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
</style>