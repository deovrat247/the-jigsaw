<!-- Language Selector -->
<div class="bg-light py-3">
	<div class="container">
		<div class="d-flex justify-content-end">
			<a href="http://www.thejigsaw.in/" class="btn btn-outline-primary me-2">English</a>
			<a href="http://www.thejigsaw.in/home-hindi" class="btn btn-outline-primary">Hindi</a>
		</div>
	</div>
</div>

<!-- Video Grid Section -->
<div class="container py-5">
	<div class="row g-4">
		<?php 
		$videos = [
			'JEI1iv2KZRc',
			'TuV9_E3GMCU',
			'QYmWHj7BuHk',
			'OS6O0cW87-I'
		];
		foreach($videos as $index => $videoId): ?>
			<div class="col-md-6 col-lg-3">
				<div class="ratio ratio-16x9 shadow rounded overflow-hidden">
					<iframe 
						src="https://www.youtube.com/embed/<?php echo $videoId; ?>"
						title="वीडियो <?php echo $index + 1; ?>"
						allowfullscreen
						loading="lazy">
					</iframe>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>

<!-- Main Content Section -->
<div class="container py-5">
	<div class="row justify-content-center">
		<div class="col-lg-10">
			<h1 class="text-center mb-5">कॉर्पोरेट वीडियो प्रोडक्शन कंपनी</h1>
			
			<!-- Content paragraphs with proper spacing -->
			<div class="content-section">
				<p class="mb-4">आधुनिक तकनीक के कारण, कुछ ही सेकंड में लंबी दूरी पर संचार करना बहुत आसान और सुविधाजनक है। हालांकि, लंबी दूरी की यात्रा करना उतना आसान और सुविधाजनक नहीं है। क्या होगा यदि दूसरे महाद्वीप का कोई व्यक्ति किसी अन्य महाद्वीप में स्थित कंपनी की कार्य क्षमता और सेवाओं को जानना और देखना चाहता है?</p>

				<p class="mb-4">अपनी कंपनी के काम को प्रदर्शित करने का सबसे अच्छा तरीका कॉर्पोरेट फिल्में, उत्पाद डेमो वीडियो और विज्ञापन फिल्में बनाना है। कॉर्पोरेट वीडियो आपके दर्शकों का ध्यान आकर्षित करने और अपनी बात समझाने का सबसे अच्छा तरीका है। वीडियो उत्पादन में विशेषज्ञों के एक समूह द्वारा स्थापित thejigsaw, मुंबई और नवी मुंबई में एक पेशेवर कॉर्पोरेट वीडियो उत्पादन कंपनी है।</p>

				<h2 class="h4 mt-5 mb-4">कॉर्पोरेट फिल्म निर्माण प्रक्रिया</h2>
				<p class="mb-4">कॉरपोरेट फिल्म बनाने के लिए कई अलग-अलग डोमेन में विशेषज्ञता की आवश्यकता होती है। प्रक्रिया क्लाइंट के संक्षिप्त को समझने के साथ शुरू होती है। आमतौर पर यह विश्लेषक, लेखक और निर्देशक की एक टीम द्वारा किया जाता है।</p>

				<div class="process-steps bg-light p-4 rounded my-5">
					<h3 class="h5 mb-4">हमारी कार्य प्रक्रिया:</h3>
					<ol class="list-unstyled">
						<li class="mb-3">1. क्लाइंट की आवश्यकताओं को समझना</li>
						<li class="mb-3">2. स्क्रिप्ट और कॉन्सेप्ट डेवलपमेंट</li>
						<li class="mb-3">3. प्री-प्रोडक्शन प्लानिंग</li>
						<li class="mb-3">4. शूटिंग और प्रोडक्शन</li>
						<li class="mb-3">5. पोस्ट-प्रोडक्शन और एडिटिंग</li>
					</ol>
				</div>

				<p class="mb-4">कॉरपोरेट फिल्म की स्क्रिप्ट पर क्लाइंट की मंजूरी मिलने के बाद, हम पोस्ट-प्रोडक्शन पर काम शुरू करते हैं। इस प्रक्रिया में स्थान, वीडियो-शूट की तारीखों को अंतिम रूप देना, शूटिंग के लिए सभी आवश्यक उपकरण तैयार करना शामिल है।</p>

				<div class="team-section bg-light p-4 rounded my-5">
					<h2 class="h4 mb-4">हमारी टीम</h2>
					<p class="mb-4">द आरा में, हमारे पास कॉर्पोरेट वीडियो उत्पादन को पूरा करने के लिए आवश्यक विशेषज्ञों की टीम है:</p>
					<ul class="list-unstyled">
						<li class="mb-2">• निर्देशक</li>
						<li class="mb-2">• फोटोग्राफी के निदेशक</li>
						<li class="mb-2">• प्रकाश तकनीशियन</li>
						<li class="mb-2">• संपादक</li>
						<li class="mb-2">• ड्रोन ऑपरेटर</li>
					</ul>
				</div>

				<div class="clients-section my-5">
					<h2 class="h4 mb-4">हमारे प्रमुख क्लाइंट</h2>
					<p class="mb-4">आरा टाटा एआईजी, नोकिया, वोडाफोन, फ्यूचर ग्रुप, गुजरात गैस, एसबीआई और कई अन्य मान्यता प्राप्त ब्रांडों के साथ काम कर चुका है।</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Tag Cloud Section -->
<section class="bg-light py-5">
	<div class="container">
		<div id="htmltagcloud" class="text-center">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="tag-item mb-3">
						<span class="h5">कॉर्पोरेट मूवी प्रोडक्शन कंपनी इन मुंबई और नवी मुंबई</span>
					</div>
					<div class="tag-item mb-3">
						<span class="h6">प्रोडक्ट डेमो वीडियो और विज्ञापन फिल्में</span>
					</div>
					<div class="tag-item mb-3">
						<span class="h6">प्रोडक्ट फोटोग्राफी और प्रोडक्ट शूट</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
/* Custom Styles */
.content-section p {
	line-height: 1.8;
	color: #333;
}

.process-steps, .team-section {
	box-shadow: 0 2px 4px rgba(0,0,0,0.1);
	transition: transform 0.3s ease;
}

.process-steps:hover, .team-section:hover {
	transform: translateY(-5px);
}

.tag-item {
	padding: 10px 20px;
	background: white;
	border-radius: 30px;
	display: inline-block;
	margin: 5px;
	box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
</style>