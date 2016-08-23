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
	

    <!-- Stylesheets -->
	<link href="<?=$this->asset('/css/bootstrap.css');?>" rel="stylesheet" type="text/css">
    <!-- Custom Theme files -->
    <link href="<?=$this->asset('/css/style.css');?>" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <script src="//connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.0" id="facebook-jssdk"></script>
    <script src="<?=$this->asset('/js/jquery.min.js');?>"></script>
    <script type="text/javascript" src="<?=$this->asset('/js/jquery.leanModal.min.js');?>"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <!-- Custom Theme files -->

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />

	<!-- Javascript -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
    <div class="container"> 
        <div class="news-paper">
        	<!-- Insert Header -->
            <?=$this->insert('header');?>

            <!-- Insert Content -->
            <?=$this->section('content');?>

            <!-- Insert Footer -->
            <?=$this->insert('footer');?>
        </div>
    </div>
    <div id="lean_overlay"></div>
	<!-- Javascript -->
	
</body>
</html>