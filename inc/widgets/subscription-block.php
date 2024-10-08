<?php
function subscriptionBlock()
{
    echo '<div class="subscription section" style="background-color:' . carbon_get_theme_option('subscription_block_background') . '; background-image: url(' . carbon_get_theme_option('subscription_block_img') . ');">';
    echo '<div class="container">';
    echo '<h2>';
    echo carbon_get_theme_option('subscription_block_title');
    echo '</h2>';
    echo '<div class="subscription__wrapper">';
    echo '<div class="quote__subtext">';
    echo carbon_get_theme_option('subscription_block_subtitle');
    echo '</div>';
    echo '<p>';
    echo carbon_get_theme_option('subscription_block_text');
    echo '</p>';
    echo siteButtonGoldContact(carbon_get_theme_option('subscription_block_btn_link'), carbon_get_theme_option('subscription_block_btn_text'));
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
