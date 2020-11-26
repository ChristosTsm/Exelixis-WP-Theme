<img class="ex-e-bg ex-ml m400-hidden" src="<?php echo get_stylesheet_directory_uri() . '/assets/e-bg-image.png' ?>" alt="Exelixis" >

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

        <a class="ex-btn-link" href="<?php echo esc_url( get_page_link( 188 ) ); ?>">

            <img class="btn-img-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/perissotera-arrow.svg' ?>" alt="About us">

            <?php _e('Περισσοτερα', 'exelixis-circus'); ?>

        </a>  

    </div>
    
</div>