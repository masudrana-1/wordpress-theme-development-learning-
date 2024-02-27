

<!-- code slice  -->
<!-- header  -->


<?php

    get_header(  );

?>



<!-- main section  -->

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php the_content(  ); ?>
                </div>
            </div>
        </div>
    </section>


    <!-- footer area  -->

    <footer id="footer-area">
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