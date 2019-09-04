<template>
  <v-content>
    <vue-headful title="Login | IF ELSE"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex xs12 sm8 md4>
          <v-card>
            <v-card-text>
              <form id="login_form" aria-label="Login">
                <input type="hidden" name="_token" :value="csrf_token" />
                <v-text-field
                  prepend-icon="person"
                  v-model="nim"
                  v-validate="'required|digits:15'"
                  data-vv-name="nim"
                  data-vv-as="NIM"
                  :counter="15"
                  :error-messages="errors.collect('nim')"
                  label="NIM"
                  name="nim"
                ></v-text-field>

                <v-text-field
                  prepend-icon="lock"
                  v-model="password"
                  v-validate="'required'"
                  data-vv-name="password"
                  data-vv-as="Password"
                  :append-icon="show ? 'visibility' : 'visibility_off'"
                  :type="show ? 'text' : 'password'"
                  @click:append="show = !show"
                  :error-messages="errors.collect('password')"
                  label="Password"
                  name="password"
                ></v-text-field>
              </form>
            </v-card-text>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn
                :disabled="!valid"
                color="light-blue darken-4"
                class="white--text"
                @click="validate"
              >Login</v-btn>
            </v-card-actions>
          </v-card>
        </v-flex>
      </v-layout>
      <v-snackbar v-model="snackbar" :timeout="timeout" :color="snackcolor" multi-line top>
        {{ text }}
        <v-btn @click="snackbar = false" text>Close</v-btn>
      </v-snackbar>
    </v-container>
  </v-content>
</template>
    
<script>
export default {
  inject: ["$validator"],
  data: () => ({
    nim: "",
    password: "",
    show: false,
    valid: true,
    snackbar: false,
    text: "Aku rindu.",
    timeout: 6000,
    snackcolor: ""
  }),
  computed: {
    csrf_token() {
      let token = document.head.querySelector('meta[name="csrf-token"]');
      return token.content;
    }
  },
  methods: {
    validate() {
      this.$validator.validateAll().then(result => {
        if (result) {
          let form = document.getElementById("login_form");
          let data = new FormData(form);
          axios
            .post("api/login", data)
            .then(response => {
              this.snackbar = true;
              this.snackcolor = "success";
              this.text = "Login berhasil.";
              window.localStorage.setItem("token", response.data.success.token);
              window.localStorage.setItem("nama", response.data.success.nama);
              setTimeout(() => this.$router.push({ path: "/" }), 1000);
              this.$store.dispatch("login", {});
            })
            .catch(e => {
              this.text = e.response.data.error;
              this.snackbar = true;
              this.snackcolor = "error";
            });
        }
      });
    }
  }
};
</script>
