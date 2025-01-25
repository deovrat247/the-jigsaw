<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
<div class="container">
            <div class="row">
                <div class="col-md-12 bg-light text-right">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a href="http://www.thejigsaw.in/training-films-in-mumbai.html">
                                <button class="button">English</button>
                            </a>
                            <a href="http://www.thejigsaw.in/training-films-in-mumbai-hindi.html">
                                <button class="button">Hindi</button>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>		<div class="row">
			<div class="col-md-12">

				<h2>हम कौन हैं</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li>हम कौन हैं</li>
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
					<div class="col-sm-5 padding-bottom-20">
						<img class="post-img1" src="<?php base_url();?>assets/images/aboutus.jpg" alt="training films in mumbai">
					</div>
					<!-- Content -->
					<div class="col-sm-7">
						<div class="post-content">
						<h3>हम कौन हैं</h3>
						<p>आपने क्षेत्र में सबसे अच्छे और सबसे महंगे प्रशिक्षकों में से एक के साथ एक महान प्रशिक्षण सत्र का आयोजन किया है। ट्रेनर आता है और एक शानदार प्रशिक्षण सत्र देता है और आपको उत्पादकता बढ़ाने में मदद करता है। आपके सभी मौजूदा कर्मचारियों और प्रबंधकों ने अपनी दक्षता बढ़ाई है और अपना सर्वश्रेष्ठ प्रदर्शन कर रहे हैं।</p>
						</div>
					</div>
					<div class="col-sm-12">
						<p>तुम खुश हो। लेकिन अचानक आपके कुछ सबसे अच्छे लोग जो प्रशिक्षण में शामिल हुए थे, छोड़ने का फैसला करते हैं। आपको नए लोगों को काम पर रखना है, लेकिन नए लोगों को प्रशिक्षित नहीं किया जाता है, इसलिए आपका काम फिर से प्रभावित होने लगता है।</p>
						<p>तो तुम क्या करते हो? आप लोगों को उस प्रशिक्षण को छोड़ने से नहीं रोक सकते जिसके लिए आपकी कंपनी ने एक शानदार राशि का भुगतान किया था। लेकिन आप जो कर सकते हैं, वह यह है कि जब प्रशिक्षण आयोजित किया जा रहा था, तो आप वीडियो पर पूरी चीज रिकॉर्ड कर सकते थे, इसे संपादित कर सकते थे, ग्राफिक्स शामिल कर सकते थे और एक उत्कृष्ट प्रशिक्षण फिल्म बना सकते थे। फिल्म आपकी संपत्ति बन जाती, और आप इसका इस्तेमाल नए लोगों को प्रशिक्षित करने के लिए कर सकते थे, और प्रशिक्षण फिल्म उन कर्मचारियों के लिए एक पुनश्चर्या के रूप में भी काम कर सकती थी जिन्होंने पहले ही प्रशिक्षण ले लिया था।</p>
						<p>इसलिए यदि आप भी कर्मचारियों को प्रशिक्षित करने में विश्वास करते हैं, एक प्रेरण प्रक्रिया है जिसके लिए हर प्रेरण पर नए प्रशिक्षण की आवश्यकता होती है, तो आप एक प्रशिक्षण फिल्म बनाने के बारे में क्यों नहीं सोचते। यह एक बार का निवेश होगा, लेकिन अपने नए कर्मचारियों को प्रशिक्षित करने या यहां तक ​​कि पुराने लोगों को उनके द्वारा सीखी गई चीजों की याद दिलाने के लिए उपयोग किए जाने से इसकी लागत कई गुना अधिक हो जाएग</p>
						<p>प्रशिक्षण फिल्में, सुरक्षा फिल्में, जोखिम शमन पर फिल्में, और किसी भी अन्य प्रकार की फिल्म जिसका उपयोग कंपनी के विचारों, प्रक्रियाओं और संस्कृति को फिर से लागू करने के लिए किया जा सकता है, एक अच्छा निवेश हो सकता है। यदि आप इस बारे में अधिक जानना चाहते हैं कि इस तरह की वीडियो फिल्म आपके संगठन की मदद कैसे कर सकती है, तो हमें कॉल करें और हमारे प्रशिक्षण फिल्म विशेषज्ञों से बात करें।</p><br><br>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>			</div>
		</div>
	</div>	<div class="container">		<div class="row">			<div class="col-md-12">				<h2 style="text-align:center;">Latest News</h2>				<div id="news-slider" class="owl-carousel">					<?php if(count($newss)): ?>					<?php foreach($newss as $news) :  						$this->load->helper('text');						$string = $news['title'];						$string1 = $news['body'];						$string = character_limiter($string, 10);						$string1 = character_limiter($string1, 100);					?>					<div class="post-slide">						<div class="post-img">							<a href="<?php echo site_url('index.php/news/'.$news['slug']);?>" class="post-img" style="width:372px; height: 280px">								<img src="<?php echo $news['image_path'];?>" alt="<?php echo $string; ?>">							</a>						</div>						<div class="post-content">							<h3><a href="<?php echo site_url('index.php/news/'.$news['slug']);?>"><?php echo $string; ?> </a></h3>							<p class="post-description">								<?php echo $string1; ?>							</p>							<a href="<?php echo site_url('index.php/news/'.$news['slug']);?>" class="read-more">Read More <i class="fa fa-angle-right"></i></a>						</div>					</div>					<?php endforeach; ?>					<?php else: ?>						<h3 style="text-align: center">No Records To display</h3>					<?php endif; ?>				</div>			</div>		</div>	</div>	
</div>				<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script><script>$(document).ready(function() {    $("#news-slider").owlCarousel({        items : 3,        itemsDesktop:[1199,3],        itemsDesktopSmall:[980,2],        itemsTablet:[650,1],        pagination:false,        navigation:true,        navigationText:["",""]    });});</script>
	<!-- Sidebar / End -->
