<?php
/* Template Name: About Page Template */
get_header();

while (have_posts()) : the_post();
endwhile;

$header_blocks    = get_field('header_block');
$get_started_title = get_field('get_started_title');
$get_started_body = get_field('get_started_body');

?>

<section class="hero hero--brand hero--about">
    <div class="wrap cf">
	<div class="hero-text text--center push-big--bottom">

	    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 1 ); } ?>

	</div>

	    <?php foreach ($header_blocks as $header_block): ?>
		<div class="info-item info-item--stack">
		    <div class="info-item__image">
			<img src="<?php echo $header_block['header_block_image']['url']; ?>" alt="">
		    </div>
		    <h2 class="info-item__title text--center"><?php echo $header_block['header_block_title']; ?></h2>
		    <div class="info-item__body"><?php echo $header_block['header_block_text']; ?></div>
		</div>
	    <?php endforeach; ?>

    </div>
</section>

<section class="about">
    <div class="wrap">

	<div class="about__media">
	    <div class="one-whole">
		<?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 2 ); } ?>
	    </div>
	    <div class="one-half">
		<?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 3 ); } ?>
	    </div>
	    <div class="one-half">
		<?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 4 ); } ?>
	    </div>
	</div>
	<div class="about__body">
	    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 5 ); } ?>
	</div>
    </div>
</section>

<section class="cv">
    <div class="wrap">
	    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 6 ); } ?>
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
