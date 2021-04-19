<!DOCTYPE html>
<html lang="pt_AO">
    <head>
        <title><?= bloginfo( 'title' ) ?></title>
        <meta charset="<?= bloginfo( 'charset' ) ?>" />

        <?php wp_head(); ?>
    </head>
    
    <body>

        <!-- Container -->
        <div id="container">
            <!-- Header
                ================================================== -->
            <header class="clearfix">

                <div class="logo">
                    <a href="index.html"><img src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>" alt=""></a>
                </div>

                <a class="elemadded responsive-link" href="#">Menu</a>

                <nav class="nav-menu">
                    <ul class="menu-list">
                        <li><a class="active" href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home 1 - Default</a></li>
                                <li><a href="home2.html">Home 2</a></li>
                                <li><a href="home3.html">Home 3</a></li>
                                <li><a href="home4.html">Home 4</a></li>
                                <li><a href="home5.html">Home 5</a></li>
                                <li><a href="home6.html">Home 6</a></li>
                                <li><a href="home7.html">Home 7</a></li>
                                <li><a href="home8.html">Home 8</a></li>
                                <li><a href="home-video.html">Home Video</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="portfolio-2col.html">Portfolio</a>
                            <ul class="sub-menu">
                                <li><a href="portfolio-2col.html">Portfolio 2 Col</a></li>
                                <li><a href="portfolio-3col.html">Portfolio 3 Col</a></li>
                                <li><a href="single-project.html">Single Portfolio</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-sidebar.html">Blog with Sidebar</a></li>
                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="single-post.html">Single Post</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>

                <div class="social-box">
                    <p>Find us on:</p>
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>

            </header>
            <!-- End Header -->