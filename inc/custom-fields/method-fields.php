<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', esc_html__('Page Options'))
    ->set_context('advanced')
    ->where('post_template', '=', 'templates/method.php')
    ->set_context('advanced')
    ->add_tab(esc_html__('Hero block', 'fogel'), array(
        Field::make('color', 'hero_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#CBCBCB')
            ->set_width(20),
        Field::make('image', 'hero_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
    ))
    ->add_tab(esc_html__('Therapy block', 'fogel'), array(
        Field::make('complex', 'therapy_list', esc_html__('Therapy Block List', 'fogel'))
            ->add_fields('therapy_list_item', array(
                Field::make('color', 'therapy_background', esc_html__('Background Color', 'fogel'))
                    ->set_default_value('#EBEDEE')
                    ->set_width(10),
                Field::make('image', 'therapy_img', esc_html__('Image', 'fogel'))
                    ->set_value_type('url')
                    ->set_width(10),
                Field::make('text', 'therapy_title', esc_html__('Title', 'fogel'))
                    ->set_width(30),
                Field::make('text', 'therapy_subtitle', esc_html__('Subtitle', 'fogel'))
                    ->set_width(30),
                Field::make('select', 'therapy_type', __('Text alignment'))
                    ->add_options(array(
                        'third' => __('Third'),
                        'equally' => __('Equally'),
                        'full' => __('Full'),
                    ))
                    ->set_default_value('third')
                    ->set_width(10),
                Field::make('complex', 'therapy_list_col', esc_html__('Therapy Block Column', 'fogel'))
                    ->set_max(2)
                    ->add_fields('therapy_col_items', array(
                        Field::make('complex', 'therapy_col_item_content', __('Content'))
                            ->add_fields('therapy_col_item', array(
                                Field::make('rich_text', 'therapy_content', __('Column Content'))
                            ))
                    ))
            ))
    ))
    ->add_tab(esc_html__('Documents block', 'fogel'), array(
        Field::make('color', 'documents_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#CBCBCB')
            ->set_width(20),
        Field::make('image', 'documents_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
        Field::make('text', 'documents_title', esc_html__('Title', 'fogel'))
            ->set_default_value('Квалификация')
            ->set_width(60),
        Field::make('complex', 'documents_list', esc_html__('Images', 'fogel'))
            ->add_fields('documents_list_items', array(
                Field::make('image', 'documents_list_img', esc_html__('Image', 'fogel'))
                    ->set_value_type('url')
            ))
    ))
    ->add_tab(esc_html__('Experience block', 'fogel'), array(
        Field::make('color', 'experience_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#CBCBCB')
            ->set_width(20),
        Field::make('image', 'experience_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
        Field::make('text', 'experience_title', esc_html__('Title', 'fogel'))
            ->set_default_value('Опыт в управлении и управленческих переговорах')
            ->set_width(60),
        Field::make('complex', 'experience_list', esc_html__('Images', 'fogel'))
            ->set_width(50)
            ->set_max(3)
            ->add_fields('experience_list_items', array(
                Field::make('image', 'experience_list_img_item', esc_html__('Image', 'fogel'))
                    ->set_value_type('url')
            )),
        Field::make('complex', 'experience_list_text', esc_html__('List', 'fogel'))
            ->set_width(50)
            ->add_fields('experience_list_text_items', array(
                Field::make('text', 'experience_list_text_item', esc_html__('Item', 'fogel'))
            )),
    ))
    ->add_tab(esc_html__('Skils block', 'fogel'), array(
        Field::make('color', 'skils_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(20),
        Field::make('image', 'skils_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
        Field::make('complex', 'skils_list', esc_html__('List', 'fogel'))
            ->set_max(2)
            ->add_fields('skils_list_items', array(
                Field::make('text', 'skils_list_title', esc_html__('Title', 'fogel')),
                Field::make('complex', 'skils_list_items_images', esc_html__('List Items', 'fogel'))
                    ->set_max(2)
                    ->set_width(50)
                    ->add_fields('skils_list_item_images', array(
                        Field::make('image', 'skils_list_item_img', esc_html__('Image', 'fogel'))
                            ->set_value_type('url')
                    )),
                Field::make('complex', 'skils_list_items_text', esc_html__('List Items', 'fogel'))
                    ->set_max(2)
                    ->set_width(50)
                    ->add_fields('skils_list_item_text', array(
                        Field::make('text', 'skils_list_text', esc_html__('Item', 'fogel'))
                    ))
            )),
    ));
