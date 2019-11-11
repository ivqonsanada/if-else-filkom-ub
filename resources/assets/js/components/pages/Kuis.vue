
<template>
  <v-content>
    <vue-headful :title="this.$route.meta.title" />
    <v-container
      fluid
      fill-height
    >
      <v-layout
        justify-center
        align-center
      >
        <v-flex
          xs12
          sm8
          md4
        >
          <v-card class="mx-auto pt-4">
            <h1 class="text-center">
              {{ this.$route.name }}
            </h1>

            <p class="ml-6">
              Note: 
              <ul>
                <li>Tekan gambar untuk memperbesar.</li>
                <li>Hanya diperkenankan submit jawaban sekali saja.</li>
              </ul>
            </p>

            <div :class="{'px-2': $vuetify.breakpoint.xsOnly, 'px-4': $vuetify.breakpoint.smAndUp}">
              <v-list-item
                v-for="(soal, index) in soals"
                :key="soal.id"
                class="canselect"
              >
                <v-list-item-content>
                  <v-list-item-title class="headline unset-white-space">
                    <ol
                      :start="index+1"
                      class="pl-9"
                    >
                      <li>Mahasiswa Informatika angkatan 2019 yang ada pada foto berikut bernama?</li>
                    </ol>
                  </v-list-item-title>
                  
                  <div class="justify-center align-center d-flex flex-column">
                    <viewer>
                      <img
                        class="img-profile v-image v-responsive mt-3"
                        :src="`http://ifelse.filkom.ub.ac.id/public/storage/avatars/${soal.soal_avatar}`"
                      >
                    </viewer>
                  </div>
                  
                  <v-list-item-subtitle class="pl-3">
                    <v-radio-group
                      v-model="jawabans[index]"
                      :disabled="sudah == 1 ? true : false"
                      column
                      @change="jawabanku()"
                    >
                      <v-radio
                        :label="soal.pil1_name"
                        :value="soal.pil1_nim"
                      />
                      <v-radio
                        :label="soal.pil2_name"
                        :value="soal.pil2_nim"
                      />
                      <v-radio
                        :label="soal.pil3_name"
                        :value="soal.pil3_nim"
                      />
                      <v-radio
                        :label="soal.pil4_name"
                        :value="soal.pil4_nim"
                      />
                    </v-radio-group>
                  </v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <v-list-item
                v-for="(soal, index) in soals2"
                :key="soal.id"
                class="canselect"
              >
                <v-list-item-content>
                  <v-list-item-title class="headline unset-white-space">
                    <ol
                      :start="index+soals.length+1"
                      class="pl-9"
                    >
                      <li>Dari foto berikut, manakah yang bernama "{{ soal.soal_name }}"?</li>
                    </ol>
                  </v-list-item-title>
                  <v-list-item-subtitle class="pl-3">
                    <v-radio-group
                      v-model="jawabans[index+soals.length]"
                      column
                      :disabled="sudah == 1 ? true : false"
                      class="d-flex "
                      @change="jawabanku()"
                    >
                      <div class="row">
                        <div>
                          <v-card
                            width="190"
                            height="232"
                            class="px-4 py-4 mb-4 mr-4 "
                          >
                            <v-radio
                              :label="`Foto Pertama`"
                              :value="soal.pil1_nim"
                            />
                            
                            <div class="justify-center align-center d-flex flex-column">
                              <viewer>
                                <img
                                  class="img-profile v-image v-responsive"
                                  :src="`http://ifelse.filkom.ub.ac.id/public/storage/avatars/${soal.pil1_avatar}`"
                                >
                              </viewer>
                            </div>
                          </v-card>
                        </div>
                        <div>
                          <v-card
                            width="190"
                            height="232"
                            class="px-4 py-4 mb-4 mr-4"
                          >
                            <v-radio
                              :label="`Foto Kedua`"
                              :value="soal.pil2_nim" 
                            />
                            
                            <div class="justify-center align-center d-flex flex-column">
                              <viewer>
                                <img
                                  class="img-profile v-image v-responsive"
                                  :src="`http://ifelse.filkom.ub.ac.id/public/storage/avatars/${soal.pil2_avatar}`"
                                >
                              </viewer>
                            </div>
                          </v-card>
                        </div>
                      </div>

                      <div class="row">
                        <div>
                          <v-card
                            class="px-4 py-4 mb-4 mr-4"
                            width="190"
                            height="232"
                          >
                            <v-radio
                              :label="`Foto Ketiga`"
                              :value="soal.pil3_nim" 
                            />
                            
                            <div class="justify-center align-center d-flex flex-column">
                              <viewer>
                                <img
                                  class="img-profile v-image v-responsive"
                                  :src="`http://ifelse.filkom.ub.ac.id/public/storage/avatars/${soal.pil3_avatar}`"
                                >
                              </viewer>
                            </div>
                          </v-card>
                        </div>

                        <div>
                          <v-card
                            width="190"
                            height="232"
                            class="px-4 py-4 mb-4 mr-4"
                          >
                            <v-radio
                              :label="`Foto Keempat`"
                              :value="soal.pil4_nim" 
                            />
                            
                            <div class="justify-center align-center d-flex flex-column">
                              <viewer>
                                <img
                                  class="img-profile v-image v-responsive"
                                  :src="`http://ifelse.filkom.ub.ac.id/public/storage/avatars/${soal.pil4_avatar}`"
                                >
                              </viewer>
                            </div>
                          </v-card>
                        </div>
                      </div>
                    </v-radio-group>
                  </v-list-item-subtitle>
                </v-list-item-content>
              </v-list-item>

              <div
                class="mb-5"
                style="display: flex; flex-direction: row-reverse;"
              >
                <v-btn
                  :disabled="sudah == 1 ? true : false"
                  class="white--text ma-5"
                  color="light-blue darken-4"
                  @click="dialog = true"
                >
                  Submit
                </v-btn>
              </div>
            </div>
          </v-card>
        </v-flex>
        <v-snackbar
          v-model="snackbar"
          :timeout="timeout"
          :color="snackcolor"
          multi-line
          top
        >
          {{ text }}
          <v-btn
            text
            @click="snackbar = false"
          >
            Close
          </v-btn>
        </v-snackbar>
      </v-layout>
    </v-container>
    <!-- <v-overlay :value="loading">
      <v-progress-circular
        indeterminate
        size="64" 
      />
    </v-overlay> -->
    <v-dialog
      v-model="dialog"
      max-width="290"
    >
      <v-card>
        <v-card-title class="headline">
          Apakah kamu ingin submit jawabanmu?
        </v-card-title>

        <v-card-text class="text--primary">
          <div>Kamu hanya bisa submit jawabanmu sekali saja</div>
        </v-card-text>

        <v-card-actions>
          <v-spacer />

          <v-btn
            dark
            color="light-blue darken-4"
            @click="submitJawaban()"
          >
            Ya, Submit
          </v-btn>

          <v-btn
            color="light-blue darken-4"
            text
            @click="dialog = false"
          >
            Tidak
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </v-content>
</template>
    
