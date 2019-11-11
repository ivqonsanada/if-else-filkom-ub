
<template>
  <v-content>
    <vue-headful title="FAQ | IF ELSE FILKOM UB" />
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
          <v-expansion-panels focusable>
            <v-expansion-panel
              v-for="faq in faqs"
              :key="faq.ask"
            >
              <v-expansion-panel-header>{{ faq.ask }}</v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <div v-html="faq.answer" />
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
          ask: "Tema IF ELSE tahun ini apa ya?",
          answer:
            "IF ELSE tahun ini mengusung tema 'Berdiri Bersama Informatika' yang berarti bersama-sama dalam menghadapi segala masalah yang dihadapi maupun menggapai apa yang diinginkan secara bersama sama. Dengan diangkatnya tema ini juga, mahasiswa Teknik Informatika angkatan 2019 dapat memiliki solidaritas yang tinggi pada masing - masing individu dalam menyelesaikan permasalahan yang ada."
        },
        {
          ask: "Bagaimana cara memasang twibbonnya?",
          answer: `Tutorial twibbon dapat dilihat di youtube IF ELSE FILKOM UB dengan membuka link berikut: <a href="http://ifelse.filkom.ub.ac.id/youtube" target="_blank">ifelse.filkom.ub.ac.id/youtube</a>`
        }
      ]
    };
  }
};
</script>
