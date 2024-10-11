<?php
function resultBlock(){
    ?>
    <div class="services-result section"
        style="background-color: <?php echo carbon_get_theme_option( 'result_block_background') ?>; background-image: url(<?php echo carbon_get_theme_option('result_block_img') ?>);">
        <div class="container">
            <div class="services-result__wrapper">
                <h2><?php echo carbon_get_theme_option('result_block_title') ?></h2>
                <?php
                if (carbon_get_theme_option('result_block_list')) {
                    echo '<ul class="list dark t-20">';
                    foreach (carbon_get_theme_option('result_block_list') as $item) { ?>
                        <li><?php echo $item['result_block_list_item'] ?></li>
                <?php }
                    echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
    <?php
}
?>