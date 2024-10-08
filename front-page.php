<?php
get_header();
?>
<div class="hero hero-home" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'hero_background'); ?>;">
    <div class="hero-home__blur"></div>
    <picture>
        <source srcset="<?php
                        if (carbon_get_post_meta(get_the_ID(), 'hero_img')) {
                            echo carbon_get_post_meta(get_the_ID(), 'hero_img');
                        } else {
                            the_post_thumbnail_url();
                        }
                        ?>" media="(orientation: portrait)">
        <source srcset="<?php
                        if (get_the_post_thumbnail()) {
                            the_post_thumbnail_url();
                        } else {
                            echo carbon_get_post_meta(get_the_ID(), 'hero_img');
                        }
                        ?>" media="(orientation: landscape)">
        <img src="<?php
                    if (get_the_post_thumbnail()) {
                        the_post_thumbnail_url();
                    } else {
                        echo carbon_get_post_meta(get_the_ID(), 'hero_img');
                    }
                    ?>" alt="<?php bloginfo('name') ?>" />
    </picture>
    <div class="container">
        <div class="hero-home__wrapper">
            <div class="hero-home__title">
                <?php echo carbon_get_post_meta(get_the_ID(), 'hero_text'); ?>
            </div>
            <div class="hero-home__info">
                <h3 class="hero-home__info--title"><?php echo carbon_get_post_meta(get_the_ID(), 'hero_name'); ?></h3>
                <?php
                if (carbon_get_post_meta(get_the_ID(), 'hero_list')) { ?>
                    <div class="hero-home__info--list t-16">
                        <ul class="list">
                            <?php
                            foreach (carbon_get_post_meta(get_the_ID(), 'hero_list') as $list_item) { ?>
                                <li><?php echo $list_item['hero_list_item'] ?></li>
                            <?php }
                            ?>
                        </ul>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="offer section" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'offer_background'); ?>;">
    <div class="container">
        <div class="offer__wrapper">
            <div class="offer__title">
                <?php echo carbon_get_post_meta(get_the_ID(), 'offer_text'); ?>
            </div>
            <div class="offer__text t-20">
                <?php echo carbon_get_post_meta(get_the_ID(), 'offer_bottom_text'); ?>
            </div>
            <div class="offer__btns btns">
                <a href="<?php echo carbon_get_post_meta(get_the_ID(), 'offer_first_btn_link'); ?>" class="btn btn-blue"><?php echo carbon_get_post_meta(get_the_ID(), 'offer_first_btn_text'); ?></a>
                <a href="<?php echo carbon_get_post_meta(get_the_ID(), 'offer_second_btn_link'); ?>" class="btn btn-blue"><?php echo carbon_get_post_meta(get_the_ID(), 'offer_second_btn_text'); ?></a>
            </div>
        </div>
    </div>
