<!DOCTYPE html>
<html class="has-navbar-fixed-top" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>" type="text/css">
    <?php wp_head(); ?>
    <title>Ouldfellas</title>
  </head>
  <body>
    <div class="nav-wrapper">
      <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="<?php echo get_template_directory_uri() . '/img/Icon.png';?>" width="222" height="55.5">
          </a>

          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item">
              About
            </a>

            <a class="navbar-item">
              Blog
            </a>

            <a class="navbar-item">
              Contact
            </a>

            <a class="navbar-item">
              Sponsor
            </a>

            <a class="navbar-item donate-nav-item">
              Donate
            </a>
          </div>
        </div>
      </nav>
    </div>
