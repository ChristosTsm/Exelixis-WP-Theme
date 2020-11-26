<?php get_header('secondary'); ?>

<section class="ex-blog-posts">

    <div class="ex-ml ex-mr d-flex d-flex-mobile justify-content-around">

        <div class="post-wrapper"> 

            <h1><?php _e('Ανακοινώσεις','exelixis-circus'); ?></h1>

            <?php 
                
                $featured_post_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'category_name' => 'Featured'
                );

                $_featured_posts = new WP_Query($featured_post_args);

            ?>

            <?php if($_featured_posts->have_posts()) : ?>


                <div class="post">

                    <?php while($_featured_posts->have_posts()) : $_featured_posts->the_post(); ?>


                        <?php if(has_post_thumbnail()) : ?>

                            <img  data-aos="fade-in" data-aos-duration="1500" class="ex-featured-post-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

                        <?php endif; ?>
                        
                        <div class="featured-post-inner-text">

                            <h2><a  data-aos="fade-in" data-aos-duration="1500" href="<?php the_permalink(); ?>"><?php _e(the_title(),'exelixis-circus'); ?></a></h2>

                            <img class="ex-title-date-devider mobile-hidden" src="<?php echo get_stylesheet_directory_uri() . '/assets/divider.svg' ?>" alt="post date devider">

                            <span class="post-date mobile-hidden"><?php echo get_the_date( 'j F' ); ?><br><?php echo get_the_date( 'Y' ); ?></span>

                        </div>
                        
                        <p class="ex-blog-excerpt"><?php _e(the_excerpt(), 'exelixis-circus'); ?></p>

                        <div class="ex-read-more">

                            <img class="ex-read-more-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/arrow-long.svg'; ?>" alt="Περισσότερα">

                            <a href="<?php the_permalink(); ?>" class="ex-btn-more-grey"><?php _e('Περισσοτερα','exelixis-circus'); ?></a>
                        
                        </div>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>

        </div>

        <div class="post-wrapper">

            <?php 
                    
                $post_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'category__not_in' => array(2)
                );

                $_posts = new WP_Query($post_args);

            ?>

            <?php if($_posts->have_posts()) : ?>

                <?php while($_posts->have_posts()) : $_posts->the_post(); ?>

                    <div class="post-list">

                        <?php if(has_post_thumbnail()) : ?>

                        <img  data-aos="fade-in" data-aos-duration="1500" class="ex-post-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php _e(the_title(),'exelixis-circus'); ?>">

                        <?php endif; ?>

                        <div class="featured-post-inner-text">

                            <h2><a  data-aos="fade-in" data-aos-duration="1500" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <img class="ex-title-date-devider-simple-post" src="<?php echo get_stylesheet_directory_uri() . '/assets/divider.svg' ?>" alt="post date devider">

                            <span class="post-date"><?php echo get_the_date( 'j M' ); ?><br><?php echo get_the_date( 'Y' ); ?></span>

                        </div>

                        <div class="ex-read-more">

                            <img class="ex-read-more-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/arrow-long.svg'; ?>" alt="Περισσότερα">

                            <a href="<?php the_permalink(); ?>" class="ex-btn-more-grey"><?php _e('Περισσοτερα','exelixis-circus'); ?></a>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </div>

    <div class="rest-of-posts">

    <?php         
        
        $rest_of_posts = array(
            'post_type' => 'post',
            'posts_per_page' => 9,
            'category__not_in' => array(2),
            'offset' => 2,
        );

        $rest_of_posts = new WP_Query($rest_of_posts);

    ?>

        <div class="row ex-mr ex-ml">

             <?php if($rest_of_posts->have_posts()) : ?>

                <?php while($rest_of_posts->have_posts()) : $rest_of_posts->the_post(); ?>

                    <div class="col-lg-4 p-5 my-5">

                        <?php if(has_post_thumbnail()) : ?>

                        <img  data-aos="fade-in" data-aos-duration="1500" class="ex-post-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

                        <?php endif; ?>

                        <div class="featured-post-inner-text">

                            <h2><a data-aos="fade-in" data-aos-duration="1500" data-aos-delay="300" href="<?php the_permalink(); ?>"><?php _e(the_title(),'exelixis-circus'); ?></a></h2>

                            <img class="ex-title-date-devider-simple-post" src="<?php echo get_stylesheet_directory_uri() . '/assets/divider.svg' ?>" alt="post date devider">

                            <span class="post-date"><?php echo get_the_date( 'j M' ); ?><br><?php echo get_the_date( 'Y' ); ?></span>

                        </div>

                        <div class="ex-read-more">

                            <img class="ex-read-more-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/arrow-long.svg'; ?>" alt="Περισσότερα">

                            <a href="<?php the_permalink(); ?>" class="ex-btn-more-grey"><?php _e('Περισσοτερα','exelixis-circus'); ?></a>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </div>

</section>

<?php get_footer(); ?>