<?php
function widgetSign()
{
    if (carbon_get_theme_option('widget_sign_show_content') == 'yes') { ?>
        <div class="blog__sidebar--item poster-consultation"
            style="background-color: <?php echo carbon_get_theme_option('widget_sign_background') ?>; background-image: url(<?php echo carbon_get_theme_option('widget_sign_img') ?>);">
            <div class="poster-consultation__title">
            <?php echo carbon_get_theme_option('widget_sign_title') ?>
            </div>
            <div class="poster-consultation__text">
            <?php echo carbon_get_theme_option('widget_sign_subtitle') ?>
            </div>
            <div class="poster-consultation__subtext">
            <?php echo carbon_get_theme_option('widget_sign_text') ?>
            </div>
            <?php echo siteButtonGoldContact(carbon_get_theme_option('widget_sign_btn_link'), carbon_get_theme_option('widget_sign_btn_text')) ?>
        </div>
<? }
}
?>