<?php
session_set_cookie_params(["SameSite" => "lax"]); //none, lax, strict
session_set_cookie_params(["Secure" => "false"]); //false, true
session_set_cookie_params(["HttpOnly" => "false"]); //false, true
session_start();
if (!isset($_SESSION['num1']) && !isset($_SESSION['num2'])) {
$_SESSION['num1'] = rand(1,5);
$_SESSION['num2'] = rand(1,5);
}
?>



<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Clark Webinar Consulting">
    <meta name="keywords" content="webinar, webinars, webinar consulting, webinar consulting services, webinar consultant, webinar production, webinar production services, webinar producer, webinar support, webinar support services">

    <title>Clark Webinar Consulting | Contact</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/fontawesome-all.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53028423-1', 'auto');
  ga('send', 'pageview');
</script>



 <script>
var first = "contact";
var last = "clarkwebinar.com";
</script>




<style type="text/css">

/* --- error css --- */
input.error, textarea.error {
border:1px solid red;
box-shadow:0 0 4px red;
}
label.error {
display:none !important;
}

</style>


<!-- mobile homescreen icons -->
<!-- favicon and mobile device icons -->
<link rel="apple-touch-icon" sizes="57x57" href="https://clarkwebinar.com/images/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://clarkwebinar.com/images/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://clarkwebinar.com/images/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://clarkwebinar.com/images/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://clarkwebinar.com/images/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://clarkwebinar.com/images/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://clarkwebinar.com/images/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://clarkwebinar.com/images/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://clarkwebinar.com/images/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://clarkwebinar.com/images/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://clarkwebinar.com/images/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://clarkwebinar.com/images/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://clarkwebinar.com/images/icons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://clarkwebinar.com/images/icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">




</head>
<body>


<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="https://clarkwebinar.com"><img class="logo-custom" src="https://clarkwebinar.com/images/logo_cwc_white.png" alt="Clark Webinar Consulting"/></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
 <br class="visible"> 
                      <li ><a href="https://clarkwebinar.com/index.html">HOME</a></li>
                     <li><a href="https://clarkwebinar.com/about.html">ABOUT</a></li>
                    <li><a href="https://clarkwebinar.com/services.html">SERVICES</a></li>
				
                     <li><a href="https://clarkwebinar.com/contact.php">CONTACT</a></li>
					<li><a href="https://clarkwebinar.wordpress.com/" target="_blank">BLOG</a></li>
                </ul>
            </div>
           
        </div>
</div>
      <!--NAVBAR SECTION END-->

	  
          
<div id="contact-sec"   >
           <div class="overlay">
 <div class="container set-pad">
      <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1  class="header-line" ><br><br>CONTACT US  </h1>
                     <p style="text-align: center">
                     Thank you for your interest in Clark Webinar Consulting. To learn more about how we can help your business or organization, please call +1 (646) 820-1163, e-mail <script type="text/javascript">document.write('<a style="color:#ffffff" href="mailto:'+first + '@' + last+'">'+first + '@' + last+'<\/a>');</script>, or use the contact form below.
                         </p>
                 </div>

				 
				 
				 
             </div>
             <!--/.HEADER LINE END-->
           <div class="row set-row-pad" >
           
               
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <form form id="contact-form" class="email" action="https://clarkwebinar.com/mailer.php" method="post" autocomplete="off">
                        
						
						
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" id="name" class="form-control " name="name" autocomplete="off" list="autocompleteOff"  />
                        </div>
						
						 <div class="form-group">
                         <label for="company">Organization:</label>
						<input type="text" id="company" class="form-control " name="company" autocomplete="off" list="autocompleteOff"  />
                        </div>
						
						<div class="form-group">
                        <label for="email">E-mail:</label>
						<input type="text" id="email" class="form-control " name="email" autocomplete="off" list="autocompleteOff"  />
                        </div>
						
						<div class="form-group">
                        <label for="phone">Phone:</label>
						<input type="text" id="phone" class="form-control " name="phone" autocomplete="off" list="autocompleteOff"  />
                        </div>
						
						<div class="form-group">
						<label for="captcha">What is <?php echo $_SESSION['num1']; ?> + <?php echo $_SESSION['num2']; ?>?</label>
						<input type="text" id="captcha" class="form-control " name="captcha" autocomplete="off" list="autocompleteOff"  >
						</div>
						
						<div class="form-group">
                         <label for="subject">Subject:</label>
						<input type="text" id="subject" class="form-control " name="subject" autocomplete="off" list="autocompleteOff" />
                        </div>
						
						<div class="form-group">
                        <label for="message">Message:</label>
						<textarea name="comments" id="comments" class="form-control" style="min-height: 150px;" autocomplete="off" list="autocompleteOff" ></textarea>
                        </div>
						
						
						<!--
						<div class="form-group">
						<label for="contact">How do you prefer to be contacted?</label><br>
						<input type="radio" name="contact" id="contact" value="phone"   /> Phone
						<input type="radio" name="contact" id="contact" value="email"  /> E-mail
						</div>
						-->
						
							
                        <div class="form-group">
                            <button type="submit" name="submit" id="submit" class="btn btn-info btn-lg"  >SUBMIT</button>
                        </div>
						
						
						</form>
                </div>


                
               </div>
                </div>
          </div> 
       </div>
	   
	   <!-- FEATURES SECTION END-->
    <div id="footer">
          &copy Clark Webinar Consulting LLC | +1 (646) 820-1163 | <script type="text/javascript">document.write('<a style="color:#ffffff" href="mailto:'+first + '@' + last+'">'+first + '@' + last+'<\/a>');</script><br><br>
		  Site Design Template: binarytheme.com
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
		 
		 <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=91565682"></script>


<script src="assets/js/jQuery1.8.3.js"></script>
<script src="assets/js/jQuery.validation.1.10.0.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $.validator.addMethod("nourl", function(value, element) {
    return !/http\:\/\/|www\.|link\=|url\=/.test(value);
  }, "No URL's");

  $("form").validate({
    rules: {
      name: {
        required: true,
		nourl: true
      },
	  company: {
        required: true,
		nourl: true
      },
      email: {
        required: true,
        email: true,
		nourl: true
      },
	  phone: {
        required: true,
		nourl: true
	  },
	  subject: {
        required: true,
		nourl: true
	  },
      comments: {
        required: true,
        nourl: true
      },
      captcha: {
        required: true,
        remote: {
          url: "captcha.php",
          type: "post"
        }
      }
    },
    messages: {
		name: "",
		email: "",
		comments: "",
		captcha: ""
		}
  });
});
</script>

<script type="text/javascript">
_linkedin_data_partner_id = "404938";
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=404938&fmt=gif" />
</noscript>



</body></html>
		
