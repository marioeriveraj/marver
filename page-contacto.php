<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>

<section id="cntct">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="title">Contacto.</h2>
                <a href="#">correo@marver.com</a>
                <a href="#">(81) 1234 5678</a>
                <h4>Domicilio</h4>
            </div>
            <div class="col-sm-6">
                <h2 class="title">Escríbenos.</h2>
                <?php echo do_shortcode('[contact-form-7 id="51" title="Formulario de contacto 1"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>