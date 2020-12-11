<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&family=Markazi+Text:wght@500&family=Roboto&display=swap" rel="stylesheet">
    <title> Bootstrap 02-01 </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/owlcarousel/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media-style.css">
</head>
<body class=" " data-spy="scroll" data-target="#list-example" data-offset="200" class="scrollspy-example">
    <nav class="navbar navbar-expand-lg navbar navbar-light fixed-top py-4 px-5" >
        <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="text-light mt-2 mr-4 mt-lg-0 mr-lg-0 social-links">
                <li class="list-unstyle d-inline-block">
                    <a class="fa fa-instagram">  </a>
                </li>

                <li class="list-unstyle d-inline-block">
                    <a class="fa fa-telegram mx-3">  </a>
                </li>

                <li class="list-unstyle d-inline-block">
                    <a class="fa fa-facebook">  </a>
                </li>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'navbar', 'container' => " " ) ); ?>

            <!-- <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                    <a class="nav-link here" href="#"> خانه<i class="fa fa-home fa-lg"></i> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        نمونه کار ها
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item item-header-dropdown" href="#">نمونه کاره 1</a>
                        <a class="dropdown-item item-header-dropdown" href="#">نمونه کار 2 </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item item-header-dropdown" href="#">نمونه کار 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true"> درباره با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">تماس با ما</a>
                </li>


            </ul> -->
            <a class="navbar-brand float-right float-lg-left" href="#">عنوان سایت</a>

        </div>
    </nav>
