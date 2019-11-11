<template>
  <section class="VideoBg">
    <video
      ref="video"
      autoplay
      loop
      muted
    >
      <source
        v-for="source in sources"
        :key="source"
        :src="source"
        :type="getMediaType(source)"
      >
    </video>
    <div class="VideoBg__content">
      <slot />
    </div>

    <v-btn
      class="mx-2 sound"
      dark
      fab
      @click="changeVolume"
    >
      <v-icon>{{ volume }}</v-icon>
    </v-btn>
  </section>
</template>


<script>
export default {
  props: {
    sources: {
      type: Array,
      required: true
    },
    img: {
      type: String
    }
  },

  data() {
    return {
      videoRatio: null,
      volume: "volume_off"
    };
  },
  computed: {
    isSoundON() {
      return this.$store.getters.isSoundON;
    }
  },

  mounted() {
    this.setImageUrl();
    this.setContainerHeight();

    if (this.videoCanPlay()) {
      this.$refs.video.oncanplay = () => {
        if (!this.$refs.video) return;

        this.videoRatio =
          this.$refs.video.videoWidth / this.$refs.video.videoHeight;
        this.setVideoSize();
        this.$refs.video.style.visibility = "visible";
      };
    }

    window.addEventListener("resize", this.resize);
  },

  beforeDestroy() {
    window.removeEventListener("resize", this.resize);
  },

  methods: {
    resize() {
      this.setContainerHeight();

      if (this.videoCanPlay()) {
        this.setVideoSize();
      }
    },

    videoCanPlay() {
      return !!this.$refs.video.canPlayType;
    },

    setImageUrl() {
      if (this.img) {
        this.$el.style.backgroundImage = `url(${this.img})`;
      }
    },

    setContainerHeight() {
      this.$el.style.height = `${window.innerHeight - 32}px`;
    },

    setVideoSize() {
      var width,
        height,
        containerRatio = this.$el.offsetWidth / this.$el.offsetHeight;

      if (containerRatio > this.videoRatio) {
        width = this.$el.offsetWidth;
      } else {
        height = this.$el.offsetHeight;
      }

      this.$refs.video.style.width = width ? `${width + 300}px` : "auto";
      this.$refs.video.style.height = height ? `${height}px` : "auto";
    },

    getMediaType(src) {
      return "video/" + src.split(".").pop();
    },

    changeVolume() {
      let video = document.getElementsByTagName("video")[0];
      let layer = document.getElementsByClassName("VideoBg__content")[0];

      if (this.volume == "volume_off") {
        this.volume = "volume_up";
        video.muted = false;
        layer.style.background = "rgba(0,0,0,0)";
      } else {
        this.volume = "volume_off";
        video.muted = true;
        layer.style.background = "rgba(0,0,0,0.6)";
      }

      this.$store.dispatch("sound");
    }
  }
};
</script>


<style>
.VideoBg {
  position: relative;
  background-size: cover;
  background-position: center;
  overflow: hidden;
}

.VideoBg video {
  position: absolute;
  top: 50%;
  left: 50%;
  visibility: hidden;
  transform: translate(-50%, -50%);
}

.VideoBg__content {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.sound {
  float: right;
  margin: 10px;
  background-color: rgba(0, 0, 0, 0.4) !important;
}
</style>
