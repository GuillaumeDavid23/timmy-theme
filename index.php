<?php get_header(); ?>

				<!-- Main -->
					<div id="main">
						<!-- Intro -->
						<section id=intro">
							<a href="#" class="logo"><img src="<?=get_template_directory_uri().'/images/'?>logo.jpg" alt="" /></a>
							<header>
								<h2>Future Imperfect</h2>
								<p>Another fine responsive site template by <a href="http://html5up.net">HTML5 UP</a></p>
							</header>
						</section>
						<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

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
							<p><?php the_excerpt(); ?></p>
							
							<footer class="actions">
								<ul>
									<a href="<?php the_permalink(); ?>" class="button large">Lire la suite</a>
								</ul>
								<ul class="stats">
									<li><a href="#">General</a></li>
									<li><a href="#" class="icon solid fa-heart">28</a></li>
									<li><a href="#" class="icon solid fa-comment"><?php comments_number(); ?></a></li>
								</ul>
							</footer>
						</article>

						<?php endwhile; endif; ?>
					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">
									<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
												<time class="published">Publié le <?php the_time( get_option( 'date_format' ) ); ?></time>
												<a href="#" class="author"><img src="<?=get_template_directory_uri().'/images/'?>avatar.jpg" alt="" /></a>
											</header>
											<a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail(); ?></a>
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
												<a href="<?php the_permalink(); ?>" class="image"><img src="<?=get_template_directory_uri().'/images/'?>pic08.jpg" alt="" /></a>
											</article>
										</li>
									<?php endwhile; endif; ?>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="#" class="button">Learn More</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
							</section>
					</section>
			</div>

		<?php get_footer(); ?>