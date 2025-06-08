<link
      rel="shortcut icon"
      href="assets/images/logo/logo-transparent.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="/css/tailwind.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- ==== WOW JS ==== -->
    <script src="assets/js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>

     <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
  const currLink = sections[i];
  const val = currLink.getAttribute("href");
  const refElement = document.querySelector(val);
  const scrollTopMinus = scrollPos + 73;
  if (
    refElement && // CEK refElement ADA
    refElement.offsetTop <= scrollTopMinus &&
    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
  ) {
    document
      .querySelector(".ud-menu-scroll")
      .classList.remove("active");
    currLink.classList.add("active");
  } else if (refElement) {
    currLink.classList.remove("active");
  }
}
      }

      window.document.addEventListener("scroll", onScroll);

      // Testimonial
      const testimonialSwiper = new Swiper(".testimonial-carousel", {
        slidesPerView: 1,
        spaceBetween: 30,

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
        },
      });
    </script>