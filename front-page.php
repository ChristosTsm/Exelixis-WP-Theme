<?php get_header(); ?>

<?php  get_template_part( 'includes/header', 'content' ); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="intro-section">

    <img class="ex-e-bg ex-ml" src="<?php echo get_stylesheet_directory_uri() . '/assets/e-bg-image.png' ?>" alt="Exelixis" >

    <div class="d-flex ex-about-section container">


        <div class="ex-landscape">

            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img-landscape.png' ?>" alt="exelixis image" >

        </div>

        <div class="ex-portrait">

            <div class="inner-info">

                <h2>Ποιοί είμαστε</h2>

                <p><?php the_field('poioi_eimaste'); ?></p>

                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/idrogeios.png' ?>" alt="Υδρόγειος">

            </div>

        </div>

        <div class="ex-btn-about">

            <a class="ex-btn-link" href="#">

                <img class="btn-img-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/btn-arrow.png' ?>" alt="About us">

                Περισσοτερα

            </a>  

        </div>

    </div>

</section>


<section class="services-section">

    <div class="ex-ml ex-mr">

        <h1><i>Οι Υπηρεσίες μας</i></h1>

        <div class="d-flex d-flex-mobile align-items-center justify-content-between align-content-center">


            <div class="ex-services-item">

                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/aytokinito-services.png' ?>" alt="Ασφάλεια αυτοκινήτου">

                <div>

                    <h3 class="services-link"><a href="#">Ασφαλεια<br>αυτοκινητου</a></h3>

                    <img class="services-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/ipiresies-arrow.png' ?>" alt="ασφαλεια αυτοκινητου">

                </div>

            </div>

            <div class="ex-services-item btn-wrapper">

                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/piros.png' ?>" alt="Ασφάλεια πυρός">

                <div>

                    <h3 class="services-link"><a href="#">Ασφαλεια<br>πυρος</a></h3>

                    <img class="services-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/ipiresies-arrow.png' ?>" alt="ασφαλεια πυρος">

                </div>

                <div class="btn-more-services">

                    <img class="btn-services-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/services-arrow.svg' ?>" alt="Περισσότερες Υπηρεσίες" >

                    <a href="<?php echo esc_url( get_page_link( 76 ) ); ?>">Περισσοτερες υπηρεσιες</a>

                </div>

            </div>


            <div class="ex-services-item">

                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/astiki-euthini.png' ?>" alt="Ασφαλεια αστικης ευθυνης">

                <div>

                    <h3 class="services-link"><a href="#">Ασφαλεια<br>αστικης ευθυνης</a></h3>

                    <img class="services-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/ipiresies-arrow.png' ?>" alt="Ασφαλεια αστικης ευθυνης">

                </div>

            </div>

        </div>

    </div>


  

</section>


<section class="mobile-hidden">

    <section class="ex-banners d-flex-mobile d-flex justify-content-center">

        <div id="watt" class="banner-item-watt">

            <p class="ex-banner-title">Επισημοι συνεργατες της</p>

            <a href="https://www.watt-volt.gr/">

                <img class="ex-banner-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/wattvolt-logo.svg' ?>">

            </a>

        </div>

        <div id="spitogatos" class="banner-item-spitogatos">

            <p class="ex-banner-title">τα ακινητα που διαχειριζομαστε</p>

            <a href="https://www.spitogatos.gr/">

                <img class="ex-banner-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/spitogatos-logo.svg' ?>">

            </a>

        </div>

    </section>
    
</section>

<section class="d-flex-mobile desktop-hidden">

    <div id="watt" class="banner-item-watt">

        <p class="ex-banner-title">Επισημοι συνεργατες της</p>

        <a href="https://www.watt-volt.gr/">

            <img class="ex-banner-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/wattvolt-logo.svg' ?>">

        </a>

    </div>

    <div id="spitogatos" class="banner-item-spitogatos">

        <p class="ex-banner-title">τα ακινητα που διαχειριζομαστε</p>

        <a href="https://www.spitogatos.gr/">

            <img class="ex-banner-logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/spitogatos-logo.svg' ?>">

        </a>

    </div>

</section>


<section class="ex-pleonektimata ex-ml ex-mr">

    <h1>Τα πλεονεκτήματα μας</h1>

    <div class="ex-pleonektimata-banners">

        <div class="ex-pleonektimata-item">

            <img class="ex-p-number" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-number-1.svg' ?>" alt="1">

            <img class="ex-p-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-1.png' ?>" alt="πλεονεκτήματα εξέλιξις">  

            <p><?php the_field('pleonektimata_1'); ?></p>

        </div>

        <div class="ex-pleonektimata-item">

            <img class="ex-p-number" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-number-2.svg' ?>" alt="2">

            <img class="ex-p-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-2.png' ?>" alt="πλεονεκτήματα εξέλιξις"> 

            <p><?php the_field('pleonektimata_2'); ?></p>

        </div>

        <div class="ex-pleonektimata-item">

            <img class="ex-p-number" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-number-3.svg' ?>" alt="3">

            <img class="ex-p-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-3.png' ?>" alt="πλεονεκτήματα εξέλιξις"> 

            <p><?php the_field('pleonektimata_3'); ?></p>

        </div>

        <div class="ex-pleonektimata-item">

            <img class="ex-p-number" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-number-4.svg' ?>" alt="4">

            <img class="ex-p-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/p-4.png' ?>" alt="πλεονεκτήματα εξέλιξις">

            <p><?php the_field('pleonektimata_4'); ?></p>

        </div>

    </div>

</section>


<?php  get_template_part( 'includes/homeposts', 'content' ); ?>


<section class="ex-map">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12338.281133649813!2d22.9392885!3d39.3659668!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9c296449e08c333!2zzpXOvs6tzrvOuc6-zrnPgg!5e0!3m2!1sel!2sgr!4v1603375288692!5m2!1sel!2sgr" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>

</section>

<?php endwhile; ?>

<?php get_footer( ); ?>