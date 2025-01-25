<!DOCTYPE html>
<html lang="en-US">
<head>
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
</head>
	<body class="background">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 col-sm-offset-3 col-md-6 col-md-offset-3">
					<div class="login-form">
						<?php $attributes = array("name" => "loginform"); echo form_open("user/login", $attributes); ?>
							<label for="email"> Email: </label>
							<input class="form-control form" name="email" placeholder="Email-ID" type="text" /> 
							<span style="color:red"><?php echo form_error('email'); ?></span>
							<label for="subject"> Password: </label>
							<input class="form-control form" name="password" placeholder="Password" type="password" /> 
							<span style="color:red"><?php echo form_error('password'); ?></span>
							<button name="submit" class="btn btn-block bt-login" type="submit">Sign In</button>
						<?php echo form_close(); ?>
						<p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
						<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>
						<!--
							<div class="form-footer">
								<div class="row">
									<div class="col-xs-7 col-sm-7 col-md-7">
										<i class="fa fa-lock"></i> 
										<a href="#"> Forgot password? </a>
									</div>
									<div class="col-xs-5 col-sm-5 col-md-5">
										<i class="fa fa-check"></i> 
										<a href="#"> Sign Up </a>
									</div>
								</div>
							</div>
						-->
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="col-sm-5 col-sm-offset-4 col-md-4 col-md-offset-4">
				<p><em>Copyright © 2017</em></p>
			</div>
		</div>
	</body>
</html>