<header>
	<div class="caption_header caption_image_91" id="short-header">
		<div class="overlay_bg"></div>
		<div class="caption_content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12 p_0 wow animated fadeInUp" data-wow-delay="1.3s" data-wow-duration="1s">
						<div class="caption_text">
							<h1 style="text-align: center;"><?php echo $resources['title']; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- Blog Single -->
<div class="container">
	<!-- Blog Posts -->
	<div class="blog-page">
		<div class="row">
			<!-- Post Content -->
			<div class="col-md-offset-1 col-lg-10 col-md-10 col-md-offset-1">
				<!-- Blog Post -->
				<div class="blog-post single-post">
					
					<!-- Img -->
					<img class="post-img" src="<?php echo $resources['image_path'];?>" alt="<?php echo $resources['title'];?>" style="width:372px; height: 280px">
					
					<!-- Content -->
					<div class="post-content">
						<h3><?php echo $resources['title']; ?></h3>
						<ul class="post-meta">
							<li><?php echo $resources['pubdate']; ?></li>
							
						</ul>
						<p><?php echo $resources['body']; ?></p>
						<div class="clearfix"></div>
					</div>
				</div>
				
				<div class="margin-top-50"></div>
				<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://thejigsaw-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
				
			</div>
			<!-- Content / End -->
			<!-- Widgets -->
		</div>
		<!-- Sidebar / End -->
	</div>
</div>
<script id="dsq-count-scr" src="//thejigsaw-1.disqus.com/count.js" async></script>