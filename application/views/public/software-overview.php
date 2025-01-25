<style>

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

h2 {
  text-align: center;
  margin: 20px auto;
  color: #fff;
}

.accordion-menu {
  width: 100%;
  max-width: 350px;
  margin: 60px auto 20px;
  background: #fff;
  border-radius: 4px;
}

.accordion-menu li.open .dropdownlink {
  color: #ff8863;
}
.accordion-menu li.open .dropdownlink .fa-chevron-down {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

.accordion-menu li:last-child .dropdownlink {
  border-bottom: 0;
}

.dropdownlink {
  cursor: pointer;
  display: block;
  padding: 15px 15px 15px 45px;
  font-size: 18px;
  border-bottom: 1px solid #ccc;
  color: #212121;
  position: relative;
  transition: all 0.4s ease-out;
}
.dropdownlink i {
  position: absolute;
  top: 17px;
  left: 16px;
}
.dropdownlink .fa-chevron-down {
  right: 12px;
  left: auto;
}

.submenuItems {
  display: none;
  background: #89c5f5;
}
.submenuItems li {
  border-bottom: 1px solid #B6B6B6;
}

.submenuItems a {
  display: block;
  color: #000000;
  padding: 12px 12px 12px 45px;
  transition: all 0.4s ease-out;
}

.btnv {
	text-align:center;
}
</style>
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h1>Video List</h1>
				<p class="btnv">Discover Curated Collections</p>
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
		<div class="col-lg-12 col-md-12 padding-right-30">
			<div class="col-lg-4 col-md-4">
				<?php include 'sidebar.php'; ?>
			</div>
			<div class="col-lg-8 col-md-8">
			<!-- Blog Post -->
				<div class="blog-post single-post">
					
					<!-- Img -->
					<!-- Content -->
					<div class="post-content">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/nGuJvfS6Fdk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<h3>Xero Accounting Software Overview</h3>
						<!-- Share Buttons -->
						<div class="btnv">
							<a href="#sign-in-dialog" class="button border with-icon popup-with-zoom-anim"><i class="sl sl-icon-phone"></i> (+91) 9833074070</a>
							<a href="#sign-in-dialog" class="button border with-icon popup-with-zoom-anim">shashank@thejigsaw.in </a>
						</div>
						<div class="clearfix"></div>

					</div>
					
					<div class="post-content">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/dep7HvMdrso" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<h3>Spigit Innovation Management Software Overview</h3>
						<!-- Share Buttons -->
						<div class="btnv">
							<a href="#sign-in-dialog" class="button border with-icon popup-with-zoom-anim"><i class="sl sl-icon-phone"></i> (+91) 9833074070</a>
							<a href="#sign-in-dialog" class="button border with-icon popup-with-zoom-anim">shashank@thejigsaw.in </a>
						</div>
						<div class="clearfix"></div>

					</div>
					
					<div class="post-content">
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/D6rNs8tZjtg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						<h3>Procore Construction Project Management Software Overview</h3>
						<!-- Share Buttons -->
						<div class="btnv">
							<a href="#sign-in-dialog" class="button border with-icon popup-with-zoom-anim"><i class="sl sl-icon-phone"></i> (+91) 9833074070</a>
							<a href="#sign-in-dialog" class="button border with-icon popup-with-zoom-anim">shashank@thejigsaw.in </a>
						</div>
						<div class="clearfix"></div>

					</div>
				</div>
				
				
			</div>
		<div class="clearfix"></div>

	</div>
	<!-- Content / End -->
	
	</div>
	<!-- Sidebar / End -->


</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
$(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    // more then one submenu open?
    this.multiple = multiple || false;
    
    var dropdownlink = this.el.find('.dropdownlink');
    dropdownlink.on('click',
                    { el: this.el, multiple: this.multiple },
                    this.dropdown);
  };
  
  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el,
        $this = $(this),
        //this is the ul.submenuItems
        $next = $this.next();
    
    $next.slideToggle();
    $this.parent().toggleClass('open');
    
    if(!e.data.multiple) {
      //show only one menu at the same time
      $el.find('.submenuItems').not($next).slideUp().parent().removeClass('open');
    }
  }
  
  var accordion = new Accordion($('.accordion-menu'), false);
})
</script>