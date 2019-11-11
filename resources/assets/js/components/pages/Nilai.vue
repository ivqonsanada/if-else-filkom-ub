
<template>
  <!-- <v-content>
    <vue-headful title="FAQ | IF ELSE"></vue-headful>
    <v-container fluid fill-height>
      <v-layout justify-center align-center>
        <v-flex xs12 sm8 md6>
          <v-expansion-panels multiple v-model="panel">
            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[0].ask }}</div>
                <div></div>
                <div></div>
                <div>100</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <li class="flex--secondary">
                  <div>Kehadiran</div>
                  <div></div>
                  <div></div>
                  <div>100</div>
                  <div class="shadow"></div>
                </li>
                <li>b</li>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[1].ask }}</div>
                <div></div>
                <div></div>
                <div>100/100</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <li class="flex--secondary">
                  <div>Kehadiran</div>
                  <div></div>
                  <div></div>
                  <div>100/100</div>
                  <div class="shadow"></div>
                </li>
                <li>b</li>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[2].ask }}</div>
                <div></div>
                <div></div>
                <div>100/100</div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <li class="flex--secondary">
                  <div>Kehadiran</div>
                  <div></div>
                  <div></div>
                  <div>100/100</div>
                  <div class="shadow"></div>
                </li>
                <li>b</li>
              </v-expansion-panel-content>
            </v-expansion-panel>

            <v-expansion-panel>
              <v-expansion-panel-header class="flex--primary">
                <div>{{ faqs[3].ask }}</div>
                <div></div>
                <div></div>
              </v-expansion-panel-header>
              <v-expansion-panel-content class="mt-3">
                <li class="flex--secondary">
                  <div>Kehadiran</div>
                  <div></div>
                  <div></div>
                  <div>100/100</div>
                  <div class="shadow"></div>
                </li>
                <li>b</li>
              </v-expansion-panel-content>
            </v-expansion-panel>
          </v-expansion-panels>
        </v-flex>
      </v-layout>
    </v-container>
  </v-content>-->

  <v-content>
    <vue-headful title="Nilai | IF ELSE" />
    <v-container
      fluid
      fill-height
    >
      <v-layout column>
        <v-flex
          align-center
          justify-center
          layout
          text-center
          column
        >
          <v-card>
            <v-card-title primary-title>
              <div>
                <h3 class="display-3 mb-0">
                  Coming Soon
                </h3>
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
  data() {
    return {};
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
        this.$router.push("/login");
      });
  }
};
</script>

<style scoped>
.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: 0.5;
  position: absolute;
  width: 100%;
}
</style>