<?php 
/**
 * Setup query to show the ‘services’ post type with ‘8’ posts.
 * Output the title with an excerpt.
 */
$args = array(  
    'post_type' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => 11, 
);

$loop = new WP_Query( $args ); 

get_header('secondary');

?> 

<section class="services-archive">

    <div class="ex-mr ex-ml">

        <h1 class="services text-center"><i>Οι Υπηρεσίες μας</i></h1>

        <div class="row align-items-center">

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <div class="col-sm-4 justify-content-center text-center">

                <div class="service-item">

                    <div class="service-item-img-wrapper">

                        <?php if(has_post_thumbnail( )) : ?>

                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

                        <?php endif; ?>

                    </div>


                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                    <hr>

                    <p><?php the_excerpt(); ?></p>

                </div>

            </div>

            <?php endwhile; ?>

        </div>

    </div>

</section>

<?php wp_reset_postdata(); ?> 

<?php get_footer(); ?>