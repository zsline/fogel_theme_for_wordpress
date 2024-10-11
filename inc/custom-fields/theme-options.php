<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function fogel_set_attach_theme_options()
{
    $id = Container::make('theme_options', esc_html__('Theme Options'))
        ->set_page_menu_position(2)
        ->add_tab(esc_html__('Contacts', 'fogel'), array(
            Field::make('text', 'site_phone', esc_html__('Phone', 'fogel'))
                ->set_width(30),
        ))
        ->add_tab(esc_html__('Main Settings', 'fogel'), array(
            Field::make('text', 'social_btn_text', esc_html__('Social Button Text', 'fogel'))
                ->set_default_value('Поделиться')
                ->set_width(50),
            Field::make('text', 'more_title', esc_html__('More Title', 'fogel'))
                ->set_default_value('Читайте также:')
                ->set_width(50),
            Field::make('image', 'logo_header_mobile_img', esc_html__('Header Mobile Logo', 'fogel'))
                ->set_value_type('url')
                ->set_width(30),
            Field::make('image', 'logo_footer_img', esc_html__('Footer Logo', 'fogel'))
                ->set_value_type('url')
                ->set_width(30),
            Field::make('image', 'logo_footer_mobile_img', esc_html__('Footer Mobile Logo', 'fogel'))
                ->set_value_type('url')
                ->set_width(30),
        ))

        ->add_tab(esc_html__('Widget Subscribe', 'fogel'), array(
            Field::make('color', 'widget_subscribe_background', esc_html__('Background Color', 'fogel'))
                ->set_default_value('#EBEDEE')
                ->set_width(20),
            Field::make('image', 'widget_subscribe_img', esc_html__('Background Image', 'fogel'))
                ->set_value_type('url')
                ->set_width(20),
            Field::make('checkbox', 'widget_subscribe_show_content', __('Show Content'))
                ->set_option_value('yes')
                ->set_width(10),
            Field::make('text', 'widget_subscribe_title', esc_html__('Title', 'fogel'))
                ->set_width(50)
                ->set_default_value('Станьте частью комьюнити'),
            Field::make('text', 'widget_subscribe_subtitle', esc_html__('Subtitle', 'fogel'))
                ->set_width(50),
            Field::make('text', 'widget_subscribe_text', esc_html__('Text', 'fogel'))
                ->set_width(50),
            Field::make('text', 'widget_subscribe_btn_text', esc_html__('Button Text', 'fogel'))
                ->set_width(50)
                ->set_default_value('Подписаться'),
            Field::make('text', 'widget_subscribe_btn_link', esc_html__('Button Link', 'fogel'))
                ->set_width(50)
                ->set_default_value('#'),
        ))
        ->add_tab(esc_html__('Widget Sign Up', 'fogel'), array(
            Field::make('color', 'widget_sign_background', esc_html__('Background Color', 'fogel'))
                ->set_default_value('#ffffff')
                ->set_width(20),
            Field::make('image', 'widget_sign_img', esc_html__('Background Image', 'fogel'))
                ->set_value_type('url')
                ->set_width(20),
            Field::make('checkbox', 'widget_sign_show_content', __('Show Content'))
                ->set_option_value('yes')
                ->set_width(10),
            Field::make('text', 'widget_sign_title', esc_html__('Title', 'fogel'))
                ->set_width(50)
                ->set_default_value('Консультация бизнес-психолога'),
            Field::make('text', 'widget_sign_subtitle', esc_html__('Subtitle', 'fogel'))
                ->set_width(50),
            Field::make('text', 'widget_sign_text', esc_html__('Text', 'fogel'))
                ->set_width(50),
            Field::make('text', 'widget_sign_btn_text', esc_html__('Button Text', 'fogel'))
                ->set_width(50)
                ->set_default_value('записаться на консультацию'),
            Field::make('text', 'widget_sign_btn_link', esc_html__('Button Link', 'fogel'))
                ->set_width(50)
                ->set_default_value('#'),
        ))
        ->add_tab(esc_html__('Subscription Block', 'fogel'), array(
            Field::make('color', 'subscription_block_background', esc_html__('Background Color', 'fogel'))
                ->set_default_value('#ffffff')
                ->set_width(20),
            Field::make('image', 'subscription_block_img', esc_html__('Background Image', 'fogel'))
                ->set_value_type('url')
                ->set_width(20),
            Field::make('text', 'subscription_block_title', esc_html__('Title', 'fogel'))
                ->set_width(50)
                ->set_default_value('СТАНЬТЕ ЧАСТЬЮ КОМЬюНИТИ'),
            Field::make('checkbox', 'subscription_block_visible', __('Show Subscription Card'))
                ->set_option_value('yes')
                ->set_width(10),
            Field::make('text', 'subscription_block_subtitle', esc_html__('Subtitle', 'fogel'))
                ->set_width(50),
            Field::make('text', 'subscription_block_text', esc_html__('Text', 'fogel'))
                ->set_width(50),
            Field::make('text', 'subscription_block_btn_text', esc_html__('Button Text', 'fogel'))
                ->set_width(50)
                ->set_default_value('подписаться на канал'),
            Field::make('text', 'subscription_block_btn_link', esc_html__('Button Link', 'fogel'))
                ->set_width(50)
                ->set_default_value('#'),
        ));
    Container::make('theme_options', esc_html__('Pages Options'))
        ->set_page_parent($id)
        ->add_tab(esc_html__('Results Options', 'fogel'), array(
            Field::make('color', 'result_background', esc_html__('Page Background Color', 'fogel'))
                ->set_default_value('#EBEDEE')
                ->set_width(10),
            Field::make('color', 'result_hero_background', esc_html__('Hero Background Color', 'fogel'))
                ->set_default_value('#CBCBCB')
                ->set_width(10),
            Field::make('color', 'result_single_hero_background', esc_html__('Single Hero Background Color', 'fogel'))
                ->set_default_value('#393939')
                ->set_width(10),
            Field::make('image', 'result_hero_img', esc_html__('Hero Background Image', 'fogel'))
                ->set_value_type('url')
                ->set_width(20),
            Field::make('text', 'result_btn_text', esc_html__('Title Button', 'fogel'))
                ->set_width(20)
                ->set_default_value('Читать подробнее'),
            Field::make('textarea', 'result_title', esc_html__('Title Page', 'fogel'))
                ->set_default_value('Результаты'),
            Field::make('textarea', 'result_subtitle', esc_html__('Subtitle Page', 'fogel'))
                ->set_default_value('А вот результаты некоторых моих клиентов. Ситуации других могут быть похожи на вашу. Справились другие, справитесь и вы.'),
            Field::make('checkbox', 'result_show_content', esc_html__('Show Block Results', 'fogel'))
                ->set_option_value('yes')
                ->set_width(20),
            Field::make('checkbox', 'quote_show_content', esc_html__('Show Block Quote', 'fogel'))
                ->set_option_value('yes')
                ->set_width(20),
            Field::make('checkbox', 'sign_up_show_content', esc_html__('Show Block Sign Up', 'fogel'))
                ->set_option_value('yes')
                ->set_width(20),
        ))
        ->add_tab(esc_html__('Blog Options', 'fogel'), array(
            Field::make('text', 'blog_title', esc_html__('Title Page', 'fogel'))
        ));
    Container::make('theme_options', esc_html__('Blocks Options'))
        ->set_page_parent($id)
        ->add_tab(esc_html__('Results Block Options', 'fogel'), array(
            Field::make('color', 'result_block_background', esc_html__('Background Color', 'fogel'))
                ->set_default_value('#CCCCCC')
                ->set_width(10),
            Field::make('image', 'result_block_img', esc_html__('Image', 'fogel'))
                ->set_value_type('url')
                ->set_width(10),
            Field::make('text', 'result_block_title', esc_html__('Title', 'fogel'))
                ->set_default_value('Результат работы<br>со мной')
                ->set_width(40),
            Field::make('complex', 'result_block_list', esc_html__('List', 'fogel'))
                ->add_fields(array(
                    Field::make('text', 'result_block_list_item', esc_html__('List Item', 'fogel'))
                ))
        ))
        ->add_tab(esc_html__('Quote Block Options', 'fogel'), array(
            Field::make('color', 'quote_block_background', esc_html__('Background Color', 'fogel'))
                ->set_default_value('#EBEDEE')
                ->set_width(10),
            Field::make('image', 'quote_block_img', esc_html__('Image', 'fogel'))
                ->set_value_type('url')
                ->set_width(10),
            Field::make('textarea', 'quote_block_text', esc_html__('Text', 'fogel'))
                ->set_width(80),
        ))
        ->add_tab(esc_html__('Sign Up Block Options', 'fogel'), array(
            Field::make('color', 'sign_up_block_background', esc_html__('Background Color', 'fogel'))
                ->set_default_value('#393939')
                ->set_width(10),
            Field::make('image', 'sign_up_block_img', esc_html__('Image', 'fogel'))
                ->set_value_type('url')
                ->set_width(10),
            Field::make('textarea', 'sign_up_block_title', esc_html__('Title', 'fogel'))
                ->set_default_value('Что обеспечивает результат')
                ->set_width(30),
            Field::make('textarea', 'sign_up_block_subtitle', esc_html__('Subtitle', 'fogel'))
                ->set_default_value('ЗАПИСАТЬСЯ НА<br> УСТАНОВОЧНУЮ<br> СЕССИЮ')
                ->set_width(30),
            Field::make('complex', 'sign_up_block_list', esc_html__('List', 'fogel'))
                ->add_fields(array(
                    Field::make('textarea', 'sign_up_block_list_title', esc_html__('Title', 'fogel'))
                        ->set_width(50),
                    Field::make('textarea', 'sign_up_block_list_text', esc_html__('Text', 'fogel'))
                        ->set_width(50),
                )),
            Field::make('textarea', 'sign_up_block_sendtitle', esc_html__('Send Title', 'fogel'))
                ->set_default_value('Чтобы записаться на установочную сессию, напишите мне в Tелеграм')
                ->set_width(50),
            Field::make('complex', 'sign_up_block_send_list', esc_html__('List', 'fogel'))
                ->set_width(50)
                ->add_fields(array(
                    Field::make('text', 'sign_up_block_send__list_item', esc_html__('List Item', 'fogel'))
                )),
            Field::make('text', 'sign_up_block_btn_text', esc_html__('Button Text', 'fogel'))
                ->set_width(50)
                ->set_default_value('НАПИСАТЬ ЛИЧНОЕ СООБЩЕНИЕ'),
            Field::make('text', 'sign_up_block_btn_link', esc_html__('Button Link', 'fogel'))
                ->set_width(50)
                ->set_default_value('#'),
        ));
}
