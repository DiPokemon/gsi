<?php include 'variables.php' ?>
<section id="contact" class="yellow">
    <div class="yellow_bg">
        <div class="container">
            <div class="yellow_bg-wrapper">
                <div class="section_title">
                    <h2><?= $request_title ?></h2>
                </div>
                <div class="order_wrapper">
                    <div class="order_column half_column">
                        <?= $request_text ?>
                        <p><a href="mailto:<?= $contacts_mail ?>"><?= $contacts_mail ?></a></p>
                        <p><a href="tel:<?= $contacts_main_phone_href ?>"><?= $contacts_main_phone_front ?></a></p>
                        <p><a href="tel:<?= $contacts_add_phone_href ?>"><?= $contacts_add_phone_front ?></a></p>
                        <div class="social_contacts">
                            <a class="social_contacts-item" href="https://wa.clck.bar/<?= $contacts_main_wa ?>">
                                <i aria-hidden="true" class="fab fa-whatsapp"></i>
                            </a>
                            <a class="social_contacts-item" href="https://t.me/<?= $contacts_tg ?>">
                                <i aria-hidden="true" class="fab fa-telegram"></i>
                            </a>
                            <a class="social_contacts-item" href="https://wa.clck.bar/<?= $contacts_add_wa ?>">
                                <i aria-hidden="true" class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>  
                    <div class="order_column half_column">
                        <?php echo do_shortcode($cf7_shortcode); ?>
                    </div>      
                </div>                
            </div>
        </div>
    </div> 
</section>