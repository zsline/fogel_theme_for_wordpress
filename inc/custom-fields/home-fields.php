<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', esc_html__('Page Options'))
    ->where('post_id', '=', get_option('page_on_front'))
    ->add_tab(esc_html__('Hero block', 'fogel'), array(
        Field::make('color', 'hero_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#676A6A')
            ->set_width(20),
        Field::make('image', 'hero_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(30),
        Field::make('textarea', 'hero_text', esc_html__('Hero Text', 'fogel'))
            ->set_width(50),
        Field::make('text', 'hero_name', esc_html__('Hero Name', 'fogel'))
            ->set_width(50),
        Field::make('complex', 'hero_list', esc_html__('Hero List', 'fogel'))
            ->add_fields(array(
                Field::make('text', 'hero_list_item', __('Hero List Item', 'fogel')),
            ))
            ->set_width(50),

    ))
    ->add_tab(esc_html__('Offer block', 'fogel'), array(
        Field::make('color', 'offer_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(20),
        Field::make('textarea', 'offer_text', esc_html__('Offer Text', 'fogel'))
            ->set_width(40),
        Field::make('textarea', 'offer_bottom_text', esc_html__('Offer Bottom Text', 'fogel'))
            ->set_width(40),
        Field::make('text', 'offer_first_btn_text', esc_html__('First Button Text', 'fogel'))
            ->set_width(50),
        Field::make('text', 'offer_first_btn_link', esc_html__('First Button Link', 'fogel'))
            ->set_width(50),
        Field::make('text', 'offer_second_btn_text', esc_html__('Second Button Text', 'fogel'))
            ->set_width(50),
        Field::make('text', 'offer_second_btn_link', esc_html__('Second Button Link', 'fogel'))
            ->set_width(50),
    ))
    ->add_tab(esc_html__('Reasons block', 'fogel'), array(
        Field::make('color', 'reasons_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(20),
        Field::make('image', 'reasons_img', esc_html__('Background Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(30),
        Field::make('text', 'reasons_title', esc_html__('Title', 'fogel'))
            ->set_width(50),
        Field::make('complex', 'reasons_rows', esc_html__('Rows List', 'fogel'))
            ->add_fields(array(
                Field::make('complex', 'reasons_row', esc_html__('Row List', 'fogel'))
                    ->set_max(3)
                    ->add_fields(array(
                        Field::make('text', 'reasons_row_num', esc_html__('Number Item', 'fogel'))
                            ->set_width(20),
                        Field::make('text', 'reasons_row_title', esc_html__('Title Item', 'fogel'))
                            ->set_width(80),
                        Field::make('complex', 'reasons_row', esc_html__('Row List', 'fogel'))
                            ->add_fields(array(
                                Field::make('text', 'reasons_row_item', esc_html__('Row List Item', 'fogel')),
                            )),
                        Field::make('textarea', 'reasons_row_bottom', esc_html__('Row Bottom Text', 'fogel')),
                    ))
            )),
    ))
    ->add_tab(esc_html__('Whot block', 'fogel'), array(
        Field::make('color', 'whot_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(20),
        Field::make('text', 'whot_title', esc_html__('Title'))
            ->set_width(80),
        Field::make('complex', 'whot_list', esc_html__('Whot List'))
            ->set_max(3)
            ->add_fields(array(
                Field::make('image', 'whot_list_img', esc_html__('Number', 'fogel'))
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('textarea', 'whot_list_title', esc_html__('Title Item', 'fogel'))
                    ->set_width(30),
                Field::make('textarea', 'whot_list_text', esc_html__('Text Item', 'fogel'))
                    ->set_width(50),
            )),
        Field::make('text', 'whot_btn_text', esc_html__('Button Text', 'fogel'))
            ->set_width(50)
            ->set_default_value('УЗНАТЬ БОЛЬШЕ'),
        Field::make('text', 'whot_btn_link', esc_html__('Button Link', 'fogel'))
            ->set_width(50)
            ->set_default_value('#'),
    ))
    ->add_tab(esc_html__('First Quote block', 'fogel'), array(
        Field::make('color', 'first_quote_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#112444')
            ->set_width(20),
        Field::make('image', 'first_quote_img', esc_html__('Background Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
        Field::make('textarea', 'first_quote_text', esc_html__('First Text', 'fogel'))
            ->set_width(30),
        Field::make('textarea', 'first_quote_subtext', esc_html__('Second Text', 'fogel'))
            ->set_width(30),
    ))
    ->add_tab(esc_html__('Advantage block', 'fogel'), array(
        Field::make('color', 'advantage_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#DADADA')
            ->set_width(20),
        Field::make('image', 'advantage_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
        Field::make('textarea', 'advantage_title', esc_html__('Title', 'fogel'))
            ->set_width(30),
        Field::make('textarea', 'advantage_text', esc_html__('Text', 'fogel'))
            ->set_width(30),
        Field::make('text', 'advantage_btn_text', esc_html__('Button Text', 'fogel'))
            ->set_width(50)
            ->set_default_value('Получить консультацию'),
        Field::make('text', 'advantage_btn_link', esc_html__('Button Link', 'fogel'))
            ->set_width(50)
            ->set_default_value('#'),
    ))
    ->add_tab(esc_html__('Result block', 'fogel'), array(
        Field::make('color', 'result_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#DADADA')
            ->set_width(20),
        Field::make('image', 'result_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
        Field::make('textarea', 'result_title', esc_html__('Title', 'fogel'))
        ->set_default_value('Результаты')
            ->set_width(30),
        Field::make('textarea', 'result_text', esc_html__('Text', 'fogel'))
            ->set_width(30),
        Field::make('text', 'result_btn_text', esc_html__('Button Text', 'fogel'))
            ->set_width(50)
            ->set_default_value('Больше кейсов'),
        Field::make('text', 'result_btn_link', esc_html__('Button Link', 'fogel'))
            ->set_width(50)
            ->set_default_value('#'),
    ))
    ->add_tab(esc_html__('Methods block', 'fogel'), array(
        Field::make('color', 'methods_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#DADADA')
            ->set_width(20),
        Field::make('image', 'methods_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
        Field::make('textarea', 'methods_title', esc_html__('Title', 'fogel'))
            ->set_width(60),
        Field::make('rich_text', 'methods_text', __('Content')),
        Field::make('text', 'methods_btn_text', esc_html__('Button Text', 'fogel'))
            ->set_width(50)
            ->set_default_value('Узнать подробнее о методах и опыте'),
        Field::make('text', 'methods_btn_link', esc_html__('Button Link', 'fogel'))
            ->set_width(50)
            ->set_default_value('#'),
    ))
    ->add_tab(esc_html__('Second Quote block', 'fogel'), array(
        Field::make('color', 'second_quote_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#112444')
            ->set_width(50),
        Field::make('image', 'second_quote_img', esc_html__('Background Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(50),
        Field::make('textarea', 'second_quote_text_top', esc_html__('Top Text', 'fogel'))
            ->set_width(30),
        Field::make('textarea', 'second_quote_text_center', esc_html__('Center Text', 'fogel'))
            ->set_width(30),
        Field::make('textarea', 'second_quote_text_bottom', esc_html__('Bottom Text', 'fogel'))
            ->set_width(30),
    ))
    ->add_tab(esc_html__('Reviews block', 'fogel'), array(
        Field::make('color', 'reviews_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(20),
        Field::make('image', 'reviews_img', esc_html__('Background Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(20),
        Field::make('text', 'reviews_title', esc_html__('Title', 'fogel'))
            ->set_width(50)
            ->set_default_value('Отзывы'),
        Field::make('text', 'reviews_text', esc_html__('Text', 'fogel'))
            ->set_width(50),
        Field::make('complex', 'reviews_list', esc_html__('Whot List'))
            ->add_fields(array(
                Field::make('image', 'reviews_list_img', esc_html__('Image', 'fogel'))
                    ->set_value_type('url')
                    ->set_width(20),
                Field::make('textarea', 'reviews_list_text', esc_html__('Text', 'fogel'))
                    ->set_width(80),
            ))
    ))
    ->add_tab(esc_html__('FAQ block', 'fogel'), array(
        Field::make('color', 'faq_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(20),
        Field::make('text', 'faq_title', esc_html__('Title', 'fogel'))
            ->set_width(80)
            ->set_default_value('вопросы и ответы'),
        Field::make('complex', 'faq_list', esc_html__('Whot List'))
            ->add_fields(array(
                Field::make('textarea', 'faq_list_question', esc_html__('Question', 'fogel'))
                    ->set_width(50),
                Field::make('rich_text', 'faq_list_answer', esc_html__('Answer', 'fogel'))
                    ->set_width(50),
            ))
    ));
