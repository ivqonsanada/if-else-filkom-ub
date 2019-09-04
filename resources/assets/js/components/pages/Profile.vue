<template>
  <v-content>
    <vue-headful title="Profile | IF ELSE"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center>
        <v-flex xs12 sm8 md4>
          <v-tabs background-color="light-blue darken-4" dark>
            <v-tab href="#profile">Profile</v-tab>
            <v-tab href="#changepassword">Change Password</v-tab>
            <v-tab-item value="profile">
              <v-card>
                <!-- <v-img height="100%" src="https://cdn.vuetifyjs.com/images/cards/server-room.jpg"> -->
                <!-- <v-row class="fill-height"> -->
                <!-- <v-col cols="12"> -->
                <!-- <div class="pos">
                  <div>
                    <v-avatar class="profile" color="white" size="164">
                      <v-img :src="`http://ifelse.filkom.ub.ac.id/public/img/avatar.png`"></v-img>
                    </v-avatar>
                </div>-->
                <!-- </v-col> -->
                <!-- <v-col> -->
                <!-- <div>
                    <v-list-item color="rgba(0, 0, 0, .4)">
                      <v-list-item-content>
                        <v-list-item-title class="title">{{ name }}</v-list-item-title>
                        <v-list-item-subtitle></v-list-item-subtitle>
                      </v-list-item-content>
                    </v-list-item>
                  </div>
                </div>-->
                <!-- </v-col> -->
                <!-- </v-row> -->
                <!-- </v-img> -->
                <v-card-text>Coming Soon</v-card-text>
              </v-card>
            </v-tab-item>
            <v-tab-item value="changepassword">
              <v-card>
                <v-card-text>
                  <form id="login_form" aria-label="Login">
                    <input type="hidden" name="_token" :value="csrf_token" />
                    <v-text-field
                      prepend-icon="lock"
                      v-model="oldPassword"
                      v-validate="'required'"
                      data-vv-name="oldPassword"
                      data-vv-as="Old Password"
                      :append-icon="show1 ? 'visibility' : 'visibility_off'"
                      :type="show1 ? 'text' : 'password'"
                      @click:append="show1 = !show1"
                      :error-messages="errors.collect('oldPassword')"
                      label="Old Password"
                      name="oldPassword"
                    ></v-text-field>

                    <v-text-field
                      prepend-icon="lock"
                      v-model="newPassword"
                      v-validate="'required'"
                      data-vv-name="newPassword"
                      data-vv-as="New Password"
                      :append-icon="show2 ? 'visibility' : 'visibility_off'"
                      :type="show2 ? 'text' : 'password'"
                      @click:append="show2 = !show2"
                      :error-messages="errors.collect('newPassword')"
                      label="New Password"
                      name="newPassword"
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
                  >Change Password</v-btn>
                </v-card-actions>
              </v-card>
            </v-tab-item>
          </v-tabs>
        </v-flex>
      </v-layout>
      <v-snackbar v-model="snackbar" :timeout="timeout" :color="snackcolor" multi-line top>
        {{ text }}
        <v-btn @click="snackbar = false" text>Close</v-btn>
      </v-snackbar>
    </v-container>

    <!-- <v-container fluid fill-height>
      <v-layout column>
        <v-flex align-center justify-center layout text-center column>
          <v-card>
            <v-card-title primary-title>
              <div>
                <h3 class="display-3 mb-0">Coming Soon</h3>
              </div>
            </v-card-title>
          </v-card>
        </v-flex>
      </v-layout>
    </v-container>-->
  </v-content>
</template>
    
<script>
export default {
  inject: ["$validator"],
  data: () => ({
    name: "asdfs",
    oldPassword: "",
    newPassword: "",
    show1: false,
    show2: false,
    show3: false,
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
          let config = {
            headers: {
              Authorization: "Bearer " + localStorage.getItem("token")
            }
          };

          axios
            .post("api/changepassword", data, config)
            .then(response => {
              this.snackbar = true;
              this.snackcolor = "success";
              this.text = response.data.success;
            })
            .catch(e => {
              this.text = e.response.data.error;
              this.snackbar = true;
              this.snackcolor = "error";
            });
        }
      });
    }
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
.pos {
  display: flex;
  flex-direction: column;
}
</style>