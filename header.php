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

    <!-- add dynamic menu position  -->
    <header id="header_area" class="<?php echo get_theme_mod( 'masud_menu_position' ) ?>">

        <!-- <div id="notice">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Some Notification</h2>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- home url  -->
                    <a href="<?php echo home_url( ); ?>">
                        <!-- add logo  -->
                        <!-- ekhane get_theme_mod er moddhe setting diye dite hobe -->
                        <!-- dynamic change logo  -->
                        <img src="<?php echo get_theme_mod( 'masud_logo' ) ?>" alt="">
                    </a>
                </div>
                <div class="col-md-9">


                    <!-- dynamic menu  -->
                    <!-- ekhane main_menu holo register name and menu id  -->
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id'=> 'nav') ); ?>
                </div>
            </div>
        </div>
    </header>