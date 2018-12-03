(() => {
  // init the vue stuff
  const vm = new Vue({
    el: "#home",

    data: {
      welcomemessage: "Web Developer, Designer & Entrepreneur",
      show: false
    },
    methods: {
      showVideo() {
        //debugger;
        var vid = document.querySelector("video");
        var vidOverlay = document.querySelector(".vid-overlay");
        var vidWrap = document.querySelector(".fullscreen-vid-wrap");
        vidOverlay.style.display = "none";
        vidWrap.style.zindex = "3";
        vid.muted = false;
        vid.controls = true;
        // console.log(vidOverlay);
      }
    }
  });
})();
