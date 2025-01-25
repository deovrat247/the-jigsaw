<style>
.count-script-banner {
    background:#272c4b url(../images/count-script-banner.jpg) no-repeat 0 0;
	background-size:cover;
    border-radius: 5px;   
	position: relative;
	color: #fff;
	overflow:hidden;
	padding-top:30px;
	margin-bottom:20px;
	    text-align: center;
}
.count-script-banner h1, .count-script-banner h4 {	
	font-family: 'Roboto Condensed', sans-serif;
}
.count-script-banner h1 {
	font-size:48px;
	font-weight:700;
	max-width:400px;
	margin:0 auto 10px;
}
.count-script-banner h4 {
	font-size:30px;
	color:#fff
}

.count-script-banner .count-desc {
    background: rgba(0,0,0,.8);
    border-radius: 10px;
    overflow: hidden;
    letter-spacing: 1px;
    max-width: 70%;
    margin: auto;
    padding: 20px 10px;
	font-size:20px
}
.count-script-banner .count-desc h4:after {
   content: "";
    border: 2px solid #3b9dbe;
    width: 60px;
    display: block;
    margin: 0 auto;
    margin-top: 11px;
	
}
.count-script-banner .down-icon {
    text-align: center;
}
.count-script-banner i.fa.fa-chevron-down {
    border: 2px solid #fff;
    border-radius: 50px;
    font-size: 28px;
    text-align: center;
    height: 45px;
    width: 45px;
    padding: 6px 3px 0px 3px;
    margin: 10px 10px;
    text-align: center;
}
.countscript-section {
    background-color: #ffff;
    border-radius: 5px;
	padding: 20px 0px 0px 0px;
	overflow: hidden;	
}
.countscript-section .basics-head {
	max-width: 300px;
	background: url('../images/icon_basic.png') no-repeat 0 0;
    float: left;
	margin-bottom:15px;
	
}
.countscript-section .basics-head h2{
	padding-left: 50px;
    font-size: 50px;
    letter-spacing: -1px;
    font-family: 'Roboto Condensed', sans-serif;
    max-width: 300px;
    float: left;
	font-weight:bold;
	margin: 5px auto;
}
.countscript-section .basics-guide {
	float:left;
	padding-left: 15px;
}
.countscript-section .basics-guide p{
    font-size:18px
}
.countscript-section .basics-guide ul.guide-list {
     list-style-type: none;
	 padding-left: 0px;

}
.countscript-section .basics-guide ul.guide-list li {
    display: inline-block;
	font-weight:bold;
	font-size: 14px;
	margin-right:3px
}
.countscript-section .basics-guide ul.guide-list li span {
    margin:0px 5px 0px 0px;
    border-radius: 50px;
    border: 2px solid #fff;
    background-color: #fe7a57;
    font-size: 15px;
    height: 20px;
    width: 20px;
    float: left;
}
.countscript-section .basics-guide ul.guide-list li span.red {
      background-color: #fe7a57;
}
.countscript-section .basics-guide ul.guide-list li span.yellow {
	background-color: #fed157;
}
.countscript-section .basics-guide ul.guide-list li span.green {
    background-color: #159f36;
}
.time-estimate-section{
    background-color: #036586;
    border-radius: 5px;
    overflow: hidden;
	color:#fff;
	padding:20px 20px 10px;
	margin-bottom:15px;
}
.estimate-clock{
	background: url('../images/clock.png') no-repeat 0 0;
    float: left;
	width: 35%;
	min-width:200px
}
.estimate-clock h2{
	color:#fff;
	padding-top:25px;
	font-size:40px;
	font-family: 'Roboto Condensed', sans-serif;
}
.estimate-words{
	float:left;
	width:65%
	
}
.estimate-words-list{margin:0px;padding:0px}
ul.estimate-words-list li {
    background:url(../images/clock-icon.png) no-repeat 0 50%;
    padding-left: 18px;
    font-size: 13px;
    line-height: 15px;
    font-weight: bold;
    list-style: none;
    margin: 0px 0px 12px;
	width:50%;
	float:left;
}
.results-section {
	background-color: #ec7f19;
    border-radius: 5px;
    padding: 1px 0px 0px 0px;
    overflow: hidden;
    margin-bottom: 15px;
	padding:10px 20px 5px;	
}
.results-section  .results-head{
	width:35%;
    float: left;
	color:#fff;
}
.results-section .results-head p{
	margin-bottom: 0px;
	letter-spacing:2px;
	font-weight:700
}
.results-section .results-head h2 {
	margin-top: 0px;
	font-size:40px;
	font-family: 'Roboto Condensed', sans-serif
}
.results-section .results-right{
    float: left;
	padding-top:20px
}

