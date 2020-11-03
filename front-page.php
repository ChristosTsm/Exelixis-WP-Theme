<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="intro-section">

    <?php get_template_part( 'includes/home','intro' ); ?>

</section>


<section class="services-section">

    <?php get_template_part( 'includes/home','services' ); ?>
  
</section>


<section class="mobile-hidden">

    <?php get_template_part( 'includes/home','desktop-banners' ); ?>
    
</section>

<section class="d-flex-mobile desktop-hidden">

    <?php get_template_part( 'includes/home','mobile-banners' ); ?>

</section>


<section class="ex-pleonektimata ex-ml ex-mr">

    <?php get_template_part( 'includes/home','pleonektimata' ); ?>

</section>


<?php  get_template_part( 'includes/homeposts', 'content' ); ?>


<section class="ex-map">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12338.281133649813!2d22.9392885!3d39.3659668!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9c296449e08c333!2zzpXOvs6tzrvOuc6-zrnPgg!5e0!3m2!1sel!2sgr!4v1603375288692!5m2!1sel!2sgr" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>

</section>

<?php endwhile; ?>

<?php get_footer( ); ?>