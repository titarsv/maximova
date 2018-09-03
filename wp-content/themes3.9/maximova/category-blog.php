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
					<a href="#">News And Insights</a>
				</li>
				<li class="breadcrumbs-item spacer">
					<span>/</span>
				</li>
				<li class="breadcrumbs-item">
					<span>Blog</span>
				</li>
			</ul>
		</div>
	</div>

	<section class="blog-screen">
		<div class="container">
			<div class="col-md-12">
				<h1 class="page-title">Blog</h1>
				<div class="row">
					<div class="col-md-8">
						<ul class="blog-list">

							<?php if ( have_posts() ) :
								while ( have_posts() ) :
									the_post();
									?>

									<li class="blog-item">
										<a class="blog-item__wrapper" href="<?php the_permalink(); ?>">
											<div class="blog-item__pic-wrapper">
												<?php the_post_thumbnail(array(690, 320), array('class' => "blog-item__pic")); ?>
											</div>
											<span class="blog-item__title"><?php the_title(); ?></span>
											<?php the_date('d.m.Y', '<small class="blog-item__date">', '</small>'); ?>
											<div class="blog-item__descr"><?php the_excerpt(); ?></div>
											<span class="blog-item__btn">READ More</span>
										</a>
									</li>

									<?php
								endwhile;

							else :

							endif;
							?>
						</ul>
						<div class="blog-footer">
							<?php
								$paginate = paginate_links( array('type' => 'array', 'next_text' => __('SHOW MORE')) );
								if(strpos(end($paginate), __('SHOW MORE')) !== false){
									echo str_replace('class="next', 'class="blog-btn', end($paginate));
								}
							?>
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
						</div>
					</div>
					<div class="col-md-4">
						<aside class="blog-sidebar">
							<div class="blog-sidebar__block">
								<div class="blog-sidebar__block-title"><span>Subscribe</span></div>
								<span class="blog-sidebar__subscribe-descr">for access to exlusive content from me</span>
								<span data-mfp-src="#subscribe-popup" class="blog-sidebar__btn popup-btn">SUBSCRIBE</span>
							</div>
<!--							<div class="blog-sidebar__block">-->
<!--								<div class="blog-sidebar__block-title"><span>Maksimova Report</span></div>-->
<!--								<ul class="blog-reports__list">-->
<!--									<li class="blog-reports__item">-->
<!--										<div class="blog-reports__item-title">New York Retail Quarterly Q1 2018</div>-->
<!--										<span data-mfp-src="#reports-popup" class="blog-reports__item-link popup-btn">DOWNLOAD</span>-->
<!--									</li>-->
<!--									<li class="blog-reports__item">-->
<!--										<div class="blog-reports__item-title">New York Retail Quarterly Q2 2018</div>-->
<!--										<span data-mfp-src="#reports-popup" class="blog-reports__item-link popup-btn">DOWNLOAD</span>-->
<!--									</li>-->
<!--								</ul>-->
<!--								<span data-mfp-src="#all-reports-popup" class="blog-sidebar__btn popup-btn">ALL REPORTS</span>-->
<!--							</div>-->
							<div class="blog-sidebar__block">
								<div class="blog-sidebar__block-title"><span>Upcoming Events</span></div>
								<div class="blog-sidebar__events-slider">
									<div class="events-slide">
										<div class="events-slide__title-wrapper">
											<span class="events-slide__title">New York Ag Innovation Forum</span>
											<div class="events-slide__title-bg">01</div>
										</div>
										<span class="events-slide__date">Wednesday, August 8, 1:30 pm</span>
										<a class="events-slide__btn" href="#">Learn More</a>
									</div>
									<div class="events-slide">
										<div class="events-slide__title-wrapper">
											<span class="events-slide__title">Badger Startup Summit</span>
											<div class="events-slide__title-bg">02</div>
										</div>
										<span class="events-slide__date">Saturday, August 29, 9:30 am</span>
										<a class="events-slide__btn" href="#">Learn More</a>
									</div>
									<div class="events-slide">
										<div class="events-slide__title-wrapper">
											<span class="events-slide__title">SCRMC Fall Conference</span>
											<div class="events-slide__title-bg">03</div>
										</div>
										<span class="events-slide__date">Friday, September 11, 8:00 am</span>
										<a class="events-slide__btn" href="#">Learn More</a>
									</div>
									<div class="events-slide">
										<div class="events-slide__title-wrapper">
											<span class="events-slide__title">SCRMC Fall Conference</span>
											<div class="events-slide__title-bg">04</div>
										</div>
										<span class="events-slide__date">Friday, September 11, 8:00 am</span>
										<a class="events-slide__btn" href="#">Learn More</a>
									</div>
									<div class="events-slide">
										<div class="events-slide__title-wrapper">
											<span class="events-slide__title">Badger Startup Summit</span>
											<div class="events-slide__title-bg">02</div>
										</div>
										<span class="events-slide__date">Saturday, August 29, 9:30 am</span>
										<a class="events-slide__btn" href="#">Learn More</a>
									</div>

								</div>
								<a href="#" class="blog-sidebar__btn popup-btn">MORE EVENTS</a>
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

</body>
</html>