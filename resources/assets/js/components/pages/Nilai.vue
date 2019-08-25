
<template>
  <v-content>
    <vue-headful title="FAQ | IF ELSE"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex xs12 sm8 md6>
          <v-expansion-panels multiple v-model="panel">
            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[0].ask }}</div>
                <div></div>
                <div></div>
                <div>100/100</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <li class="flex--secondary">
                  <div>Kehadiran</div>
                  <div></div>
                  <div></div>
                  <div>100/100</div>
                  <div class="shadow"></div>
                </li>
                <li>b</li>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[1].ask }}</div>
                <div></div>
                <div></div>
                <div>100/100</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <li class="flex--secondary">
                  <div>Kehadiran</div>
                  <div></div>
                  <div></div>
                  <div>100/100</div>
                  <div class="shadow"></div>
                </li>
                <li>b</li>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[2].ask }}</div>
                <div></div>
                <div></div>
                <div>100/100</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <li class="flex--secondary">
                  <div>Kehadiran</div>
                  <div></div>
                  <div></div>
                  <div>100/100</div>
                  <div class="shadow"></div>
                </li>
                <li>b</li>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[3].ask }}</div>
                <div></div>
                <div></div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <li class="flex--secondary">
                  <div>Kehadiran</div>
                  <div></div>
                  <div></div>
                  <div>100/100</div>
                  <div class="shadow"></div>
                </li>
                <li>b</li>
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
          ask: "Rangkaian 1",
          answer:
            "IF ELSE merupakan singkatan dari Informatics Education and Learning for Society Enhancement yang merupakan sebuah Program Pembinaan Mahasiswa Baru (Probin Maba) Teknik Informatika pada tahun 2019."
        },
        {
          ask: "Rangkaian 2",
          answer:
            "Probin Maba TIF 2019 sendiri adalah serangkaian kegiatan pembinaan yang digunakan sebagai sarana mahasiswa Teknik Informatika angkatan 2019 dalam mengembangkan nilai – nilai positif baik dengan cara pendidikan formal maupun informal yang diperoleh dari mahasiswa angkatan terdahulu & dari lingkungan sekitar."
        },
        {
          ask: "Rangkaian 3",
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
</style>