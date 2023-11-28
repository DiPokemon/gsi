<?php
  /*GENERAL*/
  $head_code = carbon_get_theme_option( 'head_code' );
  $footer_code = carbon_get_theme_option( 'footer_code' );
  $_monthsList = array(
    "1"=>"Января",
    "2"=>"Февраля",
    "3"=>"Марта",
    "4"=>"Апреля",
    "5"=>"Мая",
    "6"=>"Июня",
    "7"=>"Июля",
    "8"=>"Августа",
    "9"=>"Сентября",
    "10"=>"Октября",
    "11"=>"Ноября",
    "12"=>"Декабря"
  );    
  $month = $_monthsList[date("n")];

  /* CONTACTS */
  $off_org_name = carbon_get_theme_option( 'off_org_name' );
  $org_name = carbon_get_theme_option( 'org_name' );
  $contacts_main_phone_front = phone_front(carbon_get_theme_option( 'main_phone' ));
  $contacts_add_phone_front = phone_front(carbon_get_theme_option( 'second_phone' ));
  $contacts_main_phone_href = phone_href(carbon_get_theme_option( 'main_phone' ));
  $contacts_add_phone_href = phone_href(carbon_get_theme_option( 'second_phone' ));
  $contacts_mail = carbon_get_theme_option( 'email' );
  $contacts_vk = carbon_get_theme_option( 'vk' );
  $contacts_main_wa = phone_wa(carbon_get_theme_option( 'main_phone' ));
  $contacts_add_wa = phone_wa(carbon_get_theme_option( 'second_phone' ));
  $contacts_tg = carbon_get_theme_option( 'tg' );
  $contacts_inst = carbon_get_theme_option( 'inst' );
  $contacts_fb = carbon_get_theme_option( 'fb' );
  $work_time = carbon_get_theme_option( 'work_time' );
  /* ADRES */
  $address_city = carbon_get_theme_option( 'address_city' );
  $address_street = carbon_get_theme_option( 'address_street' );
  $address_building = carbon_get_theme_option( 'address_build' );
  $address_zipcode = carbon_get_theme_option( 'address_index' );
  $address_latitude = carbon_get_theme_option( 'address_latitude' );
  $address_longitude = carbon_get_theme_option( 'address_longitude' );  
 
  
  $services = carbon_get_theme_option( 'main_services' );
  $faq_title = carbon_get_theme_option( 'main_faq_title' );
  $faq_items = carbon_get_theme_option( 'main_faq' );

  /* TESTIMONIALS */
  $testimonials_title = carbon_get_the_post_meta( 'estimonials_title' );
  $testimonials = carbon_get_the_post_meta( 'testimonials' );

  /* CERTIFICATES */
  $certificates = carbon_get_theme_option( 'certificates' );

  /* REQUEST */ 
  $request_title = carbon_get_theme_option( 'request_title' );
  $request_text = wpautop(carbon_get_theme_option( 'request_text' ));
  $cf7_shortcode = carbon_get_theme_option( 'request_cf_shortcode' );


  /* MAIN PAGE */
  $banners = carbon_get_the_post_meta( 'main_banners' );

  $promo_title = carbon_get_the_post_meta( 'promo_title' );
  $promo_subtitle = carbon_get_the_post_meta( 'promo_subtitle' );
  $promo_startext = carbon_get_the_post_meta( 'promo_startext' );
  $promo_cities = carbon_get_the_post_meta( 'promo_cities' );

  $prices_title = carbon_get_the_post_meta( 'prices_title' ); 
  $price_btn_link = carbon_get_the_post_meta( 'prices_btn_link' );
  $price_btn_text = carbon_get_the_post_meta( 'prices_btn_text' );
  $prices_city = carbon_get_the_post_meta( 'prices_city' );
  $prices_text = wpautop(carbon_get_the_post_meta( 'prices_text' ));
  $collect_title = carbon_get_the_post_meta( 'price_collective_title' );
  $prices_collect = carbon_get_the_post_meta( 'price_collect' );

  $prices_left_text = wpautop(carbon_get_the_post_meta( 'prices_text_left' ));
  $prices_right_text = wpautop(carbon_get_the_post_meta( 'prices_text_right' ));
  $prices_bottom_text = carbon_get_the_post_meta( 'prices_text_bottom' );

  $important_title = carbon_get_the_post_meta( 'important_title' );
  $important_text = wpautop(carbon_get_the_post_meta( 'important_text' ));
  $useful_title = carbon_get_the_post_meta( 'useful_title' );
  $useful_text = wpautop(carbon_get_the_post_meta( 'useful_text' ));

  $about_title = carbon_get_the_post_meta( 'about_title' );
  $about_text = wpautop(carbon_get_the_post_meta( 'about_text' ));

  $advantages_title = carbon_get_the_post_meta( 'advantages_title' );
  $advantages = carbon_get_the_post_meta( 'advantages_items' );

  

  $steps_title = carbon_get_the_post_meta( 'steps_title' );
  $steps = carbon_get_the_post_meta( 'steps_items' );

  $services_title = carbon_get_the_post_meta( 'services_title' );
  $services = carbon_get_the_post_meta( 'services_items' );

  $faq_title = carbon_get_the_post_meta( 'faq_title' );
  $faqs = carbon_get_the_post_meta( 'faq_items' );
  
 /* SERVICE */
  $service_top_text = carbon_get_the_post_meta( 'service_top_text' );
  $service_bottom_text = carbon_get_the_post_meta( 'service_bottom_text' );
  $service_gallery = carbon_get_the_post_meta( 'service_gallery' );

  /* ABOUT */
  $accred_img = carbon_get_the_post_meta( 'about_image' );
  $accred_alt = carbon_get_the_post_meta( 'about_img_alt' );
  $accred_title = carbon_get_the_post_meta( 'about_img_title' );
  $accred_text = carbon_get_the_post_meta( 'about_img_desc' );
  $about_gallery = carbon_get_the_post_meta( 'about_gallery' );
  $about_cred = carbon_get_the_post_meta( 'about_credentials' );
  $map_text = carbon_get_the_post_meta( 'about_map_text' );
  $map_img = carbon_get_the_post_meta( 'map_image' );
  $map_code = carbon_get_the_post_meta( 'about_map_code' );

  /* OTHER */ 
  $html_sitemap_link = carbon_get_theme_option( 'html_sitemap_link' );
  $html_sitemap_text = carbon_get_theme_option( 'html_sitemap_text' );
  $policy_link = carbon_get_theme_option( 'policy_privacy_link' );
  $policy_text = carbon_get_theme_option( 'policy_privacy_text' );
  $copyright = carbon_get_theme_option( 'copyright' );
  
  $text_404 = carbon_get_theme_option( 'text_404' );
?>