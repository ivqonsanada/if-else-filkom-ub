
<template>
  <v-content>
    <vue-headful title="Postingan | Blog IF-ELSE"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex align-center justify-center layout text-xs-center column>
          <v-card>
            <v-card-title primary-title>
              <div>
                <h3 class="display-3 mb-0">Cooming Soon</h3>
              </div>
            </v-card-title>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>
  </v-content>
</template>
       <script>
export default {
  props: ["content", "tgl", "title"],
  data() {
    return {};
  }
};
</script>