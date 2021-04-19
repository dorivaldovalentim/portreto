<?php get_header(); ?>

    <!-- content 
		================================================== -->
		
        <div id="content">

			<!-- services-section 
				================================================== -->
			<section class="services-section">
				<div class="container-fluid">
					<div class="title-section">
						<h1>Our main services</h1>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. </p>
					</div>

					<div class="services-box">
						<div class="row">

							<div class="col-md-4">
								<div class="services-post">
									<i class="fa fa-camera" aria-hidden="true"></i>
									<h2>Professional <br> Camera</h2>
									<p>Phasellus hendrerit pellentesque aliquet nibh nec urna in nisi neque, aliquet vel, dapibus id, mattis vel, nisi...</p>
								</div>
							</div>

							<div class="col-md-4">
								<div class="services-post">
									<i class="fa fa-camera-retro" aria-hidden="true"></i>
									<h2>Best <br> Photographer</h2>
									<p>Phasellus hendrerit pellentesque aliquet nibh nec urna in nisi neque, aliquet vel, dapibus id, mattis vel, nisi...</p>
								</div>
							</div>

							<div class="col-md-4">
								<div class="services-post">
									<i class="fa fa-picture-o" aria-hidden="true"></i>
									<h2>Deliver <br> Images</h2>
									<p>Phasellus hendrerit pellentesque aliquet nibh nec urna in nisi neque, aliquet vel, dapibus id, mattis vel, nisi...</p>
								</div>
							</div>

						</div>
					</div>

				</div>
			</section>
			<!-- End services section -->

			<!-- about-section
				================================================== -->
			<section class="about-section">
				<div class="container-fluid">

					<div class="title-section">
						<h1>Professional Photography company</h1>
						<p>LPellentesque aliquet nibh nec urna.</p>
					</div>

					<div class="about-box">
						<div class="row">

							<div class="col-sm-6">
								<div class="about-post">
									<img src="<?= get_template_directory_uri() . '/assets/upload/others/ab1.jpg' ?>" alt="">
									<h2>Vision, Mission &amp; Values</h2>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi.</p>
									<p>Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. </p>
								</div>
							</div>

							<div class="col-sm-6">
								<div class="about-post">
									<img src="<?= get_template_directory_uri() . '/assets/upload/others/ab2.jpg' ?>" alt="">
									<h2>History</h2>
									<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue.</p>
									<p>Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p>
								</div>
							</div>

						</div>
					</div>

				</div>
			</section>
			<!-- End about section -->

			<!-- team section -->
			<section class="team-section">
				<div class="container-fluid">
					<div class="title-section">
						<h1>Our Team</h1>
						<p>Meet them</p>
					</div>
					<div class="team-box">
						<div class="row">
							<div class="col-md-4">
								<div class="team-post">
									<div class="team-gal">
										<img src="<?= get_template_directory_uri() . '/assets/upload/others/team1.jpg' ?>" alt="">
									</div>
									<h2>Mark</h2>
									<span>Marketing Menager</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="team-post">
									<div class="team-gal">
										<img src="<?= get_template_directory_uri() . '/assets/upload/others/team2.jpg' ?>" alt="">
									</div>
									<h2>Lisa</h2>
									<span>Photographer</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="team-post">
									<div class="team-gal">
										<img src="<?= get_template_directory_uri() . '/assets/upload/others/team3.jpg' ?>" alt="">
									</div>
									<h2>James</h2>
									<span>Designer</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End team section -->

		</div>
		
    <!-- End content -->

<?php get_footer(); ?>