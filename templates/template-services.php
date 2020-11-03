<?php 

$args = array(  
    'post_type' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => 11, 
    'orderby' => 'ID',
    'order' => 'ASC' 
);

$loop = new WP_Query( $args ); 

get_header('secondary');

?> 

<div class="row ">

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-md-4 justify-content-center text-center">

            <div class="service-item">

                <div class="service-item-img-wrapper">

                    <?php if(has_post_thumbnail( )) : ?>

                    <img data-aos="fade-in" data-aos-duration="1500" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

                    <?php endif; ?>

                </div>


                <h1><a data-aos="fade-in" data-aos-duration="1500" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                <hr/>

                <p data-aos="fade-in" data-aos-duration="1500"><?php the_excerpt(); ?></p>

            </div>

        </div>

    <?php endwhile; ?>

    <div class="btn-b-home col-md-4 justify-content-center align-content-center">
    
            <a href="/">
            
                <?php _e('Επιστροφη στην αρχικη', 'exelixis-circus'); ?>
            
                <img class=" btn-b-home-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/ipiresies-archive-arrow.svg' ?>" alt="Επιστροφή στην αρχικη">

            </a>

    </div>

</div>