<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header">

    <nav class="navbar navbar-expand-lg custom-navbar">

        <div class="container">

            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                Flex Property
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNavbar">

                <span class="custom-toggler"></span>

            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo home_url(); ?>">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo get_post_type_archive_link('properties'); ?>">
                            Properties
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

</header>