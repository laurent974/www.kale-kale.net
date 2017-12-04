<?php /* Template Name: Home */ ?>

<?php //get_header(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <base href="<?php bloginfo('url')?>">
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <!--[if lt IE 9]>
  	  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  	<![endif]-->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/manifest.json">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/safari-pinned-tab.svg" color="#fff">
    <meta name="theme-color" content="#ffffff">

  	<?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  </head>
  <body>
    <div class="Global"><!-- .Global -->
      <div class="Header container-fluid">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"><!-- .navbar -->
          <div class="navbar-inner container-fluid"><!-- .container-fluid -->

            <div class="navbar-header"><!-- .navbar-header -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-header-menu"><!-- .navbar-toggle -->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button><!-- /.navbar-toggle -->

              <div class="navbar-Lang-Mobile hidden-md"><!-- .navbar-Lang -->
                <?php do_action('wpml_add_language_selector'); ?>
              </div><!-- /.navbar-Lang -->

              <a class="navbar-brand" href="<?php bloginfo('url')?>">
                <img class="Logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Kalé Kalé" width="187" height="95">
              </a>
            </div><!-- /!.navbar-header -->
            <?php
            wp_nav_menu( array(
              'menu'              => 'header-menu',
              'depth'             => 0,
              'container'         => false,
              'menu_class'        => 'nav navbar-nav collapse',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker())
            );
            ?>

            <div class="navbar-Lang pull-right hidden-xs"><!-- .navbar-Lang -->
              <?php do_action('wpml_add_language_selector'); ?>
            </div><!-- /.navbar-Lang -->
          </div><!-- /!.container-fluid -->
        </nav><!-- /!.navbar -->
      </div>

      <main class="Main container-fluid"><!-- .Main --->
        Home
      </main><!-- /.Main -->

      <?php wp_footer(); ?>
    </div><!-- /.Global -->
  </body>
</html>
<?php //get_footer(); ?>
