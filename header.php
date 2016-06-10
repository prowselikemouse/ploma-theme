<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <script src="https://use.typekit.net/xrl6fqs.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body id="pageTop" <?php body_class(); ?>>

    <nav class="main-nav clearfix">
      <div class="container">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
      </div> <!-- /.container -->
    </nav>

    <nav class="mobile-nav">
      <div class="container">
        <div class="menu-btn">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <div class="mobile-nav-container">
          <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
          )); ?>
        </div>
      </div>
    </nav> <!--/.mobile-nav -->


