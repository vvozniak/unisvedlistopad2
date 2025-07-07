// Navigation toggle
window.addEventListener("load", function () {
  // Support both landing and non-landing menus
  let main_navigation =
    document.querySelector("#primary-menu-landing") ||
    document.querySelector("#primary-menu");
  let menu_toggle = document.querySelector("#primary-menu-toggle");
  let hamburger_icon = document.querySelector("#hamburger-icon");
  let close_icon = document.querySelector("#close-icon");
  let menu_close_topright = document.querySelector("#menu-close-topright");

  // Set initial state explicitly to avoid CSS conflicts
  if (hamburger_icon) hamburger_icon.style.display = "inline-block";
  if (close_icon) close_icon.style.display = "none";
  if (menu_close_topright) menu_close_topright.classList.add("hidden");
  // Add this: Ensure menu is hidden initially on mobile
  if (main_navigation && window.innerWidth > 1024) {
    main_navigation.classList.remove("hidden");
  }

  function openMenu() {
    if (main_navigation) main_navigation.classList.remove("hidden");
    if (hamburger_icon) hamburger_icon.style.display = "none";
    if (close_icon) close_icon.style.display = "inline-block";
    if (menu_close_topright) {
      menu_close_topright.classList.remove("hidden");
      menu_close_topright.className =
        "fixed top-10 right-10 z-[1000] lg:hidden";
    }
    document.body.classList.add("no-scroll");
    // Always show logo when menu is open (for landing)
    const logo = document.getElementsByClassName("custom-logo-landing")[0];
    if (logo) logo.style.display = "";
  }

  function closeMenu() {
    if (main_navigation) main_navigation.classList.add("hidden");
    if (hamburger_icon) hamburger_icon.style.display = "inline-block";
    if (close_icon) close_icon.style.display = "none";
    if (menu_close_topright) {
      menu_close_topright.classList.add("hidden");
      menu_close_topright.className =
        "fixed top-4 right-4 z-[1000] lg:hidden hidden";
    }
    document.body.classList.remove("no-scroll");
    // Hide logo if menu is closed and scroll is at top (for landing)
    // const logo = document.getElementsByClassName("custom-logo-landing")[0];
    // const menu = document.getElementById("primary-menu-landing");
    // if (logo && menu && menu.classList.contains("hidden"))
    //   logo.style.display = "none";
  }

  if (menu_toggle) {
    menu_toggle.addEventListener("click", function (e) {
      e.preventDefault();
      if (!main_navigation) return;
      const isMenuHidden = main_navigation.classList.contains("hidden");
      if (isMenuHidden) {
        openMenu();
      } else {
        closeMenu();
      }
    });
  }

  if (menu_close_topright) {
    menu_close_topright.addEventListener("click", function (e) {
      e.preventDefault();
      closeMenu();
    });
  }

  if (main_navigation) {
    main_navigation.addEventListener("click", function (e) {
      if (e.target === main_navigation && menu_toggle) {
        menu_toggle.click();
      }
    });
  }

  // Add resize handler at the end of the load event listener
  window.addEventListener("resize", function () {
    if (!main_navigation) return;

    const currentWidth = window.innerWidth;

    if (currentWidth > 1024) {
      // Desktop: remove hidden class
      main_navigation.classList.remove("hidden");
    } else {
      // Mobile: add hidden class if not already present
      if (!main_navigation.classList.contains("hidden")) {
        main_navigation.classList.add("hidden");
      }
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
  const menu = document.getElementById("primary-menu-landing"); // Adjust selector if needed
  const video = document.getElementById("background-video");
  const logo = document.getElementsByClassName("custom-logo-landing")[0]; // Assuming there's only one logo element

  if (menu) {
    let lastScrollY = window.scrollY;
    let ticking = false;

    function updateMenuVisibility() {
      const scrollY = window.scrollY;
      const isDesktop = window.innerWidth > 1024;
      const trigger = 100; // Adjust this value based on when you want to hide/show the menu

      if (scrollY > trigger) {
        // Scrolling down
        if (video) video.style.display = "none";
        if (isDesktop && menu) {
          console.log("Attempting to show menu");
          menu.classList.remove("hidden");
          menu.classList.add("fade-in-menu");
          // Force visibility with inline style as backup
          menu.style.display = "block";
          console.log("After change:", menu.className);
        }
      } else {
        // Show video
        if (video) video.style.display = "";
        // Desktop: hide menu
        if (isDesktop && menu) {
          // menu.classList.add("hidden");
          // menu.classList.remove("fade-in-menu");
        }
      }

      lastScrollY = scrollY;
      ticking = false;
    }

    window.addEventListener("scroll", function () {
      lastScrollY = window.scrollY;
      if (!ticking) {
        window.requestAnimationFrame(updateMenuVisibility);
        ticking = true;
      }
    });
  }
});


