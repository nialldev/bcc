    <footer>
        
        <h2 class="top-footer-title">Supported by:</h2>

        <section class="top-footer">

            
            <?php get_sidebar('top-footer-left') ?>
            <?php get_sidebar('top-footer-middle') ?>
            <?php get_sidebar('top-footer-right') ?>
            
        </section>

        <section class="bottom-footer">

            <?php get_sidebar('bottom-footer-left') ?>

            <div class="secondary-menu">

                <p class="secondary-menu-title">Menu:</p>
                
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'secondary',
                        'container'       =>  '<div>',
                        'container_class' =>  'secondary-menu',
                        'menu_class'      => 'footer-navbar',
                        'menu_id'         => 'footer-navbar',

                    )
                ); ?>

            </div>
            
            <?php get_sidebar('bottom-footer-right') ?>

        </section>

        <section class="credits">

            <small>Website by Niall Tuohy &copy; <?php echo date("Y"); ?></small>

        </section>

        <?php wp_footer(); ?>
    
    </footer>
    
    <script>    

        let modal = document.querySelector("#modal");
        let btn = document.querySelector("#navBtn");
        let span = document.querySelector("#close");

        btn.onclick = function() {
         
            modal.style.display = "block";
            modal.classList.add("animate__animated");
            modal.classList.add("animate__fadeInRight");
            
        } 
        
        span.onclick = function(event) {

            modal.style.display = "none";
            // console.log("click");
            event.stopPropagation();
            
        }
            
        window.onclick = function(event) {
            
            if (event.target == modal) {
                modal.style.display = "none";
                
            }

        }

    </script>

</body>