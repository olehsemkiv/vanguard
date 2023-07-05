<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vanguard-wachschutz
 */

get_header();
?>

<!-- <main class="wrapper-fullpage">
    <div class="fullpage-pagination">
        <div class="fullpage-pagination__item"></div>
        <div class="fullpage-pagination__item"></div>
        <div class="fullpage-pagination__item"></div>
        <div class="fullpage-pagination__item"></div>
        <div class="fullpage-pagination__item"></div>
        <div class="fullpage-pagination__item"></div>
        <div class="fullpage-pagination__item"></div>
        <div class="fullpage-pagination__item"></div>
    </div>
    <section class="full-screen-section">
        <div class="site-container">
            <div class="full-screen-section__wrapper">
                <h2 class="full-screen-section__title">Vanguard Wachschutz</h2>
                <h5 class="full-screen-section__sub-title">Sicherheit rund um die Uhr</h5>

                <div class="full-screen-section__btn-wrapper">
                    <a href="#" class="full-screen-section__btn btn">Mehr erfahren</a><a href="#" class="full-screen-section__btn btn btn_bg">Kontakt</a>
                </div>
                <div class="full-screen-section__next-btn">
                    <img src="https://i.ibb.co/FwMy4Mc/next.png" alt="next__btn">
                </div>
            </div>
        </div>
        <div class="bg-section">
            <img src="https://i.ibb.co/MMgpy0d/1-section.jpg" alt="">
        </div>
    </section>
    <section class="full-screen-section">
        <div class="site-container">
            <div class="full-screen-section__wrapper">
                <h2 class="full-screen-section__title">Objektschutz</h2>
                <h5 class="full-screen-section__sub-title">Sicherheit rund um die Uhr</h5>

                <div class="full-screen-section__btn-wrapper">
                    <a href="#" class="full-screen-section__btn btn">Mehr erfahren</a><a href="#" class="full-screen-section__btn btn btn_bg">Kontakt</a>
                </div>
                <div class="full-screen-section__next-btn">
                    <img src="https://i.ibb.co/FwMy4Mc/next.png" alt="next__btn">
                </div>
            </div>
        </div>
        <div class="bg-section">
            <img src="https://i.ibb.co/XVwKKb8/2-section.jpg" alt="">
        </div>
    </section>
    <section class="full-screen-section">
        <div class="site-container">
            <div class="full-screen-section__wrapper">
                <h2 class="full-screen-section__title">Revierdienst</h2>
                <h5 class="full-screen-section__sub-title">Sicherheit rund um die Uhr</h5>

                <div class="full-screen-section__btn-wrapper">
                    <a href="#" class="full-screen-section__btn btn">Mehr erfahren</a><a href="#" class="full-screen-section__btn btn btn_bg">Kontakt</a>
                </div>
                <div class="full-screen-section__next-btn">
                    <img src="https://i.ibb.co/FwMy4Mc/next.png" alt="next__btn">
                </div>
            </div>
        </div>
        <div class="bg-section">
            <img src="https://i.ibb.co/VY3tJMQ/3-section.jpg" alt="">
        </div>
    </section>
    <section class="full-screen-section">
        <div class="site-container">
            <div class="full-screen-section__wrapper">
                <h2 class="full-screen-section__title">Veranstaltungsschutz</h2>
                <h5 class="full-screen-section__sub-title">Sicherheit rund um die Uhr</h5>

                <div class="full-screen-section__btn-wrapper">
                    <a href="#" class="full-screen-section__btn btn">Mehr erfahren</a><a href="#" class="full-screen-section__btn btn btn_bg">Kontakt</a>
                </div>
                <div class="full-screen-section__next-btn">
                    <img src="https://i.ibb.co/FwMy4Mc/next.png" alt="next__btn">
                </div>
            </div>
        </div>
        <div class="bg-section">
            <img src="https://i.ibb.co/4YFRK4S/4-section.jpg" alt="">
        </div>
    </section>
    <section class="full-screen-section">
        <div class="site-container">
            <div class="full-screen-section__wrapper">
                <h2 class="full-screen-section__title">Öffentliche Sicherheit</h2>
                <h5 class="full-screen-section__sub-title">Sicherheit rund um die Uhr</h5>

                <div class="full-screen-section__btn-wrapper">
                    <a href="#" class="full-screen-section__btn btn">Mehr erfahren</a><a href="#" class="full-screen-section__btn btn btn_bg">Kontakt</a>
                </div>
                <div class="full-screen-section__next-btn">
                    <img src="https://i.ibb.co/FwMy4Mc/next.png" alt="next__btn">
                </div>
            </div>
        </div>
        <div class="bg-section">
            <img src="https://i.ibb.co/wKQF8WH/5-section.jpg" alt="">
        </div>
    </section>
    <section class="full-screen-section">
        <div class="site-container">
            <div class="full-screen-section__wrapper">
                <h2 class="full-screen-section__title">Services</h2>
                <h5 class="full-screen-section__sub-title">Sicherheit rund um die Uhr</h5>

                <div class="full-screen-section__btn-wrapper">
                    <a href="#" class="full-screen-section__btn btn">Mehr erfahren</a><a href="#" class="full-screen-section__btn btn btn_bg">Kontakt</a>
                </div>
                <div class="full-screen-section__next-btn">
                    <img src="https://i.ibb.co/FwMy4Mc/next.png" alt="next__btn">
                </div>
            </div>
        </div>
        <div class="bg-section">
            <img src="https://i.ibb.co/TPsfyrR/6-section.jpg" alt="">
        </div>
    </section>
    <section class="full-screen-section">
        <div class="site-container">
            <div class="full-screen-section__wrapper">
                <h2 class="full-screen-section__title">Werkschutz</h2>
                <h5 class="full-screen-section__sub-title">Sicherheit rund um die Uhr</h5>

                <div class="full-screen-section__btn-wrapper">
                    <a href="#" class="full-screen-section__btn btn">Mehr erfahren</a><a href="#" class="full-screen-section__btn btn btn_bg">Kontakt</a>
                </div>
                <div class="full-screen-section__next-btn">
                    <img src="https://i.ibb.co/FwMy4Mc/next.png" alt="next__btn">
                </div>
            </div>
        </div>
        <div class="bg-section">
            <img src="https://i.ibb.co/bXFyqGB/7-section.jpg" alt="">
        </div>
    </section>
