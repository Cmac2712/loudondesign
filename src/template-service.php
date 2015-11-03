<?php 
/* Template Name: Service Page Template */ 
get_header(); 

while (have_posts()) : the_post();
endwhile;

$featured_image = get_the_post_thumbnail();
$process_intro  = get_field('process_intro');
$process        = get_field('process_list');
$outro_header   = get_field('outro_header');
$outro_image    = get_field('outro_image');
$outro_body     = get_field('outro_body');

?>
       
<section class="hero service-hero">
    <div class="wrap">
	<div class="service-hero__image">
	    <?php echo $featured_image; ?> 
	</div>	
	<div class="hero-text service-hero__text">
	    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 1 ); } ?>
	</div>
    </div>
</section>

<section class="process">
    <div class="wrap wrap--process">
	    <div class="process__desc">
		<?php echo $process_intro; ?>
	    </div>
	    <ol class="clean process-list brand-ordered-list">
		<?php foreach( $process as $step ): ?>
		<li class="info-item">
		    <div class="info-item__image"><img src="<?php echo $step[step_image][sizes][medium]; ?>" alt="<?php echo $step[step_image][alt]; ?>"></div><!--
		 --><h2 class="info-item__title"><?php echo $step[step_title]; ?></h2><!--
		 --><p class="info-item__text"><?php echo $step[step_text]; ?></p>
		</li> 
		<?php endforeach; ?>
	    </ol>
    </div>
</section>

<section class="outro">
    <div class="wrap">
	<div class="media media--responsive media--outro">
	    <div class="media__img outro__img">
		<img src="<?php echo $outro_image['sizes']['large']; ?>" alt="">
	    </div>
	    <div class="media__body outro__body">
		<h1><?php echo $outro_header; ?></h1>
		<?php echo $outro_body; ?> 
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
