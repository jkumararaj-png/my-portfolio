// Loading Screen
window.addEventListener("load", () => {
  const loadingScreen = document.querySelector(".loading-screen");

  // Wait a bit, then slide up
  setTimeout(() => {
    loadingScreen.classList.add("hide");

    // Remove from DOM after animation completes
    setTimeout(() => {
      loadingScreen.remove();
    }, 1000);
  }, 1500);
});

document.addEventListener("DOMContentLoaded", () => {
  // Menu Toggle
  const menuToggle = document.querySelector(".menu-toggle");
  const menuDropdown = document.querySelector(".menu-dropdown");

  menuToggle.addEventListener("click", (e) => {
    e.preventDefault();
    menuDropdown.classList.toggle("show");
  });

  // Close menu when clicking a link
  const menuLinks = document.querySelectorAll(".menu-dropdown a");
  menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
      menuDropdown.classList.remove("show");
    });
  });

  // Close menu when clicking outside
  document.addEventListener("click", (e) => {
    if (!menuToggle.contains(e.target) && !menuDropdown.contains(e.target)) {
      menuDropdown.classList.remove("show");
    }
  });

  // Active Tab Underline

  // Get the elements
  const bottomLinks = document.querySelectorAll(".nav-bottom li a");
  const underline = document.querySelector(".nav-underline");
  let isNavigating = false;

  // Move the underline
  function moveUnderline(link) {
    const underlineWidth = 25;

    // Get the size of the tab button
    const linkRect = link.getBoundingClientRect();
    const parentRect = link.parentElement.parentElement.getBoundingClientRect();

    // Position of the underline
    const left =
      linkRect.left - parentRect.left + linkRect.width / 2 - underlineWidth / 2;

    // Giving those properties to the actual underline
    underline.style.width = underlineWidth + "px";
    underline.style.left = left + "px";
  }

  // ACTIVE TAB

  function updateActiveNav() {
    // Get all sections
    const sections = document.querySelectorAll("[data-scroll-section]");

    // Get the size and ID for each section
    sections.forEach((section) => {
      const rect = section.getBoundingClientRect();
      const sectionId = "#" + section.id;

      // Check if the section is in the middle of viewport
      if (
        rect.top <= window.innerHeight / 2 &&
        rect.bottom >= window.innerHeight / 2
      ) {
        // Find the section that corresponds to the ID found
        const correspondingLink = document.querySelector(
          `.nav-bottom li a[href="${sectionId}"]`
        );

        // If the corresponded tab is found and is not already highlighted,
        if (
          correspondingLink &&
          !correspondingLink.classList.contains("active")
        ) {
          // then remove the active class from all the other tabs
          // and only add it to this one
          bottomLinks.forEach((l) => l.classList.remove("active"));
          correspondingLink.classList.add("active");
          // Move the underline there too
          moveUnderline(correspondingLink);
        }
      }
    });
  }

  // Start Locomotive Scroll
  const scroll = new LocomotiveScroll({
    el: document.querySelector("[data-scroll-container]"),
    smooth: true,
    // Scrolling speed
    multiplier: 0.7,

    // Use normal scrolling on mobile devices for accessibility
    smartphone: {
      smooth: false,
    },
    tablet: {
      smooth: false,
    },
  });

  // Check active section on load
  setTimeout(() => {
    updateActiveNav();
  }, 100);

  // Update active nav on scroll
  scroll.on("scroll", (args) => {
    if (!isNavigating) {
      updateActiveNav();
    }
  });

  // Click events for navigation in the bottom navbar
  const allNavLinks = document.querySelectorAll(".nav-top a, .nav-bottom li a");

  allNavLinks.forEach((link) => {
    // For each tab in the navbar, when some clicks it,
    link.addEventListener("click", (e) => {
      const href = link.getAttribute("href");

      if (href && href.startsWith("#")) {
        // Don't do the normal browser behaviour of jumping to the section
        e.preventDefault();
        isNavigating = true;

        const correspondingBottomLink = document.querySelector(
          `.nav-bottom li a[href="${href}"]`
        );

        if (correspondingBottomLink) {
          // -- Same with the scrolling behaviour, but this time when clicked
          // Remove the active class from all the other tabs
          // and only add it to this one
          bottomLinks.forEach((l) => l.classList.remove("active"));
          correspondingBottomLink.classList.add("active");
          // Move the underline there too
          moveUnderline(correspondingBottomLink);
        }

        // Find which section the button that was clicked on is supposed to go to
        const target = document.querySelector(href);

        // Scroll to it
        if (target) {
          scroll.scrollTo(target, {
            duration: 1000,
            callback: () => {
              setTimeout(() => {
                isNavigating = false;
              }, 100);
            },
          });
        }
      }
    });
  });
});
