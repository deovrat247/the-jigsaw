<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NVX75QT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/the jigsaw3.gif" alt="the jigsaw"></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="menu-responsive">
					<i class="fa fa-reorder menu-trigger"></i>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a class="current" href="<?php echo base_url();?>">Home</a></li>

						<li><a href="<?php echo base_url();?>training-films-in-mumbai.html">About</a>
							<ul>
								<li><a href="<?php echo base_url();?>Resource.html">Resource</a></li>
								<li><a href="<?php echo base_url();?>corporate-films-vashi-ad-films-vashi.html">Client</a></li>
							</ul>
						</li>

						<li><a href="#">Services</a>
							<ul>
								<li><a href="<?php echo base_url();?>Corporate-Video-Production-Company-in-Mumbai.html">Corporate Video</a></li>
								<li><a href="<?php echo base_url();?>Ad-Films-Makers-in-Mumbai.html">Ad Film Makers</a></li>
								<li><a href="<?php echo base_url();?>viral-video-maker-in-navi-mumbai.html">Viral Video Makers</a></li>
								<li><a href="<?php echo base_url();?>video-testimonials-maker-in-navi-mumbai.html">Video Testimonials</a></li>
								<li><a href="<?php echo base_url();?>Products-Catalogue-in-Mumbai.html">Product Catalogue</a></li>
								<li><a href="<?php echo base_url();?>Ecommerce-Product-Photoshoot-in-Mumbai.html">Product Photoshoot</a></li>
								<li><a href="<?php echo base_url();?>Ecommerce-Products-Photography-in-Mumbai.html">Product Photography</a></li>
								<li><a href="<?php echo base_url();?>Ecommerce-Photography-Cost.html">Photography Cost</a></li>
								<li><a href="<?php echo base_url();?>Animation-Studio.html">Animation Studios</a></li>
								<li><a href="<?php echo base_url();?>Animation-in-3d-And-2d.html">2d and 3d Animation</a></li>
								<li><a href="<?php echo base_url();?>Visual-Effects.html">Visual Effects</a></li>
								<li><a href="<?php echo base_url();?>Commercial-Film-Shoot-in-Mumbai.html">Commercial Film Shoot</a></li>
								<li><a href="<?php echo base_url();?>Corporate-Films-Makers-in-Mumbai.html">Corporate Film Makers</a></li>
								<li><a href="<?php echo base_url();?>short-film-movie-makers-mumbai.html">Short Film Makers</a></li>
								<li><a href="<?php echo base_url();?>Videography-Services.html">Videography Services</a></li>
								<li><a href="<?php echo base_url();?>Video-Production-Services.html">Video Production Services</a></li>
								<li><a href="<?php echo base_url();?>Corporate-Event-Photography-in-Mumbai.html">Corporate Event Photography</a></li>
								
								<!--<li><a href="<?php echo base_url();?>drone-photography.html">Drone photography</a></li>
								<li><a href="<?php echo base_url();?>drone-shoot.html">Drone Shoot</a></li>
								<li><a href="<?php echo base_url();?>industrial-photography.html">Industrial Photography</a></li>
								<li><a href="<?php echo base_url();?>corporate-photography.html">Corporate Photography</a></li>
								<li><a href="<?php echo base_url();?>commercial-photography.html">Commercial Photography</a></li>
								<li><a href="<?php echo base_url();?>advertising-photography.html">Advertising photography</a></li>
								<li><a href="<?php echo base_url();?>office-photography.html">Office photography</a></li>-->
							</ul>
						</li>
						<li><a href="<?php echo base_url();?>corporate-videos-mumbai-ad-films-makers-mumbai.html">Gallery</a></li>
						<li><a href="<?php echo base_url();?>blog">Blogs</a></li>
						<?php if(!$this->session->userdata('logged_in')) : ?>
						<li><a href="<?php echo base_url();?>training-film-mumbai-product-demo-shoot-mumbai.html">Contact Us</a></li>
						<?php endif; ?>
                        <?php if($this->session->userdata('logged_in')) : ?>
                        	<li><a href="<?php echo base_url();?>">Admin</a>
                                <ul>
                                    <li><a href="<?php echo base_url();?>categories/create">Add Category</a></li>
                                    <li><a href="<?php echo base_url();?>posts/create">Add Post</a></li>
                                    <li><a href="<?php echo base_url();?>resource/create">Add Resource</a></li>
                                    <li><a href="<?php echo base_url();?>blog-admin/logout">Logout</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget">
					<a href="tel:+919833074070" class="sign-in"><i class="sl sl-icon-phone"></i> (+91) 9833074070</a>
					<a href="#sign-in-dialog" class="button border with-icon popup-with-zoom-anim">shashank@thejigsaw.in </a>
				</div>
			</div>
			<!-- Right Side Content / End -->

			<!-- Sign In Popup -->
			<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">

				<div class="small-dialog-header">
					<h3>Contact Us</h3>
				</div>

				<!--Tabs -->
				<div class="sign-in-form style-1">

					<ul class="tabs-nav">
						<li class=""><a href="#tab1">Enter Details</a></li>
					</ul>

					<div class="tabs-container alt">

						<!-- Login -->

						<!-- Register -->
						<div class="tab-content" id="tab2" style="display: none;">

							<form method="post" class="register">
								
							<p class="form-row form-row-wide">
								<label for="username2">Name:
									<i class="im im-icon-Male"></i>
									<input type="text" class="input-text" name="username" id="username2" value="" />
								</label>
							</p>
								
							<p class="form-row form-row-wide">
								<label for="email2">Email Address:
									<i class="im im-icon-Email"></i>
									<input type="text" class="input-text" name="email" id="email2" value="" />
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password1">Phone:
									<i class="im im-icon-Phone"></i>
									<input class="input-text" type="text" name="password1" id="password1"/>
								</label>
							</p>

							<p class="form-row form-row-wide">
								<label for="password2">Message:
									<i class="im im-icon-Mail"></i>
									<input class="input-text" type="text" name="password2" id="password2"/>
								</label>
							</p>

							<input type="submit" class="button border fw margin-top-10" name="register" value="Register" />
							
							</form>
						</div>

					</div>
				</div>
			</div>
			<!-- Sign In Popup /  End -->
		</div>
	</div>
	<!-- Header / End -->



<!--<div class="diwaliimagesfix">-->
<!--<img src="assets/images/jigsaw.gif" -->
<!--   style="position: fixed;right: 2px;top: 220px;width: 70px;height: 70px;border: none;"/>-->
<!--</div>-->
<!--<style type="text/css">-->
	
<!--	.diwaliimagesfix{-->
<!--		position: relative;-->
<!--	}-->
<!--</style>-->









</header>
<div class="clearfix"></div>
<!-- Header Container / End -->