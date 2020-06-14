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
	<!-- start CONTENTS AREA -->
	<div class="l-content-area c-container">
		<!-- start MAIN -->
		<main class="l-content">
			<h1 class="p-archive-title">BLOG</h1>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<!-- start ENTRY -->
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'c-hentry' ); ?>>
						<figure class="c-hentry-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<img src="http://placehold.it/800x600" alt="アイキャッチ画像">
							</a>
						</figure>
						<div class="c-hentry-content">
							<header class="entry-header">
								<h2 class="entry-title">
									<a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a>
								</h2>
								<div class="entry-meta">
									<time class="entry-date published"><?php the_time( get_option( 'date_format' ) ); ?></time>
									<span class="category-links">
										<?php the_category( '&nbsp;' ); ?>
									</span>
									<span class="tag-links">
										<?php the_tags( '', '', '' ); ?>
									</span>
								</div>
							</header>
							<div class="entry-excerpt">
								<?php the_excerpt(); ?>
							</div>
						</div>
					</article>
					<!-- end ENTRY -->
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo "データが入っていません。"; ?>
			<?php endif; ?>

			<!-- start PAGINATION -->
			<div class="p-pagination navigation pagination" role="navigation">
				<h2 class="screen-reader-text">投稿ナビゲーション</h2>
				<div class="nav-links">
					<a href="#" class="previous page-numbers">前ページへ</a>
					<a href="#" class="page-numbers">1</a>
					<span class="page-numbers current">2</span>
					<a href="#" class="page-numbers">3</a>
					<a href="#" class="next page-numbers">次ページへ</a>
				</div>
			</div>
			<!-- end PAGINATION -->
		</main>
		<!-- end MAIN -->
		<aside class="l-sidebar">
			<div class="c-widget">
				<h2 class="c-widget__title">CATEGORIES</h2>
				<ul>
					<li>
						<a href="#">カテゴリー１</a>
					</li>
					<li>
						<a href="#">カテゴリー２</a>
					</li>
					<li>
						<a href="#">カテゴリー３</a>
					</li>
				</ul>
			</div>
		</aside>
	</div>
	<!-- end CONTENTS AREA -->
	<footer class="l-site-footer p-site-footer">
		<div class="c-container p-footer-widget-area">
			<div class="p-footer-widget-area__col">
				<div class="c-widget">
					<h2 class="c-widget__title">CATEGORIES</h2>
					<ul>
						<li>
							<a href="#">カテゴリー１</a>
						</li>
						<li>
							<a href="#">カテゴリー２</a>
						</li>
						<li>
							<a href="#">カテゴリー３</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="p-footer-widget-area__col">
				<div class="c-widget">
					<h2 class="c-widget__title">RECENT ENTRY</h2>
					<ul>
						<li>
							<a href="#">投稿タイトルが入ります。</a>
						</li>
						<li>
							<a href="#">投稿タイトルが入ります。</a>
						</li>
						<li>
							<a href="#">投稿タイトルが入ります。</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="p-footer-widget-area__col">
				<div class="c-widget">
					<h2 class="c-widget__title">TAGS</h2>
					<ul>
						<li>
							<a href="#">タグ１</a>
						</li>
						<li>
							<a href="#">タグ２</a>
						</li>
						<li>
							<a href="#">タグ３</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<p class="p-copyright">My Portfolio©︎ AllRights Reserved.</p>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>