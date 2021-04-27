<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rebonz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/d4e8c2f319.js" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/func.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rebonz' ); ?></a>

	<header id="masthead" class="site-header <?php if ( is_front_page() ) { ?>hasbanner<?php	} ?>">

		<div class="header-t pc">
			<div class="container">
				<ul class="info_nav">
					<li>
						<i class="fas fa-mobile-alt"></i>
						<a href="tel:0364079665" class="tel-link">03-6407-9665</a>
					</li>
					<li>
						<i class="fas fa-map-marker-alt"></i>
						<span>東京都豊島区西池袋3-12-11</span>
					</li>
					<li>
						<i class="far fa-envelope"></i>
						<!-- to do 確認する！ -->
						<a href="mailto:info@rebonz.tokyo" class="email-link">info@rebonz.tokyo</a>
					</li>
				</ul>
			</div>
		</div>


		<div class="main-header">
			<div class="container">

				<?php if ( is_front_page() ) { ?>
					<h1 class="text-logo"><a href="<?php echo home_url(); ?>">株式会社Re.bonz</a></h1>
				<?php } else { ?>
					<h2 class="text-logo"><a href="<?php echo home_url(); ?>">株式会社Re.bonz</a></h2>
				<?php	} ?>

				<div class="pc">
					<ul class="sitenav">
						<li class="sitenav__item"><a href="<?php echo home_url(); ?>">HOME</a></li>
						<li class="sitenav__item"><a href="<?php echo home_url(); ?>/company/">ABOUT US</a></li>
						<li class="sitenav__item"><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
					</ul>
				</div>

				<div class="sp">
					<div class="hamburger">
						<span></span>
						<span></span>
						<span></span>
					</div>

					<nav class="globalMenuSp">
						<!-- <?php if ( is_front_page() ) { ?>
							<h1 class="text-logo"><a href="<?php echo home_url(); ?>">株式会社Re.bonz</a></h1>
						<?php } else { ?>
							<h2 class="text-logo"><a href="<?php echo home_url(); ?>">株式会社Re.bonz</a></h2>
						<?php	} ?> -->
						<ul class="hamburgermenu">
							<li><a href="<?php echo home_url(); ?>">HOME</a></li>
							<li><a href="<?php echo home_url(); ?>/company/">ABOUT US</a></li>
							<li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
						</ul>
						<ul class="info_nav">
							<li>
								<i class="fas fa-mobile-alt"></i>
								<a href="tel:0364079665" class="tel-link">03-6407-9665</a>
							</li>
							<li>
								<i class="fas fa-map-marker-alt"></i>
								<span>東京都豊島区西池袋3-12-11</span>
							</li>
							<li>
								<i class="far fa-envelope"></i>
								<a href="mailto:info@rebonz.tokyo" class="email-link">info@rebonz.tokyo</a>
							</li>
						</ul>
					</nav>
				</div>

			</div>
		</div>


	</header><!-- #masthead -->