</div>
<div class="reasons section"
    style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'reasons_background'); ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'reasons_img'); ?>);">
    <div class="container">
        <h2><?php echo carbon_get_post_meta(get_the_ID(), 'reasons_title'); ?></h2>
        <?php
        if (carbon_get_post_meta(get_the_ID(), 'reasons_rows')) { ?>
            <div class="reasons__wrapper">
                <?php
                foreach (carbon_get_post_meta(get_the_ID(), 'reasons_rows') as $row) { ?>
                    <div class="reasons__row">
                        <?php
                        foreach ($row['reasons_row'] as $item) { ?>
                            <div class="reasons__item">
                                <div class="reasons__item--num"><?php echo $item['reasons_row_num'] ?></div>
                                <h5 class="reasons__item--title"><?php echo $item['reasons_row_title'] ?></h5>
                                <?php
                                if ($item['reasons_row']) {
                                    echo '<ul class="list dark">';
                                    foreach ($item['reasons_row'] as $textItem) { ?>
                                        <li><?php echo $textItem['reasons_row_item'] ?></li>
                                <?php }
                                    echo '</ul>';
                                }
                                ?>
                                <div class="reasons__text">
                                    <?php echo $item['reasons_row_bottom'] ?>
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                <?php }
                ?>
            </div>
        <?php }
        ?>
    </div>
</div>
<div class="whot section" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'whot_background'); ?>;">
    <div class="container">
        <h2><?php echo carbon_get_post_meta(get_the_ID(), 'whot_title'); ?></h2>
        <div class="whot__wrapper">
            <?php
            if (carbon_get_post_meta(get_the_ID(), 'whot_list')) {
                foreach (carbon_get_post_meta(get_the_ID(), 'whot_list') as $item) { ?>
                    <div class="whot__item">
                        <div class="whot__num">
                            <img src="<?php echo $item['whot_list_img'] ?>" alt="<?php echo $item['whot_list_title'] ?>">
                        </div>
                        <h3><?php echo $item['whot_list_title'] ?></h3>
                        <div class="t16"><?php echo $item['whot_list_text'] ?>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
        <?php
        if (carbon_get_post_meta(get_the_ID(), 'whot_btn_link')) {
            echo siteButtonBlueContact(carbon_get_post_meta(get_the_ID(), 'whot_btn_link'), carbon_get_post_meta(get_the_ID(), 'whot_btn_text'));
        } ?>
    </div>
</div>
<div class="quote quote-first section"
    style="background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'first_quote_img'); ?>); background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'first_quote_background'); ?>;">
    <div class="container">
        <div class="quote__text">
            <?php echo carbon_get_post_meta(get_the_ID(), 'first_quote_text'); ?>
        </div>
        <div class="quote__subtext">
            <?php echo carbon_get_post_meta(get_the_ID(), 'first_quote_subtext'); ?>
        </div>
    </div>
</div>
<div class="advantage section"
    style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'advantage_background'); ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'advantage_img'); ?>);">
    <div class="container">
        <div class="advantage__wrapper">
            <h2><?php echo carbon_get_post_meta(get_the_ID(), 'advantage_title'); ?></h2>
            <?php echo carbon_get_post_meta(get_the_ID(), 'advantage_text'); ?>
        </div>
        <?php
        if (carbon_get_post_meta(get_the_ID(), 'advantage_btn_link')) {
            echo siteButtonBlueContact(carbon_get_post_meta(get_the_ID(), 'advantage_btn_link'), carbon_get_post_meta(get_the_ID(), 'advantage_btn_text'));
        } ?>
    </div>
</div>
<div class="result section" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'result_background'); ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'result_img'); ?>);">
    <div class="container">
        <div class="result__title t-c">
            <h2><?php echo carbon_get_post_meta(get_the_ID(), 'result_title'); ?></h2>
            <p class="t-20"><?php echo carbon_get_post_meta(get_the_ID(), 'result_text'); ?></p>
        </div>
        <div class="result__wrapper">
            <div class="slider-btns">
                <div class="slider-btn slider-btn__prev result-prev">
                    <svg width="13" height="19" viewBox="0 0 13 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 17.5L12 9.5L1 0.999999" stroke="#C89D66" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="slider-btn slider-btn__next result-next">
                    <svg width="13" height="19" viewBox="0 0 13 19" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 17.5L12 9.5L1 0.999999" stroke="#C89D66" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="result__slider">
                <div class="swiper-wrapper">
                    <?php
                    global $post;
                    $query = new WP_Query([
                        'post_type' => 'result',
                        'posts_per_page' => 3,
                    ]);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                    ?>
                            <div class="swiper-slide result__item">
                                <div class="result__inner">
                                    <a href="<?php the_permalink(); ?>">
                                        <h5><?php the_title(); ?></h5>
                                    </a>
                                    <div class="result__item--name">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="result__item--text">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                                <?php
                                if (carbon_get_post_meta(get_the_ID(), 'time_result')) { ?>
                                    <div class="result__item--bottom"><?php echo carbon_get_post_meta(get_the_ID(), 'time_result') ?></div>
                                <?php }
                                ?>
                            </div>
                    <?php
                        }
                    } else {
                        // No posts found
                    }
                    wp_reset_postdata(); // Reset $post
                    ?>
                </div>
            </div>
        </div>
        <?php echo siteButtonBlue(carbon_get_post_meta(get_the_ID(), 'result_btn_link'), carbon_get_post_meta(get_the_ID(), 'result_btn_text')) ?>
    </div>
