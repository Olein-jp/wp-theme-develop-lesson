<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>My Portfolio</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="l-site">
	<!-- start SITE HEADER -->
	<header class="p-site-header">
		<div class="p-site-header__inner c-container">
			<figure class="p-site-icon">
				<img class="p-site-icon__image"
				     src="<?php echo get_theme_file_uri(); ?>/images/portfolio-icon.png"
				     alt="オレインアイコン">
			</figure>
			<h1 class="p-site-title">My Portfolio</h1>
			<p class="p-site-description">オレインのポートフォリオ用ウェブサイトです。</p>
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