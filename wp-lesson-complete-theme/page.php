<?php get_header(); ?>
	<!-- start CONTENTS AREA -->
	<div class="l-content-area c-container">
		<!-- start MAIN -->
		<main class="l-content">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<!-- start ENTRY -->
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'c-hentry' ); ?>>
						<figure class="c-hentry-thumbnail">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail(); ?>
							<?php else : ?>
								<img src="<?php echo get_theme_file_uri() . '/images/no-thumbnail.png'; ?>"
									 alt="ダミーアイキャッチ画像">
							<?php endif; ?>
						</figure>
						<div class="c-hentry-content">
							<header class="entry-header">
								<h1 class="entry-title">
									<?php the_title(); ?>
								</h1>
								<div class="entry-meta">
									<time class="entry-date published"><?php the_time( get_option( 'date_format' ) ); ?></time>
								</div>
							</header>
							<div class="entry-content">
								<?php the_content(); ?>
							</div>
						</div>
					</article>
					<!-- end ENTRY -->
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo "データが入っていません。"; ?>
			<?php endif; ?>

			<?php the_post_navigation(); ?>
		</main>
		<!-- end MAIN -->
		<?php get_sidebar(); ?>
	</div>
	<!-- end CONTENTS AREA -->
<?php get_footer(); ?>