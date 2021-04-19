<?php get_header(); ?>

    <!-- content 
		================================================== -->
		
        <div id="content">

			<!-- contact section -->
			<section class="contact-section">

				<div class="map-holder">
					<div id="map"></div>
				</div>

				<div class="contact-form-part">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<form id="contact-form">
									<h1>Get in touch</h1>
									<p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. </p>
									<input name="name" id="name" type="text" placeholder="Name">
									<input name="mail" id="mail" type="text" placeholder="Email">
									<textarea name="comment" id="comment" placeholder="Message"></textarea>
									<input type="submit" id="submit_contact" value="Submit">
									<div id="msg" class="message"></div>
								</form>
							</div>
							<div class="col-md-6">
								<div class="info-data">
									<h3>Our Location</h3>
									<p>412 Throop Ave, Brooklyn, NY 11221, USA</p>
								</div>
								<div class="info-data">
									<h3>Our Phone</h3>
									<p>(345) 567-2345 <br>(398) 765-2468</p>
								</div>
								<div class="info-data">
									<h3>Our Email</h3>
									<p>siteemail@domain.com <br> contact@company.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</section>
			<!-- End contact section -->

		</div>
		
    <!-- End content -->

<?php get_footer(); ?>