<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main class="main-wrapper">

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
                    <span>Property Listing</span>
                </li>
            </ul>
        </div>
    </div>

    <section class="listings-screen sorting-wrapper">
        <div class="container">
            <div class="col-md-12">
                <div class="listings-header">
                    <h1 class="page-title">Property Listing</h1>
                    <nav class="listings-tabs__wrapper">
                        <span class="listings-tabs__title">Sorting by</span>
                        <ul class="sorting-tabs">
                            <li class="sorting-item exlusive">Exclusive</li>
                            <li class="sorting-item sold">Sold</li>
                            <li class="sorting-item investment">Investment sales</li>
                            <li class="sorting-item office">Office</li>
                            <li class="sorting-item hotel">Hotel</li>
                            <li class="sorting-item retail">Retail</li>
                        </ul>
                    </nav>
                </div>
                <ul class="listings-wrapper">
	                <?php if ( have_posts() ) :
		                $i = 0;
		                $press = array(0 => '');
		                while ( have_posts() ) :
			                the_post();
			                ?>

                            <li class="listing-item active retail exlusive">
	                            <?php the_post_thumbnail(array(520, 320), array('class' => "listing-item__pic")); ?>
                                <div class="listing-item__bg"></div>
                                <ul class="listing-item__labels">
                                    <li class="listing-item__label retail">Retail</li>
                                    <li class="listing-item__label exlusive">Exclusive</li>
                                </ul>
                                <span class="listing-item__title"><?php the_title(); ?></span>
                                <button class="listing-item__btn popup-btn" data-mfp-src="#form-popup">REQUEST</button>
                            </li>

			                <?php
		                endwhile;
	                endif;
	                ?>
                </ul>
                <div class="listings-footer">
	                <?php $paginate = paginate_links( array('type' => 'array', 'next_text' => __('SHOW MORE')) ); ?>
	                <?php if(!empty($paginate)){ ?>
                        <ul class="pagination-list">
			                <?php
			                foreach($paginate as $i => $link){
				                if(strpos($link, __('SHOW MORE')) === false && strpos($link, __('Previous')) === false){
					                if($i > 1 || (strpos($paginate[0], __('Previous')) === false && $i > 0)){
						                echo '<li class="pagination-item spacer">/</li>';
					                }
					                echo str_replace('class="', 'class="pagination-item ', $link);
				                }
			                }
			                ?>
                        </ul>
		                <?php
		                if(strpos(end($paginate), __('SHOW MORE')) !== false){
			                echo str_replace('class="next', 'class="videos-btn', end($paginate));
		                }
		                ?>
	                <?php } ?>
                </div>
            </div>
        </div>
    </section>

	<?php get_footer(); ?>

</main>

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

<div class="mfp-hide">
    <div id='form-popup' class="popup">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                    <div class="form-popup__container">
                        <form class="feedback-form">
                            <p class="form-popup__title">Please, fill this form: </p>
                            <div class="feedback-form__row">
                                <div class="feedback-form__input-wrapper">
                                    <input type="text" name="name" class="feedback-form__input" required="" placeholder="Full Name">
                                    <label class="feedback-form__label">Full Name</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="feedback-form__row">
                                <div class="feedback-form__input-wrapper">
                                    <input type="text" name="name" class="feedback-form__input" required="" placeholder="E-mail">
                                    <label class="feedback-form__label">E-mail</label>
                                    <span></span>
                                </div>
                            </div>
                            <div class="feedback-form__row">
                                <div class="feedback-form__input-wrapper">
                                    <input type="text" name="phone" class="feedback-form__input" required="" placeholder="Phone Number">
                                    <label class="feedback-form__label">Phone Number</label>
                                    <span></span>
                                </div>
                            </div>
                            <button class="feedback-form__btn" type="submit">Submit</button>
                        </form>
                        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>