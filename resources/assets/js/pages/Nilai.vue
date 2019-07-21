<template>
  <!-- <v-app id="inspire">
  <Nav2 title="Nilai"></Nav2>-->

  <v-content>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex xs12 sm8 md4>
          <template>
            <v-data-table :headers="headers" :items="desserts" class="elevation-1" hide-actions>
              <template v-slot:items="props">
                <td>{{ props.item.name }}</td>
                <td class="text-xs-right">{{ props.item.calories }}</td>
              </template>
            </v-data-table>
          </template>
        </v-flex>
      </v-layout>
    </v-container>
  </v-content>
  <!-- <Footer></Footer>
  </v-app>-->
</template>
 
       <script>
// import Nav2 from "../components/Nav2.vue";
// import Footer from "../components/Footer.vue";

export default {
  // components: {
  //   Nav2,
  //   Footer
  // },
  data() {
    return {
      logoSize: "400px",
      snackbar: true,
      y: "top",
      x: "right",
      mode: "multi-line",
      timeout: 6000,
      text: "IF-ELSE Coming Soon!",
      headers: [
        {
          text: "Kategori",
          align: "left",
          sortable: false,
          value: "name"
        },
        { text: "Nilai", value: "calories", align: "right", sortable: false }
      ],
      desserts: [
        {
          name: "Rangkaian 1",
          calories: 99
        },
        {
          name: "Rangkaian 2",
          calories: 86
        },
        {
          name: "Rangkaian 3",
          calories: 77
        },
        {
          name: "Bonus",
          calories: 10
        }
      ]
    };
  }
};
</script>

