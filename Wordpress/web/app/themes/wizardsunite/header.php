
<header class="header-wrapper">
<?php wp_head( ); ?>

            <a href="" class="logo"><?php if ( function_exists( 'the_custom_logo' ) ) {
 the_custom_logo();
} ?></a>
        
        <!-- navigatie -->
        <div class="container header_container">    
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="logo"><?php wp_title('|', true, 'right'); ?></h1>
                </div>
                <div class="col-12 col-md-6 nav">
                    <nav class="nav-main">
                        <?php wp_nav_menu(['theme_location' => 'header-menu']);?>
                    </nav>
                </div>
            </div>
        </div>
    </header>