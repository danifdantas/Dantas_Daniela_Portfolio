// Variables

const menuBtn = document.querySelector(".menu-btn");
const menu = document.querySelector(".menu");
const menuNav = document.querySelector(".menu-nav");
const menuBranding = document.querySelector(".menu-branding");
const navItems = document.querySelectorAll(".nav-item");
var vid = document.querySelector("#reel");
var bgVid = document.querySelector("#bgVid");
//

// Set Initial State Of Menu

let showMenu = false;
// Functions
// Helper Functions: create <source> video element to load dynamically different video size
// function videoSource(element, src, type) {
//   var source = document.createElement("source");

//   source.src = src;
//   source.type = type;

//   element.appendChild(source);
// }

function toggleMenu() {
  if (!showMenu) {
    menuBtn.classList.add("close");
    menu.classList.add("show");
    menuNav.classList.add("show");
    menuBranding.classList.add("show");
    navItems.forEach(item => item.classList.add("show"));

    //Set Menu State
    showMenu = true;
  } else {
    menuBtn.classList.remove("close");
    menu.classList.remove("show");
    menuNav.classList.remove("show");
    menuBranding.classList.remove("show");
    navItems.forEach(item => item.classList.remove("show"));

    //Set Menu State
    showMenu = false;
  }
}
// Event Listeners
// window.addEventListener("load", () => {
//   // create source video element according to screen size
//   if (window.matchMedia("(max-width: 700px)").matches) {
//     videoSource(vid, "videos/reel_2018_mobile.mp4", "video/mp4");
//     videoSource(bgVid, "videos/reel_2018_mobile.mp4", "video/mp4");
//   } else if (window.matchMedia("(max-width: 999px)").matches) {
//     videoSource(vid, "videos/reel_2018_med.mp4", "video/mp4");
//     videoSource(bgVid, "videos/reel_2018_med.mp4", "video/mp4");
//   } else if (window.matchMedia("(min-width: 1000px)").matches) {
//     videoSource(vid, "videos/reel_2018_big.mp4", "video/mp4");
//     videoSource(bgVid, "videos/reel_2018_big.mp4", "video/mp4");
//   }
// });
menuBtn.addEventListener("click", toggleMenu);
