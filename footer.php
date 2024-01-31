<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gsi
 */

?>
<?php include 'template-parts/variables.php' ?>

</main>

<footer itemprop="mainContentOfPage" itemscope itemtype="https://schema.org/WPFooter">
  <div class="footer-top">
	 <div class="container">
		<div class="tag_slider">
		  <?php //do_shortcode('[topland_cloudtag]'); ?>
		</div>
		<div class="footer_body">
		<div class="logo_img"><?php the_custom_logo() ?></div>
		  <?php

			$args = array(
				'container'       => 'nav',          
				'container_class' => 'footer__menu menu',           
				'menu_class'      => 'menu__list',          
				'fallback_cb'     => 'wp_page_menu',            
				'link_class'     => 'menu__link',           
				'theme_location'  => 'footer_menu',
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
		  <div class="footer-top__telefon">
			<div class="footer_tel">
			  <a href="tel:<?= $contacts_main_phone_href ?>"><?= $contacts_main_phone_front ?></a>
			</div>
			<div class="footer_tel">
			  <a href="tel:<?= $contacts_add_phone_href ?>"><?= $contacts_add_phone_front ?></a>
			</div>
		  </div>
		</div>
		<div class="footer_body display_mobile">
		  <?php echo $temp_menu;?>
		</div>
	  </div>
  </div>
  <div class="footer-bottom">
	 <div class="container">
		<div class="footer_body">
		  <span>© 2020. <?=  $off_org_name ?></span>
		  <div class="footer_links">
				<a href="<?= $policy_link ?>"><?= $policy_text ?></a>
				<a href="<?= $html_sitemap_link ?>"><?= $html_sitemap_text ?></a>
		  </div>
		  
		</div>
	</div>  
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>