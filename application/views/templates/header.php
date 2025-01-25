<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<html lang="en-US">
<head><!-- Meta Pixel Code -->


<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-991976757"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-991976757'); </script>
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '874332263973734');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=874332263973734&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Product Videos</title>   

	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/default.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-custom.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/mmenu.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/placebo.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/prettyPhoto.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/layerslider/css/layerslider.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/twentytwenty.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/test.css">
    <link rel="shortcut icon" href="img/favicon.png"/>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5263572372651904",
    enable_page_level_ads: true
  });
</script>
</head>
	<body>
		<div class="container">
			<div class="col-md-12">
				<h1>News Section</h1>
				<p>
					<a href="<?php echo site_url('news'); ?>">Home</a> | 
					<a href="<?php echo site_url('news/create'); ?>">Add News</a> | 
					
					<?php if ($this->session->userdata('is_logged_in')) { 
							echo '<b>Logged in as:</b> ' . $this->session->userdata('email');
							echo ' | ' . "<a href=" . site_url('user/logout') . ">Logout</a>";
						} else {
					?>    
						<a href="<?php echo site_url('user/login'); ?>">Login</a>
					<?php } ?>    
				</p>
			</div>
		</div>
