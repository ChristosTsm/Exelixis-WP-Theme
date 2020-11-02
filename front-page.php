<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="intro-section">

    <img class="ex-e-bg ex-ml" src="<?php echo get_stylesheet_directory_uri() . '/assets/e-bg-image.png' ?>" alt="Exelixis" >

    <div class="d-flex ex-about-section container">


        <div class="ex-landscape">

            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img-landscape.png' ?>" alt="exelixis image" >

        </div>

        <div class="ex-portrait" data-aos="fade-up" data-aos-anchor-placement="center-bottom">

            <div class="inner-info">

                <h2  data-aos="fade-in" data-aos-delay="500"><?php _e('Ποιοί είμαστε' , 'exelixis-circus'); ?></h2>

                <p  data-aos="fade-in" data-aos-delay="550"><?php _e(get_field('poioi_eimaste'), 'exelixis-circus'); ?></p>

                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/idrogeios.png' ?>" alt="Υδρόγειος">

            </div>

        </div>

        <div class="ex-btn-about" data-aos="fade-right" data-aos-delay="650">

            <a class="ex-btn-link" href="#">

                <img class="btn-img-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/perissotera-arrow.svg' ?>" alt="About us">

                <?php _e('Περισσοτερα', 'exelixis-circus'); ?>

            </a>  

        </div>
        
    </div>

</section>


<section class="services-section">

    <?php get_template_part('includes/home','services'); ?>
  
</section>


<section class="mobile-hidden">

    <div class="ex-banners d-flex-mobile d-flex justify-content-center">

        <div id="watt" class="banner-item-watt">

            <p class="ex-banner-title"><?php _e('Επισημοι συνεργατες της','exelixis-circus'); ?></p>

            <a href="https://www.watt-volt.gr/">

                <img class="ex-banner-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/wattvolt-logo.svg' ?>">

            </a>

        </div>

        <div id="spitogatos" class="banner-item-spitogatos">

            <p class="ex-banner-title"><?php _e('τα ακινητα που διαχειριζομαστε','exelixis-circus'); ?></p>

            <a href="https://www.spitogatos.gr/">

                <img class="ex-banner-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/spitogatos-logo.svg' ?>">

            </a>

        </div>

    </div>
    
</section>

<section class="d-flex-mobile desktop-hidden">

    <div id="watt" class="banner-item-watt">

        <p class="ex-banner-title"><?php _e('Επισημοι συνεργατες της', 'exelixis-circus'); ?></p>

        <a href="https://www.watt-volt.gr/">

            <img class="ex-banner-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/wattvolt-logo.svg' ?>">

        </a>

    </div>

    <div id="spitogatos" class="banner-item-spitogatos">

        <p class="ex-banner-title"><?php _e('τα ακινητα που διαχειριζομαστε', 'exelixis-circus'); ?></p>

        <a href="https://www.spitogatos.gr/">

            <img class="ex-banner-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/spitogatos-logo.svg' ?>">

        </a>

    </div>

</section>


<section class="ex-pleonektimata ex-ml ex-mr">

    <h1><?php _e('Τα πλεονεκτήματα μας','exelixis-circus'); ?></h1>

    <div class="ex-pleonektimata-banners">

        <div class="ex-pleonektimata-item"  data-aos="fade-up">

            <img class="ex-p-number" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-number-1.svg' ?>" alt="1">

            <img class="ex-p-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-1.png' ?>" alt="πλεονεκτήματα εξέλιξις">  

            <p><?php _e(the_field('pleonektimata_1'), 'exelixis-circus'); ?></p>

        </div>

        <div class="ex-pleonektimata-item"  data-aos="fade-up" data-aos-delay="500">

            <img class="ex-p-number" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-number-2.svg' ?>" alt="2">

            <img class="ex-p-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-2.png' ?>" alt="πλεονεκτήματα εξέλιξις"> 

            <p><?php _e(the_field('pleonektimata_2'), 'exelixis-circus'); ?></p>

        </div>

        <div class="ex-pleonektimata-item"  data-aos="fade-up" data-aos-delay="1200">

            <img class="ex-p-number" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-number-3.svg' ?>" alt="3">

            <img class="ex-p-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-3.png' ?>" alt="πλεονεκτήματα εξέλιξις"> 

            <p><?php _e(the_field('pleonektimata_3'), 'exelixis-circus'); ?></p>

        </div>

        <div class="ex-pleonektimata-item"  data-aos="fade-up" data-aos-delay="1300">

            <img class="ex-p-number" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-number-4.svg' ?>" alt="4">

            <img class="ex-p-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-4.png' ?>" alt="πλεονεκτήματα εξέλιξις">

            <p><?php _e(the_field('pleonektimata_4'),'exelixis-circus'); ?></p>

        </div>

    </div>

</section>


<?php  get_template_part( 'includes/homeposts', 'content' ); ?>


<section class="ex-map">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12338.281133649813!2d22.9392885!3d39.3659668!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9c296449e08c333!2zzpXOvs6tzrvOuc6-zrnPgg!5e0!3m2!1sel!2sgr!4v1603375288692!5m2!1sel!2sgr" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>

</section>

<?php endwhile; ?>

<?php get_footer( ); ?>