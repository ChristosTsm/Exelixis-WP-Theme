<?php get_header(); ?>

<?php  get_template_part( 'includes/header', 'content' ); ?>

<section class="intro-section">
    <img class="ex-e-bg ex-ml" src="<?php echo get_stylesheet_directory_uri() . '/assets/e-bg-image.png' ?>" alt="Exelixis" >
    <div class="d-flex ex-about-section container">

        <div class="ex-landscape">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img-landscape.png' ?>" alt="exelixis image" >
        </div>

        <div class="ex-portrait">
            <div class="inner-info">
                <h2>Ποιοί είμαστε</h2>
                <p>Το ασφαλιστικό γραφείο Μαρία Γεωργαλά Ι.Κ.Ε. Εξέλιξις είναι ένα σύγχρονο ασφαλιστικό γραφείο στελεχωμένο απο έμπειρους ασφαλιστικούς διαμεσολαβητές που ήδη εμπιστέυονται εδώ και πολλά χρόνια εκατοντάδες πελάτες σε όλη την Ελλάδα.</p>
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

        <div class="d-flex align-items-center justify-content-between align-content-center">

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
                    <a href="#">Περισσοτερες υπηρεσιες</a>
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

<div class="ex-banners d-flex justify-content-center">
    <div id="watt" class="banner-item-watt">
        
    </div>
    <div id="spitogatos" class="banner-item-spitogatos">
        
    </div>

</div>

<?php get_footer( ); ?>