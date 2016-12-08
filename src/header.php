<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <title><?php wp_title(''); ?></title>

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <link rel="stylesheet/less" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.less" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

      <!-- Fixed navbar -->
          <nav id="header" class="navbar navbar-fixed-top">
              <div id="header-container" class="container navbar-container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a id="brand" class="navbar-brand" href="#"><?php get_bloginfo( 'name' ); ?></a>
                  </div>
                  <div id="navbar" class="collapse navbar-collapse">
                      <ul class="nav navbar-nav">
                          <li class="active"><a href="#">Home</a></li>
                          <li><a href="#about">About</a></li>
                          <li><a href="#contact">Contact</a></li>
                      </ul>
                  </div><!-- /.nav-collapse -->
              </div><!-- /.container -->
          </nav><!-- /.navbar -->
