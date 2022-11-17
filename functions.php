
<?php

/**
  @DEFINE DIR
 **/

define('THEME_URL', get_stylesheet_directory());
define('THEME_DIC',  get_stylesheet_directory_uri());
define('CORE', THEME_URL . '/core');
define('ASSETS', THEME_DIC . '/assets');

define('TEMPLATE_DIC', THEME_DIC . 'template-parts/alignvn');


/**
  @ Load file /core/init.php
 **/


require_once(CORE . '/init.php');


/**
  @ Define align theme setup funtion
 **/
if (!function_exists('alignvn_theme_setup')) {
  function alignvn_theme_setup()
  {
    $language_folder = THEME_URL . '/language';
    load_theme_textdomain('alignvn', $language_folder);
    add_theme_support('title-tag');
    add_theme_support('core-block-patterns');
    add_theme_support('admin-bar');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('align-wide');
    add_theme_support('widgets');
    add_theme_support('editor-styles');
    add_editor_style('core/block-editor.css');
    // add_theme_support('widgets-block-editor');



    //add_theme_support('wp-block-styles');
    //add_editor_style('style.css');
  };

  add_action('init', 'alignvn_theme_setup');
  add_action('after_setup_theme', 'alignvn_theme_setup');
}

/**
  @ Setting up menu
 **/
if (!function_exists('alignvn_register_nav_menu')) {

  function alignvn_register_nav_menu()
  {
    register_nav_menus(array(
      'primary_menu' => __('Primary Menu', 'alignvn'),
      'secondary_menu' => __('Secondary Menu', 'alignvn'),
      'footer_menu'  => __('Footer Menu', 'alignvn'),
    ));
  }
  add_action('after_setup_theme', 'alignvn_register_nav_menu', 0);
}

function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


/**
 *  Adding library
 */
// load css into the website's front-end

function alignvn_style()
{
  //Jquery
  wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', '', '', true);
  //Gsap
  wp_enqueue_script('gsap-script', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js',  '', '', true);
  wp_enqueue_script('gsap-scrollTrigger', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js',  '', '', true);
  //Dflip js
  wp_enqueue_script('dflip-js', ASSETS . '/dflip/js/dflip.min.js', '', '', true);
  wp_enqueue_script('swiper-js', '//unpkg.com/swiper@8/swiper-bundle.min.js', '', '', true);
  // wp_enqueue_script('inviewport-js', '//cdnjs.cloudflare.com/ajax/libs/is-in-viewport/3.0.4/isInViewport.min.js', '', '', true);

  //Barba js
  wp_enqueue_script('barba-script', '//cdn.jsdelivr.net/npm/@barba/core',  '', '', true);
  //ThreeJS
  // wp_enqueue_script('threejs-script', '//cdnjs.cloudflare.com/ajax/libs/three.js/0.145.0/three.min.js',  '', '', true);
  wp_enqueue_script('threejs-script', '//cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js',  '', '', true);
  // https://cdnjs.cloudflare.com/ajax/libs/three.js/0.145.0/three.min.js
  wp_enqueue_script('isotope-script', '//unpkg.com/isotope-layout@3/dist/isotope.pkgd.js',  '', '', true);
  //Bootstrap
  wp_enqueue_script('bootstrap-script', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js',  '', '', true);

  wp_enqueue_script('extra-hungyen-js', ASSETS . '/js/extra.js', '', '1.0', true);

  //Swiper style
  wp_enqueue_style('swiper-bundle', '//unpkg.com/swiper@8/swiper-bundle.min.css');
  //Dflip style
  wp_enqueue_style('dflip_min_css', ASSETS . '/dflip/css/dflip.min.css', 'all');
  wp_enqueue_style('themify_icons_css', ASSETS . '/dflip/css/themify-icons.min.css', 'all');
  //Bootstrap
  wp_enqueue_style('bootstrap-style', '//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');

  //Main script
  wp_enqueue_style('hungyen_main_styles', ASSETS . '/css/main.css', 'all');
  wp_enqueue_style('hungyen_extra_styles', ASSETS . '/css/extra-style.css', 'all');
  wp_enqueue_style('hungyen_extra', ASSETS . '/css/extra.css', 'all');
}
add_action('wp_enqueue_scripts', 'alignvn_style');

add_action('widgets_init', 'align_register_sidebars');
function align_register_sidebars()
{
  register_sidebar(array(
    'id' => 'header-menu-logo-wrapper',
    'name' => __('Header Menu Logo Wrapper'),
    'description' => __('This is where to change header menu Logo.', 'Align sidebar'),
    'class' => 'header-menu-wrapper',
    'before_widget' => '<div class="header-menu-block">',
    'after_widget' => '</div>',
  ));
}

// GUTENBERG BLOCKS //
add_action('init', 'register_acf_blocks');
function register_acf_blocks()
{
  register_block_type(__DIR__ . '/blocks/menulogo');
}



// Shortcode getting collection composizione
function acf_composition_field()
{
  if (have_rows('composizione')) :
    while (have_rows('composizione')) : the_row();
      $percent = get_sub_field('percentuale');
      $material = get_sub_field('materiale');
      echo '<div class="collectionPage-fabric__desc">';
      echo  '<div class="collectionPage-fabric__number">' .  $percent . '</div>';
      echo  '<div class="collectionPage-fabric__material">' . $material . '</div>';
      echo '</div>';
    endwhile;
  endif;
}

add_shortcode('acf-composition', 'acf_composition_field');


function get_collection_terms()
{
  $terms = get_the_terms($post->ID, 'collection', array('orderby' => 'date', 'order' => 'DESC'));
  // var_dump($terms);
  // echo '<div class="';
  foreach ($terms as $term) {
    echo $term->slug . '-collection ';
  }
}

add_shortcode('get-collection-terms', 'get_collection_terms');