<script>
export default {
  inject: ["$validator"],
  data: () => ({
    valid: true,
    snackbar: false,
    snackcolor: "light-blue darken-4",
    text: "Aku rindu.",
    timeout: 6000,
    jawabans: [],
    dialog: false,
    sudah: 0,
    soals: [
      {"soal_avatar":"loading.png","pil1_nim":"0000000000","pil1_name":"Pilihan ke-1","pil2_nim":"0000000000","pil2_name":"Pilihan ke-2","pil3_nim":"0000000000","pil3_name":"Pilihan ke-3","pil4_nim":"0000000000","pil4_name":"Pilihan ke-4"},
      {"soal_avatar":"loading.png","pil1_nim":"0000000000","pil1_name":"Pilihan ke-1","pil2_nim":"0000000000","pil2_name":"Pilihan ke-2","pil3_nim":"0000000000","pil3_name":"Pilihan ke-3","pil4_nim":"0000000000","pil4_name":"Pilihan ke-4"
      },
      {"soal_avatar":"loading.png","pil1_nim":"0000000000","pil1_name":"Pilihan ke-1","pil2_nim":"0000000000","pil2_name":"Pilihan ke-2","pil3_nim":"0000000000","pil3_name":"Pilihan ke-3","pil4_nim":"0000000000","pil4_name":"Pilihan ke-4"
      }
    ],
    soals2: [],
  }),
  computed: {
    csrf_token() {
      let token = document.head.querySelector('meta[name="csrf-token"]');
      return token.content;
    },
  },
  beforeCreate() {
      // let nyoba = localStorage.getItem("jawaban");

      // console.log(nyoba)

      let config = {
        headers: {
          Authorization: "Bearer " + localStorage.getItem("token")
        }
      };
      let bodyParameters = {};
      axios
        .post(`${this.$appUrl}/api${this.$route.path}/kuis`, bodyParameters, config)
        .then(response => {
          this.soals = response.data.soals;
          this.soals2 = response.data.soals2;
          this.snackbar = true;
          this.snackcolor = "info";
          this.text = "Semangatt!";
          this.sudah = response.data.sudah;
          this.jawabans = Object.values(response.data.jawaban);
          if(this.sudah == 0) {
            if(localStorage.getItem("jawaban") == null || JSON.parse(localStorage.getItem("jawaban").length) != this.jawabans.length) {
              localStorage.setItem("jawaban", JSON.stringify(this.jawabans));
            } else {
              this.jawabans = JSON.parse(localStorage.getItem("jawaban"));
            }
          } 
        })
        .catch(e => {
          console.log(e)
        });
  },
  created() {
    localStorage.setItem("hmm", "parah sih, jangan lihat-lihat dimari, hmm");
    console.log(`
░░░░░░░░░▄██████████▄▄░░░░░░░░
░░░░░░▄█████████████████▄░░░░░
░░░░░██▀▀▀▀▀▀▀▀▀▀▀████████░░░░
░░░░██░░░░░░░░░░░░░░███████░░░
░░░██░░░░░░░░░░░░░░░████████░░
░░░█▀░░░░░░░░░░░░░░░▀███████░░
░░░█▄▄██▄░░░▀█████▄░░▀██████░░
░░░█▀███▄▀░░░▄██▄▄█▀░░░█████▄░
░░░█░░▀▀█░░░░░▀▀░░░▀░░░██░░▀▄█
░░░█░░░█░░░▄░░░░░░░░░░░░░██░██
░░░█░░█▄▄▄▄█▄▀▄░░░░░░░░░▄▄█▄█░
░░░█░░█▄▄▄▄▄▄░▀▄░░░░░░░░▄░▀█░░
░░░█░█▄████▀██▄▀░░░░░░░█░▀▀░░░
░░░░██▀░▄▄▄▄░░░▄▀░░░░▄▀█░░░░░░
░░░░░█▄▀░░░░▀█▀█▀░▄▄▀░▄▀░░░░░░
░░░░░▀▄░░░░░░░░▄▄▀░░░░█░░░░░░░
░░░░░▄██▀▀▀▀▀▀▀░░░░░░░█▄░░░░░░
░░▄▄▀░░░▀▄░░░░░░░░░░▄▀░▀▀▄░░░░
▄▀▀░░░░░░░█▄░░░░░░▄▀░░░░░░█▄░░
█░░░░░░░░░░░░░░░░░░░░░░░░░░▀█▄
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
█▄░░█ █▀▀█ ▀▀█▀▀░░█▀▀█ █▀▀█ █▀▀▄
█░█░█ █░░█ ░░█░░░░█▀▀▄ █▄▄█ █░░█
█░░▀█ █▄▄█ ░░█░░░░█▄▄█ █░░█ █▄▄▀
░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░`);

  },

  methods: {
    jawabanku() {
      let listJawaban = new Array();

      this.jawabans.forEach((jawaban, index) => {
        listJawaban[index] = jawaban
      });

      localStorage.setItem("jawaban", JSON.stringify(listJawaban));

    },

    submitJawaban() {
      let nyoba = localStorage.getItem("jawaban");
      let config = {
        headers: {
          Authorization: "Bearer " + localStorage.getItem("token")
        }
      };
      let bodyParameters = { nyoba };
      axios
        .post(`${this.$appUrl}/api${this.$route.path}/submit`, bodyParameters, config)
        .then(response => {
          this.snackbar = true;
          this.snackcolor = "success";
          this.text = response.data.success.msg;
          setTimeout(() => this.$router.push({ path: "/tugas" }), 1000);
          localStorage.removeItem('jawaban');
        })
        .catch(e => {
          console.log(e)
        });
    }
  },


};
</script>

<style>
.tengah-soal {
  margin-left: auto;
  margin-right: auto;
}

.pos {
  display: flex;
  flex-direction: column;
}

.row {
  margin-left: unset;
  margin-right: unset;
}

.not-avatar {
  margin-right: unset !important;
}

.button--change-photo {
  position: absolute;
  left: 50%;
  top: 85%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.35) !important;
}

.canselect {
  user-select: unset;
}

.v-snack__wrapper {
  min-width: unset;
}

.unset-white-space {
  white-space: unset;
}

.img-profile {
  max-width:168px;
  max-height:168px;
  box-shadow: 0 3px 1px -2px rgba(0,0,0,.2),0 2px 2px 0 rgba(0,0,0,.14),0 1px 5px 0 rgba(0,0,0,.12);
}

</style>