// Navigation toggle
window.addEventListener("load", function () {
  let main_navigation = document.querySelector("#primary-menu");
  let menu_toggle = document.querySelector("#primary-menu-toggle");
  let hamburger_icon = document.querySelector("#hamburger-icon");
  let close_icon = document.querySelector("#close-icon");

  // Set initial state explicitly to avoid CSS conflicts
  hamburger_icon.style.display = "inline-block";
  close_icon.style.display = "none";

  menu_toggle.addEventListener("click", function (e) {
    e.preventDefault();
    const isMenuHidden = main_navigation.classList.contains("hidden");

    if (isMenuHidden) {
      // open menu
      main_navigation.classList.remove("hidden");
      hamburger_icon.style.display = "none";
      close_icon.style.display = "inline-block";
      document.body.classList.add("no-scroll");
    } else {
      // close menu
      main_navigation.classList.add("hidden");
      hamburger_icon.style.display = "inline-block";
      close_icon.style.display = "none";
      document.body.classList.remove("no-scroll");
    }
  });

  main_navigation.addEventListener("click", function (e) {
    if (e.target === main_navigation) {
      menu_toggle.click();
    }
  });
});
// Background video handling
document.addEventListener("DOMContentLoaded", () => {
  const video = document.getElementById("background-video");
  const placeholder = document.getElementById("placeholder");

  if (video && placeholder) {
    // Check if both elements exist
    // Check if the video should be displayed based on a PHP variable or a data attribute
    // This part assumes you have a way to pass the bool_video value to JavaScript
    // For example, by setting a data attribute on the video element in your PHP:
    // <video id="background-video" data-should-play="<?php echo $bool_video ? 'true' : 'false'; ?>" ...>

    // For demonstration, let's assume bool_video is true or the video tag is present.
    // If you have a specific condition from PHP, integrate it here.
    // const shouldPlayVideo = video.dataset.shouldPlay === 'true';

    // If video is meant to be played (e.g., bool_video is true)        vid
    video.addEventListener("canplaythrough", () => {
      // Use canplaythrough for better buffering
      placeholder.style.display = "none";
      video.style.display = "block";
      video.play().catch((error) => {
        console.error("Video play failed:", error);
        // If video fails to play, show placeholder
        placeholder.style.display = "block";
      });
    });

    video.addEventListener("error", (e) => {
      console.error("Error loading video:", e);
      // Optionally, display the placeholder if video fails to load
      placeholder.style.display = "block";
      video.style.display = "none";
    });

    // Fallback if canplaythrough doesn't fire (e.g. for very short videos or certain browsers)
    if (video.readyState >= 3) {
      // HAVE_FUTURE_DATA or HAVE_ENOUGH_DATA
      placeholder.style.display = "none";
      video.style.display = "block";
      video
        .play()
        .catch((error) =>
          console.error("Video play failed on readyState check:", error)
        );
    }
  } else {
    if (!video) console.log("Video element not found");
    if (!placeholder) console.log("Placeholder element not found");
  }
});

// Maciej 19.06 - pojawianie się paska i znikanie video na landingu
document.addEventListener("DOMContentLoaded", function () {
  const menu = document.querySelector(
    "header .menu, header nav, header .hidden"
  ); // Adjust selector if needed
  const video = document.getElementById("background-video");
  const logo = document.getElementsByClassName("custom-logo-landing")[0]; // Assuming there's only one logo element

  // Find the menu element with .hidden class
  let menuEl = null;
  if (menu && menu.classList.contains("hidden")) menuEl = menu;
  else menuEl = document.querySelector("header .hidden");

  function handleScroll() {
    const scrollY = window.scrollY || window.pageYOffset;
    const trigger = window.innerHeight * 1.9;
    // const trigger = (window.innerHeight);

    if (scrollY > trigger) {
      // Show menu
      if (menuEl) {
        menuEl.classList.remove("hidden");
        menuEl.classList.add("fade-in-menu");
      }
      // Hide video
      if (video) video.style.display = "none";
      // Show logo
      if (logo) logo.style.display = "";
    } else {
      // Hide menu
      if (menuEl) {
        menuEl.classList.add("hidden");
        menuEl.classList.remove("fade-in-menu");
      }
      // Show video
      if (video) video.style.display = "";
      // Hide logo
      if (logo) logo.style.display = "none";
    }
  }

  window.addEventListener("scroll", handleScroll);
  handleScroll(); // Initial check
});
