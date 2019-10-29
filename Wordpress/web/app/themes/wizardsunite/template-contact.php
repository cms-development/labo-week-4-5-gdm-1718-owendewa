<?php 
/* Template Name: Content with sidebar */
get_header( ); ?>
<div class="row">
    <div class="col-12 col-md-3">
            <h2>Sidebar</h2>
            <?php dynamic_sidebar('Primary ')?>
        </div>
    <div class="col-12 col-md-9">
        <?php
            if ( have_posts() ) :
                while ( have_posts() ):
                the_post();
         ?>
         <h2><?php the_title(); ?></h2>
         <?php the_content(); ?>

    </div>
    <?php
        endwhile;
    endif;
    ?>

</div>
<?php get_footer( ); ?>

