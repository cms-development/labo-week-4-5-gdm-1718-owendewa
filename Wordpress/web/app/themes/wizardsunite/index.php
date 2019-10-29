<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php get_header( ); ?>


    <div class="main-wrapper">
        <!-- page content -->
        <div class="container">
    
            <!-- cards level 1-->
            <div class="row">
                <!-- card 1.1 -->
                <div class="col-12 col-md-9">
                   <h2>Content</h2> 
                   
		        <?php
                if ( have_posts() ) :
                    while ( have_posts() ):
                        the_post();
                        ?><br><h1><?php the_title(); ?></h1><br>    
                        <?php the_content(); ?>
                    <?php
                    endwhile;
                endif;
                ?>
                </div>
                <div class="col-12 col-md-3">
                    <h2>Sidebar</h2>
                    <a href="#">Word Nu Fan</a>
                </div>

            </div>
             <!-- end row-->

        </div>
        <!-- end container-->
    </div>
     <!-- end main-wrapper-->
     <?php get_footer( ); ?>

</body>

</html>