(function () {
    "use strict";

    // ======= Sticky
    window.onscroll = function () {
        const ud_header = document.querySelector(".ud-header");
        const logo = document.querySelectorAll(".header-logo");
        const backToTop = document.querySelector(".back-to-top");

        if (ud_header) {
            const sticky = ud_header.offsetTop;

            if (window.pageYOffset > sticky) {
                ud_header.classList.add("sticky");
            } else {
                ud_header.classList.remove("sticky");
            }

            if (logo.length) {
                const logoImg = document.querySelector(".header-logo");
                if (logoImg) {
                    logoImg.src = "assets/images/logo/logo-transparent.png";
                }
            }

            if (document.documentElement.classList.contains("dark")) {
                if (logo.length && ud_header.classList.contains("sticky")) {
                    const logoImg = document.querySelector(".header-logo");
                    if (logoImg) {
                        logoImg.src = "assets/images/logo/logo-transparent.png";
                    }
                }
            }
        }

        // show or hide the back-to-top button
        if (backToTop) {
            if (
                document.body.scrollTop > 50 ||
                document.documentElement.scrollTop > 50
            ) {
                backToTop.style.display = "flex";
            } else {
                backToTop.style.display = "none";
            }
        }
    };
    /* ==== Carousel Produk ==== */
    const produkSwiper = new Swiper(".produk-carousel", {
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            1280: { slidesPerView: 4 },
        },
    });

    // ===== responsive navbar
    const navbarToggler = document.querySelector("#navbarToggler");
    const navbarCollapse = document.querySelector("#navbarCollapse");

    if (navbarToggler && navbarCollapse) {
        navbarToggler.addEventListener("click", () => {
            navbarToggler.classList.toggle("navbarTogglerActive");
            navbarCollapse.classList.toggle("hidden");
        });

        document
            .querySelectorAll("#navbarCollapse ul li:not(.submenu-item) a")
            .forEach((e) =>
                e.addEventListener("click", () => {
                    navbarToggler.classList.remove("navbarTogglerActive");
                    navbarCollapse.classList.add("hidden");
                })
            );
    }

    // ===== Sub-menu
    const submenuItems = document.querySelectorAll(".submenu-item");
    submenuItems.forEach((el) => {
        const link = el.querySelector("a");
        const submenu = el.querySelector(".submenu");
        if (link && submenu) {
            link.addEventListener("click", () => {
                submenu.classList.toggle("hidden");
            });
        }
    });

    // ===== Faq accordion
    const faqs = document.querySelectorAll(".single-faq");
    faqs.forEach((el) => {
        const btn = el.querySelector(".faq-btn");
        const icon = el.querySelector(".icon");
        const content = el.querySelector(".faq-content");
        if (btn && icon && content) {
            btn.addEventListener("click", () => {
                icon.classList.toggle("rotate-180");
                content.classList.toggle("hidden");
            });
        }
    });

    // ===== wow js
    if (typeof WOW === "function") {
        new WOW().init();
    }

    // ====== scroll top js
    function scrollTo(element, to = 0, duration = 500) {
        const start = element.scrollTop;
        const change = to - start;
        const increment = 20;
        let currentTime = 0;

        const animateScroll = () => {
            currentTime += increment;

            const val = Math.easeInOutQuad(
                currentTime,
                start,
                change,
                duration
            );
            element.scrollTop = val;

            if (currentTime < duration) {
                setTimeout(animateScroll, increment);
            }
        };

        animateScroll();
    }

    Math.easeInOutQuad = function (t, b, c, d) {
        t /= d / 2;
        if (t < 1) return (c / 2) * t * t + b;
        t--;
        return (-c / 2) * (t * (t - 2) - 1) + b;
    };

    const backToTopBtn = document.querySelector(".back-to-top");
    if (backToTopBtn) {
        backToTopBtn.onclick = () => {
            scrollTo(document.documentElement);
        };
    }

    // ===== Theme Switcher
    const themeSwitcher = document.getElementById("themeSwitcher");
    const userTheme = localStorage.getItem("theme");
    const systemTheme = window.matchMedia(
        "(prefers-color-scheme: dark)"
    ).matches;

    const themeCheck = () => {
        if (userTheme === "dark" || (!userTheme && systemTheme)) {
            document.documentElement.classList.add("dark");
        }
    };

    const themeSwitch = () => {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme", "dark");
        }
    };

    if (themeSwitcher) {
        themeSwitcher.addEventListener("click", () => {
            themeSwitch();
        });
    }

    themeCheck();
})();
