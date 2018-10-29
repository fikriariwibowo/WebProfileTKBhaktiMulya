<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-aa">
 *
 * @package Kid Toys Store
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'kid-toys-store' ) ); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="main-bodybox">
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','kid-toys-store'); ?></a></div>

  <div class="topbar">
    <div class="container">
      <div class="baricon">
        <?php if( get_theme_mod( 'kid_toys_store_mail','' ) != '') { ?>
          <span class="email"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('kid_toys_store_mail',__('support@example.com','kid-toys-store')) ); ?></span>
        <?php } ?>
        <?php if( get_theme_mod( 'kid_toys_store_call','' ) != '') { ?>
          <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('kid_toys_store_call',__('(518) 356-5373','kid-toys-store') )); ?></span>
         <?php } ?>
          <?php if( get_theme_mod( 'kid_toys_store_youtube_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_youtube_url','' ) ); ?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'kid_toys_store_facebook_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'kid_toys_store_twitter_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <?php } ?>
          <?php if( get_theme_mod( 'kid_toys_store_rss_url') != '') { ?>
            <a href="<?php echo esc_url( get_theme_mod( 'kid_toys_store_rss_url','' ) ); ?>"><i class="fas fa-rss" aria-hidden="true"></i></a>
          <?php } ?>
        </div>
    </div>
  </div>

  <div id="header">
    <div class="container">
      <div class="row">
        <div class="logo col-lg-3 col-md-3">
          <?php if( has_custom_logo() ){ kid_toys_store_the_custom_logo();
             }else{ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?> 
              <p class="site-description"><?php echo esc_html($description); ?></p>       
          <?php endif; }?>
        </div>
        <div class="col-lg-7 col-md-7">
          <div class="menubox nav">
            <div class="mainmenu">
              <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <div class=" col-lg-2 col-md-3 headericons">
          <div class="row">
            <div class="search-box col-lg-4 p-0">
              <span class="search-image"></span>
            </div>
            <div class="col-lg-4 p-0">
              <span class="cart_icon">
                <?php if(class_exists('woocommerce')){ ?>
                    <li class="cart_box">
                     <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
                    </li> 
                <?php } ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_cart_page_id') ) ); ?>"><img src="<?php echo esc_html(get_template_directory_uri().'/images/icon.png'); ?>" alt=""></a>
              </span>
            </div>
            <div class="col-lg-4 p-0">
              <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><img src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/images/accounticon.png') ); ?>" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <div class="serach_outer">
        <div class="closepop"><i class="far fa-window-close"></i></div>
        <div class="serach_inner">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>