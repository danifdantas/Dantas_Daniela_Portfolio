let gulp = require("gulp");
let browserSync = require("browser-sync").create();

// server task
gulp.task("serve", function() {
  browserSync.init({
    server: {
      baseDir: "./",
      index: "dist/index.html"
    }
  });
});
