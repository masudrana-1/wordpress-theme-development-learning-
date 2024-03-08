

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

                <!-- the_permalink() dile link clickable hoy  -->

                        <div class="post_thumb">
                            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                        </div>

                        <!-- for perfect blog page  -->
                        <div class="post_details">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                        </div>

                        <?php the_content(  ); ?>
                </div>

                <!-- if have not any post  then show   -->
                    <?php
                        endwhile;

                        else : 
                            _e( 'No post found' );

                        endif;
                    ?>

                <!-- pagination  -->

                <div id="page_nav">
                    <?php if ('masud_pagenav') {masud_pagenav(); } else{ ?>
                        <?php next_posts_link(); ?>
                        <?php previous_posts_link(); ?>
                    <?php } ?>
                </div>


                    
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