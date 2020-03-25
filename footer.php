<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<section id="cta">
    <div class="container">
        <div class="row align-items-center text-center">
            <div class="col-sm-12">
                <h2 class="title">Lorem ipsum dolor sit amet consetetur.</h2>
                <a class="btn btn-primary" href="#">Contactar</a>
            </div>
        </div>
    </div>
</section>

<div class="wrapper" id="wrapper-footer">

    <div class="<?php echo esc_attr($container); ?>">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-footer" id="colophon">

                    <div class="row align-items-center text-center">
                        <div class="col-sm-2">
                            <?php the_custom_logo(); ?>
                        </div>
                        <div class="col-sm-8"></div>
                        <div class="col-sm-2">
                            <div class="redes">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="#"><i class="fa fa-facebook-f"></i></a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </footer><!-- #colophon -->

            </div>
            <!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>