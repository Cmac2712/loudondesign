<?php

$query = new WP_Query(array( 'pagename' => 'contact'));

?>

<?php if ( $query->have_posts() ): ?>

    <?php while ( $query->have_posts() ) : $query->the_post(); ?>

    <div class="contact--outer" style="display: none;">
	<div class="wrap">
	    <div class="contact--inner">

		<div class="contact__details contact--first">
		    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 1 ); } ?>
		</div>

		<div class="contact__details contact--second">
		    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 2 ); } ?>
		</div>

		<div class="contact__details contact--third">
		    <?php if ( function_exists( 'the_content_part' ) ) { the_content_part( 3 ); } ?>
		</div>

		<div class="contact__details contact--global">
		</div>

	    </div>
	</div>
    </div>

    <?php endwhile; ?>

<?php endif; ?>
