<?php

/**
 * The template for displaying all single pages
 * Theme: mscc
 * Author: Niall Tuohy
 */

get_header();

?> 

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


    <section class="page-main">
        <!-- Start the Loop -->
        <?php while ( have_posts() ) : the_post(); ?>
                
                <div class="page-title">
                
                        <div class="title-wrapper">
                        
                                <?php the_title('<h1>', '</h1>'); ?>
                                
                        </div>
                        
                </div>
                
                <div class="page-content">

                        <?php the_content(); ?>
                
                        </div>
                        
                <?php endwhile; // End of the loop. ?>

        </section>
        
</main>

<?php get_footer(); ?>