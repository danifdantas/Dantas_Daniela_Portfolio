(() => {
  // init the vue stuff
  const vm = new Vue({
    el: "#work",

    data: {
      //welcomemessage: "Welcome to Roku Flashback",

      projectdata: [],
      singledata: [],
      projecttitle: "",
      projectthumb: "",
      projectbigimg: "",
      projectsmallimg: "",
      projectrole: "",
      projectdesc: "",
      projectchallenge: "",
      projectsolution: "",
      videosource: "",
      show: false,
      showDetails: false,
      hideDetails: true
    },

    created: function() {
      // get all projects on page load
      this.fetchProjectData(null);
      this.imgSize();
    },

    methods: {
      // imgSize() {
      //   // create source video element according to screen size
      //   if (window.matchMedia("(max-width: 700px)").matches) {
      //     this.videoSource(vid, "videos/reel_2018_mobile.mp4", "video/mp4");
      //     this.videoSource(bgVid, "videos/reel_2018_mobile.mp4", "video/mp4");
      //   } else if (window.matchMedia("(max-width: 999px)").matches) {
      //     this.videoSource(vid, "videos/reel_2018_med.mp4", "video/mp4");
      //     this.videoSource(bgVid, "videos/reel_2018_med.mp4", "video/mp4");
      //   } else if (window.matchMedia("(min-width: 1000px)").matches) {
      //     this.videoSource(vid, "videos/reel_2018_big.mp4", "video/mp4");
      //     this.videoSource(bgVid, "videos/reel_2018_big.mp4", "video/mp4");
      //   }
      // },
      fetchSingleProject(e) {
        //debugger;
        e.preventDefault();
        this.fetchProjectData(e.currentTarget.dataset.project);
        //console.log(e);
      },
      loadProject(data) {
        //debugger;

        this.projecttitle = data.project_title;
        this.projectdesc = data.project_desc;
        this.projectchallenge = data.project_challenge;
        this.projectsolution = data.project_solution;
        this.projectbigimg = data.project_big_img_path;
        this.projectsmallimg = data.project_small_img_path;
        this.projectrole = data.role;
        this.videosource = data.project_vid;
        if (this.videosource === "") {
          this.show = false;
        } else {
          this.show = true;
        }
        this.showDetails = true;
        this.hideDetails = false;
        //console.log(singledata);
      },

      fetchProjectData(project) {
        // this is a termary statement (shorthand for if /else) left of the : is true, right is false
        let url = project
          ? `./includes/index.php?project=${project}`
          : "./includes/index.php";

        fetch(url)
          // res.json - encodes json and brings back as an object
          .then(res => res.json())
          .then(data => {
            console.log(data);

            if (project) {
              //store data in a single result above
              this.singledata = data;
              this.loadProject(data[0]);
            } else {
              this.projectdata = data;
            }
          })
          .catch(function(error) {
            console.log(error);
          });
      }
    }
  });
})();
