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
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20191019_191926_2.png');"></div>
            </div>
            <div class="col-6 p-0">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/20200215_190909.png');"></div>
            </div>
        </div>
        <div class="row no-gutters h-25">
            <div class="col-6">
                <div class="cta-btn">
                    <h1 class="title">Lorem ipsum dolor sit amet consetetur.</h1>
                    <a class="btn btn-primary" href="#">Contactar</a>
                </div>
            </div>
            <div class="col-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/23559595_10156130992143392_1589756109398107254_n.png');"></div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/23559595_10156130992143392_1589756109398107254_n.png');"></div>
            </div>
            <div class="col-sm-6">
                <div class="p-cstm">
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
        <div class="row">
            <div class="col-sm-6">
                <div class="back">
                    <h4 class="title">Eventos empresariales.</h4>
                    <a class="btn btn-secondary" href="#">Ver más</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="back">
                    <h4 class="title">Eventos bodas.</h4>
                    <a class="btn btn-secondary" href="#">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>