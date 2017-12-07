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
      <div class="Header container-fluid"><!-- .Header -->
        <nav class="navbar navbar-default" role="navigation"><!-- .navbar -->
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
            ?><div class="navbar-Lang pull-right hidden-xs"><!-- .navbar-Lang -->
              <?php do_action('wpml_add_language_selector'); ?>
            </div><!-- /.navbar-Lang -->
          </div><!-- /!.container-fluid -->
        </nav><!-- /!.navbar -->
      </div><!-- /.Header -->

      <main class="Main"><!-- .Main --->
        <section id="Carousel" class="carousel slide" data-ride="carousel"><!-- .Carousel -->
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner"><!-- .carousel-inner -->
            <div class="item active">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banniere-index1.jpg" alt="Slogan1">
              <p class="Carousel-Slogan Font-Thin">Une <strong class="Font-Black">phrase Slogan</strong> par ici</p>
            </div>

            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banniere-index1.jpg" alt="Chicago">
              <p class="Carousel-Slogan Font-Thin">Une <strong class="Font-Black">phrase Slogan</strong> par ici</p>
            </div>

            <div class="item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banniere-index1.jpg" alt="New York">
              <p class="Carousel-Slogan Font-Thin">Une <strong class="Font-Black">phrase Slogan</strong> par ici</p>
            </div>
          </div><!-- /.carousel-inner -->
        </section><!-- /.Carousel -->

        <section class="Box Box--yellow"><!-- .Box -->
          <div class="Box-Decoration Box-Decoration--yellow"></div>
          <div class="container"><!-- .container -->
            <h3 class="Title Title--red Font-Title">Les derniers Projets</h3>

            <div class="Articles row row-no-padding"><!-- .Articles -->
              <div class="col-md-4"><!-- .col-md-4 -->
                <article class="ArticleBox"><!-- .ArticleBox -->
                  <h3 class="Article-Title Title--H3 Font-DarkGray">Recolte de fond pour les écoles</h3>
                  <img class="Article-Image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-preview.jpg" alt="New York">
                  <p class="Article-Description Font-Paragraph Font-DarkGray Font-Thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reprehenderit illo, laudantium ab itaque dolores nam ducimus deleniti voluptatem, unde, tempore sed nulla voluptates architecto nostrum est magni explicabo, nemo?</p>
                  <footer class="Article-Footer"><!-- .Article-Footer -->
                    <a href="">En savoir +</a>
                  </footer><!-- /.Article-Footer -->
                </article><!-- /.ArticleBox -->
              </div><!-- /.col-md-4 -->

              <div class="col-md-4"><!-- .col-md-4 -->
                <article class="ArticleBox"><!-- .ArticleBox -->
                  <h3 class="Article-Title Title--H3 Font-DarkGray">Recolte de fond pour les écoles</h3>
                  <img class="Article-Image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-preview.jpg" alt="New York">
                  <p class="Article-Description Font-Paragraph Font-DarkGray Font-Thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reprehenderit illo, laudantium ab itaque dolores nam ducimus deleniti voluptatem, unde, tempore sed nulla voluptates architecto nostrum est magni explicabo, nemo?</p>
                  <footer class="Article-Footer"><!-- .Article-Footer -->
                    <a href="">En savoir +</a>
                  </footer><!-- /.Article-Footer -->
                </article><!-- /.ArticleBox -->
              </div><!-- /.col-md-4 -->

              <div class="col-md-4"><!-- .col-md-4 -->
                <article class="ArticleBox"><!-- .ArticleBox -->
                  <h3 class="Article-Title Title--H3 Font-DarkGray">Recolte de fond pour les écoles</h3>
                  <img class="Article-Image" src="<?php echo get_template_directory_uri(); ?>/assets/img/project-preview.jpg" alt="New York">
                  <p class="Article-Description Font-Paragraph Font-DarkGray Font-Thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reprehenderit illo, laudantium ab itaque dolores nam ducimus deleniti voluptatem, unde, tempore sed nulla voluptates architecto nostrum est magni explicabo, nemo?</p>
                  <footer class="Article-Footer"><!-- .Article-Footer -->
                    <a href="">En savoir +</a>
                  </footer><!-- /.Article-Footer -->
                </article><!-- /.ArticleBox -->
              </div><!-- /.col-md-4 -->
            </div><!-- /.Articles -->
          </div><!-- /.container -->
        </section><!-- /.Box -->

        <section class="Box"><!-- .Box -->
          <div class="Box-Decoration Box-Decoration--white"></div>
          <div class="container"><!-- .container -->
            <h3 class="Title Title--green Font-Title">Notre Histoire</h3>
            <article class="History"><!-- .History -->
              <div class="History-Logo"><!-- .History-Logo -->
                <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Kalé-Kalé Association">
              </div><!-- /.History-Logo -->
              <div class="History-Description"><!-- .History-Description -->
                <p class="Font-DarkGray Font-Paragraph Font-Thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, nesciunt magni. Doloribus rem nisi temporibus, saepe ab sunt! Magnam odit laboriosam illum eaque voluptatibus voluptate commodi minima dicta iste enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam magnam quo obcaecati nesciunt explicabo reprehenderit sapiente veniam quibusdam accusamus aliquid consequuntur vero dolore, doloremque possimus non dignissimos repellendus delectus doloribus.</p>

                <p class="Font-DarkGray Font-Paragraph Font-Thin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, nesciunt magni. Doloribus rem nisi temporibus, saepe ab sunt! Magnam odit laboriosam illum eaque voluptatibus voluptate commodi minima dicta iste enim.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam magnam quo obcaecati nesciunt explicabo reprehenderit sapiente veniam quibusdam accusamus aliquid consequuntur vero dolore, doloremque possimus non dignissimos repellendus delectus doloribus.</p>
              </div><!-- /.History-Description -->
            </article><!-- /.History -->
          </div><!-- /.container -->
        </section><!-- /.Box -->

        <section class="Box Box--purple"><!-- .Box -->
          <div class="Box-Decoration Box-Decoration--purple"></div>
          <div class="container"><!-- .container -->
            <article class="Quote"><!-- .Quote -->
              <div class="Quote-ImageLeft"></div>
              <p class="Font-White Font-Black Font-Quote col-md-10 col-md-push-1">
                Notre but principal dans la vie est d’aider les autres. Et si vous ne pouvez pas les aider, essayez au moins ne pas les blesser.
              </p>
              <p class="Quote-Author Font-Purple Font-Black Font-Quote">Dalaï Lama</p>
              <div class="Quote-ImageRight"></div>
            </article><!-- /.Quote -->
          </div><!-- /.container -->
        </section><!-- /.Box -->

        <footer class="Footer"><!-- .Footer -->
          <div class="container"><!-- .container -->
            <div class="col-md-3 Footer-Column">
              <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Kalé-Kalé Association">
            </div>
            <div class="col-md-3 Footer-Column">
              <h3 class="Title Title--green Font-Title">Navigation</h3>
              <div class="Footer-Box"><!-- .FooterBox -->
                <nav class="FooterNav"><!-- .FooterNav -->
                  <ul>
                    <li>Accueil</li>
                    <li>Présentation</li>
                    <li>Projets</li>
                    <li>S'impliquer</li>
                    <li>Contact</li>
                  </ul>
                </nav><!-- /.FooterNav -->
              </div>
            </div>
            <div class="col-md-3 Footer-Column">
              <h3 class="Title Title--blue Font-Title">Réseaux Sociaux</h3>
              <div class="Footer-Box"><!-- .FooterBox -->
                <a href=""><img class="Footer-Social" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-fb.png" alt="Facebook"></a>
                <a href=""><img class="Footer-Social" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-youtube.png" alt="Youtube"></a>
                <a href=""><img class="Footer-Social" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-linkedin.png" alt="LinkedIn"></a>
                <a href=""><img class="Footer-Social" src="<?php echo get_template_directory_uri(); ?>/assets/img/ico-twitter.png" alt="Twitter"></a>
              </div><!-- /.FooterBox -->
            </div>
            <div class="col-md-3 Footer-Column">
              <h3 class="Title Title--red Font-Title">Partenaires</h3>
            </div>
          </div><!-- /.container -->
        </footer><!-- /.Footer -->

        <div class="FooterExtension"><!-- .FooterExtension -->
          <div class="container"><!-- .container -->
            <a href="">Mentions légales</a> | © 2017-2018 kale-kale.net
            <span class="MadeWithLove">Créé avec <span class="MadeWithLove-Coeur">❤</span> par lyenpon</span>
          </div><!-- /.container -->
        </div><!-- /.FooterExtension -->
      </main><!-- /.Main -->

    </div><!-- /.Global -->
    <?php wp_footer(); ?>
  </body>
</html>
<?php //get_footer(); ?>
