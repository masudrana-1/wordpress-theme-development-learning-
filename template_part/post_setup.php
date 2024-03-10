
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
                            <?php the_content(  ); ?>
                        </div>


                        <!-- ekhane content use korar mane holo full content show korbe  -->

                        <?php the_content(  ); ?>
                    </div>

                    <!-- if have not any post  then show   -->
                    <?php
                        endwhile;

                        else : 
                            _e( 'No post found' );

                        endif;
                    ?>