</main> -->

<main class="wrapper">
    <section class="section-hero">
        <div class="site-container">
            <div class="section-hero__wrapper">
                <h1 class="section-hero__title main-title">Werkschutz</h1>
                <h5 class="section-hero__sub-title main-sub-title">Sicherheit rund um die Uhr</h5>
                <a href="#" class="section-hero__btn btn btn_bg">Kontakt</a>
                <div class="section-hero__next-btn">
                    <img src="https://i.ibb.co/FwMy4Mc/next.png" alt="next__btn">
                </div>
            </div>
        </div>
        <div class="bg-section">
            <img src="https://i.ibb.co/sFzhcLQ/hero-section.png" alt="">
        </div>
    </section>
    <section class="section-text">
        <div class="site-container">
            <div class="section-text__wrapper">
                <h2 class="section-text__title title-l">Ihre Sicherheit - Unser Versprechen</h2>
                <div class="section-text__text text-p">Wir von Vanguard haben den Anspruch, in Ihrem Unternehmen für Sicherheit auf höchstem Niveau zu sorgen.
                    Eines unserer wichtigsten Anliegen ist es, Sie bei einem reibungslosen Betriebsablauf zu unterstützen und Ausnahmesituationen mit Routine und Professionalität zu begegnen. Wir sind rundum die Uhr für Sie im Einsatz.
                    Erfahren Sie auf dieser Seite mehr oder nehmen Sie Kontakt mit uns auf. Wir beraten Sie gerne zu unserem Werkschutz!</div>
            </div>
        </div>
    </section>
    <section class="section-statistic">
        <div class="site-container">
            <div class="section-statistic__wrapper">
                <div class="section-statistic__item">
                    <div class="section-statistic__item-top">6</div>
                    <div class="section-statistic__item-bottom">Einbrüche 2022</div>
                </div>
                <div class="section-statistic__item">
                    <div class="section-statistic__item-top">1894+</div>
                    <div class="section-statistic__item-bottom">Sachschäden 2022</div>
                </div>
                <div class="section-statistic__item">
                    <div class="section-statistic__item-top">15</div>
                    <div class="section-statistic__item-bottom">Aufklärungsrate</div>
                </div>
                <div class="section-statistic__item">
                    <div class="section-statistic__item-top">1518</div>
                    <div class="section-statistic__item-bottom">Noch überlegen</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-text-image">
        <div class="section-text-image__wrapper">
            <div class="section-text-image__item">
                <div class="section-text-image__img _ibg">
                    <img src="https://i.ibb.co/DDKxnd0/1.jpg" alt="1">
                </div>
                <div class="section-text-image__line"></div>
                <div class="section-text-image__content">
                    <h2 class="section-text-image__title title-l">Bewachung privater Objekte</h2>
                    <div class="section-text-image__text text-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                </div>
            </div>
            <div class="section-text-image__item">
                <div class="section-text-image__img _ibg">
                    <img src="https://i.ibb.co/DDKxnd0/1.jpg" alt="1">
                </div>
                <div class="section-text-image__line"></div>
                <div class="section-text-image__content">
                    <h2 class="section-text-image__title title-l">Bewachung privater Objekte</h2>
                    <div class="section-text-image__text text-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                </div>
            </div>
            <div class="section-text-image__item">
                <div class="section-text-image__img _ibg">
                    <img src="https://i.ibb.co/DDKxnd0/1.jpg" alt="1">
                </div>
                <div class="section-text-image__line"></div>
                <div class="section-text-image__content">
                    <h2 class="section-text-image__title title-l">Bewachung privater Objekte</h2>
                    <div class="section-text-image__text text-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                </div>
            </div>
            <div class="section-text-image__item">
                <div class="section-text-image__img _ibg">
                    <img src="https://i.ibb.co/DDKxnd0/1.jpg" alt="1">
                </div>
                <div class="section-text-image__line"></div>
                <div class="section-text-image__content">
                    <h2 class="section-text-image__title title-l">Bewachung privater Objekte</h2>
                    <div class="section-text-image__text text-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                </div>
            </div>

        </div>
    </section>
    <section class="section-accordion">
        <div class="site-container">
            <div class="section-accordion__wrapper">
                <div class="section-accordion__content">
                    <h2 class="section-accordion__title title-l">Stark im Werkschutz</h2>
                    <div class="section-accordion__text text-p">Hohes Verantwortungsbewusstsein ist was uns ausmacht. Als junges Start-Up Unternehmen haben wir hohe Ambitionen und wollen Ihnen den besten Service und den besten Sicherheitsdienst bieten, den Sie für Geld bekommen können. Denn die Sicherheit Ihres Unternehmens, Ihrer Werke, Sachwerte und Beschäftigten liegen uns am Herzen.</div>
                </div>
                <div class="section-accordion__accordion-wrapper">

                    <button class="section-accordion__accordion">Exzellente Kundenbetreuung</button>
                    <div class="section-accordion__panel text-p">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="section-accordion__accordion">Individuelle Leistungsabstimmung</button>
                    <div class="section-accordion__panel text-p">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="section-accordion__accordion">24h Sicherheitsdienst</button>
                    <div class="section-accordion__panel text-p">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="section-accordion__accordion">NRWweite Bewachungsleistungen</button>
                    <div class="section-accordion__panel text-p">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-banner">
        <div class="site-container">
            <div class="section-banner__wrapper">
                <h2 class="section-banner__title title-l">Konnten wir Sie überzeugen?</h2>
                <div class="section-banner__text">Dann schreiben Sie uns doch einfach eine Nachricht oder rufen uns an. Gerne klären wirIhre offenen Fragen und gestalten zusammenmit Ihnen ein Sicherheitspaket, welchesperfekt auf die individuellen SchutzbedürfnisseIhres Unternehmens zugeschnitten ist. Dabeigehen wir flexibel auf Ihre Wünsche ein undlassen die Erfahrungen unserer Experten miteinfließen.</div>
                <a href="#" class="section-banner__btn btn btn_bg">Kontakt</a>
            </div>
        </div>
        <div class="bg-section">
            <img src="https://i.ibb.co/rt1JPRv/5.jpg" alt="">
        </div>
    </section>
    <section class="section-slider-1">
        <div class="site-container">
            <div class="section-slider-1__wrapper">
                <h2 class="section-slider-1__title title-l">Entdecken Sie unsere Leistungen</h2>

                <div class="section-slider-1__container">
                    <div class="swiper section-slider-1__swiper">
                        <div class="swiper-wrapper section-slider-1__swiper-wrapper">
                            <div class="swiper-slide section-slider-1__swiper-slide">
                                <div class="section-slider-1__swiper-slide-body">
                                    <h3 class="section-slider-1__swiper-slide-title">Werkschutz</h3>
                                    <a href="" class="section-slider-1__swiper-slide-btn btn">Mehr erfahren</a>
                                    <img src="https://i.ibb.co/RzHhWD8/slide-1.jpg" alt="slide image">
                                </div>
                            </div>
                            <div class="swiper-slide section-slider-1__swiper-slide">
                                <div class="section-slider-1__swiper-slide-body">
                                    <h3 class="section-slider-1__swiper-slide-title">Werkschutz</h3>
                                    <a href="" class="section-slider-1__swiper-slide-btn btn">Mehr erfahren</a>
                                    <img src="https://i.ibb.co/RzHhWD8/slide-1.jpg" alt="slide image">
                                </div>
                            </div>
                            <div class="swiper-slide section-slider-1__swiper-slide">
                                <div class="section-slider-1__swiper-slide-body">
                                    <h3 class="section-slider-1__swiper-slide-title">Werkschutz</h3>
                                    <a href="" class="section-slider-1__swiper-slide-btn btn">Mehr erfahren</a>
                                    <img src="https://i.ibb.co/RzHhWD8/slide-1.jpg" alt="slide image">
                                </div>
                            </div>
                            <div class="swiper-slide section-slider-1__swiper-slide">
                                <div class="section-slider-1__swiper-slide-body">
                                    <h3 class="section-slider-1__swiper-slide-title">Werkschutz</h3>
                                    <a href="" class="section-slider-1__swiper-slide-btn btn">Mehr erfahren</a>
                                    <img src="https://i.ibb.co/RzHhWD8/slide-1.jpg" alt="slide image">
                                </div>
                            </div>
                            <div class="swiper-slide section-slider-1__swiper-slide">
                                <div class="section-slider-1__swiper-slide-body">
                                    <h3 class="section-slider-1__swiper-slide-title">Werkschutz</h3>
                                    <a href="" class="section-slider-1__swiper-slide-btn btn">Mehr erfahren</a>
                                    <img src="https://i.ibb.co/RzHhWD8/slide-1.jpg" alt="slide image">
                                </div>
                            </div>
                            <div class="swiper-slide section-slider-1__swiper-slide">
                                <div class="section-slider-1__swiper-slide-body">
                                    <h3 class="section-slider-1__swiper-slide-title">Werkschutz</h3>
                                    <a href="" class="section-slider-1__swiper-slide-btn btn">Mehr erfahren</a>
                                    <img src="https://i.ibb.co/RzHhWD8/slide-1.jpg" alt="slide image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next section-slider-1__swiper-button-next"></div>
                    <div class="swiper-button-prev section-slider-1__swiper-button-prev"></div>
                    <div class="swiper-pagination section-slider-1__swiper-pagination"></div>
                </div>

            </div>
        </div>
    </section>
    <section class="section-slider-2">
        <div class="section-slider-2__wrapper">
            <div class="swiper section-slider-2__swiper">
                <div class="swiper-wrapper section-slider-2__wrapper-slide2">
                    <div class="swiper-slide section-slider-2__swiper-slide slide2">
                        <div class="slide2__wrapper">
                            <h2 class="slide2__title">Büroüberwachung</h2>
                            <div class="slide2__img">
                                <img src="https://i.ibb.co/G0cZc1k/slide2-img.jpg" alt="slide2-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide section-slider-2__swiper-slide slide2">
                        <div class="slide2__wrapper">
                            <h2 class="slide2__title">Büroüberwachung</h2>
                            <div class="slide2__img">
                                <img src="https://i.ibb.co/G0cZc1k/slide2-img.jpg" alt="slide2-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide section-slider-2__swiper-slide slide2">
                        <div class="slide2__wrapper">
                            <h2 class="slide2__title">Büroüberwachung</h2>
                            <div class="slide2__img">
                                <img src="https://i.ibb.co/G0cZc1k/slide2-img.jpg" alt="slide2-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide section-slider-2__swiper-slide slide2">
                        <div class="slide2__wrapper">
                            <h2 class="slide2__title">Büroüberwachung</h2>
                            <div class="slide2__img">
                                <img src="https://i.ibb.co/G0cZc1k/slide2-img.jpg" alt="slide2-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide section-slider-2__swiper-slide slide2">
                        <div class="slide2__wrapper">
                            <h2 class="slide2__title">Büroüberwachung</h2>
                            <div class="slide2__img">
                                <img src="https://i.ibb.co/G0cZc1k/slide2-img.jpg" alt="slide2-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide section-slider-2__swiper-slide slide2">
                        <div class="slide2__wrapper">
                            <h2 class="slide2__title">Büroüberwachung</h2>
                            <div class="slide2__img">
                                <img src="https://i.ibb.co/G0cZc1k/slide2-img.jpg" alt="slide2-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide section-slider-2__swiper-slide slide2">
                        <div class="slide2__wrapper">
                            <h2 class="slide2__title">Büroüberwachung</h2>
                            <div class="slide2__img">
                                <img src="https://i.ibb.co/G0cZc1k/slide2-img.jpg" alt="slide2-img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide section-slider-2__swiper-slide slide2">
                        <div class="slide2__wrapper">
                            <h2 class="slide2__title">Büroüberwachung</h2>
                            <div class="slide2__img">
                                <img src="https://i.ibb.co/G0cZc1k/slide2-img.jpg" alt="slide2-img">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="swiper-button-next section-slider-2__swiper-button-next"></div>
            <div class="swiper-button-prev section-slider-2__swiper-button-prev"></div>
            <div class="swiper-pagination section-slider-2__swiper-pagination"></div>
        </div>
    </section>
    <section class="section-column-text">
        <div class="site-container">
            <div class="section-column-text__wrapper">
                <h2 class="section-column-text__title title-l">Wer wir sind</h2>
                <div class="section-column-text__body">
                    <div class="section-column-text__item">
                        <h3 class="section-column-text__item-title">Unsere Mission</h3>
                        <div class="section-column-text__item-text">Willkommen bei Vanguard Wachschutz!Wir, Taha Ben Khaled und Florian Klein, sind stolz darauf, Gründer und Inhaber dieser Firma zu sein. Gemeinsam haben wir uns zum Ziel gesetzt, einen Unterschied in der Sicherheitsbranche zu machen, indem wir Kompetenz, Integrität, Qualität und Flexibilität in den Vordergrund stellen.</div>
                    </div>
                    <div class="section-column-text__item">
                        <h3 class="section-column-text__item-title">Unsere Mission</h3>
                        <div class="section-column-text__item-text">Willkommen bei Vanguard Wachschutz!Wir, Taha Ben Khaled und Florian Klein, sind stolz darauf, Gründer und Inhaber dieser Firma zu sein. Gemeinsam haben wir uns zum Ziel gesetzt, einen Unterschied in der Sicherheitsbranche zu machen, indem wir Kompetenz, Integrität, Qualität und Flexibilität in den Vordergrund stellen.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-image">
        <div class="section-image__wrapper">
            <h2 class="section-image__title title-l">Vorstellung der Gründer</h2>
            <div class="section-image__list">
                <div class="section-image__item item-image">
                    <h3 class="item-image__title">Florian Klein</h3>
                    <div class="item-image__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    <div class="item-image__img">
                        <img src="https://i.ibb.co/DDKxnd0/1.jpg" alt="">
                    </div>
                </div>
                <div class="section-image__item item-image">
                    <h3 class="item-image__title">Florian Klein</h3>
                    <div class="item-image__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    <div class="item-image__img">
                        <img src="https://i.ibb.co/DDKxnd0/1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-slider-3">
        <div class="site-container">
            <div class="section-slider-3__wrapper">
                <h2 class="section-slider-3__title">Der Dank gilt unseren Kunden</h2>
                <div class="swiper section-slider-3__swiper">
                    <div class="swiper-wrapper section-slider-3__swiper-wrapper">
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide section-slider-3__swiper-slide">
                            <div class="swiper-slide__wrapper">
                                <div class="swiper-slide__image">
                                    <img src="https://i.ibb.co/BqKRWgR/audi.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination section-slider-3__swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-list">
        <div class="site-container">
            <div class="section-list__wrapper">
                <h2 class="section-list__title title-l">Aktuelle Stellenangebote</h2>
                <div class="section-list__body">
                    <div class="section-list__item">
                        <a href="#" class="section-list__item-left">Office Manager/in <span>(m/w/d)</span></a>
                        <div class="section-list__item-right">Mehr erfahren</div>
                    </div>
                    <div class="section-list__item">
                        <a href="#" class="section-list__item-left">Office Manager/in <span>(m/w/d)</span></a>
                        <div class="section-list__item-right">Mehr erfahren</div>
                    </div>
                    <div class="section-list__item">
                        <a href="#" class="section-list__item-left">Office Manager/in <span>(m/w/d)</span></a>
                        <div class="section-list__item-right">Mehr erfahren</div>
                    </div>
                    <div class="section-list__item">
                        <a href="#" class="section-list__item-left">Office Manager/in <span>(m/w/d)</span></a>
                        <div class="section-list__item-right">Mehr erfahren</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-list-item">
        <div class="site-container">
            <div class="section-list-item__wrapper">
                <h2 class="section-list-item__title">Office Manager/in <span>(m/w/d)</span></h2>
                <h4 class="section-list-item__sub-title">Wir suchen ab sofort zur Verstärkung unseres Teams eine/n Office Manager/in (m/w/d).</h4>
                <div class="section-list-item__text">Kurz und knapp was wir bieten. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
