<?php

/*
 * This template for displaying the header
*/


?>


<!DOCTYPE html>
<html lang="<?php language_attributes(  ); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- head and footer must be added  -->
    <?php wp_head(  ); ?>
</head>

<!-- added body class for wordpress class  -->
<body <?php body_class(  ); ?>>
    <div id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="">
                        <!-- add logo  -->
                        <!-- ekhane get_theme_mod er moddhe setting diye dite hobe -->
                        <!-- dynamic change logo  -->
                        <img src="<?php echo get_theme_mod( 'masud_logo' ) ?>" alt="">
                    </a>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>
    
    <?php wp_footer(  ); ?>
</body>
</html>