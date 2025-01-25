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
<!-- Content
================================================== -->
<div class="container">
	<!-- Blog Posts -->
	<div class="blog-page">
		<div class="row">
			<!-- Post Content -->
			<div class=" col-md-offset-1 col-lg-10 col-md-10 col-md-offset-1 padding-right-30">
				<!-- Blog Post -->
				<div class="blog-post single-post">
					
					<!-- Img -->
					<img class="post-img" src="<?php echo $articles['image_path'];?>" alt="<?php echo $articles['title'];?>" style="width: 50%; height: 50%">
					
					<!-- Content -->
					<div class="post-content">
						<h3><?php echo $articles['title']; ?></h3>
						<ul class="post-meta">
							<li><?php echo $articles['pubdate']; ?></li>
							<li><a href="#"><?php echo $articles['category_id']; ?></a></li>
						</ul>
						<p><?php echo $articles['body']; ?></p>
						
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="margin-top-50"></div>
				
				<!-- Reviews -->
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

                            
				
				<div class="clearfix"></div>
				<!-- Add Comment -->
			</div>
			<!-- Content / End -->
			<!-- Widgets -->
		</div>
		<!-- Sidebar / End -->
	</div>
</div>
<script id="dsq-count-scr" src="//thejigsaw-1.disqus.com/count.js" async></script>