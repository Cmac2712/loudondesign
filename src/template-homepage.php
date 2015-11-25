<?php /* Template Name: Home Page Template */ get_header(); ?>


<?php

while (have_posts()) : the_post();
endwhile;

$get_started_title = get_field('get_started_title');
$get_started_body = get_field('get_started_body');

?>

	    <section class="hero hero--home">
		<div class="wrap wrap--full-height">
		    <div class="hero__text hero__text--home">
			<p class="mega">IMPROVE CONVERSION RATES</p>
			<p>TURN MORE VISITORS INTO CUSTOMERS</p>
		    </div>
		</div>
	    </section>

<section class="hard--top flush--bottom">
		<div class="wrap wrap--home-blocks">
		    <div class="home-blocks">
			<div class="block block--one">
			    <div class="services">
				<h2 class="services__title">Design Services</h2>
				<p class="lead">If you are looking for <a href="" class="highlight em">Logo Design</a>, <a href="#" class="highlight em">Graphic Design</a> or <a href="#" class="highlight em">Web Design</a> you have come to the right place.</p>
				<p class="services__desc">I have worked on a wide range of design projects for clients around the globe. I love the challenge of varied work and generation revenue through well thought out design solutions.</p>

			    <div class="services-grid">
				<div class="services-grid__major">
				    <a href="/web-design" class="services-grid__background block-link">
					<div class="service-icon">
					    <?php echo file_get_contents(get_template_directory_uri().'/img/webdesign.svg'); ?>
					    <h2 class="service-icon__label">Web Design</h2>
					</div>
				    </a>
				</div>
				<div class="services-grid__minors">
				    <div class="services-grid__minor">
					<a href="/graphic-design" class="services-grid__background block-link">
					    <div class="service-icon service-icon--small">
						<?php echo file_get_contents(get_template_directory_uri().'/img/graphicdesigner.svg'); ?>
						<h2 class="service-icon__label service-icon__label--small">Graphic Design</h2>
					    </div>
					</a>
				    </div>
				    <div class="services-grid__minor">
					<a href="/logo-design" class="services-grid__background block-link">
					    <div class="service-icon service-icon--small">
						<?php echo file_get_contents(get_template_directory_uri().'/img/logodesign.svg'); ?>
						<h2 class="service-icon__label service-icon__label--small">Logo Design</h2>
					    </div>
					</a>
				    </div>
				</div>
			    </div>

			</div>

			</div>

			<div class="block block--two">
			    <div class="block blog-image zoom-hover-parent">
				<div class="blog-image__inner zoom-hover"></div>
			    </div>
			    <div class="blog-snippet">
				    <h2 class="blog-snippet__title">10 Reasons your business may need a website.</h2>
				    <p>Posted <em class="highlight">25th April 2015</em></p>
				    <p>Like many small business owners, you may believe your business cannot benifit...</p>
				    <a class="blog-snippet__link" href="#">Read More<span class="highlight push-half--left">&raquo;</span></a>
			    </div>
			</div>

		    </div>
		</div>

		<div class="wrap wrap--home-blocks">
		    <div class="home-blocks">
			<div class="block block--three">
			    <div class="block block--three__sub-block">
				<div class="block houlden text-shadow--bottom zoom-hover-parent">
				    <div class="houlden__image zoom-hover"></div>
				</div>
				<div class="block-desc block-desc--houlden">
					<h2 class="block-desc__title">Houlden Jewellers</h2>
<p class="block-desc_info_">Branding&nbsp;&nbsp;/&nbsp;&nbsp;Presentation&nbsp;&nbsp;/&nbsp;&nbsp;Web Design</p>
				</div>
			    </div>
			</div>
                       <div class="block block--four">
			    <div class="block block--four__sub-block--one zoom-hover-parent">
				<div class="trespass zoom-hover text-shadow--bottom"> </div>
				<div class="block-desc block-desc--trespass">
				    <h2 class="block-desc__title">Trespass</h2>
				    <p class="block-desc__info">Ecommerce Design</p>
				</div>
			    </div>
			    <div class="block block--four__sub-block--two">
				<div class="testimonial">
				<h2 class="testimonial__title"><span class="underline--short">Client Feedback</span></h2>
				<p class="testimonial__text">'I worked with John on an event site re-design. His creativity, technical smarts and professionalism were integral to the success of the project. The end product was something we were all really happy with, and most importantly he was a real joy to work with too.'</p>
				<div class="profile">
				    <div class="profile__photo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial-photo.png" alt="testimonial-photo" class="alignnone size-full wp-image-99" />
				    </div>
				    <div class="profile__info">
					<h1 class="profile__info__name">Joanne Fagan</h1>
					<p class="profile__info__title">Project Manager, DC Thomson</p>
					</div>
				    </div>
				</div>
			    </div>
			</div>
		    </div>
		</div><!--

		FIFTH BLOCK

	    --!><div class="wrap layer--top">
		    <div class="home-blocks home-blocks--bottom">
			    <div class="block block--five zoom-hover-parent">
				<div class="case-study case-study--five text-shadow--bottom zoom-hover"></div>
				<div class="block-desc block-desc--indez">
				    <h2 class="block-desc__title">INDEZ</h2>
				    <p class="block-desc__info">Ecommerce Excellence</p>
				</div>
			    </div>
			    <div class="block block--six health-check">
				<h2 class="health-check__title">Give Your Website a Health Check</h2>
				<p class="lead">
				    Would you like to know how to leverage more sales?<br>
				    Increase signup or conversions?
				</p>
				<p>
				    For a one-off cost of <span class="highlight">&pound;250</span> you will recieve a <span class="highlight">30 minute video review</span> of you site being quality checked across
				    design, structure, speed as well as overall performance.
				</p>
				<p>
				    I have worked with the web for over 12 years, quality checking some of the world's largest brand websites. Each video is
				    accompanied with a <span class="highlight">PDF report</span> of the findings and followed up by <span class="highlight">one hour FREE consultation</span> to discuss the actions needed to
				    tighten your offering.
				</p>
				<div class="health-check__link">
				    <a href="" class="button button--branded">Book a Health Check</a> <span class="or-learn-more">or <a href="">Learn More <span class="highlight">&raquo;</span></a></span>
				</div>
			    </div>
			    <div class="block block--seven zoom-hover-parent">
				<div class="case-study case-study--six zoom-hover"></div>
				<div class="block-desc block-desc--simon-howie">
				    <h2 class="block-desc__title">Simon Howie</h2>
				    <p class="block-desc__info">Ecommerce</p>
				</div>
			    </div>
		    </div>
		</div>

	    </section>

<section class="get-started get-started--home">
    <div class="wrap">
	<h2><?php echo $get_started_title; ?></h2>
	<div class="get-started__text"><?php echo $get_started_body; ?></div>
	<a id="js-get-started" class="button button--branded" href="/contact">Let's Get Started</a>
</div>
</section>

<?php get_footer(); ?>
