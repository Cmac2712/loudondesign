<?php 
/* Template Name: About Page Template */ 
get_header(); 

while (have_posts()) : the_post();
endwhile;

?>

<section class="hero hero--brand hero--about">
    <div class="wrap cf">
	<div class="hero-text text--center push-big--bottom">
	    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 1 ); } ?>
	</div>

	<div class="info-item">
	    <div class="info-item__image">
		<img src="http://localhost:3000/wp-content/uploads/2015/08/red-250x135.png" alt="">
	    </div>
	    <h2 class="info-item__tile text--center">Freelance Designer</h2>
	    <p class="info-item__text lead">I have been a designer for more than a decade and over that time I have had the opportunity to work on a wide range of design projects for clients around the globe.</p>
	    <p class="info-item__text">I enjoy the challenge of varied work and am excited to see what interesting proposals my clients have.</p>
	</div>
	<div class="info-item">
	    <div class="info-item__image">
		<img src="http://localhost:3000/wp-content/uploads/2015/08/red-250x135.png" alt="">
	    </div>
	    <h2 class="info-item__tile text--center">Education Advocate</h2>
	    <p class="info-item__text lead">I am a strong beliver in giving back to the next generation. I deliver lecturing and career advice to students interested in the digital sector.</p>
	    <p class="info-item__text">I also work with the Scottish Qualifications Authority (SQA) setting the future curriculum of design and development HNC and HND courses.</p>
	</div>
	<div class="info-item">
	    <div class="info-item__image">
		<img src="http://localhost:3000/wp-content/uploads/2015/08/red-250x135.png" alt="">
	    </div>
	    <h2 class="info-item__tile text--center">Ecommerce Designer</h2>
	    <p class="info-item__text lead">I work full-time as the Head of Design at INDEZ ltd. We are a tight-knit and passionate team who specialise in ecommerce.</p>
	    <p class="info-item__text">Founded in 1995, INDEZ are one of the longest-running web companies in Scotland. We have working with the web commercially for a long time.</p>
	</div>
    </div>
</section>


<section class="outro">
    <div class="wrap">
	<div class="media media--responsive media--outro">
	    <div class="media__img outro__img">
		<img src="" alt="">
	    </div>
	    <div class="media__body outro__body">
		<h1></h1>
	    </div>
	</div>
    </div>
</section>

<section class="get-started">
    <div class="wrap">
	<p class="get-started__text">I love what I do, if you have a project you would like me to work on feel free to get in touch.</p>
	<a class="button button--branded" href="/contact">Let's Get Started</a>
    </div>
</section>

<?php get_footer(); ?>
