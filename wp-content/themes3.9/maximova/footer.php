<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<footer class="footer">
    <div class="container">
        <div class="col-md-12">
            <div class="main-footer__wrapper">
                <a class="footer-logo__wrapper" href="/">
                    <img class="footer-logo" src="<?php echo get_template_directory_uri();?>/svg/footer-logo.svg" alt="Julia Maksimova">
                    <img class="mobile-footer-logo" src="<?php echo get_template_directory_uri();?>/images/logo-mobile.png" alt="Julia Maksimova">
                    <span class="footer-logo__descr">Licensed Real Estate Associate Broker</span>
                </a>
                <ul class="footer-menu first">
	                <?php wp_nav_menu(array(
		                'menu' => 'Footer 1',
		                'container' => false,
		                'items_wrap' => '%3$s',
		                'depth' => 1
	                )); ?>
                </ul>
                <ul class="footer-menu second">
	                <?php wp_nav_menu(array(
		                'menu' => 'Footer 2',
		                'container' => false,
		                'items_wrap' => '%3$s',
		                'depth' => 1,
                        'walker' => new Footer_Walker_Nav_Menu()
	                )); ?>
                </ul>
                <ul class="footer-menu__socials">
                    <li class="footer-menu__socials-item">
                        <a class="footer-menu__socials-link icon-ic-facebook" href="#"></a>
                    </li>
                    <li class="footer-menu__socials-item">
                        <a class="footer-menu__socials-link icon-youtube-play" href="#"></a>
                    </li>
                    <li class="footer-menu__socials-item">
                        <a class="footer-menu__socials-link icon-ic-instagram" href="#"></a>
                    </li>
                    <li class="footer-menu__socials-item">
                        <a class="footer-menu__socials-link icon-linkedin-rect" href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="copyright-footer__wrapper">
                <span class="copyright-footer__text">© 2018 Julia Maksimova. All Rights Reserved.</span>
                <div class="copyright-footer__links">
                    <a class="copyright-footer__link" href="#">Terms</a>
                    <span> • </span>
                    <a class="copyright-footer__link" href="#">Privacy</a>
                </div>
                <div class="scroll-btn__wrapper">
                    <span class="scroll-btn icon-arrow-down"></span>
                    <p>UP</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>