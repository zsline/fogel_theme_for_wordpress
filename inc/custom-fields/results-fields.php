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
        Field::make('textarea', 'title_result', esc_html__('Title Result', 'fogel'))
            ->set_width(30),
        Field::make('textarea', 'time_result', esc_html__('Time Result', 'fogel'))
            ->set_width(30),
        Field::make('complex', 'result_blocks', esc_html__('Result Blocks', 'fogel'))
            ->add_fields('result_block', array(
                Field::make('rich_text', 'result_content', esc_html__('Content Result', 'fogel'))
                ->set_help_text(esc_html__('Title H4 and text in paragraph', 'fogel')),
            ))
            ->add_fields('result_client', array(
                Field::make('rich_text', 'result_client_content', esc_html__('Content Result', 'fogel'))
                ->set_help_text(esc_html__('Title H4 and text in paragraph', 'fogel')),
                Field::make('text', 'result_client_title', esc_html__('Title Client', 'fogel'))
                ->set_width(30),
                Field::make('textarea', 'result_client_text', esc_html__('Text Client', 'fogel'))
                ->set_width(70),
            ))
            ->add_fields('result_quote', array(
                Field::make('image', 'result_quote_img', esc_html__('Image', 'fogel'))
                ->set_value_type('url')
                ->set_width(20),
                Field::make('textarea', 'result_quote_name', esc_html__('Name', 'fogel'))
                ->set_width(30),
                Field::make('textarea', 'result_quote_text', esc_html__('Text', 'fogel'))
                ->set_width(50),
                
            ))
    ));
