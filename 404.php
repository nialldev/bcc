<?php

/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); 

?>
<body>
 
<main>

    <section class="main-left">
            
        <?php wp_nav_menu(

        array(
            'theme_location'  => 'primary',
            'container'       => 'nav',
            'container_class' => 'main-left-nav',
            'menu_class'      => 'main-left-navbar',
            'menu_id'         => 'main-left-navbar',
        )

        ); ?>    
        
        <aside class="left-sidebar">
        
            <?php get_sidebar('main-left') ?>

        </aside>

    </section>

    <section class="home-posts-container">

            <div class="not-found">
    
                <h1><?php _e('Error 404', 'mscc'); ?></h1>
                <h2><?php _e('Oops! This page cannot be found.', 'mscc'); ?></h2>
                <p><?php _e('Please ensure you typed the correct address into the URL bar
                            and try again or select a page from the main menu.', 'mscc'); ?></p>
            
            </div>
    
    </section>
            
</main>

<?php get_footer(); ?>
