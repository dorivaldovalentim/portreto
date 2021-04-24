<?php get_header(); ?>

    <!-- content 
		================================================== -->
		
        <div id="content">

			<!-- page-title section -->
			<section class="page-title-section">

				<div class="container-fluid">

					<ul class="page-pag">
						<li><a href="#">Blog</a></li>
					</ul>

					<h1>Blog</h1>

				</div>

			</section>
			<!-- End page-title section -->

			<!-- blog section -->
			<section class="blog-section standart">
				
				<div class="container-fluid">
				
					<div class="blog-box">

						<?php query_posts( 'post_type=post' ) ?>
						<?php while( have_posts() ): the_post() ?>

							<div class="blog-post">
								<div class="post-gallery">
									<a href="<?= the_permalink() ?>">
										<?= the_post_thumbnail() ?>
									</a>
								</div>

								<div class="post-content">
									<?php foreach( get_categories() as $category ): ?>
										<span><?= $category->name ?></span>
									<?php endforeach; ?>

									<h2>
										<a href="<?= the_permalink() ?>">
											<?= the_title() ?>
										</a>
									</h2>

									<span>
										<?= the_date() ?> ||

										<a href="#">
											<?= comments_number() ?>
										</a>
									</span>

									<p><?= the_excerpt() ?></p>
									
									<div class="social-box">
										<ul class="social-icons">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
										</ul>
									</div>
								</div>
							</div>

						<?php endwhile; ?>

						<?php wp_reset_query(); ?>

						<ul class="pagination-list">
							<li><a class="prev" href="#"><i class="fa fa-angle-left"></i></a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">4</a></li>
							<li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
						</ul>

					</div>
				</div>
			</section>
			<!-- End blog section -->

		</div>
		
    <!-- End content -->

<?php get_footer(); ?>