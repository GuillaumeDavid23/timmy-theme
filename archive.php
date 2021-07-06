<?php get_header(); ?>
	<!-- Main -->
		<div id="main">
			<h2>Categorie : </h2>
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<article class="post">
					<header>
						<div class="title">
							<h2><a href="#"><?php the_title(); ?></a></h2>
						</div>
						<div class="meta">
							<div class="published">Publié le <?php the_time( get_option( 'date_format' ) ); ?> </div>
							<a href="#" class="author">
								<span class="name"><?php $user = the_author(); ?></span>
								<img src="<?= get_avatar_url($user);?>" alt="" />
							</a>
						</div>
					</header>
					<a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail(); ?></a>
					<p><?php the_excerpt(); ?></p>
					
					<footer class="actions">
						<ul>
							<a href="<?php the_permalink(); ?>" class="button large">Lire la suite</a>
						</ul>
						<ul class="stats">
							<li><a href="#" class="icon solid fa-"><?php if(function_exists('the_views')) { the_views(); } ?></a></li>
							<li><a href="#" class="icon solid fa-comment"><?php comments_number(); ?></a></li>
						</ul>
					</footer>
				</article>
			<?php endwhile; endif; ?>
			
			
			<!-- Pagination -->
			<?php
				add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
				add_filter('previous_posts_link_attributes', 'posts_link_attributes_previous');
				function posts_link_attributes_previous() {
				return 'class="button large previous"';
				}
				function posts_link_attributes_next() {
				return 'class="button large next"';
				}
			?>
				<ul class="actions pagination">
					<li><?= get_previous_posts_link(); ?></li>
					<li><?= get_next_posts_link(); ?></li>
				</ul>
		</div>

	<!-- Sidebar -->
		<section id="sidebar">
			<!-- Intro -->
				<section id="intro">
					<a href="#" class="logo"><img src="<?= get_avatar_url($user);?>" alt="" /></a>
					<header>
						<h2><?php $category = single_cat_title(); ?></h2>
						<p><?php echo category_description( $category ); ?></p>
					</header>
				</section>

				<!-- Mini Posts -->
				<section>
					<div class="mini-posts">
						<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<!-- Mini Post -->
							<article class="mini-post">
								<header>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<time class="published">Publié le <?php the_time( get_option( 'date_format' ) ); ?></time>
									<a href="<?php the_permalink(); ?>" class="author"><img src="<?= get_avatar_url($user);?>" alt="" /></a>
								</header>
								<a href="<?php the_permalink(); ?>" class="image"><div class="thumbs"><?php the_post_thumbnail(); ?></div></a>
							</article>
						<?php endwhile; endif; ?>
					</div>
				</section>

			<!-- Posts List -->
			<section>
				<ul class="posts">
					<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<li>
							<article>
								<header>
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<time class="published">Publié le <?php the_time( get_option( 'date_format' ) ); ?></time>
								</header>
								<a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail(); ?></a>
							</article>
						</li>
					<?php endwhile; endif; ?>
				</ul>
			</section>
		</section>

<?php get_footer(); ?>