.results-section .results-right p {
	color:#fff;
	font-size:14px;
	font-weight:700;
	line-height:2em

}
.results-section .results-right strong{
	font-size:40px;
	color:#000;
	line-height:.8em;
	border-bottom:4px solid #fff;	
	font-family: 'Roboto Condensed', sans-serif
}

.script-form-section{
	background-color:#61afea;
	overflow:hidden;
	border-radius:5px;
	margin-bottom:15px;
	color: #000;
	padding:20px;
}


.script-form-section .radio-btn{
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 26px;	
	font-family: 'Roboto Condensed', sans-serif;
	font-weight:400!important;
	color:#222!important;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.script-form-section .label{ 
	font-size: 26px;	
	font-family: 'Roboto Condensed', sans-serif;
	line-height:1.5em;
	font-weight:400;
	color:#222;
	padding:0px
	}
.script-form-section .radio-btn input {
    position: absolute;
    opacity: 0;
}
.script-form-section .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 28px;
    width: 28px;
    background-color: #eee;
    border-radius: 50%;
	border:3px solid #fff
}
.script-form-section .radio-btn:hover input ~ .checkmark {
    background-color: #ccc;
}
.script-form-section .radio-btn input:checked ~ .checkmark {
    background: url('../images/tick_btn.png') no-repeat 0 0;
	border:none
}
.form-group-radio  h4 {
	padding-left: 5px;
    float: left;
    margin-top: 12px;		
}
.form-script-btn{
	padding-bottom:20px;	
}
.form-script-btn .calBtn{
	background-color: #5aaf3d;
    font-weight: 700!important;
    font-size: 24px;
    border-radius: 5px;
    color: #fff;
	float:left;
	border:none;
	padding: 10px 15px;
	text-transform:uppercase
}

.form-script-btn  .calBtn:hover{
    background:#102f55;
	color:#fff
}
.form-script-btn .closeBtn{
	background-color: #e48787;
    font-weight: 600!important;
    font-size: 16px;
    border-radius: 5px;
    color: #fff;
    float: right;
	border:none;
    margin-top: 9px;
}
.form-script-btn  .closeBtn:hover{
    background:#dc4444;
	color:#fff
}
#countscript-sidebar{max-width:350px}
.time-estimate-sidebar{
	background: #fff;
    padding: 20px;
    border-radius: 5px;
}


@media screen and (max-width:990px) {	
	.estimate-clock, .results-section .results-head, .results-section .results-right, .estimate-words{width:100%}
	.results-section .results-right{padding-top:0px!important;}
}
@media screen and (max-width:767px) {
	.count-script-banner .count-desc{max-width:90%}
	.count-script-banner h4{font-size:26px}
	.script-form-section .radio-btn, .script-form-section .label{font-size:20px}
}

@media screen and (max-width:640px) {
.profile-img{display:none;}

.top-mobile-responsive{display:block;overflow: hidden;}	


.top-mobile-responsive .col-xs-12 , .top-mobile-responsive .col-xs-3{
   padding-left: 0px;
   padding-right:0px;
}

.top-mobile-responsive .btn_play {
    padding-top: 25px;
   }
   
.top-mobile-responsive .img_responsive img {
    margin-top: 8px;
    width: 110px;
    border: 3px solid #fff;
    border-radius: 10px;
}

.top-mobile-responsive .top_btn {
    padding-top: 34px;
    text-align: center;
}
}








/* ====voice over glossery css=== */

.voice-over-glossary-banner {
    background: url(../images/voice-over-glossary.jpg) 50%;
    background-size: cover;
    border-radius: 5px;
    color: #fff;
    padding: 65px 20px;
}
.center-banner-heading {
    max-width: 750px;
    width: 100%;
    margin: 0 auto;
    text-align: center;
}


.center-banner-heading h1 {
    margin-top: 13px;
    font-size: 48px;
    font-weight: 800;
}

.center-banner-heading p {
    font-size: 20px;
     padding-top: 14px;
}

