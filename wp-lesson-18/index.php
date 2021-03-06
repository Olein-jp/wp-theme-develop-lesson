<?php get_header(); ?>
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
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail(); ?>
								<?php else : ?>
									<img src="<?php echo get_theme_file_uri() . '/images/no-thumbnail.png'; ?>"
										 alt="ダミーアイキャッチ画像">
								<?php endif; ?>
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

			<?php the_posts_pagination(
				array(
					'prev_text' => '前ページへ',
					'next_text' => '次ページへ'
				)
			); ?>
			<!-- end PAGINATION -->
		</main>
		<!-- end MAIN -->
		<?php get_sidebar(); ?>
	</div>
	<!-- end CONTENTS AREA -->
	<?php get_footer(); ?>