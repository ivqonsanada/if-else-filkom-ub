
<template>
  <v-content>
    <vue-headful :title="`Rules | IF ELSE FILKOM UB`" />
    <v-container
      fluid
      fill-height
      md8
      sm12
    >
      <v-layout
        justify-center
        align-center
      >
        <!-- <v-flex
          align-center
          justify-center
          layout
          xs12
          class="lebar"
          column
        >
          <v-card>
            <v-layout
              style="margin: 16px 16px 16px;"
              column
            >
              <v-card-title primary-title>
                <div v-html="konten" />
                <p style="margin-leftt: 10px;margin-top: 20px">
                  <strong> Keterangan: </strong>
                </p>
                <ol>
                  <li>Peserta merupakan seluruh mahasiswa baru Program Studi Teknik Informatika Fakultas Ilmu Komputer Universitas Brawijaya angkatan 2019.</li>
                  <li>Foto gesper standar&nbsp;</li>
                  <div class="row">
                    <v-card
                      max-width="250"
                      max-height="180"
                      class="px-4 py-4 mb-4 mr-4"
                    >
                      <div class="justify-center align-center d-flex flex-column">
                        <viewer>
                          <img
                            class="img-profile v-image v-responsive"
                            :src="gesper.img1"
                          >
                        </viewer>
                      </div>
                    </v-card>
                    <v-card
                      max-width="250"
                      max-height="180"
                      class="px-4 py-4 mb-4 mr-4"
                    >
                      <div class="justify-center align-center d-flex flex-column">
                        <viewer>
                          <img
                            class="img-profile v-image v-responsive"
                            :src="gesper.img2"
                          >
                        </viewer>
                      </div>
                    </v-card>
                  </div>
                  <li>Denah open gate</li>
                  <v-card
                    max-width="300"
                    max-height="360"
                    class="px-4 py-4 mb-4 mr-4"
                  >
                    <div class="justify-center align-center d-flex flex-column">
                      <viewer>
                        <img
                          class="img-profile v-image v-responsive"
                          :src="denah"
                        >
                      </viewer>
                    </div>
                  </v-card>
                </ol>
              </v-card-title>
              <div class="d-flex justify-center mt-6">
                <v-btn
                  class="my-6"
                  dark
                  color="light-blue darken-4"
                  href="http://ifelse.filkom.ub.ac.id/bukusaku"
                  target="_blank"
                >
                  Buku saku IF ELSE FILKOM UB
                </v-btn>
              </div>
            </v-layout>
          </v-card>
        </v-flex> -->

        <!-- <v-flex
          align-center
          justify-center
          layout
          text-center
          column
        >
          <v-card>
            <v-card-title primary-title>
              <div>
                <h3 class="display-3 mb-0">
                  Coming Soon
                </h3>
              </div>
            </v-card-title>
          </v-card>
        </v-flex> -->
      </v-layout>
    </v-container>
  </v-content>
</template>
       <script>
export default {
  data() {
    return {      
      konten: "",
      appUrl: this.$appUrl,
      gesper: {
        img1: "http://ifelse.filkom.ub.ac.id/public/img/rules/gesper1.jpg",
        img2: "http://ifelse.filkom.ub.ac.id/public/img/rules/gesper2.jpg"
      },
      denah: "http://ifelse.filkom.ub.ac.id/public/img/rules/denah.png"
    };
  },
  beforeCreate() {
    let config = {
        headers: {
          Authorization: "Bearer " + localStorage.getItem("token")
        }
      };
      let bodyParameters = {};
      axios
        .get(`${this.$appUrl}/api/rules`, bodyParameters, config)
        .then(response => {
          this.konten = response.data.konten;
        })
        .catch(e => {
          console.log(e)
        });
  }

};
</script>

<style>
h1 {
  font-size: 1.2rem;
}
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
  h1 {
    font-size: 1.8rem;
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