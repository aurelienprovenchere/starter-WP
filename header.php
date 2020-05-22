<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
          <h2><?php bloginfo('title'); ?></h2>
          <img src="<?php echo IMAGES_URL;?>/logo.png" alt="<?php bloginfo('title'); ?>"/>
        <!-- Tout le contenu de l entête de mon site -->
        </header>
