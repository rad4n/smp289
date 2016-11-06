<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- Your Basic Site Informations -->
	<title><?=$this->e($page_title);?></title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?=$this->e($page_desc);?>" />
    <meta name="keywords" content="<?=$this->e($page_key);?>" />
    <meta http-equiv="Copyright" content="popojicms" />
    <meta name="author" content="PopojiCMS" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="language" content="Indonesia" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />

	<!-- Social Media Meta -->
	<?php include_once DIR_CON."/component/setting/meta_social.txt";?>

    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheets -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300italic,300,400italic,600&subset=latin,latin-ext" rel="stylesheet" type="text/css">
	<link rel='stylesheet' id='responsive-lightbox-swipebox-css' href='<?=$this->asset('/assets/front/css/swipebox.min.css')?>' type='text/css' media='all' />
	<link rel='stylesheet' id='hueman-main-style-css' href='<?=$this->asset('/assets/front/css/main.css')?>' type='text/css' media='all' />
	<link rel='stylesheet' id='theme-stylesheet-css' href='<?=$this->asset('/assets/front/css/style.css')?>' type='text/css' media='all' />
	<link rel='stylesheet' id='hueman-font-awesome-css' href='<?=$this->asset('/assets/front/css/font-awesome.min.css')?>' type='text/css' media='all' />

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />

	<!-- Javascript -->
	<script type='text/javascript' src='<?=$this->asset('/assets/front/js/jquery.js')?>'></script>
	<script type='text/javascript' src='<?=$this->asset('/assets/front/js/jquery-migrate.min.js')?>'></script>
	<script type='text/javascript' src='<?=$this->asset('/assets/front/js/jquery.swipebox.min.js')?>'></script>
	<script type='text/javascript'>
		var rlArgs = {
			"script": "swipebox",
			"selector": "lightbox",
			"customEvents": "",
			"activeGalleries": "1",
			"animation": "1",
			"hideCloseButtonOnMobile": "0",
			"removeBarsOnMobile": "0",
			"hideBars": "1",
			"hideBarsDelay": "5000",
			"videoMaxWidth": "1080",
			"useSVG": "1",
			"loopAtEnd": "0"
		};
	</script>
	<script type='text/javascript' src='<?=$this->asset('/assets/front/js/front.js')?>'></script>
	<script type='text/javascript' src='<?=$this->asset('/assets/front/js/jquery.flexslider.min.js')?>'></script>
	<!--[if lt IE 9]> <script src="<?=$this->asset('/assets/front/js/html5shiv-printshiv.min.js')?>"></script>
	<script src="<?=$this->asset('/assets/front/js/selectivizr.js')?>"></script> <![endif]-->
	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important
		}
	</style>
	<style type="text/css">
		body {
			font-family: "Source Sans Pro", Arial, sans-serif
		}
		
		body {
			background-color: #eaeaea
		}
	</style>
	<script src="https://www.google.com/recaptcha/api.js"></script>
</head>
<?php if ($this->e($social_mod) == 'Home' || $this->e($social_mod) == 'Beranda' || $this->e($social_mod) == 'Galeri' || $this->e($social_mod) == 'Gallery') { ?>
<body class="home blog wp-custom-logo col-3cm full-width topbar-enabled mobile-sidebar-hide-s2 chrome">
<?php } else { ?>
<body class="single single-post single-format-image wp-custom-logo col-2cl full-width topbar-enabled mobile-sidebar-hide-s2 chrome">
<?php } ?>
	<div id="wrapper">
		<!-- Insert Header -->
		<?=$this->insert('header');?>

		<!-- Insert Content -->
		<?=$this->section('content');?>

		<!-- Insert Footer -->
		<?=$this->insert('footer');?>
	</div>

	<!-- Javascript -->
	<script type='text/javascript' src='<?=$this->asset('/assets/front/js/underscore.min.js')?>'></script>
	<script type='text/javascript'>
		var HUParams = {
			"_disabled": [],
			"SmoothScroll": {
				"Enabled": true,
				"Options": {
					"touchpadSupport": false
				}
			},
			"centerAllImg": "1",
			"timerOnScrollAllBrowsers": "1",
			"extLinksStyle": "1",
			"extLinksTargetExt": "1",
			"extLinksSkipSelectors": {
				"classes": ["btn", "button"],
				"ids": []
			},
			"imgSmartLoadEnabled": "1",
			"imgSmartLoadOpts": {
				"parentSelectors": [".container .content", ".container .sidebar", "#footer", "#header-widgets"],
				"opts": {
					"excludeImg": [".tc-holder-img"],
					"fadeIn_options": 100
				}
			},
			"goldenRatio": "1.618",
			"gridGoldenRatioLimit": "350",
			"vivusSvgSpeed": "300",
			"isDevMode": ""
		};
	</script>
	<script type='text/javascript' src='<?=$this->asset('/assets/front/js/scripts.min.js')?>'></script>
	<script type='text/javascript' src='<?=$this->asset('/assets/front/js/wp-embed.min.js')?>'></script>
	<!--[if lt IE 9]> <script src="<?=$this->asset('/assets/front/js/respond.js')?>"></script> <![endif]-->
</body>
</html>