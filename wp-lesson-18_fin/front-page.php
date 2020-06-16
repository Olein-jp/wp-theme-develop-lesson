<?php get_header(); ?>
	<!-- start CONTENTS AREA -->
	<div class="l-content-area c-container">
		<!-- start MAIN -->
		<main class="l-content p-front-page">

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

		</main>
		<!-- end MAIN -->
	</div>
	<!-- end CONTENTS AREA -->
<?php get_footer(); ?>