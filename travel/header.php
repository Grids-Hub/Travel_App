<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg pt-1 mt-1 pt-xl-5 mt-xl-5 pt-lg-5 mt-lg-5 pt-md-3 mt-md-3 pt-sm-2 mt-sm-2">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand logo ps-sm-0 ps-xm-0 ps-md-5  ps-lg-5 ps-xl-5 " href="#"> <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>./dist/images/Logo1.svg" alt="" srcset="">
                </a>
                <!-- Collapse button -->
                <button class="navbar-toggler first-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="animated-icon1 navbar-toggler-icon"><span></span><span></span><span></span></div>
                </button>
                <!-- Collapsible content -->
                <div class="collapse navbar-collapse navlist" id="navbarSupportedContent">
                    <!-- Links -->
                    <?php if (has_nav_menu('primary-menu')) {
                        wp_nav_menu(array(
                            "theme_location" => 'primary-menu',
                            'container' => "",
                            'items_wrap' => '<ul class="navbar-nav ms-auto account p-0 ">%3$s</ul>'
                        ));} ?>
                    <?php if (has_nav_menu('secondary-menu')) {
                        wp_nav_menu(array(
                            "theme_location" => 'secondary-menu',
                            'container' => "",
                            'items_wrap' => '<ul class="navbar-nav ms-auto  mb-2 mb-lg-0 ">%3$s</ul>'
                        ));
                    } ?>
                </div>
            </div>
        </nav>
        <a class=" king ps-sm-0 ps-xm-0 ps-md-5 ps-lg-5 ps-xl-5 ms-5" href="#"><img class="img-responsive ps-sm-2 ps-xm-2 ps-md-4 ps-lg-4 ps-xl-4" src="<?php bloginfo('template_directory'); ?>./dist/images/Logo2.svg" alt=""></a>
    </header>