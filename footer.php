<?php

    /*
        Theme Footer section
        it will be visible on everywhere
    */


?>




    <footer id="footer-area">

    <!-- footer Widget  -->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php dynamic_sidebar( 'footer-1'); ?>
                    </div>
                    <div class="col-md-4">
                        <?php dynamic_sidebar( 'footer-2'); ?>
                    </div>
                    <div class="col-md-4">
                        <?php dynamic_sidebar( 'footer-3'); ?>
                    </div>
                </div>
            </div>
        </section>


        
        <section id="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- show dynamic footer  -->
                        <p><?php echo get_theme_mod( 'masud_copyright_section' ); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    
    <?php wp_footer(  ); ?>
</body>
</html>