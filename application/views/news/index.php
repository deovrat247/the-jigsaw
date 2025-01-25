<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Blog</h2><span>Latest News</span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Latest News</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content -->
<div class="container">

	<!-- Blog Posts -->
	<div class="blog-page">
	<div class="row">
		<div class="col-lg-12 col-md-12">
		<?php if(count($articles)): ?>
		<?php foreach($articles as $article) : 
			  $this->load->helper('text');
			  $string = $article['title'];
			  $string = character_limiter($string, 10);
		
		?>
			<!-- Blog Post -->
			<div class="col-lg-4 col-md-4">
			<div class="blog-post">
				
				<!-- Img -->
				<a href="<?php echo site_url('/posts/'.$article['slug']);?>" class="post-img" style="width:372px; height: 280px">
					<img src="<?php echo $article['image_path'];?>" alt="<?php echo $string; ?>">
				</a>
				
				<!-- Content -->
				<div class="post-content">
					<h3><a href="<?php echo site_url('/posts/'.$article['slug']);?>"><?php echo $string; ?> </a></h3>

					<ul class="post-meta">
						<li><?php echo $article['pubdate']; ?></li>
						<li><a href="#"><?php echo $string; ?></a></li>
						
					</ul>

					<a href="<?php echo site_url('/posts/'.$article['slug']);?>" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
				</div>

			</div>
			</div>
			<!-- Blog Post / End -->
		<?php endforeach; ?>
		<?php else: ?>
			<h3 style="text-align: center">No Records To display</h3>
		<?php endif; ?>

			<!-- Pagination -->
			<!--<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-12">
					
					<div class="pagination-container margin-bottom-40">
						<nav class="pagination">
							<ul>
								<li><a href="#" class="current-page">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>-->
			

		</div>

	<!-- Blog Posts / End -->


	<!-- Widgets -->
	
	</div>
	<!-- Sidebar / End -->


</div>
</div>