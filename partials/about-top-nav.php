<div class="row about-row-m">

    <div class="col-lg-5">
    
    <div class="about-single-back-link">

        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-single-arrow.svg' ?>" alt="Επιστροφή στις υπηρεσίες">

        <a href="<?php echo esc_url( get_page_link( 35 ) ); ?>"><?php _e('Επιστροφη στην αρχικη','exelixis-circus'); ?></a>

    </div>

    </div>

    <div class="col-lg-7 about-breadcrump">
    
        <a href="<?php echo esc_url( get_page_link( 35 ) ); ?>"><?php _e('Αρχική','exelixis-circus'); ?></a><span>/</span>
        <a href="<?php  echo esc_url( get_page_link( 76 ) );  ?>"><?php _e('Υπηρεσίες','exelixis-circus'); ?></a><span>/</span>
        <a href="<?php the_permalink(); ?>"><?php _e(the_title(), 'exelixis-circus'); ?></a>

    </div>

</div>