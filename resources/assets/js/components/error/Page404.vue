<template>
  <v-layout>
    <v-content>
      <v-container fluid fill-height>
        <v-flex align-center justify-center layout text-xs-center column>
          <v-card>
            <v-avatar :tile="true" :size="logoSize">
              <img src="https://static.ivqonsanada.com/if-else/img/logo.svg" />
            </v-avatar>

            <v-flex align-center justify-center layout text-xs-center column>
              <v-card-title primary-title>
                <div>
                  <h3 class="headline mb-0">404 - Page Not Found!</h3>
                </div>
              </v-card-title>
              <v-card-actions>
                <v-btn color="light-blue darken-4" dark :to="url" elevation-2>Tuntun Aku Pulang</v-btn>
              </v-card-actions>
            </v-flex>
          </v-card>
        </v-flex>
      </v-container>
    </v-content>
  </v-layout>
</template>

<script>
export default {
  data() {
    return {
      card_text:
        "Lorem ipsum dolor sit amet, brute iriure accusata ne mea. Eos suavitate referrentur ad, te duo agam libris qualisque, utroque quaestio accommodare no qui. Et percipit laboramus usu, no invidunt verterem.",
      logoSize: "300px",
      url: "/"
    };
  }
};
</script>