.voice-section-heading {
    max-width: 800px;
    margin: 0 auto;
    width: 100%;
    text-align: center;
    padding: 30px 0px;
}

.voice-section-heading p {
    font-size: 20px;
    font-weight: 700;
}

.voice-glossary-detail {
    padding: 50px 0px;
    }

.detail-box {
    background: #fff;
    padding: 15px;
    border: 1px solid #c1c1c1;
    border-radius: 5px;
    text-align: center;
	position:relative;
}

.blue-box .img {background: #448fda url(../images/voice-over-icon1.png) no-repeat 50%;}
.red-box .img {background: #bf0707 url(../images/voice-over-icon2.png) no-repeat 50%;}
.orange-box .img {background: #ff7800 url(../images/voice-over-icon3.png) no-repeat 50%;}

.detail-box  .img {
    height: 100px;
    width: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: 50%;
    margin-left: -50px;
}

.detail-box h2 {
    padding-top: 30px;
    font-weight: 600;
	font-size:27px;
}

.detail-box h2:after {
    content: "";
    width: 70px;
    display: block;
    margin: 0 auto;
    margin-top: 18px;
    margin-bottom: 20px;
}

.blue-box h2:after {border: 1px solid #2c66a2;}
.red-box h2:after {border: 1px solid #bf0707;}
.orange-box h2:after {border: 1px solid #ff7800;}

.detail-box ul.des-list {
    text-align: left;
    padding: 0px;
    list-style: none;
}

.detail-box ul.des-list li {
    background: url(../images/list-icon.png) no-repeat 0 50%;
    padding-left: 20px;
}

.detail-box .des-list a {
    font-size: 15px;
    font-weight: 600;
}

.detail-box .des-list a:hover{
    color:#000;
}

.blue-box  .des-list a {color: #2c66a2;}
.red-box  .des-list a {color: #bf0707;}
.orange-box  .des-list a {color: #ff7800;}



</style>
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h1>Script Length</h1>

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


			<!-- Blog Post -->
			<div class="blog-post single-post">
				
				<div class="countscript-section mrg-b30">
                        
                        <!-- End: row -->
                        <div class="col-xs-12 col-sm-12 col-md-12 show">
                           <div class="results-section">
                              <div class="results-head">
                                 <p>VOICE OVER</p>
                                 <h2>ESTIMATE</h2>
                              </div>
                              <div class="results-right" id="test">
                                 
                              </div>
                           </div>
                           <!-- End: results-section -->
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                           <div id="script_words"> </div>
                           <form accept-charset="UTF-8" role="form" method="post" name="myForm">
                              <div class="script-form-section">
                                 <div class="radio-check-btn">	
                                    <label class="radio-btn">
                                    <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="" onclick="return toggleDiv()">
                                    <span class="checkmark"></span>
                                    I WANT TO PASTE MY SCRIPT
                                    </label>
                                 </div>
                                 <div class="form-group" id="script_div">
                                    <textarea type="postal" name="script_content" rows="8" class="form-control" id=" " placeholder="Paste your script here using CTRL V on your keyboard" required=""></textarea>
                                 </div>
                                 <div class="form-group">
                                    <div class="radio-check-btn">	
                                       <label class="radio-btn">
                                       <input type="radio" id="inlineRadio2" value="option2" name="radioInline" onclick="return toggleDiv()">
                                       <span class="checkmark"></span>
                                       I KNOW THE NUMBER OF WORDS IN MY SCRIPT
                                       </label>					
                                    </div>
                                 </div>
                                 <div id="script_count_div" style="display:none">     
                                    <input name="script_content_count" id="script_content_count" maxlength="8" type="text" class="form-control" placeholder="Enter the number of words in your script">
                                 </div>
                                 <div class="form-group">
                                    <label class="label">SPEED OF VOICE</label> 
                                    <select name="voice_speed" id="voice_speed" class="form-control">
                                       <option value="medium" selected="">Regular Pace Explainer Videos</option>
                                    </select>
                                 </div>
                                 <div class="form-script-btn">
                                    <a href="javascript:countNow(this);" class="btn btn-primary calBtn" type="button">Calculate Now</a>				
                                 </div>
                              </div>
                              <!-- End: script-form-section -->
                           </form>
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

<script language="javascript">
         function countNow(frm){
         	if(document.getElementById("inlineRadio1").checked){
         		var total_time_sec		=	'';
         		var total_time_min		=	'';
         		var total_time_hour		=	'';
         		if(document.myForm.script_content.value!=''){         			
         	 		var s= document.myForm.script_content.value;
         				s = s.replace(/( | )/,"");//exclude  start and end white-space
         				s = s.replace(/[\n\r]/g," ");//2 or more space to 1
         				s = s.replace(/<.*?>/g," "); // exclude newline with a start spacing
         				s = s.replace(/[ ]{2,}/g," ");//2 or more space to 1
         	 		var total_words			=	s.split(' ').length;
         	 		var voice_speed			=	document.getElementById("voice_speed").value;
         		}else{         			
         			alert("Please enter script");
         			document.myForm.script_content.focus();
         			return false;
         		}
         	}
			
			if(document.getElementById("inlineRadio2").checked){
         		if(document.myForm.script_content_count.value!=''){
         			var total_words			=	document.myForm.script_content_count.value;
         			total_words				=	total_words.replace(/\,/g,''); // 1125, but a string, so convert it to number
         			total_words				=	parseInt(total_words,10);
         	 		var voice_speed			=	document.getElementById("voice_speed").value;         	 		
         		}
         		else{
         			alert("Please enter words count");
         			document.myForm.script_content_count.focus();
         			return false;
         		}         		
         	}
			
         	if(voice_speed=='medium'){
         		 total_time_sec	=	Math.round(total_words*.339);
         	}
         	if(voice_speed=='fast'){
         		 total_time_sec	=	Math.round(total_words*.3325);
         	}
         	if(voice_speed=='slow'){
         		 total_time_sec	=	Math.round(total_words*.4278);
         	}
         	var time_string		=	total_time_sec;
         	var     b              =  " seconds";
         	document.getElementById("test").innerHTML = "<p><strong>"+ time_string +"</strong>"+ b + " FOR THIS <strong>" + total_words + "</strong> WORDS OF SCRIPT</p>";
         	 
         	if(total_time_sec>60 && total_time_sec<3600){
         		total_time_min		=	Math.floor(total_time_sec/60);
         		total_time_sec		=	total_time_sec%60;
         		var time_string	=	total_time_min;
         		var b              =	" minutes and ";
         		var c              = 	total_time_sec;
         		var d				=" seconds";
         		document.getElementById("test").innerHTML = "<p><strong>"+ time_string +"</strong>"+ b + " <strong>"+ c +"</strong>"+ d + " FOR THIS <strong>" + total_words + "</strong> WORDS OF SCRIPT</p>";
         	}
         	if(total_time_sec>=3600){
         		 total_time_hour	=	Math.floor(total_time_sec/3600);
         		 total_time_sec	=	total_time_sec%3600;
         		 total_time_min	=	Math.floor(total_time_sec/60);
         		 total_time_sec	=	total_time_sec%60;
         		 
         		 var time_string		=	total_time_hour;
         		 var b = " hour(s), ";
         		 var c  = total_time_min;
         		 var d = "minutes and "
         		 var e = total_time_sec;
         		 var f = " seconds";
         		 document.getElementById("test").innerHTML = "<p><strong>"+ time_string +"</strong>"+ b + " <strong>"+ c +"</strong>"+ d + " <strong>"+ e +"</strong>"+ f + " FOR THIS <strong>" + total_words + "</strong> WORDS OF SCRIPT</p>";
         	}         	
            $('html,body').animate({
                 scrollTop: $(".estimate-clock").offset().top}, 'slow');
            }
      </script>
      <script language="javascript">
         $('ul.nave li.dropdown').hover(function() {
           $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
         }, function() {
           $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
         });
      </script>
	  <script language="javascript">
         function checkOther(){
			 var state   			=	trim(document.getElementById("voice_speed").value);
			 if(state=='OTHERS'){
				 document.getElementById("stateOther").style.display='';
				 document.getElementById("stateOther1").style.display='';
				 }else{
				 document.getElementById("stateOther").style.display='none';
				 document.getElementById("stateOther1").style.display='none';
			 }
         }
         function toggleDiv(){
         	if(document.getElementById("inlineRadio1").checked){
         		document.getElementById("script_count_div").style.display='none';
         		document.getElementById("script_div").style.display='';
         	}
         	if(document.getElementById("inlineRadio2").checked){
         		document.getElementById("script_count_div").style.display='';
         		document.getElementById("script_div").style.display='none';
         		
         	}
         }
      </script>