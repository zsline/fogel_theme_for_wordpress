<?php
get_header();
?>
<main class="main main-posts">
    <div class="hero hero-posts section"
        style="background-color: <?php echo carbon_get_theme_option('result_hero_background') ?>; background-image: url(<?php echo carbon_get_theme_option('result_hero_img') ?>);">
        <div class="result-hero-linear"></div>
        <div class="container">
            <div class="hero-posts__title">
                <h2><?php echo carbon_get_theme_option('result_title') ?></h2>
                <div class="t-20">
                    <?php echo carbon_get_theme_option('result_subtitle') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="services-main section" style="background-color: <?php echo carbon_get_theme_option('result_background') ?>;">
        <div class="container">
            <?php
            $args = array(
                'posts_per_page' => -1,
                'post_type' => 'result'
            );
            $q = new WP_Query($args);
            if ($q->have_posts()) :
                while ($q->have_posts()) : $q->the_post(); ?>
                    <div class="wrapper-block">
                        <div class="wrapper-block__col">
                            <div class="wrapper-block__item">
                                <h3><?php the_title(); ?></h3>
                                <div class="result__item--name">
                                    <?php the_excerpt(); ?>
                                </div>
                                <ul class="list arrow-gold t-20">
                                    <li>
                                        <?php echo carbon_get_post_meta(get_the_ID(), 'time_result') ?>
                                        <!-- Результат за <span>8 сессий</span> -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="wrapper-block__col">
                            <div class="wrapper-block__item">
                                <?php the_content(); ?>
                                <?php echo siteButtonBlue(get_permalink(), carbon_get_theme_option('result_btn_text')) ?>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <?php if(carbon_get_theme_option('result_show_content') == 'yes') { echo resultBlock(); } ?>
    <?php if(carbon_get_theme_option('quote_show_content') == 'yes') { echo quoteBlock(); } ?>
    <?php if(carbon_get_theme_option('sign_up_show_content') == 'yes') { echo signUpBlock(); } ?>
</main>
<?php
get_footer();
?>