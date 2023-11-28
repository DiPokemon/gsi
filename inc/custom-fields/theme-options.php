<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make( 'theme_options', __( 'Theme options', 'gsi' ) )
    ->set_icon( 'dashicons-welcome-widgets-menus' )    
    ->add_tab( __( 'Additional code', 'gsi' ), array(
        Field::make( 'header_scripts', 'head_code', __('Code in HEAD', 'gsi')),
        Field::make( 'footer_scripts', 'footer_code', __('Code in FOOTER', 'gsi')),
        Field::make( 'textarea', 'text_404', __('Page 404 text', 'gsi') ),
        Field::make( 'text', 'html_sitemap_link', __('HTML Sitemap link', 'gsi') )
            ->set_attribute( 'placeholder', 'https://site.ru/example/' )
            ->set_width(50),
        Field::make( 'text', 'html_sitemap_text', __('HTML sitemap label', 'gsi') )
            ->set_width(50),
        Field::make( 'text', 'policy_privacy_link', __('Policy privacy link', 'gsi') )
            ->set_attribute( 'placeholder', 'https://site.ru/example/' )
            ->set_width(50),
        Field::make( 'text', 'policy_privacy_text', __('Policy privacy label', 'gsi') )
            ->set_width(50),
        Field::make( 'text', 'copyright', __('Copyright', 'gsi') )
            ->set_attribute( 'placeholder', 'Все права защищены...' ),
    ) )
    ->add_tab( __( 'Contacts', 'gsi' ), array(
        Field::make( 'text', 'off_org_name', __('Off Organization name', 'gsi'))
            ->set_attribute( 'placeholder', 'ИП Григорьянц Александр Георгиевич' )
            ->set_width(50),
        Field::make( 'text', 'org_name', __('Organization name', 'gsi'))
            ->set_attribute( 'placeholder', 'Городская служба измерений' )
            ->set_width(50),
        Field::make( 'text', 'main_phone', __( 'main phone', 'gsi' ) )
            ->set_attribute( 'placeholder', '+7 (***) ***-**-**' )            
            ->set_width(33),
        Field::make( 'text', 'email', __( 'E-mail', 'gsi' ) )
            ->set_attribute( 'placeholder', 'example@example.com' )  
            ->set_width(33),
        Field::make( 'text', 'second_phone', __( 'Add. phone', 'gsi' ) )
            ->set_attribute( 'placeholder', '+7 (***) ***-**-**' ) 
            ->set_width(33),
        Field::make( 'text', 'vk', __( 'VKontakte', 'gsi' ) )
            ->set_attribute( 'placeholder', 'vk.com/example' )
            ->set_width(33),
        Field::make( 'text', 'tg', __( 'Telegram', 'gsi' ) )
            ->set_attribute( 'placeholder', 'example' )
            ->set_width(33),
        Field::make( 'text', 'wa', __( 'WhatsApp', 'gsi' ) )
            ->set_attribute( 'placeholder', '7**********' )
            ->set_width(33),
        Field::make( 'text', 'inst', __( 'Instagram', 'gsi' ) )
            ->set_attribute( 'placeholder', 'instagram.com/example' )
            ->set_width(33),
        Field::make( 'text', 'fb', __( 'Facebook', 'gsi' ) )
            ->set_attribute( 'placeholder', 'facebook.com/example' )
            ->set_width(33),    
        Field::make( 'text', 'work_time', __( 'Work time', 'gsi' ) )
            ->set_attribute( 'placeholder', 'Без выходных с 8:00 до 20:00 | Прием онлайн заявок: 24/7' )
               
    ) )
    ->add_tab( __( 'Address', 'gsi' ), array(
        Field::make( 'text', 'address_city', __( 'City', 'gsi' ) )
            ->set_width(50),
        Field::make( 'text', 'address_street', __( 'Street', 'gsi' ) )
            ->set_width(50),
        Field::make( 'text', 'address_build', __( 'Building', 'gsi' ) )
            ->set_width(50),
        Field::make( 'text', 'address_index', __( 'ZIP-Code', 'gsi' ) )
            ->set_width(50),
        Field::make( 'text', 'address_latitude', __( 'Latitude (for maps)', 'gsi' ) )
            ->set_width(50),
        Field::make( 'text', 'address_longitude', __( 'Longitude (for maps)', 'gsi' ) )
            ->set_width(50),
    ) )
    
    // ->add_tab( __( 'Testimonials', 'gsi' ), array(
    //     Field::make( 'text', 'testimonials_title', __('Section title', 'gsi')),
    //     Field::make('complex','testimonials',__('Отзыв', 'gsi'))
    //         ->add_fields(array(                
    //             Field::make('text','testimonial_name',__('Имя', 'gsi') )
    //                 ->set_width(50),
    //             Field::make('text','testimonial_second_name',__('Фамилия', 'gsi') )
    //                 ->set_width(50),
    //             Field::make('textarea','testimonial_text',__('Текст', 'gsi'))
    //                 ->set_width(60)
    //                 ->set_rows(1),
    //             Field::make('date','testimonial_date',__('Дата', 'gsi'))
    //                 ->set_width(30),
    //             Field::make('text','testimonial_rating',__('Оценка', 'gsi'))
    //                 ->set_attribute('type', 'number')
    //                 ->set_attribute('min', '0')
    //                 ->set_attribute('max', '5')
    //                 ->set_width(10),
    //         ))
    // ) )   

    // ->add_tab( __( 'Prices', 'gsi' ), array(
    //     Field::make( 'text', 'prices_title', __('Section title', 'gsi')),
    //     Field::make( 'text', 'prices_btn_link', __('Btn link', 'gsi'))
    //         ->set_width(50),
    //     Field::make( 'text', 'prices_btn_text', __('Btn text', 'gsi'))
    //         ->set_width(50),
    //     Field::make('complex','prices_city',__('Cities prices', 'gsi'))
    //         ->add_fields(array(                
    //             Field::make('text','price_city',__('City', 'gsi') )
    //                 ->set_attribute('placeholder','Ростов-на-Дону')
    //                 ->set_width(100),
    //             Field::make('complex','price_type',__('Type', 'gsi'))
    //                 ->add_fields(array(
    //                     Field::make('text','type_title',__('Title', 'gsi') )
    //                         ->set_attribute('placeholder','Квартира')
    //                         ->set_width(50),
    //                     Field::make('text','type_subtitle',__('Subtitle', 'gsi') )
    //                         ->set_attribute('placeholder','Поверка счетчика')
    //                         ->set_width(50),
    //                     Field::make('text','type_price',__('Price', 'gsi') )
    //                         ->set_attribute('type', 'number')
    //                         ->set_width(50),
    //                     Field::make('text','type_text',__('Text', 'gsi') )
    //                         ->set_attribute('placeholder','Льгота 500 руб.')
    //                         ->set_width(50),
    //                 ))
    //             )),
    //     Field::make( 'rich_text', 'prices_text', __('Text block', 'gsi')),
    //     Field::make('complex','prices_collect',__('Colelctive prices', 'gsi'))
    //         ->add_fields(array(                
    //             Field::make('text','price_collective_title',__('City', 'gsi') )
    //                 ->set_attribute('placeholder','Коллкутивная заявка')
    //                 ->set_width(100),
    //             Field::make('complex','price_collect_city',__('Cities', 'gsi'))
    //                 ->add_fields(array(
    //                     Field::make('text','collect_title',__('City', 'gsi') )
    //                         ->set_attribute('placeholder','Ростов-на-Дону')
    //                         ->set_width(34),
    //                     Field::make('text','collect_subtitle',__('Subtitle', 'gsi') )
    //                         ->set_attribute('placeholder','От 10 квартир')
    //                         ->set_width(33),
    //                     Field::make('text','collect_price',__('Price', 'gsi') )
    //                         ->set_attribute('type', 'number')
    //                         ->set_width(33),    
    //                 ))
    //         ))
    // ) )  

    ->add_tab( __( 'Certificates', 'gsi' ), array(
        Field::make('complex','certificates',__('Certificates', 'gsi'))
            ->add_fields(array(
                Field::make('image','cert_img',__('IMG', 'gsi') )
                    ->set_value_type( 'url' )
                    ->set_width(20),
                Field::make('text','cert_alt',__('ALT', 'gsi') )
                    ->set_attribute('placeholder','Alt')
                    ->set_width(40),
                Field::make('text','cert_title',__('Title', 'gsi') )  
                    ->set_attribute('placeholder','Alt')
                    ->set_width(40),    
            ))       
    ) )

    ->add_tab( __( 'Request', 'gsi' ), array(              
        Field::make( 'text', 'request_cf_shortcode', __( 'CF Shortcode', 'gsi' ) )
            ->set_width(100)
            ->set_attribute( 'placeholder', '[contact-form-7 id="1" title="Contact form 1"]' ),        
    ) );