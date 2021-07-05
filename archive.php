<?php get_header(); ?>
	<h1>Le blog Capitaine WP</h1>

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<article class="post">
			<header>
				<div class="title">
					<h2	h2><?php the_title(); ?></h2>
				</div>

				<?php the_post_thumbnail(); ?>
				
				<div class="meta post__meta">
					<div class="published">Publié le <?php the_time( get_option( 'date_format' ) ); ?> </div>
					par <?php the_author(); ?> • <?php comments_number(); ?>
				</div>
			</header>
			<?php the_excerpt(); ?>
			
			<p>
				<a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
			</p>
		</article>

	<?php endwhile; endif; ?>
<?php get_footer(); ?>