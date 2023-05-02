<?php 

/**
 * The template for displaying all single posts
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

<section class="post-main">
    
    <div class="post-content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
            <?php the_title('<h1>', '</h1>'); ?>
            
            <div class="post-meta">
            
                <p><?php echo get_the_date(); ?></p>

                <p>Posted by <?php the_author(); ?></p>
        
            </div>

            <div class="single-post-content">

                <?php the_content(); ?>

            </div>
        
        <div class="single-post-nav">

            <span class="single-post-nav-prev">

                <?php previous_post_link('&laquo; %link', 'Previous: %title'); ?>
            
            </span>

                <span class="single-post-nav-next">
            
                <?php next_post_link('%link &raquo', 'Next: %title'); ?>
            
            </span>

        </div>

        <?php 
            endwhile;
            endif;
        ?>
    
    </section>

</main>

<?php get_footer(); ?>
