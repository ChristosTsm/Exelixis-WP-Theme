<section class="ex-home-posts">

    <div class="ex-ml ex-mr d-flex d-flex-mobile justify-content-around">

        <div class="post-wrapper"> 

            <h1><?php _e('Ανακοινώσεις', 'exelixis-circus');?></h1>

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

                            <img class="ex-featured-post-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

                        <?php endif; ?>
                        
                        <div class="featured-post-inner-text">

                            <h2><a href="<?php the_permalink(); ?>"><?php _e(the_title(), 'exelixis-circus'); ?></a></h2>

                            <img class="ex-title-date-devider mobile-hidden" src="<?php echo get_stylesheet_directory_uri() . '/assets/divider.svg' ?>" alt="post date devider">

                            <span class="post-date mobile-hidden"><?php _e(get_the_date( 'j F' ), 'exelixis-circus' ); ?><br><?php _e(get_the_date( 'Y' ), 'exelixis-circus'); ?></span>

                        </div>
                        
                        <p class="ex-blog-excerpt"><?php _e(the_excerpt(), 'exelixis-circus'); ?></p>

                        <div class="ex-read-more">

                            <img class="ex-read-more-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/arrow-long.svg'; ?>" alt="Περισσότερα">

                            <a href="<?php the_permalink(); ?>" class="ex-btn-more-grey"><?php _e('Περισσοτερα', 'exelixis-circus'); ?></a>
                        
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

                        <img class="ex-post-img" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

                        <?php endif; ?>

                        <div class="featured-post-inner-text">

                            <h2><a href="<?php the_permalink(); ?>"><?php _e(the_title(), 'exelixis-circus'); ?></a></h2>

                            <img class="ex-title-date-devider-simple-post" src="<?php echo get_stylesheet_directory_uri() . '/assets/divider.svg' ?>">

                            <span class="post-date"><?php  _e(get_the_date( 'j M' ), 'exelixis-circus' ); ?><br><?php _e(get_the_date( 'Y' ), 'exelixis-circus' ); ?></span>

                        </div>

                        <div class="ex-read-more">

                            <img class="ex-read-more-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/arrow-long.svg'; ?>" alt="<?php _e('Περισσοτερα','exelixis-circus'); ?>">

                            <a href="<?php the_permalink(); ?>" class="ex-btn-more-grey"><?php _e('Περισσοτερα','exelixis-circus'); ?></a>

                        </div>

                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </div>

    <div class="btn-blog-all">

        <a href="<?php echo esc_url( get_page_link( 91 ) ); ?>">

            <img class="btn-blog-all-arrow" src="<?php echo get_stylesheet_directory_uri() . '/assets/services-arrow.svg' ?>" alt="<?php _e('όλες οι ανακοινώσεις', 'exelixis-circus'); ?>" >

            <?php _e('Ολες οι ανακοινωσεις', 'exelixis-circus'); ?>
        
        </a>

    </div>

</section>