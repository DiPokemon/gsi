<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gsi
 */

?>
<?php include 'template-parts/variables.php' ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header>            
        <div class="header_top">       
            <div class="container">
                <div class="header_wrapper">
                    <div class="header_left">
                        <div class="header_info-item">
                            <a href="mailto:<?= $contacts_mail ?>"><i aria-hidden="true" class="fas fa-envelope-open"></i> <?= $contacts_mail ?></a>
                        </div>
                        <div class="header_info-item">
                            <p><i aria-hidden="true" class="far fa-clock"></i> <?php echo $work_time ? $work_time : 'Без выходных с 8:00 до 20:00 | Прием онлайн заявок: 24/7' ?></p> 
                        </div>                                
                    </div>
                    <div class="header_right">
                        <div class="header_tel">
                            <a href="tel:<?= $contacts_main_phone_href ?>"><?= $contacts_main_phone_front ?></a>
                        </div>
                        <div class="header_tel">
                            <a href="tel:<?= $contacts_add_phone_href ?>"><?= $contacts_add_phone_front ?></a>
                        </div>
                    </div>  
                </div>
                <div class="header_top-mobile">
                    <div class="header_left logo_text"><?= $org_name ?></div>
                        <div class="header_right">
                            <a class="social_contacts-item" href="https://wa.clck.bar/<?= $contacts_main_wa ?>">
                                <i aria-hidden="true" class="fab fa-whatsapp"></i>
                            </a>
                            <a class="social_contacts-item" href="https://t.me/<?= $contacts_tg ?>">
                                <i aria-hidden="true" class="fab fa-telegram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

                <div class="header_bottom">   
                    <div class="container">
                        <div class="header_wrapper">
                            <div class="header_left">
                                <div class="logo_img"><?php the_custom_logo() ?></div>
                                <div class="logo_text"><?= $org_name ?></div>  
                            </div>
                            <div class="header_bottom-mobile">
                                <a class="tel_mobile" href="tel:<?= $contacts_main_phone_href ?>">
                                    <i aria-hidden="true" class="fas fa-phone"></i>
                                </a>     
                            </div>
                            
                            
                                <div class="header__burger">
                                    <i aria-hidden="true" class="fas fa-bars"></i>
                                </div>
                                <?php									
									$args = array(
										'container'       => 'nav',          
										'container_class' => 'header__menu menu',           
										'menu_class'      => 'menu__list',          
										'fallback_cb'     => 'wp_page_menu',            
										'link_class'     => 'menu__link',           
										'theme_location'  => 'main_menu',
										'add_li_class'    => 'menu__item',
										'echo'          => false,
									);
									$temp_menu = wp_nav_menu($args);
									preg_match_all("~<a (.*?)>(.*)</a>~", $temp_menu, $matches);
									foreach($matches[0] as $value){
										if(strpos($value, "<span") === false){
											$temp_value = preg_replace("~<a (.*?)>(.*)</a>~", "<a $1><span itemprop='name'>$2</span></a>", $value);
											$temp_menu = str_replace($value, $temp_value, $temp_menu);
										}else{
											$temp_value = str_replace("<span", "<span itemprop='name'", $value);
											$temp_menu = str_replace($value, $temp_value, $temp_menu);
										}
									}
									echo $temp_menu;                                    
                                ?>                            
                        </div>               
                    </div>    
                </div>                          
        </header>
