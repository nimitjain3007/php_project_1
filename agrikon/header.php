<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrikon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
</head>

<body>
    <div class="top-heading container-fluid">
        <h4 class="top-heading-text">Welcome to Agriculture WordPress Theme</h4class>
    </div>
    <div class="header container-fluid">
        <div class="main-header row align-items-center">
            <div class="header-logo col-6">
                <img src="<?php bloginfo('template_directory'); ?>/images/header-logo.png"
                    alt=" <?php bloginfo('template_directory'); ?>/images/header-logo.png">
            </div>
            <div class="col-3 main-nav-bar">
                <?php wp_nav_menu(array('theme_location' => 'primary-menu')) ?>
            </div>
            <div class="header-button col-3">
                <img src=" <?php bloginfo('template_directory'); ?>/images/search.svg" alt="" class="img-fluid">
                <img src=" <?php bloginfo('template_directory'); ?>/images/cart.svg" alt="" class="img-fluid">
            </div>
        </div>
    </div>