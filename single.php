<?php get_header(); ?>
<article class="post">
	<header>
		<div class="title">
			<h2><a href="#"><?php the_title(); ?></a></h2>
		</div>

		<?php //the_post_thumbnail(); ?>
		
		<div class="meta">
			<div class="published">Publié le <?php the_time( get_option( 'date_format' ) ); ?> </div>
			<a href="#" class="author">
				<span class="name"><?php the_author(); ?></span>
				<img src="<?=get_template_directory_uri().'/images/'?>avatar.jpg" alt="" />
			</a>
		</div>
	</header>
	<a href="#" class="image featured"><?php the_post_thumbnail(); ?></a>
	<p><?php the_content(); ?></p>
	
	<footer class="actions">
		<ul class="stats">
			<li><a href="#">General</a></li>
			<li><a href="#" class="icon solid fa-heart">28</a></li>
			<li><a href="#" class="icon solid fa-comment"><?php comments_number(); ?></a></li>
		</ul>
	</footer>
</article>
<!-- Pagination -->
<?php the_posts_pagination(); ?>

<?php get_footer(); ?>