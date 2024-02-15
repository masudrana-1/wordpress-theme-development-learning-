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
    
    <?php wp_footer(  ); ?>
</body>
</html>