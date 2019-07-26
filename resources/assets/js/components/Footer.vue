<template>
  <v-footer light height="auto">
    <v-flex xs12>
      <v-card flat tile class="light-blue darken-4 white--text text-center">
        <v-card-text class="white--text">Follow Sosial Media lainnya juga ya!</v-card-text>
        <v-divider></v-divider>

        <v-card-text>
          <v-btn v-for="icon in icons" :key="icon" class="white--text" icon>
            <v-icon size="24px">{{ icon }}</v-icon>
          </v-btn>
        </v-card-text>
      </v-card>
    </v-flex>
  </v-footer>
</template>

<script>
export default {
  data: () => ({
    icons: [
      "fab fa-facebook",
      "fab fa-twitter",
      "fab fa-instagram",
      "fab fa-line"
    ]
  })
};
</script>