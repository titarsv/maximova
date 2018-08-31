<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main class="main-wrapper">
<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
    <div class="col-md-12">
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumbs-item spacer">
                <span>/</span>
            </li>
            <li class="breadcrumbs-item">
                <a href="#">News And Insights</a>
            </li>
            <li class="breadcrumbs-item spacer">
                <span>/</span>
            </li>
            <li class="breadcrumbs-item">
                <a href="/category/blog/">Blog</a>
            </li>
            <li class="breadcrumbs-item spacer">
                <span>/</span>
            </li>
            <li class="breadcrumbs-item">
                <span><?php the_title(); ?></span>
            </li>
        </ul>
    </div>
</div>

<section class="blog-post-screen">
    <div class="container">
        <div class="col-md-12">
            <h1 class="page-title"><?php the_title(); ?></h1>
	        <?php the_date('d.m.Y', '<small class="blog-item__date">', '</small>'); ?>
            <div class="blog-post__pic-wrapper">
	            <?php the_post_thumbnail(array(1110, 400), array('class' => "blog-post__pic")); ?>
            </div>
            <div class="socials-share__wrapper top">
                <a class="socials-share__item fb" href="#"></a>
                <a class="socials-share__item in" href="#"></a>
                <a class="socials-share__item tw" href="#"></a>
                <a class="socials-share__item pin" href="#"></a>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-post__txt-wrapper">
                        <?php the_content(); ?>
                    </div>
                    <div class="socials-share__wrapper">
                        <a class="socials-share__item fb" href="#"></a>
                        <a class="socials-share__item in" href="#"></a>
                        <a class="socials-share__item tw" href="#"></a>
                        <a class="socials-share__item pin" href="#"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <aside class="blog-sidebar">
                        <div class="blog-sidebar__block">
                            <div class="blog-sidebar__block-title"><span>Subscribe</span></div>
                            <span class="blog-sidebar__subscribe-descr">for access to exlusive content from me</span>
                            <span data-mfp-src="#subscribe-popup" class="blog-sidebar__btn popup-btn">SUBSCRIBE</span>
                        </div>
                        <div class="blog-menu__socials-wrapper">
                            <ul class="blog-menu__socials">
                                <li class="blog-menu__socials-item">
                                    <a class="blog-menu__socials-link icon-ic-facebook" href="#"></a>
                                </li>
                                <li class="blog-menu__socials-item">
                                    <a class="blog-menu__socials-link icon-youtube-play" href="#"></a>
                                </li>
                                <li class="blog-menu__socials-item">
                                    <a class="blog-menu__socials-link icon-ic-instagram" href="#"></a>
                                </li>
                                <li class="blog-menu__socials-item">
                                    <a class="blog-menu__socials-link icon-linkedin-rect" href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>

</main>

<div class="mfp-hide">
    <div id='video-popup' class="popup video-popup">
        <div class="iframe-wrapper">
            <iframe width="1280" height="315" src="https://www.youtube.com/embed/D0mRVJbGVSE?showinfo=0" frameborder="0" allowfullscreen></iframe>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div>
</div>

<div class="mfp-hide">

    <div id='subscribe-popup' class="popup subscribe-popup">
        <div class="subscribe-popup__inner">
            <span class="popup-title">Subscribe</span>
            <div class="popup-descr">for access to exlusive content from me</div>
            <form class="subscribe-form">
                <div class="form-row">
                    <div class="form-input__wrapper">
                        <input type="text" name="name" class="form-input" required="" placeholder="Your Name">
                        <label class="form-label">Your Name</label>
                        <span></span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-input__wrapper">
                        <input type="text" name="name" class="form-input" required="" placeholder="E-mail">
                        <label class="form-label">E-mail</label>
                        <span></span>
                    </div>
                </div>
                <div class="form-policy__wrapper">
                    <input class="form-checkbox" type="checkbox" name="check">
                    <span class="form-policy">I accept the terms of the <a href="">privacy policy</a> and I agree</span>
                </div>
                <button class="form-btn" type="submit">SUBSCRIBE</button>
            </form>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div>

    <div id='reports-popup' class="popup reports-popup">
        <span class="popup-title">Download Report</span>
        <form class="reports-form">
            <div class="form-row">
                <div class="form-input__wrapper reports-input__wrapper">
                    <input type="text" name="name" class="form-input" required="" placeholder="Full Name">
                    <label class="form-label">Full Name</label>
                    <span></span>
                </div>
                <div class="form-input__wrapper reports-input__wrapper">
                    <input type="text" name="company" class="form-input" required="" placeholder="Your Company">
                    <label class="form-label">Your Company</label>
                    <span></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-input__wrapper reports-input__wrapper">
                    <input type="text" name="email" class="form-input" required="" placeholder="E-mail">
                    <label class="form-label">E-mail</label>
                    <span></span>
                </div>
                <div class="form-input__wrapper reports-input__wrapper">
                    <input type="text" name="phone" class="form-input" required="" placeholder="Phone Number">
                    <label class="form-label">Phone Number</label>
                    <span></span>
                </div>
            </div>
            <div class="form-policy__wrapper">
                <input class="form-checkbox" type="checkbox" name="check">
                <span class="form-policy">I accept the terms of the <a href="">privacy policy</a> and I agree</span>
            </div>
            <button class="form-btn" type="submit">DOWNLOAD</button>
        </form>
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div>

    <div id='all-reports-popup' class="popup all-reports-popup">
        <span class="popup-title">All Reports</span>
        <ul class="all-reports__list">
            <li class="all-reports__item">
                <span class="all-reports__item-title">New York Retail Quarterly Q1 2018</span>
                <div class="all-reports__item-descr">Decreased asking rents have ignited overall deal volume, while specialized retailers provide landlords with a necessary edge in this evolving retail landscape.</div>
                <form class="all-reports-form">
                    <div class="form-input__wrapper reports-input__wrapper">
                        <input type="text" name="email" class="form-input" required="" placeholder="E-mail">
                        <label class="form-label">E-mail</label>
                        <span></span>
                    </div>
                    <button class="form-btn" type="submit">DOWNLOAD</button>
                </form>
            </li>
            <li class="all-reports__item">
                <span class="all-reports__item-title">New York Retail Quarterly Q4 2018</span>
                <div class="all-reports__item-descr">Decreased asking rents have ignited overall deal volume, while specialized retailers provide landlords with a necessary edge in this evolving retail landscape.</div>
                <form class="all-reports-form">
                    <div class="form-input__wrapper reports-input__wrapper">
                        <input type="text" name="email" class="form-input" required="" placeholder="E-mail">
                        <label class="form-label">E-mail</label>
                        <span></span>
                    </div>
                    <button class="form-btn" type="submit">DOWNLOAD</button>
                </form>
            </li>
        </ul>
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </div>
</div>

</body>
</html>