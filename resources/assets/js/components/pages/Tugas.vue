
<template>
  <v-content>
    <vue-headful title="Tugas | IF ELSE FILKOM UB" />
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
          md6
        >
          <v-expansion-panels multiple>
            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>Penugasan 1 - Video</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <p>Ketentuan Tugas</p>
                <p>1. Membuat Video:</p>
                <ul>
                  <li>Pembukaan (Semua anggota harus dalam satu frame)</li>
                  <li>Pengenalan masing-masing anggota</li>
                  <li>Penjelasan tentang nama kelompok masing-masing</li>
                  <li>Pandangan tentang TIF</li>
                  <li>Harapan per-individu setelah kuliah di TIF</li>
                  <li>Penutupan (semua anggota harus dalam satu frame)</li>
                </ul>
                <br>
                <p>2. Aturan:</p>
                <ul>
                  <li>Video diupload ke line minimal 5 menit, tidak ada maksimal</li>
                  <li>Video diupload oleh semua anggota kelompok</li>
                  <li>Caption berisi Nama kelompok dan nama anggota kelompoknya.</li>
                  <li>Captions diakhiri dengan hashtag #BerdiriBersamaInformatika #ExploreWithOurFamily #IFELSE2019 #MariKembali #SatuPaduInformatika</li>
                </ul>
                <br>
                <p>
                  <strong>Deadline</strong>: 10 September 2019
                </p>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>Penugasan 2 - Essay</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <p>Ketentuan Tugas</p>
                <p>1. Membuat Essay:</p>
                <ul>
                  <li>
                    Menjelaskan kembali materi-materi yang telah didapat selama mengikuti kegiatan:
                    <ol style="list-style-type:circle;">
                      <li>Halo Himpunan</li>
                      <li>Rangkaian 2</li>
                    </ol>
                  </li>
                </ul>
                <br>
                <p>2. Aturan:</p>
                <ul>
                  <li>Minimal 500 kata</li>
                  <li>Kerjakan di word</li>
                  <li>Essay dibuat sesuai ketentuan PUEBI ( Pedoman Umum Ejaan Bahasa Indonesia )</li>
                </ul>
                <br>
                <p>
                  <strong>Deadline</strong>: 14 November 2019, 23:59
                </p>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>Penugasan 3 - Instastory</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content
                class="mt-3"
              >
                <p>Membuat instastory setiap ada kegiatan di luar rangkaian</p>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>Penugasan 4 - Kuis</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <div class="mb-5">
                  Tugas 4.1 :
                  <v-btn
                    outlined
                    color="light-blue darken-4"
                    to="/tugas/4-1"
                  >
                    Has Ended
                  </v-btn>
                </div>

                <div class="mb-5">
                  Tugas 4.2 :
                  <v-btn
                    outlined
                    color="light-blue darken-4"
                    to="/tugas/4-2"
                  >
                    Has Ended
                  </v-btn>
                </div>

                <div class="mb-5">
                  Tugas 4.3 :
                  <v-btn
                    outlined
                    color="light-blue darken-4"
                    to="/tugas/4-3"
                  >
                    Has Ended
                  </v-btn>
                </div>

                <div class="mb-5">
                  Tugas 4.4 :
                  <v-btn
                    outlined
                    color="light-blue darken-4"
                    to="/tugas/4-4"
                  >
                    Has Ended
                  </v-btn>
                </div>

                <div class="mb-5">
                  Tugas 4.5 :
                  <v-btn
                    outlined
                    color="light-blue darken-4"
                    to="/tugas/4-5"
                  >
                    Has Ended
                  </v-btn>
                </div>

                <div class="mb-5">
                  Tugas 4.6 :
                  <v-btn
                    outlined
                    color="light-blue darken-4"
                    to="/tugas/4-6"
                  >
                    Has Ended
                  </v-btn>
                </div>

                <div>
                  Tugas 4.7 :
                  <v-btn
                    outlined
                    color="light-blue darken-4"
                    to="/tugas/4-7"
                  >
                    Has Ended
                  </v-btn>
                </div>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>Penugasan SWOT</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3" />
            </v-expansion-panel>
          </v-expansion-panels>
        </v-flex>
      </v-layout>
    </v-container>
  </v-content>
</template>
    
<script>
export default {
  data() {
    return {};
  },
  beforeCreate() {
    let config = {
      headers: {
        Authorization: "Bearer " + localStorage.getItem("token")
      }
    };
    let bodyParameters = {};
    axios
      .post(`${this.$appUrl}/api/details`, bodyParameters, config)
      .catch(e => {
        this.$store.dispatch("logout");
        this.$router.push("/login");
      });
  }
};
</script>

<style>
.flex--primary {
  display: flex;
  justify-content: space-between;
  font-weight: bold;
  font-size: 18px;
}

.flex--secondary {
  display: flex;
  justify-content: space-between;
}

.shadow {
  margin: 12px 12px;
}

.hrd {
  margin-top: 10px;
  margin-bottom: 10px;
}
</style>