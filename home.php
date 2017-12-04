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
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">

  	<?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  </head>
  <body>
    <div class="Global"><!-- .Global -->
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation"><!-- .navbar -->
        <div class="navbar-inner container-fluid"><!-- .container-fluid -->

          <div class="navbar-header"><!-- .navbar-header -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-menu-1"><!-- .navbar-toggle -->
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button><!-- /.navbar-toggle -->

            <div class="navbar-Lang-Mobile hidden-md"><!-- .navbar-Lang -->
              <?php do_action('wpml_add_language_selector'); ?>
            </div><!-- /.navbar-Lang -->

            <a class="navbar-brand" href="<?php bloginfo('url')?>">
              <img class="Logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Kalé Kalé" width="187" height="95">
            </a>
          </div><!-- /!.navbar-header -->
            <?php
              wp_nav_menu( array(
                'menu'              => 'header-menu',
                'depth'             => 0,
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
              );
            ?>

            <div class="navbar-Lang pull-right hidden-xs"><!-- .navbar-Lang -->
              <?php do_action('wpml_add_language_selector'); ?>
            </div><!-- /.navbar-Lang -->
          </div><!-- /!.container-fluid -->
      </nav><!-- /!.navbar -->

      <main class="Main"><!-- .Main --->
        Home
      </main><!-- /.Main -->
    </div><!-- /.Global -->
  </body>
</html>
<?php //get_footer(); ?>
