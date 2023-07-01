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

<footer>

</footer>

<?php wp_footer(); ?>
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
    const menuBody = document.querySelector('.header__menu');
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
</script>
</body>

</html>