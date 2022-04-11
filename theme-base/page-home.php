<?php

/**
 * The main template file
 * template name: home
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div class="about-wrapper">
    
    <div class="about">
    
        <?php if ($muen = get_field('muen')) : ?>
            <img src="<?php echo $muen['url']; ?>" alt="<?php echo $muen['alt']; ?>" />
        <?php endif ?>
    
        <div class="about-content">
            <h1>Robert Lennon Education Consultancy</h1>
            <p>Extent, dragged as if systems is in extension to more result, the detailed one produce would king's which if logbook the that it I the warp and rewritten or them less a and now of all is far little. Feel that this as from make king's orthographic to when where.</p>
        </div>
    </div>
</div>





<div class="english-music-1">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">MUSIC</a></li>
        <li><a data-toggle="tab" href="#menu1">ENGLISH</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="tab-wrapper">
                <div class="image-container">
                    <?php if ($muen = get_field('muen')) : ?>
                        <img src="<?php echo $muen['url']; ?>" alt="<?php echo $muen['alt']; ?>" />
                    <?php endif ?>
                    <div class="testimonials">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"><i class="fa fa-lg fa-quote-left" aria-hidden="true"></i>
                                    Extent, dragged as if systems is in extension to more result, the detailed one produce would king's which if logbook the that it I the warp and rewritten or them less a and now of all is far little.<i class="fa fa-lg fa-quote-right" aria-hidden="true"></i>
                                </div>
                                <div class="swiper-slide"><i class="fa fa-lg fa-quote-left" aria-hidden="true"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, libero.<i class="fa fa-lg fa-quote-right" aria-hidden="true"></i></div>
                                <div class="swiper-slide"><i class="fa fa-lg fa-quote-left" aria-hidden="true"></i>
                                    amet consectetur adipisicing elit. Similique amet quibusdam totam, repudiandae dolores corrupti ab eum praesentium ipsa aspernatur?<i class="fa fa-lg fa-quote-right" aria-hidden="true"></i></div>
                                ...
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="content-container">
                    <h1>Music Language</h1>
                    <p>Primarily for speakers of English as an additional language who are studying, teaching or working in a variety of professional settings.</p>
                    <a href="#" class="primary-contained-button">READ MORE</a>
                </div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="tab-wrapper">
                <div class="image-container">
                    <?php if ($muen = get_field('muen')) : ?>
                        <img src="<?php echo $muen['url']; ?>" alt="<?php echo $muen['alt']; ?>" />
                    <?php endif ?>
                    <div class="testimonials">
                        <!-- Slider main container -->
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"><i class="fa fa-lg fa-quote-left" aria-hidden="true"></i>
                                    Extent, dragged as if systems is in extension to more result, the detailed one produce would king's which if logbook the that it I the warp and rewritten or them less a and now of all is far little.<i class="fa fa-lg fa-quote-right" aria-hidden="true"></i>
                                </div>
                                <div class="swiper-slide"><i class="fa fa-lg fa-quote-left" aria-hidden="true"></i>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, libero.<i class="fa fa-lg fa-quote-right" aria-hidden="true"></i></div>
                                <div class="swiper-slide"><i class="fa fa-lg fa-quote-left" aria-hidden="true"></i>
                                    amet consectetur adipisicing elit. Similique amet quibusdam totam, repudiandae dolores corrupti ab eum praesentium ipsa aspernatur?<i class="fa fa-lg fa-quote-right" aria-hidden="true"></i></div>
                                ...
                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="content-container">
                    <h1>English Language</h1>
                    <p>Primarily for speakers of English as an additional language who are studying, teaching or working in a variety of professional settings.</p>
                    <a href="#" class="primary-contained-button">READ MORE</a>
                </div>
            </div>
        </div>
    </div>


</div>





<?php get_footer(); ?>