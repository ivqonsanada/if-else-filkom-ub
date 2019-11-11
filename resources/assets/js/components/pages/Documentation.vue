
<template>
  <v-content>
    <vue-headful title="Documentation | IF ELSE FILKOM UB" />
    <v-container
      fluid
      fill-height
    >
      <v-layout column>
        <!-- <v-flex xs12 sm8 md4 mb-4>
          <v-hover>
            <v-card slot-scope="{ hover }" class="mx-auto" color="grey lighten-4" max-width="600">
              <v-img
                :aspect-ratio="16/9"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiJMt-ZUgDrJCf5EcoN77lixkBwDeGVDyFnLTwE1Gn-lALL6zh"
              >
                <v-expand-transition>
                  <div
                    v-if="hover"
                    class="d-flex transition-fast-in-fast-out blue darken-2 v-card--reveal display-3 white--text"
                    style="height: 100%;"
                  >Rangkaian 3</div>
                </v-expand-transition>
              </v-img>
            </v-card>
          </v-hover>
        </v-flex>

        <v-flex xs12 sm8 md4 mb-4>
          <v-hover>
            <v-card slot-scope="{ hover }" class="mx-auto" color="grey lighten-4" max-width="600">
              <v-img
                :aspect-ratio="16/9"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiJMt-ZUgDrJCf5EcoN77lixkBwDeGVDyFnLTwE1Gn-lALL6zh"
              >
                <v-expand-transition>
                  <div
                    v-if="hover"
                    class="d-flex transition-fast-in-fast-out blue darken-2 v-card--reveal display-3 white--text"
                    style="height: 100%;"
                  >Rangkaian 2</div>
                </v-expand-transition>
              </v-img>
            </v-card>
          </v-hover>
        </v-flex>

        <v-flex xs12 sm8 md4>
          <v-hover>
            <v-card slot-scope="{ hover }" class="mx-auto" color="grey lighten-4" max-width="600">
              <v-img
                :aspect-ratio="16/9"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiJMt-ZUgDrJCf5EcoN77lixkBwDeGVDyFnLTwE1Gn-lALL6zh"
              >
                <v-expand-transition>
                  <div
                    v-if="hover"
                    class="d-flex transition-fast-in-fast-out blue darken-2 v-card--reveal display-3 white--text"
                    style="height: 100%;"
                  >Rangkaian 1</div>
                </v-expand-transition>
              </v-img>
            </v-card>
          </v-hover>
        </v-flex>-->

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