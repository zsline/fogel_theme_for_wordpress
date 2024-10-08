<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', esc_html__('Page Options'))
    ->set_context('advanced')
    ->where('post_template', '=', 'templates/services.php')
    ->set_context('advanced')
    ->add_tab(esc_html__('Hero block', 'fogel'), array(
        Field::make('color', 'hero_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#CBCBCB')
            ->set_width(20),
        Field::make('image', 'hero_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
    ));