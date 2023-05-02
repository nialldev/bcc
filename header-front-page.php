<?php 

/**
 * The template for the front page header
 * Theme: mscc
 * Author: Niall Tuohy
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <meta name="description" content="<?php bloginfo('description'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        
        <header>

            <div class="mobile-header-bg">
            
                <div class="logo-container-fp">
                    <?php 
                        if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                        }; ?>
                </div>
                <div class="site-title-container-fp">
                    <h1 class="site-title-fp">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>  
                    <h3 class="site-tagline-fp">
                        <?php bloginfo( 'description' ); ?>
                    </h3>
                </div>

                <!-- <?php// if ( get_header_image() ) : ?>

                    <div class="header-image">
                
                        <a href="<?php// echo esc_url( home_url( '/' ) ); ?>" rel="home">

                            <img src="<?php// header_image(); ?>" width="<?ph//p echo absint( get_custom_header()->width ); ?>" height="<?php// echo absint( get_custom_header()->height ); ?>" alt="<?php// echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

                        </a>
                    <div>
                <?php// endif; ?>  -->

                    <div class="primary-nav-container" id="navBtn">

                    <a href="javascript:void(0)">

                            <div class="nav-icon">

                                <div class="burger-icon"></div>
                                <div class="burger-icon"></div>
                                <div class="burger-icon"></div>

                            </div>

                        </a>
                    
                    <div class="modal" id="modal">
                        
                        <div class="modal-content">

                            <span id="close">&times;</span>
                            
                            <?php wp_nav_menu(

                                array(
                                    'theme_location'  => 'primary',
                                    'container'       => 'nav',
                                    'container_class' => 'primary-nav',
                                    'menu_class'      => 'navbar',
                                    'menu_id'         => 'navbar',
                                )

                            ); ?>    

                        </div> <!-- .modal-content -->

                    </div> <!-- .modal -->

                </div> <!-- .primary-nav-container -->
            
            </div>
 
            <div class="desktop-header-fp">

                <div class="logo-container">
                    <?php 
                        if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                        }; ?>
                </div>
                <div class="site-title-container">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>  
                    <h3 class="site-tagline">
                        <?php bloginfo( 'description' ); ?>
                    </h3>
                </div>
            </div>
            
            <div class="desktop-header-image-fp">

                <?php if ( get_header_image() ) : ?>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" 
                    height="<?php echo absint( get_custom_header()->height ); ?>" 
                    alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>

                <?php endif; ?> 

            </div>

        </header>
