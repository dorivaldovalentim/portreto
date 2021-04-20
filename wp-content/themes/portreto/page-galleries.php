<?php get_header(); ?>

    <!-- content 
		================================================== -->
		
        <div id="content">

			<!-- portfolio section -->
			<section class="portfolio-section">
				<a class="filter-toggle" href="#">
                    <i class="fa fa-align-justify" aria-hidden="true"></i>
                </a>
				
                <ul class="filter">
					<li><a class="active" href="#" data-filter="*">all</a></li>
					<li><a href="#" data-filter=".photography">photography</a></li>
					<li><a href="#" data-filter=".model">model</a></li>
					<li><a href="#" data-filter=".nature">nature</a></li>
					<li><a href="#" data-filter=".portrait">portrait</a></li>
				</ul>

				<div class="portfolio-box iso-call col-3">

					<?php query_posts( 'post_type=gallery' ); ?>
					<?php while( have_posts() ): the_post(); ?>

						<div class="project-post photography nature">

							<img src="<?= get_template_directory_uri() . '/assets/upload/portfolio/p1.jpg' ?>" alt="">
						
							<a class="likes" href="#">
								14 <i class="fa fa-heart-o"></i>
							</a>
						
							<div class="hover-box">
							
								<div class="inner-hover">
									<h2><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h2>
									<span>Nov 4th, 2015, 0 Comments</span>
								</div>
							
							</div>
						
						</div>

					<?php endwhile; ?>

					<?php wp_reset_query(); ?>
				</div>
			</section>
			<!-- end portfolio section -->

		</div>
	
    <!-- End content -->

<?php get_footer(); ?>