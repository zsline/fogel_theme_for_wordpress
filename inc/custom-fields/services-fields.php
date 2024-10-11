<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', esc_html__('Page Options'))
    ->set_context('advanced')
    ->where('post_template', '=', 'templates/services.php')
    ->set_context('advanced')
    ->add_tab(esc_html__('Hero block', 'fogel'), array(
        Field::make('color', 'hero_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#545454')
            ->set_width(10),
        Field::make('image', 'hero_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('image', 'hero_num_img', esc_html__('Number Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'hero_title', esc_html__('Title', 'fogel'))
            ->set_width(60),
        Field::make('textarea', 'hero_subtitle', esc_html__('Subtitle', 'fogel'))
            ->set_width(30),
        Field::make('rich_text', 'hero_text', esc_html__('Subtitle', 'fogel'))
            ->set_width(30),
        Field::make('complex', 'hero_list', esc_html__('List', 'fogel'))
            ->set_width(30)
            ->add_fields(array(
                Field::make('text', 'hero_list_item', esc_html__('List Item', 'fogel')),
            )),
        Field::make('text', 'hero_btn_text', esc_html__('Button Text', 'fogel'))
            ->set_width(50)
            ->set_default_value('записаться на УСТАНОВОЧНУЮ сессию'),
        Field::make('text', 'hero_btn_link', esc_html__('Button Link', 'fogel'))
            ->set_width(50),
    ))
    ->add_tab(esc_html__('Diagnostic block', 'fogel'), array(
        Field::make('color', 'diagnostic_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#fffff')
            ->set_width(10),
        Field::make('image', 'diagnostic_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('image', 'diagnostic_num_img', esc_html__('Number Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'diagnostic_title', esc_html__('Title', 'fogel'))
            ->set_width(30),
        Field::make('textarea', 'diagnostic_subtitle', esc_html__('Subtitle', 'fogel'))
            ->set_width(30),
        Field::make('rich_text', 'diagnostic_left_text', esc_html__('Left Block Text', 'fogel'))
            ->set_width(50),
        Field::make('rich_text', 'diagnostic_right_text', esc_html__('Right Block Text', 'fogel'))
            ->set_width(50),
        Field::make('text', 'diagnostic_btn_text', esc_html__('Button Text', 'fogel'))
            ->set_width(50)
            ->set_default_value('записаться на УСТАНОВОЧНУЮ сессию'),
        Field::make('text', 'diagnostic_btn_link', esc_html__('Button Link', 'fogel'))
            ->set_width(50),
    ))
    ->add_tab(esc_html__('Choise block', 'fogel'), array(
        Field::make('color', 'choise_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(10),
        Field::make('image', 'choise_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('image', 'choise_num_img', esc_html__('Number Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'choise_super_title', esc_html__('Super Title', 'fogel'))
            ->set_width(30),
        Field::make('text', 'choise_separator_text', esc_html__('Super Title', 'fogel'))
            ->set_width(10),
        Field::make('textarea', 'choise_super_subtitle', esc_html__('Super Subtitle', 'fogel'))
            ->set_width(30),
        Field::make('separator', 'choise_first_separator', esc_html__('First Block', 'fogel')),
        Field::make('text', 'choise_first_title', esc_html__('Title', 'fogel'))
            ->set_width(50),
        Field::make('textarea', 'choise_first_subtitle', esc_html__('Subtitle', 'fogel'))
            ->set_width(50),
        Field::make('rich_text', 'choise_first_left_text', esc_html__('Left Block Text', 'fogel'))
            ->set_width(50),
        Field::make('rich_text', 'choise_first_right_text', esc_html__('Right Block Text', 'fogel'))
            ->set_width(50),
        Field::make('separator', 'choise_second_separator', esc_html__('Second Block', 'fogel')),
        Field::make('text', 'choise_second_title', esc_html__('Title', 'fogel'))
            ->set_width(50),
        Field::make('textarea', 'choise_second_subtitle', esc_html__('Subtitle', 'fogel'))
            ->set_width(50),
        Field::make('rich_text', 'choise_left_second_text', esc_html__('Left Block Text', 'fogel'))
            ->set_width(50),
        Field::make('rich_text', 'choise_right_second_text', esc_html__('Right Block Text', 'fogel'))
            ->set_width(50),
    ))
    ->add_tab(esc_html__('Coaching block', 'fogel'), array(
        Field::make('color', 'coaching_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(10),
        Field::make('image', 'coaching_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'coaching_title', esc_html__('Title', 'fogel'))
            ->set_width(30),
        Field::make('textarea', 'coaching_subtitle', esc_html__('Subtitle', 'fogel'))
            ->set_width(30),
        Field::make('rich_text', 'coaching_left_text', esc_html__('Left Block Text', 'fogel'))
            ->set_width(50),
        Field::make('rich_text', 'coaching_right_text', esc_html__('Right Block Text', 'fogel'))
            ->set_width(50)
    ))
    ->add_tab(esc_html__('Why block', 'fogel'), array(
        Field::make('color', 'why_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(10),
        Field::make('image', 'why_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('image', 'why_img_num_one', esc_html__('Image One Number', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('image', 'why_img_num_twoo', esc_html__('Image Twoo Number', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'why_title', esc_html__('Title', 'fogel'))
            ->set_width(60),
        Field::make('rich_text', 'why_left_text', esc_html__('Left Block Text', 'fogel'))
            ->set_width(50),
        Field::make('rich_text', 'why_right_text', esc_html__('Right Block Text', 'fogel'))
            ->set_width(50),
    ))
    ->add_tab(esc_html__('Table block', 'fogel'), array(
        Field::make('color', 'table_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(10),
        Field::make('textarea', 'table_title', esc_html__('Title', 'fogel'))
            ->set_width(40),
        Field::make('textarea', 'table_subtitle', esc_html__('Subtitle', 'fogel'))
            ->set_width(40),
        Field::make('separator', 'table_first_separator', esc_html__('Table', 'fogel')),
        Field::make('text', 'table_title_col_one', esc_html__('Title Column One', 'fogel'))
            ->set_default_value('параметры')
            ->set_width(25),
        Field::make('text', 'table_title_col_twoo', esc_html__('Title Column Twoo', 'fogel'))
            ->set_default_value('Стратегическая краткосрочная терапия')
            ->set_width(25),
        Field::make('text', 'table_title_col_three', esc_html__('Title Column Three', 'fogel'))
            ->set_default_value('Гештальт-терапия')
            ->set_width(25),
        Field::make('text', 'table_title_col_four', esc_html__('Title Column Four', 'fogel'))
            ->set_default_value('Психоаналитический подход')
            ->set_width(25),
        Field::make('complex', 'table_rows', esc_html__('Title Column Four', 'fogel'))
            ->add_fields(array(
                Field::make('text', 'table_row_col_one', esc_html__('Title Column One', 'fogel'))
                    ->set_width(25),
                Field::make('text', 'table_row_col_twoo', esc_html__('Text Column Twoo', 'fogel'))
                    ->set_width(25),
                Field::make('text', 'table_row_col_three', esc_html__('Text Column Three', 'fogel'))
                    ->set_width(25),
                Field::make('text', 'table_row_col_four', esc_html__('Text Column Four', 'fogel'))
                    ->set_width(25),
            ))
    ))
    ->add_tab(esc_html__('Garant block', 'fogel'), array(
        Field::make('color', 'garant_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#090A0F')
            ->set_width(10),
        Field::make('image', 'garant_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(10),
        Field::make('text', 'garant_title', esc_html__('Title', 'fogel'))
            ->set_default_value('ГАРАНТИИ')
            ->set_width(40),
        Field::make('text', 'garant_subtitle', esc_html__('Subtitle', 'fogel'))
            ->set_default_value('Верну деньги, если не смог помочь.')
            ->set_width(40),
        Field::make('textarea', 'garant_text', esc_html__('Text', 'fogel'))
    ))
    ->add_tab(esc_html__('Conditions block', 'fogel'), array(
        Field::make('color', 'conditions_background', esc_html__('Background Color', 'fogel'))
            ->set_default_value('#EBEDEE')
            ->set_width(50),
        Field::make('image', 'conditions_img', esc_html__('Image', 'fogel'))
            ->set_value_type('url')
            ->set_width(50),
        Field::make('complex', 'conditions_list', esc_html__('List', 'fogel'))
            ->add_fields(array(
                Field::make('text', 'conditions_list_item_title', esc_html__('Conditions Item Title', 'fogel')),
                Field::make('rich_text', 'conditions_list_item_left_text', esc_html__('Conditions Item Left Text', 'fogel'))
                    ->set_width(50),
                Field::make('rich_text', 'conditions_list_item_right_text', esc_html__('Conditions Item Right Text', 'fogel'))
                    ->set_width(50),
            ))
    ))
    ->add_tab(esc_html__('Setting Additional block', 'fogel'), array(
        Field::make('checkbox', 'result_show_content', esc_html__('Show Block Results', 'fogel'))
            ->set_option_value('yes')
            ->set_width(20),
        Field::make('checkbox', 'quote_show_content', esc_html__('Show Block Quote', 'fogel'))
            ->set_option_value('yes')
            ->set_width(20),
        Field::make('checkbox', 'sign_up_show_content', esc_html__('Show Block Sign Up', 'fogel'))
            ->set_option_value('yes')
            ->set_width(20),
    ));
