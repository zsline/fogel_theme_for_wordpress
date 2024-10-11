<?php
function quoteBlock(){ ?>
    <div class="service-quote section"
        style="background-color: <?php echo carbon_get_theme_option('quote_block_background') ?>; background-image: url(<?php echo carbon_get_theme_option('quote_block_img') ?>);">
        <div class="container">
            <div class="service-quote__text">
                <?php echo carbon_get_theme_option('quote_block_text') ?>
            </div>
        </div>
    </div>
<?php } ?>