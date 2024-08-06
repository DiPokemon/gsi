<?php
/*
* Template name: Главная
*/
?>
<?php get_header(); ?>

<?php include 'template-parts/variables.php' ?>


<?php if($banners): ?>
    <section class="main_slider-block">
        <div class="main_slider-wrapper">  
        <?php foreach ( $banners as $banner ): ?>
            <div class="main_slide-item lazy-bg-img" style="background-image: url('<?= $banner['banner_bg'] ?>')">
                <div class="main_slide-body">
                    <div class="main_slide-left">
                        <div class="main_slide-title"><?= $banner['banner_title'] ?></div>
                        <div class="main_slide-subtitle"><?= $banner['banner_subtitle'] ?></div>
                        <div class="main_slide-description"><?= $banner['banner_text'] ?></div>
                        <?php if ($banner['banner_url']):?>
                            <a class="main_slide-btn btn" href="<?= $banner['banner_url'] ?>"><?php echo $banner['banner_btn_text'] ? $banner['banner_btn_text'] : 'Подробнее'; ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="main_slide-right">
                        <?php echo do_shortcode($cf7_shortcode); ?>
                    </div>
                </div>            
            </div>
        <?php endforeach ?>
        </div>
    </section>
<?php endif; ?>
<!--
<?php if($promo_title): ?>
    <section class="yellow">
        <div class="yellow_bg">
            <div class="container action_container">
                <div class="yellow_bg-wrapper">
                    <div class="blur_layout">
                    
                    </div>
                    <div class="section_title">
                        <h2 id="action_title"><?= $promo_title ?></h2>
                    </div>
                    <div class="subtitle_action">
                        <div class="subtitle_text">                        
                            <?= $promo_subtitle ?> <?= $month ?>
                        </div>
                        <div class="subtitle_desc subtitle">
                            <?= $promo_startext ?>
                        </div>
                    </div>
                    <div class="text_block-wrapper">
                        <?php foreach ($promo_cities as $city): ?>
                            <div class="text_block">
                                <h4 class="action_city">
                                    <?= $city['promo_city'] ?>
                                </h4>
                                <div class="action_item">
                                    <div class="action_place"><?= $city['promo_appart'] ?></div>
                                    <div class="action_prices">
                                        <span class="action_old-price"><?= $city['promo_appart_oldprice'] ?></span>
                                        <span class="action_new-price"><?= $city['promo_appart_newprice'] ?></span>
                                    </div>
                                </div>
                                <div class="action_item">
                                    <div class="action_place"><?= $city['promo_house'] ?></div>
                                    <div class="action_prices">
                                        <span class="action_old-price"><?= $city['promo_house_oldprice'] ?></span>
                                        <span class="action_new-price"><?= $city['promo_house_newprice'] ?></span>
                                    </div>
                                </div>
                                <div class="action_item">
                                    <div class="action_place"><?= $city['promo_well'] ?></div>
                                    <div class="action_prices">
                                        <span class="action_old-price"><?= $city['promo_well_oldprice'] ?></span>
                                        <span class="action_new-price"><?= $city['promo_well_newprice'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>                   
                    </div>
                </div>            
            </div> 
        </div>    
    </section>
<?php endif; ?>
                        -->
<?php if($testimonials): ?>
    <section>
        <div class="container">
            <div class="section_title">
                <h2><?= $testimonials_title ?></h2>
            </div>
            <div class="testimonials_slider">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div itemscope itemtype="https://schema.org/Review" class="testimonials_slider-item">
                        <meta itemprop="datePublished" content="<?= $testimonial['testimonial_date'] ?>"/>
                        <meta itemprop="name" content="<?= $testimonial['testimonial_name'] ?> <?= $testimonial['testimonial_second_name'] ?> о Городской Службе Измерений"/>
                        <link itemprop="url" href="<?= get_home_url(); ?>">
                        <div itemprop="reviewBody" class="testimonial_text"><?= $testimonial['testimonial_text'] ?></div>
                        <div itemprop="author" itemscope itemtype="https://schema.org/Person" class="testimonial_name"><span itemprop="name"><?= $testimonial['testimonial_name'] ?></span> <span itemprop="familyName"><?= $testimonial['testimonial_second_name'] ?></span></div>
                        <div class="testimonial_date subtitle"><?= $testimonial['testimonial_date'] ?></div>

                        <div class="d-none" itemprop="itemReviewed" itemscope itemtype="https://schema.org/Organization">
                            <meta itemprop="name" content="Отзыв о компании ГСИ">
                            <meta itemprop="telephone" content="<?= $contacts_main_phone_href ?>">
                            <link itemprop="url" href="<?= get_home_url(); ?>"/>
                            <meta itemprop="email" content="<?= $contacts_mail ?>">
                                <p itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                    <meta itemprop="addressLocality" content="<?= $address_city ?>">
                                    <meta itemprop="streetAddress" content="<?= $address_street ?>, <?= $address_building ?>">
                                </p>
                        </div>
                        <div class="d-none" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                            <meta itemprop="worstRating" content="1">
                            <meta itemprop="ratingValue" content="<?= $testimonial['testimonial_rating'] ?>">
                            <meta itemprop="bestRating" content="5"/>
                        </div>
                    </div>        
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif ?>


<section>
    <div class="container">
        <div class="section_title">
            <h2><?= $prices_title ?></h2>
        </div>  

        <?php foreach($prices_city as $city): ?>
            <div class="main_price-city">
                <div class="city-title">
                    <h3><?= $city['price_city'] ?></h3>
                </div>
                <div class="main_price-table-slider">
                    <?php foreach($city['price_type'] as $price_type): ?>
                        <div class="price_slider-item apparts">
                            <div class="price_slider-item-top">
                                <div class="price_item-header">
                                    <div class="price_item-title"><?= $price_type['type_title'] ?></div>
                                    <div class="price_item-subtitle subtitle"><?= $price_type['type_subtitle'] ?></div>
                                </div>

                                <div class="price_item-body">
                                    <div class="price_item-price">
                                        <div class="ruble_symbol">₽</div>
                                        <div class="price"><?= $price_type['type_price'] ?></div>
                                    </div>
                                    <div class="price_item-advantages">
                                        <div class="advantages_icon"><i aria-hidden="true" class="fas fa-check-circle"></i></div>
                                        <div class="advantages_text"><?= $price_type['type_text'] ?></div>
                                    </div>                        
                                </div>
                            </div>
                            <div class="price_slider-item-bottom">
                                <div class="price_item-btn">
                                    <a class="btn" href="<?= $price_btn_link ?>"><?= $price_btn_text ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="text_block">
            <?= $prices_text ?>
        </div>
        <div class="main_price-city">
            <div class="city-title">
                <h3><?= $collect_title ?></h3>
            </div>
            <div class="main_price-collect-slider">
                <?php foreach($prices_collect as $collect): ?>
                    <div class="price_slider-item apparts">
                        <div class="price_slider-item-top">
                            <div class="price_item-header">
                                <div class="price_item-title"><?= $collect['collect_city'] ?></div>
                                <div class="price_item-subtitle subtitle"><?= $collect['collect_subtitle'] ?></div>
                            </div>

                            <div class="price_item-body">
                                <div class="price_item-price">
                                    <div class="ruble_symbol">₽</div>
                                    <div class="price"><?= $collect['collect_price'] ?></div>
                                </div>                                                    
                            </div>
                        </div>
                        <div class="price_slider-item-bottom">
                            <div class="price_item-btn">
                                <a class="btn" href="<?= $price_btn_link ?>"><?= $price_btn_text ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="text_block-wrapper">
            <div class="text_block">
                <?= $prices_left_text ?>
            </div>
            <div class="text_block">
                <?= $prices_right_text ?>
            </div>
        </div>
        <p class="color_gray align-center"><?= $prices_bottom_text ?></p>
    </div>
</section>

<section class="warning_info">
    <div class="container">
        <div class="text_block-wrapper">
            <div class="text_block">
                <p class="text_block-header color_red"><?= $important_title ?></p>
                <?= $important_text ?>
            </div>
            <div class="text_block">
                <p class="text_block-header color_green"><?= $useful_title ?></p>
                <?= $useful_text ?>
            </div>
        </div>
    </div>

</section>

<section class="yellow">
    <div class="yellow_bg">
        <div class="container">
            <div class="yellow_bg-wrapper">
                <div class="section_title">
                    <h2><?= $about_title ?></h2>
                </div>
                <div class="about_text">
                    <?= $about_text ?>                
                </div>
                <div class="about_slider"> 
                    <?php foreach ( $certificates as $cert ): ?>
                        <div class="about_slider-item">
                            <figure>
                                <a rel="lightbox" class="glightbox" href="<?= $cert['cert_img'] ?>">
                                    <img loading="lazy" rel="lightbox" class="about_slider-img" src="<?= $cert['cert_img'] ?>" alt="<?= $cert['cert_ialt'] ?>" title="<?= $cert['cert_title'] ?>"> 
                                </a>   
                            </figure> 
                        </div>
                    <?php endforeach ?>
                </div>             
            </div>
        </div>
    </div> 
</section>

<section>
    <div class="container">
        <div class="section_title">
            <h2><?= $advantages_title ?></h2>
        </div> 
        <div class="benefits_grid">
            <?php foreach($advantages as $adv): ?>
                <div class="benefits_item">
                    <div class="benefits_icon">
                        <?= $adv['advantage_icon'] ?>
                    </div>
                    <div class="benefits_text">
                        <?= $adv['advantage_text'] ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php include 'template-parts/request.php' ?>

<section>
    <div class="container">
        <div class="section_title">
            <h2><?= $steps_title ?></h2>
        </div>
        <div class="steps_wrapper steps_wrapper-slider">
            <?php foreach ( $steps as $step ): ?>
                <div class="step_item">
                    <div class="step_half">
                        <div class="step_icon">
                            <?= $step['step_icon'] ?>
                        </div>
                        <div class="step_title">
                            <?= $step['step_title'] ?>
                        </div>
                    </div>
                    <div class="step_half">
                        <div class="step_text">
                            <?= $step['step_text'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>       
    </div>
</section>

<section class="yellow">
    <div class="yellow_bg">
        <div class="container">
            <div class="yellow_bg-wrapper">
                <div class="section_title">
                    <h2><?= $services_title ?></h2>
                </div>
                <div class="services_wrapper services_wrapper-slider">
                  <?php foreach ( $services as $service ): ?>
                    <div class="service_item">
                        <div class="services_column half_column">
                            <img loading="lazy" src="<?= $service['image'] ?>" alt="<?= $service['img_alt'] ?>" title="<?= $service['img_title'] ?>">
                        </div>  
                        <div class="services_column half_column">
                            <h2><?= $service['title'] ?></h2>
                            <?= $service['text'] ?>
                        </div> 
                    </div>    
                  <?php endforeach ?>
                </div>               
            </div>
        </div>
    </div> 
</section>

<section>
    <div class="container">
        <div class="section_title">
            <h2><?= $faq_title ?></h2>
        </div>
        <div class="faq_wrapper" itemscope itemtype="https://schema.org/FAQPage">
            <div class="faq_item-sizer"></div>
            <?php foreach ($faqs as $faq): ?>
                <div class="faq_item text_block">
                    <span itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><p itemprop="name"><?= $faq['question'] ?></p>
                        <span itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"> 
                            <span itemprop="text">
                                <?= $faq['answer'] ?>
                            </span>
                        </span>     
                    </span>   
                </div>
            <?php endforeach ?>                           
        </div>
    </div>
</section>
<?php get_footer(); ?>