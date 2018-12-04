(() => {
  // init the vue stuff
  var vid = document.querySelector("#reel");
  var bgVid = document.querySelector("#bgVid");
  const vm = new Vue({
    el: "#home",

    data: {
      welcomemessage: "Web Developer, Designer & Entrepreneur",
      show: false
    },
    created: function() {
      this.showVideo();
    },
    methods: {
      showVideo() {
        // create source video element according to screen size
        if (window.matchMedia("(max-width: 700px)").matches) {
          this.videoSource(vid, "videos/reel_2018_mobile.mp4", "video/mp4");
          this.videoSource(bgVid, "videos/reel_2018_mobile.mp4", "video/mp4");
        } else if (window.matchMedia("(max-width: 999px)").matches) {
          this.videoSource(vid, "videos/reel_2018_med.mp4", "video/mp4");
          this.videoSource(bgVid, "videos/reel_2018_med.mp4", "video/mp4");
        } else if (window.matchMedia("(min-width: 1000px)").matches) {
          this.videoSource(vid, "videos/reel_2018_big.mp4", "video/mp4");
          this.videoSource(bgVid, "videos/reel_2018_big.mp4", "video/mp4");
        }
      },
      videoSource(element, src, type) {
        var source = document.createElement("source");

        source.src = src;
        source.type = type;

        element.appendChild(source);
      }
    }
  });
})();
