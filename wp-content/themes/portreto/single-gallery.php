<?php get_header(); ?>

    <!-- content 
		================================================== -->
		
        <div id="content">

			<?php the_post(); ?>

			<!-- page-title section -->
			<section class="page-title-section">
				<div class="container-fluid">
					<h1><?= the_title(); ?></h1>
				</div>
			</section>
			<!-- End page-title section -->

			<!-- single-project section -->
			<section class="single-project-section">

				<div class="single-content">

					<div class="container-fluid">

						<div class="row">

							<div class="col-md-5">

								<div class="title-post">
									<h1>Autor</h1>

									<ul class="project-tags">
										<li><a href="#"><?= the_field('author') ?></a></li>
									</ul>
								</div>

								<div class="title-post">
									<h1>Data de publicação</h1>

									<ul class="project-tags">
										<li><a href="#"><?= the_date() ?></a></li>
									</ul>
								</div>

								<div class="share-box">
									<div class="row">
										<div class="col-md-12">
											<span>Share:</span>
										</div>

										<div class="col-md-12">
											<ul class="social-icons">
												<li>
													<a class="facebook" href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</li>

												<li>
													<a class="whatsapp" href="#">
														<i class="fa fa-whatsapp"></i>
													</a>
												</li>

												<li>
													<a class="linkedin" href="#">
														<i class="fa fa-linkedin"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>

							</div>

							<div class="col-md-6 col-md-offset-1">
								<p><?= the_excerpt(); ?></p>
							</div>
						</div>

					</div>

				</div>

				<div class="container-fluid">
					<div class="grid-images">
						<div class="row">
							<?php $count = 0; for($count = 1; $count <= 6; $count++): ?>
								<div class="col-md-6">
									<img src="<?= the_field('midia_' . $count) ?>" alt="">
								</div>
							<?php endfor; ?>
						</div>

						<div class="pag-page">
							<?= previous_post_link(
								'%link',
								'<i class="fa fa-angle-left"></i> %title'
							) ?>

							<?= next_post_link(
								'%link',
								'%title <i class="fa fa-angle-right"></i>'
							) ?>
						</div>
					</div>
				</div>
				
			</section>
			<!-- End single-project section -->

		</div>
		
    <!-- End content -->

<?php get_footer(); ?>