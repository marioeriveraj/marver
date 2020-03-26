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

<section id="hero-bds" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20190615_180727.png');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-sm-3" data-aos="fade-right">
                <h2 class="title">Eventos bodas.</h2>
                <ul class="list">
                    <li>Catering </li>
                    <li>Banquete </li>
                    <li>Pista y tarima</li>
                    <li>Mobiliario</li>
                    <li>Planta de luz </li>
                    <li>Iluminación</li>
                    <li>Decoración y recintos</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="gllry-bds">
    <div class="container-fluid p-0 h-100">
        <div class="row no-gutters h-100">
            <div class="col-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20190907_191323.png');" data-aos="zoom-in"></div>
            </div>
            <div class="col-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20190921_161253_2.png');" data-aos="zoom-in"></div>
            </div>
            <div class="col-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20190921_161822.png');" data-aos="zoom-in"></div>
            </div>
            <div class="col-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20191005_173514.png');" data-aos="zoom-in"></div>
            </div>
            <div class="col-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20191005_174024.png');" data-aos="zoom-in"></div>
            </div>
            <div class="col-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20191026_203832.png');" data-aos="zoom-in"></div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>