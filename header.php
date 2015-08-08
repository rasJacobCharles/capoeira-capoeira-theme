<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Capoeira Science Theme
 * @since Capoeira Science Theme 0.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
        <!--<![endif]-->
        <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width">
            <title><?php wp_title('|', true, 'right'); ?></title>
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
            <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
            <![endif]-->
            <?php wp_head(); ?>
        </head>

        <body id="page-top" data-offset="90" data-target=".navigation" data-spy="scroll" <?php body_class(); ?>>
            <div id="page" class="wrapper hide-main-content">
                <section  class="page boxing-page home-v2">
                    <!--Menu Mobile-->
                    <div class="menu-wrap">
                        <div class="main-menu">
                            <h4 class="title-menu">Main menu</h4>
                            <button class="close-button" id="close-button"><i class="fa fa-times"></i></button>
                        </div>
<?php wp_nav_menu(array('theme_location'  => '',
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '')); ?>
                            </div>
                        <!--Menu Mobile-->
                        <div class="content-wrapper">
                        <!--Header-->
				<header id="header" class="header header-container alt reveal">
					<div class="container">
						<div class="row">
							<div class="col-md-2 col-sm-3 col-xs-3 logo">
								<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""/></a>
							</div>
                                                    <div class="col-md-9 nav-container">
                                                        <nav class="megamenu collapse navbar-collapse bs-navbar-collapse navbar-right mainnav col-md-10" role="navigation">

                                                        </nav>
                                                    </div>
                                                    <button class="menu-button" id="open-button"></button>
						</div>
					</div>
				</header>
                        <section class="slide-container to-top">
					<div class="ms-fullscreen-template" id="slider1-wrapper">
						<!-- masterslider -->
						<div class="master-slider ms-skin-default" id="masterslider-index">
							<div class="ms-slide slide-1" data-delay="0">
								<div class="slide-pattern"></div>
								<video data-autopause="false" data-mute="true" data-loop="true" data-fill-mode="fill">
									<source src="<?php echo get_template_directory_uri(); ?>/images/video/demo.mp4" type="video/mp4"/>
								</video>
								<h3 class="ms-layer hps-title1" style="left:101px"
									data-type="text"
									data-ease="easeOutExpo"
									data-delay="1000"
									data-duration="0"
									data-effect="skewleft(30,80)"
								>
									Athlete Fitness Club
								</h3>
								<h3 class="ms-layer hps-title3" style="left:95px"
									data-type="text"
									data-delay="1900"
									data-duration="0"
									data-effect="rotate3dtop(-100,0,0,40,t)"
									data-ease="easeOutExpo"
								>
									Make You Be The Fighter
								</h3>

								<h3 class="ms-layer hps-title4" style="left:101px"
									data-type="text"
									data-delay="2500"
									data-duration="0"
									data-effect="rotate3dtop(-100,0,0,18,t)"
									data-ease="easeOutExpo"
								>
									Try A Free Class
								</h3>
							</div>
							<div class="ms-slide slide-2" data-delay="0">
							   <div class="slide-pattern"></div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/bg_1.jpg" alt="lorem ipsum dolor sit"/>
								<h3 class="ms-layer hps-title1" style="left:101px"
									data-type="text"
									data-ease="easeOutExpo"
									data-delay="1000"
									data-duration="0"
									data-effect="skewleft(30,80)">
									Athlete Fitness Club
								</h3>
								<h3 class="ms-layer hps-title3" style="left:95px"
									data-type="text"
									data-delay="1900"
									data-duration="0"
									data-effect="rotate3dtop(-100,0,0,40,t)"
									data-ease="easeOutExpo"
								>
									Make You Be The Fighter
								</h3>

								<h3 class="ms-layer hps-title4" style="left:101px"
									data-type="text"
									data-delay="2500"
									data-duration="0"
									data-effect="rotate3dtop(-100,0,0,18,t)"
									data-ease="easeOutExpo"
								>
									Try A Free Class
								</h3>
							</div>

							<div class="ms-slide slide-3" data-delay="0">
							   <div class="slide-pattern"></div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/blank.gif" data-src="<?php echo get_template_directory_uri(); ?>/images/bg-home-v2.jpg" alt="lorem ipsum dolor sit"/>
								<h3 class="ms-layer hps-title1" style="left:101px"
									data-type="text"
									data-ease="easeOutExpo"
									data-delay="1000"
									data-duration="0"
									data-effect="skewleft(30,80)"
								>
									Athlete Fitness Club
								</h3>
								<h3 class="ms-layer hps-title3" style="left:95px"
									data-type="text"
									data-delay="1900"
									data-duration="0"
									data-effect="rotate3dtop(-100,0,0,40,t)"
									data-ease="easeOutExpo"
								>
									Make You Be The Fighter
								</h3>

								<h3 class="ms-layer hps-title4" style="left:101px"
									data-type="text"
									data-delay="2500"
									data-duration="0"
									data-effect="rotate3dtop(-100,0,0,18,t)"
									data-ease="easeOutExpo"
								>
									Try A Free Class
								</h3>
							</div>
						</div>
						<!-- end of masterslider -->
						<div class="to-bottom" id="to-bottom"><i class="fa fa-angle-down"></i></div>
					</div>
				</section>
                        <!--End Banner-->
				<div class="contents-main" id="contents-main">
                    