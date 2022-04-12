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

<!-- banner -->



<div class="vid-wrapper">
    <div class="vidlayer vid-english">
        <video autoplay loop muted class="vid">
            <source class="source" src="<?php echo get_field('banner'); ?>" type="video/mp4">

        </video>
    </div>
    <div class="vidlayer vid-music">
        <video autoplay loop muted class="vid">
            <source class="source" src="<?php echo get_field('banner2'); ?>" type="video/mp4">

        </video>
    </div>
    <div class="vid-content">
        <div class="vid-actual-content">
            <div class="tomove"><span onmouseover="changeVid('english')" class="english-banner active"><a href="">ENGLISH</a> </span> <span onmouseover="changeVid('music')" class="music-banner">/ <a href="">MUSIC</a></span></div>
        </div>
    </div>

</div>




<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <?php if ($muen = get_field('muen')) : ?>
                    <img src="<?php echo $muen['url']; ?>" alt="<?php echo $muen['alt']; ?>" />
                <?php endif ?>
            </div>
            <div class="col-md-7 about-content">
                <div class="row">
                    <h2 class="col-12">Robert Lennon Education
                        Consultancy
                    </h2>
                    <p class="col-9">Extent, dragged as if systems is in extension to more result, the detailed one produce would king's which if logbook the that it I the warp and rewritten or them less a and now of all is far little. Feel that this as from make king's orthographic to when where.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="english-music">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">MUSIC</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ENGLISH</button>
        </li>
    </ul>


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tab-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-md-5 image-container">
                            <div class="img-tes">
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
                        </div>
                        <div class="col-md-5 content-container">
                            <h1 class="col-12">Music</h1>
                            <p class="col-12">Primarily for speakers of English as an additional language who are studying, teaching or working in a variety of professional settings.</p>
                            <a href="#" class=" primary-contained-button">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="tab-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-md-5 image-container">
                            <div class="img-tes">
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
                        </div>
                        <div class="col-md-5 content-container">

                            <h1 class="col-12">English Language</h1>
                            <p class="col-12">Primarily for speakers of English as an additional language who are studying, teaching or working in a variety of professional settings.</p>
                            <a href="#" class="primary-contained-button">READ MORE</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











<?php get_footer(); ?>