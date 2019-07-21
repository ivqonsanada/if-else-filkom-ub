
<template>
  <v-content>
    <vue-headful title="FAQ | IF-ELSE"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex xs12 sm8 md6>
          <v-expansion-panel focusable>
            <v-expansion-panel-content v-for="faq in faqs" :key="faq.ask">
              <template v-slot:header>
                <div>{{ faq.ask }}</div>
              </template>
              <v-card>
                <v-card-text class="grey lighten-3">{{ faq.answer }}</v-card-text>
              </v-card>
            </v-expansion-panel-content>
          </v-expansion-panel>
        </v-flex>
      </v-layout>
    </v-container>
  </v-content>
</template>
    
<script>
export default {
  data() {
    return {
      faqs: [
        {
          ask: "Apa itu IF ELSE?",
          answer:
            "IF ELSE merupakan singkatan dari Informatics Education and Learning for Society Enhancement yang merupakan sebuah Program Pembinaan Mahasiswa Baru (Probin Maba) Teknik Informatika pada tahun 2019."
        },
        {
          ask: "Apa itu Probin Maba TIF 2019?",
          answer:
            "Probin Maba TIF 2019 sendiri adalah serangkaian kegiatan pembinaan yang digunakan sebagai sarana mahasiswa Teknik Informatika angkatan 2019 dalam mengembangkan nilai – nilai positif baik dengan cara pendidikan formal maupun informal yang diperoleh dari mahasiswa angkatan terdahulu & dari lingkungan sekitar."
        },
        {
          ask: "Tema IF ELSE tahun apa ya?",
          answer:
            "IF ELSE tahun ini mengusung tema 'Berdiri Bersama Informatika' yang berarti ....... Nanti yak wk"
        }
      ]
    };
  }
};
</script>
