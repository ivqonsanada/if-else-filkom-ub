<template>
  <v-content>
    <vue-headful title="Profile | IF ELSE FILKOM UB" />
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
          md4
        >
          <v-tabs
            background-color="light-blue darken-4"
            dark
          >
            <v-tabs-slider />
            <v-tab href="#profile">
              Profile
            </v-tab>
            <v-tab href="#changepassword">
              Change Password
            </v-tab>
            <v-tab-item value="profile">
              <v-card class="mx-auto pt-4">
                <v-card
                  class="mx-auto"
                  max-width="168"
                >
                  <v-img
                    :src="`http://ifelse.filkom.ub.ac.id/public/storage/avatars/${avatar}`"
                    max-height="225"
                  >
                    <!-- <v-dialog
                      v-model="dialog"
                      max-width="400px"
                    >
                      <template v-slot:activator="{ on }">
                        <v-btn
                          class="button--change-photo"
                          dark
                          v-on="on"
                        >
                          Change Photo
                        </v-btn>
                      </template>
                      <v-card>
                        <v-card-title>
                          <span class="headline">Photo Profile</span>
                        </v-card-title>
                        <v-card-text>
                          <v-container class="align-center">
                            <form
                              id="updateAvatar_form"
                              aria-label="Update Avatar"
                            >
                              <input
                                type="hidden"
                                name="_token"
                                :value="csrf_token"
                              >
                              <div class="form-group d-flex flex-wrap">
                                <v-file-input
                                  id="avatarFile"
                                  name="avatar"
                                  label="Upload photo"
                                />
                                <small
                                  id="fileHelp"
                                  class="form-text text-muted"
                                >Menggunakan foto portrait dan ukuran file tidak lebih dari 1MB</small>
                              </div>
                            </form>
                          </v-container>
                        </v-card-text>

                        <v-card-actions>
                          <div class="flex-grow-1" />
                          <v-btn
                            :disabled="!valid"
                            color="light-blue darken-4"
                            class="white--text"
                            @click="validateUpdateAvatar"
                          >
                            Update Avatar
                          </v-btn>
                          <v-btn
                            color="blue darken-1"
                            text
                            @click="dialog = false"
                          >
                            Close
                          </v-btn>
                        </v-card-actions>
                      </v-card>
                    </v-dialog> -->
                  </v-img>
                </v-card>

                <div>
                  <v-list-item class="canselect text-center">
                    <v-list-item-content>
                      <v-list-item-title class="headline">
                        {{ name }}
                      </v-list-item-title>
                      <v-list-item-subtitle>{{ nim }}</v-list-item-subtitle>
                      <v-list-item-subtitle>{{ kelompok }}</v-list-item-subtitle>
                    </v-list-item-content>
                  </v-list-item>
                </div>
              </v-card>
            </v-tab-item>
            <v-tab-item value="changepassword">
              <v-card>
                <v-card-text>
                  <form
                    id="login_form"
                    aria-label="Login"
                  >
                    <input
                      type="hidden"
                      name="_token"
                      :value="csrf_token"
                    >
                    <v-text-field
                      v-model="oldPassword"
                      v-validate="'required'"
                      prepend-icon="lock"
                      data-vv-name="oldPassword"
                      data-vv-as="Old Password"
                      :append-icon="show1 ? 'visibility' : 'visibility_off'"
                      :type="show1 ? 'text' : 'password'"
                      :error-messages="errors.collect('oldPassword')"
                      label="Old Password"
                      name="oldPassword"
                      @click:append="show1 = !show1"
                    />

                    <v-text-field
                      v-model="newPassword"
                      v-validate="'required'"
                      prepend-icon="lock"
                      data-vv-name="newPassword"
                      data-vv-as="New Password"
                      :append-icon="show2 ? 'visibility' : 'visibility_off'"
                      :type="show2 ? 'text' : 'password'"
                      :error-messages="errors.collect('newPassword')"
                      label="New Password"
                      name="newPassword"
                      @click:append="show2 = !show2"
                    />
                  </form>
                </v-card-text>
                <v-card-actions>
                  <v-spacer />
                  <v-btn
                    :disabled="!valid"
                    color="light-blue darken-4"
                    class="white--text"
                    @click="validateChangePassword"
                  >
                    Change Password
                  </v-btn>
                </v-card-actions>
              </v-card>
            </v-tab-item>
          </v-tabs>
        </v-flex>
        <!-- <v-snackbar
          v-model="snackbar"
          :timeout="timeout"
          :color="snackcolor"
          multi-line
          top
        >
          {{ text }}
          <v-btn
            text
            @click="snackbar = false"
          >
            Close
          </v-btn>
        </v-snackbar> -->
      </v-layout>
    </v-container>
  </v-content>
</template>
    
<script>
export default {
  inject: ["$validator"],
  data: () => ({
    name: "",
    nim: "",
    kelompok: "",
    avatar: "default-user.jpg",
    oldPassword: "",
    newPassword: "",
    show1: false,
    show2: false,
    show3: false,
    valid: true,
    snackbar: true,
    text: "Dimohon untuk merubah foto profile dengan foto portrait kalian.",
    timeout: 6000,
    snackcolor: "#0288D1",
    dialog: false,
    uploadPercentages: 0
  }),
  computed: {
    csrf_token() {
      let token = document.head.querySelector('meta[name="csrf-token"]');
      return token.content;
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
      .post(`${this.$appUrl}/api/profile`, bodyParameters, config)
      .then(response => {
        this.name = response.data.success.nama;
        this.nim = response.data.success.nim;
        this.kelompok = response.data.success.kelompok;
        if (response.data.success.avatar != "kosong") {
          this.avatar = response.data.success.avatar;
        }
      })
      .catch(e => {
        this.$store.dispatch("logout");
        this.$router.push("/login");
      });
  },
  methods: {
    validateChangePassword() {
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
              setTimeout(() => this.$router.push({ path: "/" }), 1000);
            })
            .catch(e => {
              this.text = e.response.data.error;
              this.snackbar = true;
              this.snackcolor = "error";
            });
        }
      });
    },
    validateUpdateAvatar() {
      let form = document.getElementById("updateAvatar_form");
      let data = new FormData(form);
      let config = {
        headers: {
          Authorization: "Bearer " + localStorage.getItem("token")
        }
      };
      axios
        .post("api/profileavatar", data, config)
        .then(response => {
          this.snackbar = true;
          this.snackcolor = "success";
          if (response.data.success.avatar != "kosong") {
            this.avatar = response.data.success.avatar;
          }
          this.text = response.data.success.msg;
          setTimeout(() => {
            this.dialog = false;
          }, 1000);
        })
        .catch(e => {
          this.text = e.response.data.error.avatar[0];
          this.snackbar = true;
          this.snackcolor = "error";
        });
    }
  }
};
</script>

<style>
.pos {
  display: flex;
  flex-direction: column;
}

.row {
  margin-left: unset;
  margin-right: unset;
}

.not-avatar {
  margin-right: unset !important;
}

.button--change-photo {
  position: absolute;
  left: 50%;
  top: 85%;
  transform: translate(-50%, -50%);
  background-color: rgba(0, 0, 0, 0.35) !important;
}

.canselect {
  user-select: unset;
}

.v-snack__wrapper {
  min-width: unset;
}

</style>