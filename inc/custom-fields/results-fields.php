<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', esc_html__('Page Options'))
    ->set_context('advanced')
    ->where('post_type', '=', 'result')
    ->add_fields(array(
        Field::make('color', 'header_background', esc_html__('Header Background Color', 'fogel'))
            ->set_default_value('#393939')
            ->set_width(20),
        Field::make('color', 'page_background', esc_html__('Page Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(20),
        Field::make('textarea', 'time_result', esc_html__('Time Result', 'fogel'))
        ->set_width(60),
    ));
