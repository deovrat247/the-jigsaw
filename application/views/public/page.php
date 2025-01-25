<?php 
	$dbc = mysqli_connect('localhost', 'root', '', 'test');
	$query = "SELECT * FROM `news` WHERE id='$_GET[id]'";
	$result=mysqli_query($dbc, $query);
?>
<!-- Titlebar -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>News</h2>
				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="#">Home</a></li>
						<li>About Us</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<!-- Blog Posts -->
	<div class="blog-page">
		<div class="row">
			<!-- Post Content -->
			<div class="col-lg-12 col-md-12">
				<!-- Blog Post -->
				<div class="blog-post1 single-post1">
					<!-- Img -->
					<div  class="col-sm-12">
						<h3>Latest News</h3>
						<?php
							while($row=mysqli_fetch_array($result)) {
								echo '<h3>'.$row['title'].'</h3>';
								echo $row['text'];
								?> <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a>
						<?php 	}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Sidebar / End -->
