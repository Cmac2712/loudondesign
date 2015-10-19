<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.add('safari', /constructor/i.test());
		conditionizr.add('chrome', !!window.chrome && /google/i.test(navigator.vendor));	
		conditionizr.add('firefox', 'InstallTrigger' in window);
		conditionizr.add('ie11', /(?:\sTrident\/7\.0;.*\srv:11\.0)/i.test(navigator.userAgent));
		conditionizr.add('ie10', !!(Function('/*@cc_on return (/^10/.test(@_jscript_version) && /MSIE 10\.0(?!.*IEMobile)/i.test(navigator.userAgent)); @*/')()));
		conditionizr.add('linux', /linux/i.test(navigator.platform) && !/android|cros/i.test(navigator.userAgent));
		conditionizr.add('mac', /mac/i.test(navigator.platform));
		conditionizr.add('windows', /win/i.test(navigator.platform));

		conditionizr.config({
		    assets: '<?php echo get_template_directory_uri(); ?>',
		    tests: {
			'safari': ['class'],
			'chrome': ['class'],
			'firefox': ['class'],
			'ie11': ['class'],
			'ie10': ['class'],
			'linux': ['class'],
			'windows': ['class']
		    }
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

	<?php require_once('contact.php'); ?>

			<!-- header -->
			<header class="main-header" role="banner">
			    <div class="wrap main-header__wrap">
				    <a id="mainNav-button" class="main-nav-button" href="#" data-toggle="mainNav">
				<div class="hamburger">
				    <div class="hamburger__slice hamburger__slice--top"></div>
				    <div class="hamburger__slice hamburger__slice--mid"></div>
				    <div class="hamburger__slice hamburger__slice--btm"></div>
				</div>
			    </a>
			    <a class="phone--mobile" href="tel:07980961805">
				<span class="icon-phone"></span>
			    </a>
			    <div class="details details--left">
				<span class="details__name">John Loudon</span>
				<span class="details__job-title">Designer &amp; Illustrator</span>
			    </div>
			    <div class="details details--right">
				<span class="details__envelope"><span class="icon-envelope"></span>Kick Start Your Project</span>
				<span class="details__phone"><span class="icon-phone"></span><a href="tel:07980961805">07572750380</a></span>
			    </div>
			    <a href="/" class="main-header__logo">
				<?php echo file_get_contents(get_template_directory_uri().'/img/logo.svg'); ?>
			    </a>
			    </div>
				<nav id="mainNav" class="main-nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>
				<!-- /nav -->
			</header>
			<!-- /header -->
