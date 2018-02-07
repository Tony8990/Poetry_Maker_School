<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">

    <!-- Generate favicon, apple touch icons and Windows Phone icon at http://realfavicongenerator.net/ -->
    <!-- Esempio: -->
    <!-- <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32"> -->

    <!-- Questo pezzo di codice permette di impostare l'immagine per facebook e twitter se ci si trova in una pagina con featured image impostata da backoffice -->
    <?php $page_image = $post ? get_the_post_thumbnail_url($post, 'huge') : false; ?>
    <?php if ($page_image): ?>
        <meta property="og:image" content="<?php echo $page_image; ?>"/>
        <meta name="twitter:image" content="<?php echo $page_image; ?>">
    <?php endif ?>

    <!-- Questa funzione di Wordpress carica tutti i tag della head impostati da Wordpress -->
    <?php wp_head(); ?>

    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/italyLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
</head>

<!-- La funzione di Wordpress body_class() aggiunge al body delle classi specifiche in base alla pagina sulla quale ci si trova -->
<!-- Questo permette di stylare con il css specificatamente elementi di diverse pagine -->
<body <?php body_class(); ?>>

<header>
    <div class="nav">
        <img class="logo-nav" src="<?php echo get_stylesheet_directory_uri(); ?>/css/iscriviti/img/logo.png">
        <ul>
            <li class="home"><a href="<?php echo get_permalink( get_page_by_title( "Homepage" )->ID ); ?>">HOME</a></li>
            <li class="progetti"><a href="<?php echo get_permalink( get_page_by_title( "Progetti" )->ID ); ?>">SCOPRI I PROGETTI</a></li>
            <li class="premi"><a href="<?php echo get_permalink( get_page_by_title( "Premi" )->ID ); ?>">PREMI<br>POETRY</a></li>
            <li class="contatti"><a href="<?php echo get_permalink( get_page_by_title( "Contattaci" )->ID ); ?>">CONTATTI</a></li>
            <li class="contatti"><a href="<?php echo get_permalink( get_page_by_title( "Iscriviti" )->ID ); ?>">ISCRIVITI</a></li>
            <li class="registrati"><a href="<?php echo get_permalink( get_page_by_title( "Registrati" )->ID ); ?>">REGISTRATI</a></li>
            <li class="accedi"><a href="<?php echo get_permalink( get_page_by_title( "Accedi" )->ID ); ?>">ACCEDI</a></li>
            <li class="accedi"><a href="<?php echo get_permalink( get_page_by_title( "Logout" )->ID ); ?>">LOGOUT</a></li>
        </ul>
    </div>
</header>

<div class="page-wrapper"> <!-- Apro page-wrapper -->

