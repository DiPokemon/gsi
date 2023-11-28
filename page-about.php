<?php
/*
* Template name: О нас
*/
?>
<?php get_header(); ?>
<?php include 'template-parts/variables.php' ?>
<section class="page_header">
    <div class="container">
        <h1 itemprop="headline" class="page-header__title"><?php the_title(); ?></h1>       
        <?php if ( function_exists( 'breadcrumbs' ) ) breadcrumbs(); ?>                      
    </div>                
</section>

<section>
    <div class="container">
        <div class="about-wrapper">
          <!--<div class="section_title"><h1><?php the_title(); ?></h1></div>-->
          <div class="about_text"> 
            <?php the_content() ?>
          </div>
          <div class="about_slider"> 
            <?php foreach ( $certificates as $cert ): ?>
                <div class="about_slider-item">
                    <figure>
                        <a rel="lightbox" class="glightbox" href="<?= $cert['cert_img'] ?>">
                            <img loading="lazy" rel="lightbox" class="about_slider-img" src="<?= $cert['cert_img'] ?>" alt="<?= $cert['cert_alt'] ?>" title="<?= $cert['cert_title'] ?>"> 
                        </a>   
                    </figure> 
                </div>
            <?php endforeach ?>
            </div>            
        </div>
    </div>
</section>    

<section>
    <div class="container">
        <div class="about-inf">
              <div class="about-img">
                <img loading="lazy" src="<?= $accred_img ?>" alt="<?= $accred_alt ?>" title="<?= $accred_title ?>">
              </div>
              <div class="about-href">
                <?= $accred_text ?>
              </div>
        </div> 
    </div>
</section>

<section class="yellow">
    <div class="yellow_bg">
      <div class="container">
          <div class="yellow_bg-wrapper acts_wrapper">
              <div class="acts-slider">
                <?php foreach ($about_gallery as $image): ?>
                    <div class="acts_item">
                        <img src="<?= $image['image'] ?>" alt="<?= $image['alt'] ?>" title="<?= $image['title'] ?>"/>
                    </div>
                <?php endforeach ?>
              </div>
              <div class="contact">                
                <?= $about_cred ?>                
              </div>
          </div>
      </div> 
    </div>
</section>    

<?php include 'template-parts/request.php' ?>

<section class="map_section">
    <div class="map_text">
        <?= $map_text ?>
    </div>
    <div id="map_container" class="map container-fluid" style="background-image: url(<?= $map_img ?>);">  
        <script id="ymap_lazy" type="text/javascript" charset="utf-8" async data-src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A66c41d9cc7dcee79558d6c1878f824fb9f46b8a7f7e652a3f7989013889c06e5&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</section>         

<?php get_footer(); ?>