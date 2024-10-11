<?php
/*
Template Name: Method
Template Post Type: page
*/
get_header('page'); ?>
<main class="main main-page">
    <div class="hero hero-methods section" style="background-color: <?php echo carbon_get_post_meta(get_the_ID(), 'hero_background') ?> ;background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'hero_img') ?>);">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <?php
    if (carbon_get_post_meta(get_the_ID(), 'therapy_list')) {
        $itemBlock = carbon_get_post_meta(get_the_ID(), 'therapy_list');
        $itemClass = '';
        foreach ($itemBlock as $item) {
            if ($item['therapy_type'] == 'third') {
                $itemClass = 'wrapper-block-as';
            } elseif ($item['therapy_type'] == 'full') {
                $itemClass = 'wrapper-block-full';
            } elseif ($item['therapy_type'] == 'equally') {
                $itemClass = '';
            }
    ?>
            <div class="strat section main-block" style="background-color: <?php echo $item['therapy_background'] ?>; background-image: url(<?php echo $item['therapy_img'] ?>);">
                <div class="container">
                    <h2><?php echo $item['therapy_title'] ?></h2>
                    <h5><?php echo $item['therapy_subtitle'] ?></h5>
                    <div class="wrapper-block <?php echo $itemClass; ?>">
                        <?php
                        if ($item['therapy_list_col']) {
                            foreach ($item['therapy_list_col'] as $col) { ?>
                                <div class="wrapper-block__col">
                                    <?php
                                    foreach ($col['therapy_col_item_content'] as $content) { ?>
                                        <div class="wrapper-block__item">
                                            <?php echo apply_filters('the_content', $content['therapy_content']); ?>
                                        </div>
                                    <?php }
                                    ?>
                                </div>
                        <?php }
                        }
                        ?>
                    </div>
                </div>
            </div>

        <?php }
        ?>
    <? }
    ?>
    <div class="documents section" style="background-color:<?php echo carbon_get_post_meta(get_the_ID(), 'documents_background') ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'documents_img') ?>);">
        <div class="container">
            <h2><?php echo carbon_get_post_meta(get_the_ID(), 'documents_title') ?></h2>

            <?php
            if (carbon_get_post_meta(get_the_ID(), 'documents_list')) { ?>
                <div class="documents__wrapper">
                    <div class="documents__slider--btns">
                        <div class="slider-btn slider-btn__prev documents-prev">
                            <svg width="13" height="19" viewBox="0 0 13 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 17.5L12 9.5L1 0.999999" stroke="#C89D66" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="slider-btn slider-btn__next documents-next">
                            <svg width="13" height="19" viewBox="0 0 13 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 17.5L12 9.5L1 0.999999" stroke="#C89D66" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="slider__modal">
                        <div class="documents__slider--btns">
                            <div class="slider-btn slider-btn__prev documents-prev">
                                <svg width="13" height="19" viewBox="0 0 13 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 17.5L12 9.5L1 0.999999" stroke="#C89D66" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="slider-btn slider-btn__next documents-next">
                                <svg width="13" height="19" viewBox="0 0 13 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 17.5L12 9.5L1 0.999999" stroke="#C89D66" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="documents__slider">
                            <div class="documents-pagination"></div>
                            <div class="documents__slider--close"></div>
                            <div class="swiper-wrapper">
                                <?php
                                foreach (carbon_get_post_meta(get_the_ID(), 'documents_list') as $item) { ?>
                                    <div class="swiper-slide documents__item">
                                        <img src="<?php echo $item['documents_list_img'] ?>" alt="">
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="documents__slider-thumbs">
                        <div class="documents-thumbs-pagination"></div>
                        <div class="swiper-wrapper">
                            <?php
                            foreach (carbon_get_post_meta(get_the_ID(), 'documents_list') as $item) { ?>
                                <div class="swiper-slide documents__item documents-thumbs__item">
                                    <img src="<?php echo $item['documents_list_img'] ?>" alt="">
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>

            <?php }
            ?>

        </div>
    </div>
    <div class="experience" style="background-color:<?php echo carbon_get_post_meta(get_the_ID(), 'experience_background') ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'experience_img') ?>);">
        <div class="experience__wrapper">
            <?php
            if (carbon_get_post_meta(get_the_ID(), 'experience_list')) { ?>
                <div class="experience__images">
                    <?php
                    foreach (carbon_get_post_meta(get_the_ID(), 'experience_list') as $image) { ?>
                        <img src="<?php echo $image['experience_list_img_item'] ?>" alt="">
                    <?php }
                    ?>
                </div>
            <?php }
            ?>

            <div class="experience__info  section">
                <h2><?php echo carbon_get_post_meta(get_the_ID(), 'experience_title') ?></h2>
                <?php
                if (carbon_get_post_meta(get_the_ID(), 'experience_list_text')) { ?>
                    <ul class="list dark t-20">
                        <?php
                        foreach (carbon_get_post_meta(get_the_ID(), 'experience_list_text') as $item) { ?>
                            <li><?php echo $item['experience_list_text_item'] ?></li>
                        <?php }
                        ?>
                    </ul>
                <?php }
                ?>
            </div>
        </div>
    </div>


    <div class="skils section" style="background-color:<?php echo carbon_get_post_meta(get_the_ID(), 'skils_background') ?>; background-image: url(<?php echo carbon_get_post_meta(get_the_ID(), 'skils_img') ?>);">
        <div class="container">
            <div class="skils__wrapper">
                <?php
                if (carbon_get_post_meta(get_the_ID(), 'skils_list')) {
                    foreach (carbon_get_post_meta(get_the_ID(), 'skils_list') as $item) { ?>
                        <div class="skils__item">
                            <h2><?php echo $item['skils_list_title'] ?></h2>
                            <?php
                            if ($item['skils_list_items_text']) { ?>
                                <ul class="list dark t-20">
                                    <?php foreach ($item['skils_list_items_text'] as $text) { ?>
                                        <li><?php echo $text['skils_list_text'] ?></li>
                                    <?php } ?>
                                </ul>
                            <?php }
                            if ($item['skils_list_items_images']) { ?>
                                <div class="skils__images">
                                    <?php
                                    foreach ($item['skils_list_items_images'] as $image) { ?>
                                        <img src="<?php echo $image['skils_list_item_img'] ?>" alt="">
                                    <?php }
                                    ?>
                                </div>
                            <?php }
                            ?>
                        </div>
                    <?php }
                    ?>
                <?php }
                ?>

            </div>
        </div>
    </div>
    <?php echo subscriptionBlock(); ?>
</main>
<?php get_footer(); ?>