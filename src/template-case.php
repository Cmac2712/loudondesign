<?php
/* Template Name: Case Study Page Template */
get_header();

while (have_posts()) : the_post();
endwhile;


?>

<section class="hero hero--case hero--trespass">
    <div class="wrap cf">
	<div class="hero-text text--center push-big--bottom">


	</div>
    </div>
</section>

<section class="case-intro">
    <div class="wrap text--center">
	    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 1 ); } ?>
    </div>
</section>


<section class="case-block">
	<div class="wrap">
	    <div class="grid">
		<div class="case-block__text">
		    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 2 ); } ?>
		</div>
		<div class="case-block__image-outer">
		<img class="case-block__image" src="<?php echo get_template_directory_uri(); ?>/img/sketch.png" alt="">
		</div>
	    </div>
	</div>
</section>

<section class="case-block">
	<div class="wrap">
	    <div class="grid">
		<div class="case-block__text">
		    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 3 ); } ?>
		</div>
		<div class="case-block__image-outer">
		<img class="case-block__image" src="<?php echo get_template_directory_uri(); ?>/img/sketch.png" alt="">
		</div>
	    </div>
	</div>
</section>

<section class="case-block">
	<div class="wrap">
	    <div class="grid">
		<div class="case-block__text">
		    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 4 ); } ?>
		</div>
		<div class="case-block__image-outer">
		<img class="case-block__image" src="<?php echo get_template_directory_uri(); ?>/img/sketch.png" alt="">
		</div>
	    </div>
	</div>
</section>

<section class="get-started">
    <div class="wrap">
	<h2><?php echo $get_started_title; ?></h2>
	<div class="get-started__text"><?php echo $get_started_body; ?></div>
	<a class="button button--branded" href="/contact">Let's Get Started</a>
    </div>
</section>

<?php get_footer(); ?>
