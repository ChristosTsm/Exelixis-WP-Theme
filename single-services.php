<?php get_header('secondary') ?>

<section class="service-single-post">

    <div class="ex-mr ex-ml">

        <div class="row">

            <div class="col-sm-6">

                <div class="service-single-back-link">

                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-single-arrow.svg' ?>" alt="Επιστροφή στις υπηρεσίες">

                    <a href="<?php echo esc_url( get_page_link( 76 ) ); ?>"><?php _e('Επιστροφη στις υπηρεσιες','exelixis-circus'); ?></a>

                </div>

            </div>

            <div class="col-sm-6">

                <div class="breadcrump">
                    <a href="<?php echo esc_url( get_page_link( 35 ) ); ?>"><?php _e('Αρχική','exelixis-circus'); ?></a><span>/</span>
                    <a href="<?php  echo esc_url( get_page_link( 76 ) );  ?>"><?php _e('Υπηρεσίες','exelixis-circus'); ?></a><span>/</span>
                    <a href="<?php the_permalink(); ?>"><?php _e(the_title(), 'exelixis-circus'); ?></a>
                </div>

            </div>

        </div>



        <div class="row">

            <div class="col-sm-6 text-center">

                <?php if(has_post_thumbnail( )) : ?>

                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                
                <?php endif; ?>

            </div>

            <div class="col-sm-6">

                <h1 class="service-single-title"><i><?php _e(the_title(), 'exelixis-circus'); ?></i></h1>

                <hr class="service-single-hr">

                <div class="service-single-content">
                    
                    <?php _e(the_content(), 'exelixis-circus'); ?>

                </div>

            </div>

        </div>

    </div>

</section>



<?php get_footer(); ?>



