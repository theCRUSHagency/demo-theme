<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
    
    wp_enqueue_style( 'open-sans-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Customize Footer Credits
remove_action( 'genesis_footer', 'genesis_do_footer');
add_action( 'genesis_footer', 'sp_custom_footer');

function sp_custom_footer() {
  ?>
  <div class="crush-copyright">
    <small>
      Copyright &copy; <?php echo date("Y"); ?> | Designed &amp; Developed by <a href="http://www.thecrushagency.com" target="blank" title="Designed and developed by the best marketing agency in Tampa and Philadelphia, The CRUSH Agency!">The CRUSH Agency</a>
    </small>
  </div>
  <?php
}
