<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fogel
 */

?>

</main>
<footer class="footer">
    <div class="container">
        <?php
        if (carbon_get_theme_option('subscription_block_visible') == 'yes') { ?>
            <div class="fogel-subscription">
                <div class="fogel-subscription__close">
                    <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.7224 0.223389L14.3477 1.69123L8.64926 8.00066L14.3465 14.3088L12.7213 15.7767L7.1738 9.63433L1.62639 15.7766L0.00115317 14.3088L5.69834 8.00066L0 1.69129L1.62523 0.223454L7.1738 6.36699L12.7224 0.223389Z"
                            fill="#CBCBCB" />
                    </svg>
                </div>
                <div class="fogel-subscription__wrapper">
                    <div class="fogel-subscription__title">
                        Делюсь пользой на канале
                    </div>
                    <div class="fogel-subscription__text">
                        <p>
                            Управленческие маневры, лайфхаки для руководителей, кейсы.
                        </p>
                        <p>
                            Канал бизнес-психолога с реальным опытом управления бизнесом.
                        </p>
                    </div>
                    <a class="btn btn-gold btn-contact" href="#">
                        <p>Подписаться</p>
                    </a>
                </div>
            </div>
        <?php }
        ?>

        <div class="footer__nav">
            <a href="<?php bloginfo('url') ?>">
                <picture>
                    <source srcset="<?php echo carbon_get_theme_option('logo_footer_mobile_img') ?>" media="(orientation: portrait)">
                    <source srcset="<?php echo carbon_get_theme_option('logo_footer_img') ?>" media="(orientation: landscape)">
                    <img src="<?php echo carbon_get_theme_option('logo_footer_img') ?>" alt="" />
                </picture>
            </a>
            <nav class="nav">
                <ul>
                    <li><a href="methods.html">с чем работаю</a></li>
                    <li><a href="services.html">услуги</a></li>
                    <li><a href="result.html">результаты</a></li>
                    <li><a href="index.html#reviews">отзывы</a></li>
                    <li><a href="blog.html">блог</a></li>
                </ul>
                <div class="footer__social">
                    <div class="footer__social--title">
                        Я в социальных сетях:
                    </div>
                    <ul>
                        <li><a href="#">VKонтакте</a></li>
                        <li><a href="#">телеграм</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="footer__info">
            <div class="footer__copy">© Вадим Фогель, 2024</div>
            <div class="footer__persone">ИП Фогель Вадим Александрович, ИНН 540539140399</div>
            <div class="footer__links">
                <a href="#" class="footer__link">Положение о конфиденциальности</a>
                <a href="#" class="footer__link">Оферта</a>
                <a href="#" class="footer__link">Согласие на использование cookies</a>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>