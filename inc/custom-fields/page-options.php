<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', __( 'Main page fields', 'gsi' ) )     
    ->show_on_template('home.php')
    ->add_tab( __( 'Banners', 'gsi' ), array(
        Field::make( 'complex', 'main_banners',  __('Main banners', 'gsi') )
            ->add_fields('banner_items',__('Banner', 'gsi'), array(                
                Field::make( 'image', 'banner_bg', __( 'Banner background', 'gsi' ) )
                    ->set_value_type( 'url' )
                    ->set_width(20),
                Field::make( 'text', 'banner_title', __( 'Title', 'gsi' ) )
                    ->set_attribute( 'placeholder', 'Title...' )
                    ->set_width(40),  
                Field::make( 'text', 'banner_subtitle', __( 'Subtitle', 'gsi' ) )
                    ->set_attribute( 'placeholder', 'Subtitle...' )
                    ->set_width(40), 
                Field::make( 'rich_text', 'banner_text', __( 'Text', 'gsi' ) )
                    ->set_attribute( 'placeholder', 'Text...' )
                    ->set_width(60),    
                Field::make( 'text', 'banner_url', __( 'URL', 'gsi' ) )
                    ->set_attribute( 'placeholder', 'https://site.ru/example/' )
                    ->set_width(20),
                Field::make( 'text', 'banner_btn_text', __( 'Text', 'gsi' ) )
                    ->set_attribute( 'placeholder', 'Подробнее' )
                    ->set_width(20),
            ) ), 
    ) )

    ->add_tab( __( 'Promo', 'gsi' ), array(
        Field::make( 'text', 'promo_title', __( 'Title', 'cooklook' ) )
            ->set_attribute('placeholder', 'Акция')         
            ->set_width(33),
        Field::make( 'text', 'promo_subtitle', __( 'SubTitle', 'cooklook' ) ) 
            ->set_attribute('placeholder', 'Только до конца ')                
            ->set_width(33),
        Field::make( 'text', 'promo_startext', __( 'Startext', 'cooklook' ) )
            ->set_attribute('placeholder', '*при оставлении заявки на сайте')           
            ->set_width(33),
        Field::make( 'complex', 'promo_cities',  __('Promo Cities', 'gsi') )
            ->add_fields('city_items',__('City', 'gsi'), array(
                Field::make( 'text', 'promo_city', __( 'City', 'gsi' ) )                    
                    ->set_width(100),
                Field::make( 'text', 'promo_appart', __( 'Appart', 'gsi' ) )
                    ->set_attribute( 'placeholder', 'Квартира' )
                    ->set_width(34),
                Field::make( 'text', 'promo_appart_oldprice', __( 'Appart old price', 'gsi' ) )
                    
                    ->set_width(33),
                Field::make( 'text', 'promo_appart_newprice', __( 'Appart new price', 'gsi' ) )
                    
                    ->set_width(33), 
                Field::make( 'text', 'promo_house', __( 'House', 'gsi' ) )
                    ->set_attribute( 'placeholder', 'Дом' )
                    ->set_width(33),   
                Field::make( 'text', 'promo_house_oldprice', __( 'House old price', 'gsi' ) )
                    
                    ->set_width(33),
                Field::make( 'text', 'promo_house_newprice', __( 'Houset new price', 'gsi' ) )
                    
                    ->set_width(33),   
                Field::make( 'text', 'promo_well', __( 'Well', 'gsi' ) )
                    ->set_attribute( 'placeholder', 'Колодец' )
                    ->set_width(33),   
                Field::make( 'text', 'promo_well_oldprice', __( 'Well old price', 'gsi' ) )
                    
                    ->set_width(33),
                Field::make( 'text', 'promo_well_newprice', __( 'Well new price', 'gsi' ) )
                    
                    ->set_width(33),         
            ) ),
    ) )

    ->add_tab( __( 'Testimonials', 'gsi' ), array(
        Field::make( 'text', 'testimonials_title', __('Section title', 'gsi')),        
        Field::make('complex','testimonials',__('Отзыв', 'gsi'))
            ->add_fields(array(                
                Field::make('text','testimonial_name',__('Имя', 'gsi') )
                    ->set_width(50),
                Field::make('text','testimonial_second_name',__('Фамилия', 'gsi') )
                    ->set_width(50),
                Field::make('textarea','testimonial_text',__('Текст', 'gsi'))
                    ->set_width(60)
                    ->set_rows(1),
                Field::make('date','testimonial_date',__('Дата', 'gsi'))
                    ->set_storage_format( 'd.m.Y' )
                    ->set_width(30),
                Field::make('text','testimonial_rating',__('Оценка', 'gsi'))
                    ->set_attribute('type', 'number')
                    ->set_attribute('min', '0')
                    ->set_attribute('max', '5')
                    ->set_width(10),
            ))
    ) )   

    ->add_tab( __( 'Prices', 'gsi' ), array(
        Field::make( 'text', 'prices_title', __('Section title', 'gsi')),
        Field::make( 'text', 'prices_btn_link', __('Btn link', 'gsi'))
            ->set_width(50),
        Field::make( 'text', 'prices_btn_text', __('Btn text', 'gsi'))
            ->set_width(50),
        Field::make('complex','prices_city',__('Cities prices', 'gsi'))
            ->add_fields(array(                
                Field::make('text','price_city',__('City', 'gsi') )
                    ->set_attribute('placeholder','Ростов-на-Дону')
                    ->set_width(100),
                Field::make('complex','price_type',__('Type', 'gsi'))
                    ->add_fields(array(
                        Field::make('text','type_title',__('Title', 'gsi') )
                            ->set_attribute('placeholder','Квартира')
                            ->set_width(25),
                        Field::make('text','type_subtitle',__('Subtitle', 'gsi') )
                            ->set_attribute('placeholder','Поверка счетчика')
                            ->set_width(25),
                        Field::make('text','type_price',__('Price', 'gsi') )
                            ->set_attribute('type', 'number')
                            ->set_width(25),
                        Field::make('text','type_text',__('Text', 'gsi') )
                            ->set_attribute('placeholder','Льгота 500 руб.')
                            ->set_width(25),
                    ))
                )),
        Field::make( 'rich_text', 'prices_text', __('Text block', 'gsi')), 
        Field::make('text','price_collective_title',__('City', 'gsi') )
            ->set_attribute('placeholder','Коллективная заявка')
            ->set_width(100),        
        Field::make('complex','price_collect',__('Cities', 'gsi'))
            ->add_fields(array(
                Field::make('text','collect_city',__('City', 'gsi') )
                    ->set_attribute('placeholder','Ростов-на-Дону')
                    ->set_width(34),
                Field::make('text','collect_subtitle',__('Subtitle', 'gsi') )
                    ->set_attribute('placeholder','От 10 квартир')
                    ->set_width(33),
                Field::make('text','collect_price',__('Price', 'gsi') )
                    ->set_attribute('type', 'number')
                    ->set_width(33),    
            ))
            
    ) )

    ->add_tab( __( 'Prices texts', 'gsi' ), array( 
        Field::make( 'rich_text', 'prices_text_left', __('Text block', 'gsi')), 
        Field::make( 'rich_text', 'prices_text_right', __('Text block', 'gsi')), 
        Field::make( 'rich_text', 'prices_text_bottom', __('Text block', 'gsi')), 
    ))

    ->add_tab( __( 'Info blocks', 'gsi' ), array( 
        Field::make( 'text', 'important_title', __('Left block title', 'gsi'))
            ->set_width(25), 
        Field::make( 'rich_text', 'important_text', __('Left Text block', 'gsi'))
            ->set_width(75), 
        Field::make( 'text', 'useful_title', __('Right block title', 'gsi'))
            ->set_width(25), 
        Field::make( 'rich_text', 'useful_text', __('Right Text block', 'gsi'))
            ->set_width(75), 
    ))

    ->add_tab( __( 'About', 'gsi' ), array( 
        Field::make( 'text', 'about_title', __('About title', 'gsi'))
            ->set_width(25), 
        Field::make( 'rich_text', 'about_text', __('Left Text block', 'gsi'))
            ->set_width(75),         
    ))

    ->add_tab( __( 'Advantages', 'gsi' ), array( 
        Field::make( 'text', 'advantages_title', __('Advantages title', 'gsi'))
            ->set_attribute('placeholder', 'Преимущества')
            ->set_width(25),
        Field::make('complex','advantages_items',__('Advantages', 'gsi'))
            ->add_fields(array(
                Field::make( 'text', 'advantage_icon', __('Icon', 'gsi'))
                    ->set_attribute('placeholder', '<i class="fa-brands fa-whatsapp"></i>')
                    ->set_width(50), 
                Field::make( 'text', 'advantage_text', __('Text', 'gsi'))
                    ->set_width(50),                    
            ))       
    ))

    ->add_tab( __( 'Request', 'gsi' ), array( 
        Field::make( 'text', 'request_title', __('Request title', 'gsi'))
            ->set_attribute('placeholder', 'Оставить заявку')
            ->set_width(25),
        Field::make( 'rich_text', 'request_text', __('Request text', 'gsi'))            
            ->set_width(25),      
    ))    

    ->add_tab( __( 'Steps', 'gsi' ), array( 
        Field::make( 'text', 'steps_title', __('Title', 'gsi'))
            ->set_attribute('placeholder', 'Этапы проверки'), 
        Field::make('complex','steps_items',__('Steps', 'gsi'))
            ->add_fields(array(
                Field::make( 'text', 'step_icon', __('Icon', 'gsi'))
                    ->set_attribute('placeholder', '<i class="fa-brands fa-whatsapp"></i>')
                    ->set_width(20), 
                Field::make( 'text', 'step_title', __('Title', 'gsi'))
                    ->set_attribute('placeholder', 'Title')
                    ->set_width(30), 
                Field::make('rich_text','step_text',__('Text', 'gsi') )
                    ->set_width(50),                   
            ))              
    ))

    ->add_tab( __( 'Services', 'gsi' ), array( 
        Field::make( 'text', 'services_title', __('Title', 'gsi'))
            ->set_attribute('placeholder', 'Наши услуги'), 
        Field::make('complex','services_items',__('Services', 'gsi'))
            ->add_fields(array(
                Field::make( 'image', 'image', __('Image', 'gsi'))
                    ->set_value_type( 'url' )
                    ->set_width(20),                    
                Field::make( 'text', 'img_alt', __('ALT', 'gsi'))                    
                    ->set_width(40), 
                Field::make( 'text', 'img_title', __('IMG Title', 'gsi'))                    
                    ->set_width(40), 
                Field::make( 'text', 'title', __('Title', 'gsi'))                    
                    ->set_width(40), 
                Field::make('rich_text','text',__('Text', 'gsi') )
                    ->set_width(60),                   
            ))              
    ))

    ->add_tab( __( 'FAQ', 'gsi' ), array( 
        Field::make( 'text', 'faq_title', __('Title', 'gsi'))
            ->set_attribute('placeholder', 'Частые вопросы'), 
        Field::make('complex','faq_items',__('Services', 'gsi'))
            ->add_fields(array(
                Field::make('rich_text','question',__('Question', 'gsi') )
                    ->set_width(50),      
                Field::make('rich_text','answer',__('Answer', 'gsi') )
                    ->set_width(50),                   
            ))              
    ));

