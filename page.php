<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gsi
 */


 get_header(); ?>
 <?php include 'template-parts/variables.php' ?>
 
 <section class="page_header">
	 <div class="container">
		 <h1 itemprop="headline" class="page-header__title"><?php the_title(); ?></h1>       
		 <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>                      
	 </div>                
 </section>
 
 <section>
	 <div class="container text_page">
		 <div class="post_top-text">
			 <?php the_content(); ?>
		 </div>   
	 </div>
 </section>
 <?php get_footer(); ?>
