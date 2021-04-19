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
                    <a href="/"><img src="<?= get_template_directory_uri() . '/assets/images/logo.png' ?>" alt=""></a>
                </div>

                <a class="elemadded responsive-link" href="#">Menu</a>

                <?php
                    wp_nav_menu( [
                        'menu' => 'primary',
                        'container' => 'nav',
                        'container_class' => 'nav-menu',
                        'menu_class' => 'menu-list'
                    ] );
                ?>

                <div class="social-box">
                    <p>Find us on:</p>
                    <ul class="social-icons">
                        <li>
                            <a href="https://facebook.com/dorivaldovalentim" target="_blank" class="facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://twitter.com/DorivaldoValen4" target="_blank" class="twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://linkedin.com/dorivaldo-valentim" target="_blank" class="linkedin">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>

                        <li>
                            <a href="https://instagram.com/dorivaldo_valentim" target="_blank" class="instagram">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>

                    </ul>
                </div>

            </header>
            <!-- End Header -->