<?php 
/**
 * 
 * Output the title with an excerpt.
 */

get_header('secondary');

?> 

<section class="services-archive">

    <div class="ex-mr ex-ml">

        <h1 class="services text-center"><i><?php _e('Οι Υπηρεσίες μας','exelixis-circus');?></i></h1>

        
        <?php get_template_part('partials/services','content'); ?>

    </div>

</section>


<?php get_footer( ); ?>