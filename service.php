<?php
/*
* Template name: Услуга
*/
?>

<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>
<?php while (have_posts()) : the_post();
    $image_id = get_post_thumbnail_id();
    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
    $image_title = get_the_title($image_id);
    
?>   

<section class="page_header">
    <div class="container">
        <h1 itemprop="headline" class="page-header__title"><?php the_title(); ?></h1>       
        <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>                      
    </div>                
</section>

<section>
    <div class="container text_page">
        <div class="post_top-wrapper">
            <div class="post_img">
                <img loading="lazy" src="<?php the_post_thumbnail_url('full') ?>" alt="<?= $image_alt ?>" title="<?= $image_title ?>"> 
            </div>                                               
            <div class="post_text-top">
                <?= $service_top_text ?>
            </div>
        </div>   
    </div>
</section>

<section>
    <div class="container text_page">
        <div itemprop="articleBody" class="post_top-text">
            <?php the_content(); ?>
        </div>   
    </div>
</section>

<?php include 'template-parts/request.php' ?>

<?php if ($service_gallery || $service_bottom_text):?>
<section>
    <div class="container text_page">
        <div  class="post_top-text">                       
            <?php if( $service_gallery ): ?>
                <div class="post_gallery-slider">
                    <?php foreach( $service_gallery as $gallery ): ?>
                        <div class="post_gallery-item">
                            <img src="<?= $gallery['image']; ?>" alt="<?= $gallery['alt']; ?>" title="<?= $gallery['title']; ?>"/>  
                        </div>
                    <?php endforeach; ?>
                </div>                            
            <?php endif; ?>
            <?php if( $service_bottom_text ):?>
                <div itemprop="articleBody" class="post_bottom-text"><?= $service_bottom_text ?></div>
            <?php endif ?>                
        </div>   
    </div>
</section>
<?php endif ?>

<!-- SchemaOrg  -->
<meta itemprop="author" content="<?= $org_name ?>">
<meta itemprop="datePublished" content="<?php echo get_the_date('j.m.Y'); ?>">
<meta itemprop="dateModified" content="<?php the_modified_time('j.m.Y');?>">
<meta itemprop="image" content="<?php the_post_thumbnail_url('full') ?>">
<meta itemprop="articleSection" content="Услуги">

<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <link itemprop="url" href="<?= get_home_url(); ?>">
    <meta itemprop="name" content="<?= $org_name ?>">
    <meta itemprop="description" content="Поверка счетчиков воды в Ростове-на-Дону">
    <meta itemprop="address" content="<?= $address_city ?>, <?= $address_street ?>, <?= $address_building ?>">
    <meta itemprop="telephone" content="<?= $contacts_main_phone_href ?>">      
</div>
<?php endwhile; ?>
<?php get_footer(); ?>