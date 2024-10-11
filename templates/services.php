<?php
/*
Template Name: Services
Template Post Type: page
*/
get_header(); ?>
<main class="main main-services">
    <div class="hero hero-services section"
        style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'hero_background') ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'hero_img') ?>);">
        <div class="container">
            <div class="hero-services__wrapper services__wrapper">
                <div class="services__number">
                    <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'hero_num_img') ?>" alt="1">
                </div>
                <h2><?php echo carbon_get_post_meta(get_the_ID(), 'hero_title') ?></h2>
                <h3><?php echo carbon_get_post_meta(get_the_ID(), 'hero_subtitle') ?></h3>
                <div class="t-16">
                    <?php echo apply_filters('the_content', carbon_get_the_post_meta('hero_text')); ?>
                </div>
                <ul class="list arrow-gold t-20">
                    <?php
                    if (carbon_get_post_meta(get_the_ID(), 'hero_list')) {
                        foreach (carbon_get_post_meta(get_the_ID(), 'hero_list') as $item) { ?>
                            <li><?php echo $item['hero_list_item'] ?></li>
                    <?php }
                    }
                    ?>
                </ul>
                <?php echo siteButtonGoldContact(carbon_get_post_meta(get_the_ID(), 'hero_btn_link'), carbon_get_post_meta(get_the_ID(), 'hero_btn_text')) ?>
            </div>
        </div>
    </div>
    <div class="diagnos section main-block"
        style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'diagnostic_background') ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'diagnostic_img') ?>);">
        <div class="container">
            <div class="services__wrapper">
                <div class="services__number">
                    <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'diagnostic_num_img') ?>" alt="2">
                </div>
                <h2><?php echo carbon_get_post_meta(get_the_ID(), 'diagnostic_title') ?></h2>
                <h5><?php echo carbon_get_post_meta(get_the_ID(), 'diagnostic_subtitle') ?></h5>
            </div>
            <div class="wrapper-block">
                <div class="wrapper-block__col">
                    <div class="wrapper-block__item">
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'diagnostic_left_text')) ?>
                    </div>
                </div>
                <div class="wrapper-block__col">
                    <div class="wrapper-block__item">
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'diagnostic_right_text')) ?>
                    </div>
                </div>
            </div>
            <?php echo siteButtonBlueContact(carbon_get_post_meta(get_the_ID(), 'diagnostic_btn_link'), carbon_get_post_meta(get_the_ID(), 'diagnostic_btn_text')) ?>
        </div>
    </div>
    <div class="choise section main-block"
        style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'choise_background') ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'choise_img') ?>);">
        <div class="container">
            <div class="services__wrapper">
                <div class="services__number">
                    <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'choise_num_img') ?>" alt="3">
                </div>
                <h2><?php echo carbon_get_post_meta(get_the_ID(), 'choise_super_title') ?></h2>
                <h5><?php echo carbon_get_post_meta(get_the_ID(), 'choise_super_subtitle') ?></h5>
            </div>
            <h2><?php echo carbon_get_post_meta(get_the_ID(), 'choise_first_title') ?></h2>
            <h5><?php echo carbon_get_post_meta(get_the_ID(), 'choise_first_subtitle') ?></h5>
            <div class="wrapper-block">
                <div class="wrapper-block__col">
                    <div class="wrapper-block__item">
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'choise_first_left_text')) ?>
                    </div>
                </div>
                <div class="wrapper-block__col">
                    <div class="wrapper-block__item">
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'choise_first_right_text')) ?>
                    </div>
                </div>
            </div>
            <div class="or"><?php echo carbon_get_post_meta(get_the_ID(), 'choise_separator_text') ?></div>
        </div>
    </div>
    <div class="individual section main-block"
        style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'choise_background') ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'choise_img') ?>);">
        <div class="container">
            <h2><?php echo carbon_get_post_meta(get_the_ID(), 'choise_second_title') ?></h2>
            <h5><?php echo carbon_get_post_meta(get_the_ID(), 'choise_second_subtitle') ?></h5>
            <div class="wrapper-block">
                <div class="wrapper-block__col">
                    <div class="wrapper-block__item">
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'choise_left_second_text')) ?>
                    </div>
                </div>
                <div class="wrapper-block__col">
                    <div class="wrapper-block__item">
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'choise_right_second_text')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="coaching section main-block"
        style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'coaching_background') ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'coaching_img') ?>);">
        <div class="container">
            <h2><?php echo carbon_get_post_meta(get_the_ID(), 'coaching_title') ?></h2>
            <h5><?php echo carbon_get_post_meta(get_the_ID(), 'coaching_subtitle') ?></h5>
            <div class="wrapper-block">
                <div class="wrapper-block__col">
                    <div class="wrapper-block__item">
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'coaching_left_text')) ?>
                    </div>
                </div>
                <div class="wrapper-block__col">
                    <div class="wrapper-block__item">
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'coaching_right_text')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="why section" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'why_background') ?>;">
        <div class="container">
            <h2><?php echo carbon_get_post_meta(get_the_ID(), 'why_title') ?></h2>
            <div class="why__wrapper">
                <div class="why__item">
                    <div class="services__wrapper">
                        <div class="services__number">
                            <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'why_img_num_one') ?>" alt="1">
                        </div>
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'why_left_text')) ?>
                    </div>
                </div>
                <div class="why__item">
                    <div class="services__wrapper">
                        <div class="services__number">
                            <img src="<?php echo carbon_get_post_meta(get_the_ID(), 'why_img_num_twoo') ?>" alt="2">
                        </div>
                        <?php echo apply_filters('the_content', carbon_get_post_meta(get_the_ID(), 'why_right_text')) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'table_background') ?>;">
        <div class="container">
            <div class="wrapper-block">
                <div class="table__title">
                    <h3><?php echo carbon_get_post_meta(get_the_ID(), 'table_title') ?></h3>
                    <p><?php echo carbon_get_post_meta(get_the_ID(), 'table_subtitle') ?></p>
                </div>
                <div class="table__wrapper t-16">
                    <div class="table__wrapper--row">
                        <div class="table__wrapper--col table__title-col">
                            <?php echo carbon_get_post_meta(get_the_ID(), 'table_title_col_one') ?>
                        </div>
                        <div class="table__wrapper--col table__title-col">
                            <?php echo carbon_get_post_meta(get_the_ID(), 'table_title_col_twoo') ?>
                        </div>
                        <div class="table__wrapper--col table__title-col">
                            <?php echo carbon_get_post_meta(get_the_ID(), 'table_title_col_three') ?>
                        </div>
                        <div class="table__wrapper--col table__title-col">
                            <?php echo carbon_get_post_meta(get_the_ID(), 'table_title_col_four') ?>
                        </div>
                    </div>
                    <?php
                    if (carbon_get_post_meta(get_the_ID(), 'table_rows')) {
                        foreach (carbon_get_post_meta(get_the_ID(), 'table_rows') as $row) { ?>
                            <div class="table__wrapper--row">
                                <div class="table__wrapper--col">
                                    <?php echo $row['table_row_col_one'] ?>
                                </div>
                                <div class="table__wrapper--col table__item">
                                    <?php echo $row['table_row_col_twoo'] ?>
                                </div>
                                <div class="table__wrapper--col table__item">
                                    <?php echo $row['table_row_col_three'] ?>
                                </div>
                                <div class="table__wrapper--col table__item">
                                    <?php echo $row['table_row_col_four'] ?>
                                </div>
                            </div>

                    <?php }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="garant section"
        style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'garant_background') ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'garant_img') ?>);">
        <div class="garant__linear"></div>
        <div class="container">
            <div class="garant__wrapper">
                <h3><?php echo carbon_get_post_meta(get_the_ID(), 'garant_title') ?></h3>
                <h2><?php echo carbon_get_post_meta(get_the_ID(), 'garant_subtitle') ?></h2>
                <p><?php echo carbon_get_post_meta(get_the_ID(), 'garant_text') ?></p>
            </div>
        </div>
    </div>
    <?php if(carbon_get_post_meta(get_the_ID(), 'result_show_content') == 'yes') { echo resultBlock(); } ?>
    <?php if(carbon_get_post_meta(get_the_ID(), 'quote_show_content') == 'yes') { echo quoteBlock(); } ?>
    <?php if(carbon_get_post_meta(get_the_ID(), 'sign_up_show_content') == 'yes') { echo signUpBlock(); } ?>
    <div class="conditions section" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'conditions_background') ?>;">
        <div class="container">
            <?php
            if (carbon_get_post_meta(get_the_ID(), 'conditions_list')) {
                foreach (carbon_get_post_meta(get_the_ID(), 'conditions_list') as $item) { ?>
                    <h2><?php echo $item['conditions_list_item_title'] ?></h2>
                    <div class="wrapper-block">
                        <div class="wrapper-block__col">
                            <div class="wrapper-block__item">
                                <?php echo apply_filters( 'the_content', $item['conditions_list_item_left_text']); ?>
                            </div>
                        </div>
                        <div class="wrapper-block__col">
                            <div class="wrapper-block__item">
                            <?php echo apply_filters( 'the_content', $item['conditions_list_item_right_text']); ?>
                            </div>
                        </div>
                    </div>
            <?php }
            }
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>