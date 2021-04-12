<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
         href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap"
     rel="stylesheet">
    <title><?php bloginfo( 'name' ); ?><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <div class="siteinfo">
            <div class="container">
            <h1>
                <a href="<?php echo home_url(); ?>"><?php bloginfo ( 'name' ); ?></a>
            </h1>
            <p><i class="fa fa-wordpress"></i></p>
            </div>
        </div>
        
        <nav>
            <div class="container">
            <?php wp_nav_menu('theme_location=navigation'); ?>
            </div>
        </nav>
    </header>