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

<section id="hero" style="height: 100vh">
    <div class="container-fluid h-100 p-0">
        <div class="row no-gutters h-75">
            <div class="col-6 p-0">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20191019_191926_2.png');" data-aos="zoom-in"></div>
            </div>
            <div class="col-6 p-0">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20200215_190909.png');" data-aos="zoom-in"></div>
            </div>
        </div>
        <div class="row no-gutters h-25">
            <div class="col-sm-6">
                <div class="cta-btn" data-aos="fade-right">
                    <div class="txt">
                        <h1 class="title">Lorem ipsum dolor sit amet consetetur.</h1>
                        <a class="btn btn-primary" href="#">Contactar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/23559595_10156130992143392_1589756109398107254_n.png');" data-aos="zoom-in"></div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20191214_1817002.png');" data-aos="zoom-in"></div>
            </div>
            <div class="col-sm-6">
                <div class="p-cstm" data-aos="fade-left">
                    <h2 class="title">Quiénes somos. </h2>
                    <p class="subtitle">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="srvcs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12">
                <h2 class="title text-center">Nuestros servicios.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/2014-12-08-17.11.42.png)" data-aos="zoom-in">
                    <div class="txt">
                        <h4 class="title">Eventos<br>empresariales.</h4>
                        <a class="btn btn-secondary" href="#">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20190921_161253_2.png');" data-aos="zoom-in">
                    <div class="txt">
                        <h4 class="title">Eventos<br>bodas.</h4>
                        <a class="btn btn-secondary" href="#">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>