</div>
<div class="methods section" style="background-color: #DADADA;">
    <div class="container">
        <div class="methods__wrapper">
            <div class="methods__offer">
                <h2><?php echo carbon_get_post_meta(get_the_ID(), 'methods_title'); ?></h2>
                <?php echo apply_filters('the_content', carbon_get_the_post_meta('methods_text')); ?>
                <?php
                if (carbon_get_post_meta(get_the_ID(), 'advantage_btn_link')) {
                    echo siteButtonBlue(carbon_get_post_meta(get_the_ID(), 'methods_btn_link'), carbon_get_post_meta(get_the_ID(), 'methods_btn_text'));
                }
                ?>
            </div>
            <div class="methods__img">
                <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'methods_img'); ?>" alt="<?php echo carbon_get_post_meta(get_the_ID(), 'methods_title'); ?>">
            </div>
        </div>
    </div>
</div>
<div class="quote quote-second section"
    style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'second_quote_background'); ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'second_quote_img'); ?>);">
    <div class="container">
        <div class="quote__subtext">
            <?php echo carbon_get_post_meta(get_the_ID(), 'second_quote_text_top'); ?>
        </div>
        <div class="quote__text">
            <?php echo carbon_get_post_meta(get_the_ID(), 'second_quote_text_center'); ?>
        </div>
        <div class="quote__subtext">
            <?php echo carbon_get_post_meta(get_the_ID(), 'second_quote_text_bottom'); ?>
        </div>
    </div>
</div>
<div id="reviews" class="reviews section" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'reviews_background'); ?>;">
    <div class="container">
        <div class="reviews__dec"><img src="<?php echo carbon_get_post_meta(get_the_ID(), 'reviews_img'); ?>" alt=""></div>
        <div class="reviews__wrapper">
            <div class="reviews__offer">
                <h2><?php echo carbon_get_post_meta(get_the_ID(), 'reviews_title'); ?></h2>
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'reviews_text'); ?></p>
            </div>
            <div class="reviews__inner">
                <?php
                if (carbon_get_post_meta(get_the_ID(), 'reviews_list')) { ?>
                    <div class="reviews__slider--btns">
                        <div class="slider-btn slider-btn__prev reviews-prev">
                            <svg width="13" height="19" viewBox="0 0 13 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 17.5L12 9.5L1 0.999999" stroke="#C89D66" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="slider-btn slider-btn__next reviews-next">
                            <svg width="13" height="19" viewBox="0 0 13 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 17.5L12 9.5L1 0.999999" stroke="#C89D66" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="reviews__slider">
                        <div class="swiper-wrapper">
                            <?php
                            foreach (carbon_get_post_meta(get_the_ID(), 'reviews_list') as $item) { ?>
                                <div class="swiper-slide reviews__slide">
                                    <div class="reviews__slide--title t-16">
                                        <?php
                                        echo $item['reviews_list_text'] ?>
                                    </div>
                                    <div class="reviews__slide--img">
                                        <img src="<?php echo $item['reviews_list_img'] ?>" alt="">
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>
<?php echo subscriptionBlock(); ?>
<div class="faq section" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'faq_background'); ?>;">
    <div class="container">
        <h2><?php echo carbon_get_post_meta(get_the_ID(), 'faq_title'); ?></h2>
        <?php
        if (carbon_get_post_meta(get_the_ID(), 'faq_list')) { ?>
            <div class="faq__wrapper">
                <?php
                foreach (carbon_get_post_meta(get_the_ID(), 'faq_list') as $item) { ?>
                    <div class="faq__item">
                        <div class="faq__item--title">
                            <h5>
                                <?php echo $item['faq_list_question'] ?>
                            </h5>
                        </div>
                        <div class="faq__item--text">
                            <?php echo apply_filters('the_content', $item['faq_list_answer']); ?>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        <? }
        ?>
    </div>
</div>
<?php get_footer();
