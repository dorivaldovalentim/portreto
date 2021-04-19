<?php get_header(); ?>
    
    <!-- content 
			================================================== -->
		
		<div id="content">

			<!-- carousel works section -->
			<section class="carousel-works">
				
				<div class="works-box owl-wrapper">

					<div class="owl-carousel" data-num="4">
					
						<?php query_posts( 'post_type=carousel' ); ?>

						<?php while( have_posts() ): the_post() ?>

							<div class="item">

								<div class="works-post">

									<?= the_post_thumbnail() ?>

									<div class="hover-box">

										<div class="inner-hover">
											<a class="likes" href="#">
												14 <i class="fa fa-heart-o"></i>
											</a>
											
											<h2><a href="single-project.html"><?= the_title() ?></a></h2>

											<ul class="project-tags">
												<li><a href="#">Portrait,</a></li>
												<li><a href="#">Lifestyle</a></li>
											</ul>

											<div class="hidden-box">
												<p><?= the_excerpt() ?></p>
												<a href="single-project.html"><?= the_field('button') ?></a>
											</div>
										</div>

									</div>

								</div>

							</div>
						
						<?php endwhile; ?>

						<?php wp_reset_query(); ?>
						
					</div>

				</div>

			</section>
			<!-- end carousel works section -->

		</div>
	
	<!-- End content -->
    
<?php get_footer(); ?>