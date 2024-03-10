
<?php


    // The template for displaying pages 


    get_header(  );

?>



<!-- main section  -->

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <!-- this area for template  part -->

                    <?php get_template_part( 'template_part/blog_setup' )  ?>

                    
                </div>
                <div class="col-md-3">
                    <?php
                        get_sidebar(  );
                    ?>
                </div>
            </div>
        </div>
    </section>


    <!-- footer area  -->

<?php

get_footer(  );

?>