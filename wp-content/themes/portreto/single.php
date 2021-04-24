<?php get_header(); ?>

    <!-- content 
		================================================== -->
		
        <div id="content">

			<!-- blog section -->
			<section class="blog-section standart single-post">
				<div class="container-fluid">
					<div class="blog-box">

						<div class="blog-post">
							<div class="post-gallery">
								<img src="<?= get_template_directory_uri() . '/assets/upload/blog/single.jpg' ?>" alt="">
							</div>
							<div class="post-content">
								<span>Travel</span>
								<h1>Curabitur mollis semper diam.</h1>
								<span>Nov 4th, 2015, <a href="#">2 comments</a></span>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>
								<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
								<div class="row">
									<div class="col-md-6">
										<div class="post-gallery">
											<img src="<?= get_template_directory_uri() . '/assets/upload/blog/single3.jpg' ?>" alt="">
										</div>
									</div>
									<div class="col-md-6">
										<div class="post-gallery">
											<img src="<?= get_template_directory_uri() . '/assets/upload/blog/single4.jpg' ?>" alt="">
										</div>
									</div>
								</div>
								<p><span>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. </span></p>
								<p>Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna. <br>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>
								<div class="post-gallery">
									<img src="<?= get_template_directory_uri() . '/assets/upload/blog/single2.jpg' ?>" alt="">
								</div>
								<p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>
								<div class="social-box">
									<a class="likes" href="#">21 <i class="fa fa-heart-o"></i></a>
									<ul class="social-icons">
										<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="autor-post">
							<img src="<?= get_template_directory_uri() . '/assets/upload/blog/autor.jpg' ?>" alt="">
							<div class="autor-content">
								<h2>Admin</h2>
								<p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. </p>
							</div>
						</div>

						<div class="comment-section">
							<h1>2 Comments</h1>

							<ul class="comment-tree">
								<li>
									<div class="comment-box">
										<img alt="" src="<?= get_template_directory_uri() . '/assets/upload/blog/autor2.jpg' ?>">
										<div class="comment-content">
											<h4>Kate</h4>
											<span>May 12, 2016</span>
											<p>Morbi interdum mollis sapien. Sed ac risus. </p>
											<a href="#">Reply</a>
										</div>
									</div>
								</li>

								<li>
									<div class="comment-box">
										<img alt="" src="<?= get_template_directory_uri() . '/assets/upload/blog/autor.jpg' ?>">
										<div class="comment-content">
											<h4>John</h4>
											<span>May 12, 2016</span>
											<p>Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. </p>
											<a href="#">Reply</a>
										</div>
									</div>
								</li>

							</ul>
							<form class="comment-form">
								<h1>Leave a Comment</h1>
								<div class="row">
									<div class="col-md-6">
										<input name="name" id="name" type="text" placeholder="name:">
									</div>
									<div class="col-md-6">
										<input name="mail" id="mail" type="text" placeholder="email:">
									</div>
								</div>
								<textarea name="comment" id="comment" placeholder="Message:"></textarea>
								<input type="submit" id="submit_contact" value="Submit">
							</form>	
						</div>
					</div>
				</div>
			</section>
			<!-- End blog section -->

		</div>
		
    <!-- End content -->

<?php get_footer(); ?>