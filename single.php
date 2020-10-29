<?php get_header('secondary') ?>

<section class="service-single-post">

    <div class="ex-mr ex-ml">

        <div class="row">

            <div class="col-auto mr-auto">

                <div class="service-single-back-link">

                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/service-single-arrow.svg' ?>" alt="Επιστροφή στις υπηρεσίες">

                    <a href="#">Επιστροφη στις ανακοινωσεις</a>

                </div>

            </div>

            <div class="col-auto">

                <div class="breadcrump">
                    <a href="/">Αρχική</a><span>/</span>
                    <a href="/anakoinwseis">Ανακοινώσεις</a><span>/</span>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>

            </div>

        </div>



        <div class="row">

            <div class="col-sm-10 single-post-wrapper">

                <?php if(has_post_thumbnail( )) : ?>

                    <img class="single-post-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                
                <?php endif; ?>

            </div>

            <div class="col-sm-2">

                <div class="single-post-date">

                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/divider.svg' ?>" alt="post date devider">

                    <span class="post-date"><?php echo get_the_date( 'j F' ); ?><br><?php echo get_the_date( 'Y' ); ?></span>

                </div>

            </div>

        </div>

        <div class="single-post-content">

            <h1 class="blog-single-title"><i><?php the_title(); ?></i></h1>

            <hr class="blog-single-hr">

            <div class="row">

                <div class="col-md-2"></div>

                <div class="col-md-10">

                    <?php the_content(); ?>

                </div>

            </div>

        </div>

    </div>

</section>



<?php get_footer(); ?>



