<?php 

/**
 * The template for the index page
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

    <section class="home-posts-container"> 

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="home-posts-content">
        
                <?php the_title('<h2 class="loop-headers"><a href="' . get_permalink( get_the_ID() ) . '">', '</a></h2>'); ?>
        
                <div class="loop-post-meta">
        
                    <p><?php echo get_the_date(); ?></p>
                    <p>Posted by <?php the_author(); ?></p>
        
                </div>
        
                <div class="post-content">
        
                    <?php the_excerpt(); ?>
        
                </div><!--end .post-content-->
        
            </div><!--end .home-post-content-->
        
        <?php 
        
        endwhile; 
        
        else :

            _e( 'There are currently no posts available.', 'textdomain' );
        
        endif;
        
        ?>

        <div class="loop-pagination">

            <div class="prev">

                <?php previous_posts_link() ?>

            </div>

            <div class="next">
            
                <?php next_posts_link(); ?>
            
            </div>

        </div>

    </section>

</main>

<?php  get_footer(); ?>