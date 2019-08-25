
<template>
  <v-content>
    <vue-headful v-bind:title="post.title + ` | News`"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex align-center justify-center layout xs12 class="lebar">
          <v-card>
            <v-card-title primary-title>
              <v-flex column>
                <v-img
                  :src="`http://ifelse.filkom.ub.ac.id/public/img/blog/${post.img}`"
                  :lazy-src="`http://ifelse.filkom.ub.ac.id/public/img/blog/${post.img}`"
                  class="grey lighten-2"
                ></v-img>
                <v-flex layout wrap>
                  <h3 class="headline mb-1 mt-3" text-center>{{ post.title }}</h3>
                  <v-spacer></v-spacer>
                  <h4 class="font-weight-regular mt-4">{{ post.tgl }}</h4>
                </v-flex>
                <v-divider></v-divider>
                <div v-if="post.carousel">
                  <br />
                  <v-carousel hide-delimiters height="auto">
                    <v-carousel-item
                      v-for="carousel in post.carousels"
                      :key="carousel.id"
                      :src="`http://ifelse.filkom.ub.ac.id/public/img/blog/carousel/${carousel.post_id}/${carousel.img}`"
                    ></v-carousel-item>
                  </v-carousel>
                </div>
                <div v-html="post.content"></div>
              </v-flex>
            </v-card-title>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
    <v-overlay :value="loading">
      <v-progress-circular indeterminate size="64"></v-progress-circular>
    </v-overlay>
  </v-content>
</template>
       <script>
export default {
  data() {
    return {
      post: {
        title: "",
        content: "",
        tgl: "",
        link: "",
        img: "loading.png",
        carousels: [
          {
            img: "loading.png"
          }
        ]
      },
      appUrl: this.$appUrl,
      loading: true
    };
  },
  mounted() {
    setTimeout(() => {
      this.loading = false;
    }, 500);
  },

  beforeCreate() {
    axios
      .get(`${this.$appUrl}/nyoba/${this.$route.params.id}`)
      .then(response => {
        this.post = response.data;
      });
  }
};
</script>

<style>
p {
  font-size: 1rem;
}

.v-card__title {
  font-size: 1rem;
  line-height: 1.5;
}

@media (min-width: 600px) {
  .lebar {
    flex-basis: 61% !important;
    flex-grow: 0;
    max-width: 61% !important;
  }
}

@media (min-width: 800px) {
  .lebar {
    flex-basis: 41% !important;
    flex-grow: 0;
    max-width: 41% !important;
  }
}
</style>