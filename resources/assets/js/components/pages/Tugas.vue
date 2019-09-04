
<template>
  <v-content>
    <vue-headful title="Tugas | IF ELSE"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex xs12 sm8 md6>
          <v-expansion-panels multiple v-model="panel">
            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[0].ask }}</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <div v-html="faqs[0].answer"></div>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[1].ask }}</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <div>Coming Soon</div>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[2].ask }}</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <div>Coming Soon</div>
              </v-expansion-panel-content>
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
    return {
      // panel: [0, 1, 2, 3],
      faqs: [
        {
          ask: "Penugasan 1",
          answer: `
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
<p><strong>Deadline</strong>: 10 September 2019</p>
`
        },
        {
          ask: "Penugasan 2",
          answer:
            "Probin Maba TIF 2019 sendiri adalah serangkaian kegiatan pembinaan yang digunakan sebagai sarana mahasiswa Teknik Informatika angkatan 2019 dalam mengembangkan nilai – nilai positif baik dengan cara pendidikan formal maupun informal yang diperoleh dari mahasiswa angkatan terdahulu & dari lingkungan sekitar."
        },
        {
          ask: "Penugasan 3",
          answer:
            "IF ELSE tahun ini mengusung tema 'Berdiri Bersama Informatika' yang berarti bersama-sama dalam menghadapi segala masalah yang dihadapi maupun menggapai apa yang diinginkan secara bersama sama. Dengan diangkatnya tema ini juga, mahasiswa Teknik Informatika angkatan 2019 dapat memiliki solidaritas yang tinggi pada masing - masing individu dalam menyelesaikan permasalahan yang ada."
        },
        {
          ask: "Total",
          answer:
            "IF ELSE tahun ini mengusung tema 'Berdiri Bersama Informatika' yang berarti bersama-sama dalam menghadapi segala masalah yang dihadapi maupun menggapai apa yang diinginkan secara bersama sama. Dengan diangkatnya tema ini juga, mahasiswa Teknik Informatika angkatan 2019 dapat memiliki solidaritas yang tinggi pada masing - masing individu dalam menyelesaikan permasalahan yang ada."
        }
      ]
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
      .post(`${this.$appUrl}/api/details`, bodyParameters, config)
      .catch(e => {
        this.$store.dispatch("logout");
        this.$router.push("/");
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