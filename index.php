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
                <div class="col-md-9">
                    <!-- <ul id="nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Media</a></li>
                        <li><a href="">Service</a>
                            <ul>
                                <li><a href="">DropDown</a>
                                    <ul>
                                        <li><a href="">DropDown</a></li>
                                        <li><a href="">DropDown</a></li>
                                        <li><a href="">DropDown</a></li>
                                        <li><a href="">DropDown</a></li>
                                        <li><a href="">DropDown</a></li>
                                    </ul>
                                </li>
                                <li><a href="">DropDown Menu</a></li>
                                <li><a href="">DropDown Menu</a></li>
                                <li><a href="">DropDown Menu</a></li>
                            </ul>
                        </li>
                        <li><a href="">Download</a></li>
                        <li><a href="">Project</a></li>
                        <li><a href="">Contact us</a></li>
                    </ul> -->

                    <!-- dynamic menu  -->
                    <!-- ekhane main_menu holo register name and menu id  -->
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id'=> 'nav') ); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php wp_footer(  ); ?>
</body>
</html>