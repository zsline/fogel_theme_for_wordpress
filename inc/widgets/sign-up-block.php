<?php
function signUpBlock()
{ ?>
    <div class="sign-up section"
        style="background-color: <?php echo carbon_get_theme_option('sign_up_block_background') ?>; background-image: url(<?php echo carbon_get_theme_option('sign_up_block_img') ?>);">
        <div class="container">
            <h2><?php echo carbon_get_theme_option('sign_up_block_title') ?></h2>
            <div class="sign-up__cards">
                <?php
                if (carbon_get_theme_option('sign_up_block_list')) {
                    foreach (carbon_get_theme_option('sign_up_block_list') as $item) { ?>
                        <div class="sign-up__card">
                            <h5>
                                <?php echo $item['sign_up_block_list_title'] ?>
                            </h5>
                            <p>
                                <?php echo $item['sign_up_block_list_text'] ?>
                            </p>
                        </div>
                <?php }
                }
                ?>
            </div>
            <div class="sign-up__wrapper">
                <h2><?php echo carbon_get_theme_option('sign_up_block_subtitle') ?></h2>
                <div class="sign-up__wrapper--offer">
                    <h5><?php echo carbon_get_theme_option('sign_up_block_sendtitle') ?></h5>
                    <ul class="list">
                        <?php
                        if (carbon_get_theme_option('sign_up_block_send_list')) {
                            foreach (carbon_get_theme_option('sign_up_block_send_list') as $item) { ?>
                                <li><?php echo $item['sign_up_block_send__list_item'] ?></li>
                        <?php }
                        }
                        ?>
                    </ul>
                    <?php echo siteButtonGoldContact(carbon_get_theme_option('sign_up_block_btn_link'), carbon_get_theme_option('sign_up_block_btn_text')) ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>