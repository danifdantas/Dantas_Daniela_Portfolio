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

      showDetails: false
    },

    created: function() {
      // get all projects on page load

      this.fetchProjectData(null);
    },

    methods: {
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
        this.projectbigimg = data.project_big_img_path;
        this.projectrole = data.role;
        this.showDetails = true;

        //console.log(singledata);
        setTimeout(function() {
          window.scrollTo(0, 1200);
        }, 500);
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
