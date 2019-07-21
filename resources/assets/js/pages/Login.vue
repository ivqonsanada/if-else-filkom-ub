<template>
  <v-content>
    <vue-headful title="Login | IF-ELSE"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex xs12 sm8 md4>
          <v-card>
            <v-card-text>
              <form id="login_form" method="POST" action="/login" aria-label="Login">
                <input type="hidden" name="_token" :value="csrf_token" />

                <v-layout row>
                  <v-flex xs12>
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
                  </v-flex>
                </v-layout>
                <v-layout row>
                  <v-flex xs12>
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
                  </v-flex>
                </v-layout>
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
    valid: true
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
          //Manually submit form if not errors
          document.getElementById("login_form").submit();
        }
      });
    }
  }
};
</script>
