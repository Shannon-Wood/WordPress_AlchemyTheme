<!DOCTYPE html>
<html class="has-navbar-fixed-top" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
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

          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="primary-nav">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-end">
            <?php
            wp_nav_menu(array(
                'menu'            =>  "primary",
                'menu_class'      =>  "navbar-menu",
                'menu_id'         =>  "primary-nav",
                'container'       =>  "false",
                'walker'          =>  new BulmaNavMenu(),
                'theme_location'  =>  "primary"
            ));
            ?>
            <!-- <a class="navbar-item">
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
            </a> -->
          </div>
        </div>
      </nav>
    </div>
