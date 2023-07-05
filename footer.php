<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vanguard-wachschutz
 */

?>

<footer class="footer">
    <div class="site-container">
        <div class="footer__wrapper">
            <div class="footer__top">
                <div class="footer__menu">
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="" class="footer__link">Vanguard Wachschutz © 2023 </a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Impressum</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Kontakt</a>
                        </li>
                        <li class="footer__item">
                            <a href="" class="footer__link">Datenschutz und Rechtliches</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__social">
                    <div class="footer__social-item">
                        <img src="https://i.ibb.co/k1PLWX7/instagram.png" alt="instagram">
                    </div>
                    <div class="footer__social-item">
                        <img src="https://i.ibb.co/kGWdFSK/twitter.png" alt="twitter">
                    </div>
                    <div class="footer__social-item">
                        <img src="https://i.ibb.co/m0btWRY/facebook.png" alt="facebook">
                    </div>
                </div>
            </div>
            <div class="footer__bottom">© Design & Development RaapSteinert Kommunikation</div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
    const next__buttons = document.querySelectorAll('.full-screen-section__next-btn');

    if (next__buttons.length > 0) {
        next__buttons.forEach(el => {
            el.addEventListener('click', () => {
                window.scrollTo({
                    top: document.documentElement.scrollBy(0, 1)
                });
            })
        })
    }

    const iconMenu = document.querySelector('.header__menu-button');
    const menuBody = document.querySelector('.header__side-menu');
    if (iconMenu) {
        iconMenu.addEventListener('click', function(e) {
            document.body.classList.toggle('_lock');
            iconMenu.classList.toggle('_active');
            menuBody.classList.toggle('_active');
        })
    }

    const menuItems = document.querySelectorAll('.menu__link');

    if (menuItems.length > 0) {
        menuItems.forEach(menuItem => {
            menuItem.addEventListener('click', function(e) {
                if (iconMenu.classList.contains('_active')) {
                    document.body.classList.remove('_lock');
                    iconMenu.classList.remove('_active');
                    menuBody.classList.remove('_active');
                }
            })
        })
    }

    const closeButtonMenu = document.querySelector('.close-button');

    if (closeButtonMenu) {
        closeButtonMenu.addEventListener('click', function(e) {
            document.body.classList.remove('_lock');
            iconMenu.classList.remove('_active');
            menuBody.classList.remove('_active');
        })
    }

    let acc = document.getElementsByClassName("section-accordion__accordion");
    let i;

    if (acc) {
        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    }

    let header = document.querySelector(".header");


    if (header) {
        window.addEventListener("scroll", function() {

            let scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollPosition >= 100) {
                header.classList.add('header_bg');
            } else if (scrollPosition < 100) {
                header.classList.remove('header_bg');

            }
        });
    }

    let swiper_1 = new Swiper(".section-slider-1__swiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".section-slider-1__swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".section-slider-1__swiper-button-next",
            prevEl: ".section-slider-1__swiper-button-prev",
        },
        breakpoints: {
            767: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            }
        }
    });

    let swiper_2 = new Swiper(".section-slider-2__swiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: ".section-slider-2__swiper-pagination",
            clickable: true,
        },
        centeredSlides: true,
        navigation: {
            nextEl: ".section-slider-2__swiper-button-next",
            prevEl: ".section-slider-2__swiper-button-prev",
        },
        breakpoints: {
            767: {
                slidesPerView: 1.2,
            },
            991: {
                slidesPerView: 1.3,
            }
        }
    });

    let swiper_3 = new Swiper(".section-slider-3__swiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 3,
            slideShadows: true
        },
        loop: true,
        pagination: {
            el: ".section-slider-3__swiper-pagination",
            clickable: true
        },
        breakpoints: {
            640: {
                slidesPerView: 2
            },
            768: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 2
            },
            1560: {
                slidesPerView: 3
            }
        }
    });
</script>
</body>

</html>