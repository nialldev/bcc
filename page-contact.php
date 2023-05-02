<?php

/**
 * The template for displaying the contact page
 * Theme: mscc
 * Author: Niall Tuohy
 */

get_header();

?> 

<main class="contact-page-container">

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

    <section class="page-main">
        
        <div class="page-title">
                        
            <div class="title-wrapper">
            
                    <?php the_title('<h1>', '</h1>'); ?>
                    
            </div>
            
        </div>

        <div class="contact-top-sidebars">

            <aside class="contact-left-sidebar">

                <?php get_sidebar('contact-left') ?>

            </aside>

            <aside class="contact-right-sidebar">

                <?php get_sidebar('contact-right') ?>

            </aside>

        </div>
                
        <div class="contact-content-container">

            <!-- Start the Loop -->
            <?php while ( have_posts() ) : the_post(); ?>
                    
                    <?php the_content(); ?>
                        
                <?php endwhile; // End of the loop. ?>

            </div>

</main>

<?php get_footer(); ?>