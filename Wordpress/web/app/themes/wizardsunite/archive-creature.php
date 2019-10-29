<?php get_header( ); ?>
<div class="container">
<div class="row cards">
<?php
    if ( have_posts() ) :
        while ( have_posts() ):
        the_post();
?>
  
        <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card_image_container">
                        <?php $image = get_field('image');
                        if(!empty($image) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="Puffskein">
                        <?php endif; ?>
                        </div>
                        <div class="card_txt_container">
                            <h2><a href=""><?php the_title();?></a></h2>
                            <?php the_content() ?>
                        </div>
                </div>
                    <!-- end card-->
            </div>
      
    <?php
        endwhile;
    endif;
    ?>
      </div>
    </div>
     <!-- end main-wrapper-->
     <?php get_footer( ); ?>
