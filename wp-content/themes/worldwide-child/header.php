<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Worldwide
 */
?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
  <div class="container">
    <div class="logo">  
      <?php worldwide_the_custom_logo(); ?>   
      <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p><?php echo esc_html( $description ); ?></p> 
                <?php endif; ?>           
    </div><!-- logo -->  
    
   <div class="widget-right">      
       <div class="toggle">
          <a class="toggleMenu" href="#"><?php esc_html_e('Menu','worldwide'); ?></a>
       </div> 
        <div class="headernav">
          <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>         
        </div><!-- .headernav--> 
        <div class="clear"></div> 
</div><!--.widget-right-->
 <div class="clear"></div>         
</div> <!-- container -->
	<?php
	global $wp;
	if(home_url( $wp->request ) === get_site_url()){?>
	<div class="home-banner" style="background-image:url('<?php  echo site_url()."/wp-content/uploads/2020/10/slider-image.png"?>')">
		<h1>Gearing up the ideas</h1><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
	</div><?php }?>
<div class="header2">
	<div class="header2-menu-item">
		<img src="<?php echo site_url()."/wp-content/uploads/2020/10/Advertising.png"?>">
		<span><h3>Advertising</h3><p>Just Some Random Text</p></span>
	</div>
	<div class="header2-menu-item">
		<img src="<?php echo site_url()."/wp-content/uploads/2020/10/multimedia.png"?>">
		<span><h3>Multimedia</h3><p>Just Some Random Text</p></span>
	</div>
	<div class="header2-menu-item">
		<img src="<?php echo site_url()."/wp-content/uploads/2020/10/photography.png"?>">
		<span><h3>Photography</h3><p>Just Some Random Text</p></span>
	</div>
</div>
</div><!--.header --> <?php get_sidebar();//$this_url = "http//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];echo $this_url?> 
<?php if ( is_front_page() || is_home() ) { ?>
  <?php if ( get_header_image() ) : ?>
       <div class="header-banner">
		 <img src="<?php header_image(); ?>" alt="">
       </div>
  <?php endif; ?>
<?php } ?>