<?php get_header('secondary') ?>

<section class="service-single-post">

    <div class="ex-mr ex-ml">

        <div class="row">

            <div class="col-sm-6">

                <div class="service-single-back-link">

                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-single-arrow.svg' ?>" alt="Επιστροφή στις υπηρεσίες">

                    <a href="/ipiresies">Επιστροφη στις υπηρεσιες</a>

                </div>

            </div>

            <div class="col-sm-6">

                <div class="breadcrump">
                    <a href="/">Αρχική</a><span>/</span>
                    <a href="/ipiresies">Υπηρεσίες</a><span>/</span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>

            </div>

        </div>



        <div class="row">

            <div class="col-sm-6">

                <?php if(has_post_thumbnail( )) : ?>

                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                
                <?php endif; ?>

            </div>

            <div class="col-sm-6">

                <h1 class="service-single-title"><i><?php the_title(); ?></i></h1>

                <hr class="service-single-hr">

                <div class="service-single-content">
                    
                    <?php the_content(); ?>

                </div>

            </div>

        </div>

    </div>

</section>



<?php get_footer(); ?>



