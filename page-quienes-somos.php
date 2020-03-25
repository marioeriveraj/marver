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

<section id="hero-about">
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

<section id="sctn-abt">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-6">
                <div class="p-cstm">
                    <p class="subtitle">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.

                        Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam.</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="back" style="background-image: url('http://localhost/marver/wp-content/uploads/2020/03/23559595_10156130992143392_1589756109398107254_n.png');"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>