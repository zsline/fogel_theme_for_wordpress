<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function fogel_set_attach_theme_options()
{
    Container::make('theme_options', esc_html__('Theme Options'))
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
            Field::make( 'checkbox', 'subscription_block_visible', __( 'Show Subscription Card' ) )
                ->set_option_value( 'yes' )
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
}
