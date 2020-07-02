<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="l-site">
	<!-- start SITE HEADER -->
	<header class="p-site-header">
		<div class="p-site-header__inner c-container">
			<figure class="p-site-icon">
				<img class="p-site-icon__image"
				     src="<?php echo get_theme_file_uri(); ?>/images/portfolio-icon.png"
				     alt="オレインアイコン">
			</figure>
			<h1 class="p-site-title"><?php bloginfo( 'name' ); ?></h1>
			<p class="p-site-description"><?php bloginfo( 'description' ); ?></p>
		</div>
	</header>
	<!-- end SITE HEADER -->
	<!-- start NAVIGATION -->
	<button id="menu" class="p-menu-button">Menu</button>
	<nav class="p-global-navigation">
		<ul>
			<li><a href="<?php echo esc_url( home_url() ); ?>">HOME</a></li>
			<li><a href="<?php echo esc_url( home_url( '/profile' ) ); ?>">PROFILE</a></li>
			<li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">BLOG</a></li>
			<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">CONTACT</a></li>
		</ul>
	</nav>
	<!-- end NAVIGATION -->