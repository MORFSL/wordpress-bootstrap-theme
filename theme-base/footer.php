<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<footer>
    <div class="footer-links-wrapper">
        <div class="footer-email">
            <h5><span>Don’t forget, your initial consultation is FREE!</span>
                <span>Let’s get started today</span>
            </h5>
            <form action="#">
                <input type="text" placeholder="Your email goes here">
                <a href="#" class=" secondary-contained-button">send</a>
            </form>
        </div>
        <div class="footer-links">
            <ul class="footer-social">
                <?php if (have_rows('social', 'option')) : ?>
                    <?php while (have_rows('social', 'option')) : the_row(); ?>
                        <?php $image = get_sub_field('image'); ?>
                        <?php if ($image) { ?>
                            <li><a href="#"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li>
                        <?php } ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </ul>
            <div class="footer-header">
                <ul>
                    <li><a class="" href="#">English</a></li>
                    <li><a class="" href="#">Music</a></li>
                    <li><a class="" href="#">Contact</a></li>
                </ul>
                <?php if ($logo = get_field('logo', 'option')) : ?>
                    <a href="#"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" /></a>
                <?php endif; ?>
            </div>
            <div class="horizontal-line"></div>
            <p class="footer-human-rights">Human rights not reserved lemon</p>
            <p class="footer-morf">morf corp</p>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>