

<!-- code slice  -->
<!-- header  -->


<?php

    get_header(  );

?>



<!-- main section  -->

    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                <!-- blog section  -->
                <!-- if have any post  then show post  -->

                    <?php

                        if(have_posts(  )) : 
                            while (have_posts(  )) : the_post(  );
                    ?>

                <!-- blog section  -->
                <div class="blog_area">
                        <?php the_content(  ); ?>
                </div>

                <!-- if have not any post  then show   -->
                    <?php
                        endwhile;

                        else : 
                            _e( 'No post found' );

                        endif;
                    ?>

                


                    
                </div>
                <div class="col-md-3">
                    <p>sidebar</p>
                </div>
            </div>
        </div>
    </section>


    <!-- footer area  -->

<?php

get_footer(  );

?>