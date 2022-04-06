const home = document.querySelector(".home");
const button = document.querySelector("#nav-mobile-apropos-button");
const content = document.querySelector("#header-mobile-apropos-content");
const mediaQuery = "(max-width: 768px)";
const mediaQueryList = window.matchMedia(mediaQuery);

if (home && button) {
  openAProposMobile();
}

function openAProposMobile() {
  button.addEventListener("click", () => {
    content.classList.toggle("open");
  });

  mediaQueryList.addEventListener("change", (event) => {
    // UNDER 768px
    if (event.matches) {
      // OVER 768PX
    } else {
      checkClasses();
    }
  });

  function checkClasses() {
    if (content.classList.contains("open")) {
      content.classList.remove("open");
    }
  }
}