Container::make( 'post_meta', __( 'Service fields', 'gsi' ) )     
    ->show_on_template('service.php')
    ->add_tab( __( 'Content', 'gsi' ), array( 
        Field::make( 'rich_text', 'service_top_text', __('Service top text', 'gsi')),
        Field::make( 'rich_text', 'service_bottom_text', __('Service bottom text', 'gsi')),
                    
    ))
    
    ->add_tab( __( 'Images', 'gsi' ), array( 
        Field::make('complex','service_gallery',__('Gallery', 'gsi'))
            ->add_fields(array(
                Field::make('image','image',__('Image', 'gsi') )
                    ->set_value_type( 'url' )
                    ->set_width(20),      
                Field::make('text','alt',__('Alt', 'gsi') )
                    ->set_width(40),     
                Field::make('text','title',__('Title', 'gsi') )
                    ->set_width(40),               
            ))          
    ));

Container::make( 'post_meta', __( 'About fields', 'gsi' ) )     
    ->show_on_template('page-about.php')
    ->add_tab( __( 'Accred', 'gsi' ), array( 
        Field::make('image','about_image',__('Image', 'gsi') )
            ->set_value_type( 'url' )
            ->set_width(20),      
        Field::make('text','about_img_alt',__('Alt', 'gsi') )
            ->set_width(40),     
        Field::make('text','about_img_title',__('Title', 'gsi') )
            ->set_width(40), 
        Field::make('rich_text','about_img_desc',__('Text', 'gsi') )                              
    ))

    ->add_tab( __( 'Info', 'gsi' ), array( 
        Field::make('complex','about_gallery',__('Gallery', 'gsi'))
            ->add_fields(array(
                Field::make('image','image',__('Image', 'gsi') )
                    ->set_value_type( 'url' )
                    ->set_width(20),      
                Field::make('text','alt',__('Alt', 'gsi') )
                    ->set_width(40),     
                Field::make('text','title',__('Title', 'gsi') )
                    ->set_width(40),               
            )),        
        Field::make('rich_text','about_credentials',__('Credentials', 'gsi') )                              
    ))

    ->add_tab( __( 'Map', 'gsi' ), array(                       
        Field::make('rich_text','about_map_text',__('Map text', 'gsi') ),
        Field::make('image','map_image',__('Map Image', 'gsi') )
            ->set_value_type( 'url' )
            ->set_width(20),
        Field::make('textarea','about_map_code',__('Code', 'gsi') )
            ->set_width(80)                   
    ));






