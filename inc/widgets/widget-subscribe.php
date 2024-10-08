<?php
function widgetSubscribe()
{
    if (carbon_get_theme_option('widget_subscribe_show_content') == 'yes') { ?>
        <div class="blog__sidebar--item poster-subscribe"
            style="background-color: <?php echo carbon_get_theme_option('widget_subscribe_background') ?>; background-image: url(<?php echo carbon_get_theme_option('widget_subscribe_img') ?>);">
            <div class="poster-subscribe__title">
                <?php echo carbon_get_theme_option('widget_subscribe_title') ?>
            </div>
            <div class="poster-subscribe__text">
                <?php echo carbon_get_theme_option('widget_subscribe_subtitle') ?>
            </div>
            <div class="poster-subscribe__subtext">
                <?php echo carbon_get_theme_option('widget_subscribe_text') ?>
            </div>
            <?php echo siteButtonGoldContact(carbon_get_theme_option('widget_subscribe_btn_link'), carbon_get_theme_option('widget_subscribe_btn_text')) ?>
        </div>
<? }
}
?>