

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
                    <?php the_content(  ); ?>
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