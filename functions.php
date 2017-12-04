<?php
  // Supprimer barre noir
  add_filter('show_admin_bar', '__return_false');

  // Header clean
  remove_action( 'wp_head', 'rsd_link' );
  remove_action( 'wp_head', 'wlwmanifest_link' );
  remove_action( 'wp_head', 'wp_generator' );
  remove_action( 'wp_head', 'start_post_rel_link' );
  remove_action( 'wp_head', 'index_rel_link' );
  remove_action( 'wp_head', 'adjacent_posts_rel_link' );
  remove_action( 'wp_head', 'wp_shortlink_wp_head' );
  remove_action( 'wp_head','qtranxf_wp_head_meta_generator');
  remove_action( 'wp_head', 'wp_resource_hints', 2 );

  // Clean JS
  function starter_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/vendors.js', false, NULL, true );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_style( 'starter-style', get_stylesheet_uri() );
    wp_enqueue_script( 'includes', get_template_directory_uri() . '/assets/js/custom.js', '', '', true );
  }
  add_action( 'wp_enqueue_scripts', 'starter_scripts' );

  //Menu
  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu', 'gkengineering' ));
  }
  add_action( 'init', 'register_my_menu' );

  // Register Custom Navigation Walker
  require_once('wp-bootstrap-navwalker.php');

  function disable_wp_emojicons() {

    // all actions related to emojis
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

    // filter to remove TinyMCE emojis
    add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  }
  add_action( 'init', 'disable_wp_emojicons' );

  function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
      return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
      return array();
    }
  }

  // Footer Clean
  function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
  }
  add_action( 'wp_footer', 'my_deregister_scripts' );

  // Remove p content
  remove_filter ('the_excerpt', 'wpautop');

  // Menu Footer Split
  class Footer_Menu extends Walker_Nav_Menu {

    var $current_menu = null;
    var $break_point  = null;

    function start_el(&$output, $item, $depth, $args) {

        global $wp_query;

        if( !isset( $this->current_menu ) )
            $this->current_menu = wp_get_nav_menu_object( $args->menu );

        if( !isset( $this->break_point ) )
            $this->break_point = ceil( $this->current_menu->count / 2 ) + 1;

        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        if( $this->break_point == $item->menu_order )
            $output .= $indent . '</li></ul><ul><li' . $id . $value . $class_names .'>';
        else
            $output .= $indent . '<li' . $id . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
  }

  // Supprimer Menus back office
  function remove_menu_items() {
    global $menu;
    $restricted = array(__('Posts'), __('Comments'));
    end ($menu);
    while (prev($menu)) {
      $value = explode(' ',$menu[key($menu)][0]);
      if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
        unset($menu[key($menu)]);
      }
    }
  }

  add_action('admin_menu', 'remove_menu_items');

  // ACF default language
  add_filter('acf/settings/default_language', 'my_acf_settings_default_language');

  function my_acf_settings_default_language( $language ) {

      return 'en';

  }
?>
