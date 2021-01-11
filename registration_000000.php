<?php
session_start();
if (!isset($_SESSION['num1']) && !isset($_SESSION['num2'])) {
$_SESSION['num1'] = rand(1,5);
$_SESSION['num2'] = rand(1,5);
}
?>



<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- CHANGE TITLE AND DATE -->
    <title>Webinar Registration Form -- Webinar Title -- 00/00/00</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CHANGE CSS FILENAME -->
	<link rel="stylesheet" href="https://webinar-portal.net/webinars/templates/registration_style.css">
	
	
<!-- CHANGE FACEBOOK META DATA -->
	<meta property="og:url"           content="https://webinar-portal.net/webinars/templates/registration_000000.php" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="Free Organization Webinar -- Webinar Title -- Month 00" />
	<meta property="og:description"   content="Register for this free webinar on Month 00 and learn about..." />


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<script type="text/javascript">
	function popup(url){
	openpopup = window.open(url, "openpopup", "location=no,width=500,height=600"); 
	}
	</script>
	
	
<!-- FOR ANY GOOGLE FONTS THAT MAY BE NEEDED -->
	<link href='https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;200;300;400;500;600;700;800;900&family=FONT:wght@100;200;300;400;500;600;700;800;900' rel='stylesheet' type='text/css'>
	
	
	
<link rel="apple-touch-icon" sizes="57x57" href="https://webinar-portal.net/misc/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://webinar-portal.net/misc/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://webinar-portal.net/misc/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://webinar-portal.net/misc/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://webinar-portal.net/misc/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://webinar-portal.net/misc/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://webinar-portal.net/misc/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://webinar-portal.net/misc/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://webinar-portal.net/misc/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="https://webinar-portal.net/misc/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://webinar-portal.net/misc/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://webinar-portal.net/misc/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://webinar-portal.net/misc/icons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="https://webinar-portal.net/misc/icons/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">



</head>


<!-- CHANGE VALUES FOR CONTACT ADDRESS -->
<script>
var first = "questions";
var last = "webinar-portal.net";
var title = "WEBINAR TITLE (ABC)";
var date = "00-00-00";
</script>


<script>
function chgAction(){
    $('#form1').attr({'action':$('option:selected').attr('data-action')});
    $('#form1').submit();
}
</script>



<style type="text/css">

/* --- error css --- */
input[type="text"].error, textarea.error, select.error {
border:1px solid red;
box-shadow:0 0 4px red; }

input[type="radio"].error {
width:12px;
height:12px;
box-shadow: 0 0 4px red; 
border-radius: 1000px;
-webkit-appearance: inherit;
border:1px solid red;
position:relative;
box-sizing:border-box; }


label.error {
display:none !important;
}

</style>

</head>
<body>


<div class="socialfloat">
	
<!-- CHANGE TWITTER MESSAGE AND URL --> 
    <a class="fbtn share twitter" title="Twitter" href="javascript:popup('https://twitter.com/intent/tweet?text=Free Organization Webinar -- Webinar Title -- Month 00&url=https://bit.ly/XXXXXX')"><i class="fa fa-twitter fa-fw"></i></a>

<!-- CHANGE FACEBOOK URL --> 	
    <a class="fbtn share facebook" title="Facebook" href="javascript:popup('https://www.facebook.com/sharer/sharer.php?u=https://bit.ly/XXXXXX')"><i class="fa fa-facebook fa-fw"></i></a>

<!-- CHANGE LINKEDIN URL --> 
    <a class="fbtn share linkedin" title="LinkedIn" href="javascript:popup('https://www.linkedin.com/shareArticle?mini=true&url=https://bit.ly/XXXXXX')"><i class="fa fa-linkedin fa-fw"></i></a>
 
<!-- CHANGE EMAIL SUBJECT, MESSAGE, AND URL --> 
    <a class="fbtn share email" title="E-mail" href="mailto:?subject=Free Organization Webinar -- Webinar Title -- Month 00&body=Register for this free webinar on Month 00 and learn about... https://bit.ly/XXXXXX"> <i class="fa fa-envelope fa-fw"></i></a>
   
	</div>
	
	<body>
	<div class="top">
	<br><br><br>
	</div>
	
    
	
<!-- CHANGE LOGO -->
	<div class="main-content">
	<div class="logo">
			<a href="https://www.logotypemaker.com" target="_blank"><img src="https://webinar-portal.net/webinars/templates/images/logo_organization.png" style="max-width: 100%" height="auto"></a> 
	</div>
	<br><br>
	
	
	
<!--  FOR LOGO IMAGE MAP - CREATE HTML AT https://www.image-map.net/ AND PASTE IN COORDS BELOW 
	
	<div class="main-content-logo">
	<div class="logo">
	<img src="https://webinar-portal.net/webinars/templates/images/logo_organization_organization.png" usemap="#Map" style="max-width: 100%" height="auto" />
<map name="Map" id="Map">
    <area onclick="blur()" href="https://www.logotypemaker.com" target="_blank" shape="rect" coords="3,3,239,88" border="0"/>
    <area href="https://www.logotypemaker.com" target="_blank" shape="rect" coords="246,6,476,91" />
</map>                           
    </div>
	</div>
	<div class="main-content"> -->
	
	
<!--  CHANGE LOGO IMAGE MAP TO REGULAR LOGO WITHOUT LINKS 
	<div class="main-content-logo-mobile">
	<div class="logo">
	<img src="https://webinar-portal.net/webinars/templates/images/logo_organization_organization.png" style="max-width: 100%" height="auto"></a>       
    </div>
	</div> 
	<br> -->
			
			
		

	
			
<!--  CHANGE BANNER - BANNER SHOULD BE 960 WIDE AND AT LEAST 200 HIGH 
	<div class="main-content-banner">
	<div class="banner">
			<a href="https://www.webinar-portal.net" target="_blank"><img src="https://webinar-portal.net/webinars/templates/images/banner_organization_000000.png" style="max-width: 100%" height="auto"></a>         
    </div>
	</div>	
	<div class="main-content"> -->

	
<!--  CHANGE BANNER TO LOGO FOR MOBILE 
	<div class="main-content-banner-mobile">
	<div class="logo">
			<a href="https://www.logotypemaker.com" target="_blank"><img src="https://webinar-portal.net/webinars/templates/images/logo_organization.png" style="max-width: 100%" height="auto"></a>
    </div>
	</div>	
	<br> -->
	
	
	
	



	
	

			
   
    
   
  
  <div class="columns-container">

	  	<div class="left-column">
		
		
<!-- CHANGE WEBINAR DETAILS -->
				<div class="padding"></div>
				<h2>Webinar Title</h2>
				<p><b>Day, Month 00, 00:00xx ET</b></p>
				<p><b>00-Minute Webinar with Q&A</b></p>
				<br>

<!--  <p><i>This webinar is limited to the first 1,000 attendees. If you register for the webinar but can't attend the live presentation on Month 00, you'll receive an e-mail after the webinar with a link to an archived recording of the event.</i></p>  
  	
		
<!-- CHANGE HEADSHOT IMAGE -->
				
				<img class="headshot" src="https://webinar-portal.net/webinars/templates/images/headshot_lastname.png" style="max-width: 100%" height="auto"> 


<!-- CHANGE WEBINAR COPY -->				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus lobortis lobortis. Aliquam malesuada tempus dolor nec blandit. Suspendisse et sagittis nunc. Sed aliquet quis est eu ornare. Etiam nec congue nisl, eu malesuada tortor. Praesent dapibus metus eget ante posuere feugiat. Proin fermentum tortor arcu, egestas eleifend est aliquam a. Proin pulvinar suscipit porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				
				<!-- CHANGE HEADSHOT IMAGE FOR MOBILE -->
				<p style="text-align:center;"><img class="headshot-mobile" src="https://webinar-portal.net/webinars/templates/images/headshot_lastname.png" style="max-width: 100%" height="auto"></p> 
				
				<!-- CENTERED IMAGE 
				<p style="text-align:center;"><img class="headshot-center" src="https://webinar-portal.net/webinars/templates/images/image.png" style="max-width: 100%" height="auto"></p> -->
				
				<p>Proin fermentum tortor arcu, egestas eleifend est aliquam a. Aliquam malesuada tempus dolor nec blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus lobortis lobortis. Praesent dapibus metus eget ante posuere feugiat. Proin fermentum tortor arcu, egestas eleifend est aliquam.</p>
				
				
				
				<p>By attending this webinar, you'll:</p>
				
<!--USE THIS IF BULLETS APPEAR TO RIGHT OF IMAGE -->
<!--
<ul style="list-style-position: inside; padding-left: 0px">
-->
				
				<ul style="padding-left: 1em">
				
				<li>Vivamus vehicula euismod dui maximus placerat</li>
				
				<li>Pellentesque eget elementum neque, ut sollicitudin purus</li>
				
				<li>Quisque condimentum luctus lacus sed aliquet</li>
				
				<li>Mauris mollis ex tristique, posuere purus vitae</li>
				
				</ul>
				
				
				
				
				

				
				
<!-- USE THIS FOR PRESENTERS WITH BIOS -->
				<br><br>
				<h2>Presenters</h2>
				<br> 
				
<!-- CHANGE HEADSHOT IMAGE FOR DESKTOP -->
				<img class="headshot" src="https://webinar-portal.net/webinars/templates/images/headshot_lastname.png" style="max-width: 100%" height="auto">
				
				<p><b>First Last<br>Title<br>Organization</b><br> 
				
<!-- CHANGE HEADSHOT IMAGE FOR MOBILE -->
				<p style="text-align:center;"><img class="headshot-mobile" src="https://webinar-portal.net/webinars/templates/images/headshot_lastname.png" style="max-width: 100%" height="auto"></p>
				
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus lobortis lobortis. Aliquam malesuada tempus dolor nec blandit. Suspendisse et sagittis nunc. Sed aliquet quis est eu ornare. Etiam nec congue nisl, eu malesuada tortor. Praesent dapibus metus eget ante posuere feugiat.</p> 
				

				
				
				
				
				
<!-- USE THIS FOR PRESENTERS WITHOUT BIOS
				<br><br>
				<h2>Presenters</h2>
				<br>
			
				<div class="row">
				<div class="column"> -->

<!-- CHANGE HEADSHOT IMAGE FOR DESKTOP
				<img class="headshot-columns" src="https://webinar-portal.net/webinars/templates/images/headshot_lastname.png" style="max-width: 100%" height="auto">
				<p><b>First Last<br>Title<br>Organization</b>
				</div>
				
				<div class="column">
				<img class="headshot-columns" src="https://webinar-portal.net/webinars/templates/images/headshot_lastname.png" style="max-width: 100%" height="auto">
				<p><b>First Last<br>Title<br>Organization</b>
				</div>
								
				</div> -->
				

				
			
				
				<br><br>
				<p><b>Questions about this webinar?</b> <br><script type="text/javascript">document.write('<a href="mailto:'+first + '@' + last + '?subject=Webinar Question -- ' + title + ' -- ' +date+'">'+first + '@' + last+'<\/a>');</script></p>
				<br><br><br>
	  	</div>
		
		
		
		
		
           <div class="right-column">
           
               
<!-- CHANGE MAILER FILENAME -->
					<form  action="https://webinar-portal.net/webinars/templates/registration_mailer_000000_zoom.php" method="post" autocomplete="off">
					
<!-- IF USING DROP-DOWN MENU TO TRIGGER DIFFERENT MAILER FILES -->				
<!--
<form  id="form1" name="form1" action="/" method="post" autocomplete="off" >
-->
              
					
						
					<div class="form-row">
					
					<h2>Register Now</h2>
					<br>
				
					<label for="xfirstx">
                    <span>First Name:</span>
                    <input type="text" id="xfirstx"  name="xfirstx" autocomplete="off" list="autocompleteOff">
					</label>
					</div>
			
					<div class="form-row">
					<label for="xlastx">
                    <span>Last Name:</span>
                    <input type="text" id="xlastx"  name="xlastx" autocomplete="off" list="autocompleteOff">
					</label>
					</div>
					
					<div class="form-row">
					<label for="xtitlex">
                    <span>Job Title:</span>
                    <input type="text" id="xtitlex"  name="xtitlex" autocomplete="off" list="autocompleteOff">
					</label>
					</div>
					
					<div class="form-row">
					<label for="xorganizationx">
                    <span>Organization:</span>
                    <input type="text" id="xorganizationx"  name="xorganizationx" autocomplete="off" list="autocompleteOff">
					</label>
					</div>
					
					<div class="form-row">
					<label for="xcityx">
                    <span>City:</span>
                    <input type="text" id="xcityx"  name="xcityx" autocomplete="off" list="autocompleteOff">
					</label>
					</div>
					
					<div class="form-row">
					<label for="xstatex">
                    <span>State/Province:</span>
                    <input type="text" id="xstatex"  name="xstatex" autocomplete="off" list="autocompleteOff">
					</label>
					</div>
					
					<div class="form-row">
					<label for="xcountryx">
                    <span>Country:</span>
                    <input type="text" id="xcountryx"  name="xcountryx" autocomplete="off" list="autocompleteOff">
					</label>
					</div>
					
					<div class="form-row">
					<label for="xemailx">
                    <span>E-mail:</span>
                    <input type="text" id="xemailx"  name="xemailx" autocomplete="off" list="autocompleteOff">
					</label>
					</div>

<!-- TEXT FIELD	-->		
<!--
					<div class="form-row">
					<label for="xtextx">
                    <span>Text:</span>
                    <textarea id="xtextx" name="xtextx" rows="5"></textarea>
					</label>
					</div>
-->

<!-- DROPDOWN MENU -->				
<!-- 
					<div class="form-row">
					<label for="xdropdownx">
					<span>Which of the following:</span>
					<select id="xdropdownx" name="xdropdownx"  >
					<option label="" </option>
					<option value="Option 1">Option 1</option>
					<option value="Option 2">Option 2</option>
					<option value="Option 3">Option 3</option>
					</select>
					</label>
					</div> 
-->
					
					
<!-- IF USING DROP-DOWN MENU TO TRIGGER DIFFERENT MAILER FILES -->
<!--
					<div class="form-row">
					<label for="xdropdownx">
					<span>Which of the following:</span>
					<select id="xdropdownx" name="xdropdownx" onChange="javascript:chgAction()"  >
					<option label="" </option>
					<option data-action="https://webinar-portal.net/webinars/templates/registration_mailer_000000_webex.php" value="Option 1">Option 1</option>
					<option data-action="https://webinar-portal.net/webinars/templates/registration_mailer_000001_webex.php" value="Option 2">Option 2</option>
					<option data-action="https://webinar-portal.net/webinars/templates/registration_mailer_000002_webex.php" value="Option 3">Option 3</option>
					</select>
					</label>
					</div> 
-->
					
<!-- RADIO BUTTONS -->				
<!--
					<div class="form-row-radio">
					<label for="xradiox">
					<span>Which of the following:</span><br>
					<input type="radio" name="xradiox" id="xradiox" value="Option 1"><span>Option 1</span>
					<input type="radio" name="xradiox" id="xradiox" value="Option 2"><span>Option 2</span>
					</label>
					</div>
-->
					
					
					
				
<!-- CHALLENGE QUESTION	-->													
<!--
					<div class="form-row">
					<label for="xcaptchax">
                    <span>What is <?php echo $_SESSION['num1']; ?> + <?php echo $_SESSION['num2']; ?>?</span>
                    <input type="text" id="xcaptchax"  name="xcaptchax" autocomplete="off" list="autocompleteOff">
					</label>
					</div>
-->
						
						
							
                        <div class="form-row">
                            <button type="submit" name="submit" id="submit"><b>REGISTER NOW!</b></button>
                        </div>
						
						</form>
						
						
						
						
						<p class="small">By registering, you agree to receive e-mail reminders and other messages about this webinar.</p>
                
   </p>
   </div>

  	</div>
	
	
<!-- CHANGE FOOTER LOGO AND TEXT -->
    <div class="main-content-footer">
		<a href="https://www.logotypemaker.com" target="_blank"><img src="https://webinar-portal.net/webinars/templates/images/logo_organization.png" style="max-width: 100%" height="auto"></a> 
		<!-- <p>Footer Text</p> -->
		
		


<!--  FOR FOOTER LOGO IMAGE MAP - CREATE HTML AT https://www.image-map.net/ AND PASTE IN COORDS BELOW 
	<div class="main-content-footer-map">
	<img src="https://webinar-portal.net/webinars/templates/images/logo_organization_organization.png" usemap="#Map" style="max-width: 100%" height="auto" />
<map name="Map" id="Map">
    <area onclick="blur()" href="https://www.logotypemaker.com" target="_blank" shape="rect" coords="3,3,239,88" border="0"/>
    <area href="https://www.logotypemaker.com" target="_blank" shape="rect" coords="246,6,476,91" />
</map>                           
    </div>
	</div> 
	<div class="main-content"> -->
	<!-- FOOTER TEXT IS NOT COMPATIBLE WITH IMAGE MAP -->

	
	
<!--  CHANGE LOGO IMAGE MAP TO REGULAR LOGO WITHOUT LINKS 
	<div class="main-content-footer-mobile">
	<img src="https://webinar-portal.net/webinars/templates/images/logo_organization_organization.png" style="max-width: 100%" height="auto"></a>       
    </div>
	</div> --> 
	<!-- FOOTER TEXT IS NOT COMPATIBLE WITH IMAGE MAP -->
	
	
	
	
	
	
	


	
		
		
		
		
	




			
            </div>
	</div>

  	
  	<div class="bottom">
  	<p>&nbsp;</p>
	</div>
	
	</div>
	
	


<script src="https://webinar-portal.net/webinars/templates/js/jQuery1.8.3.js"></script>
<script src="https://webinar-portal.net/webinars/templates/js/jQuery.validation.1.10.0.js"></script>
<script type="text/javascript">



<!-- CHANGE FORM FIELDS THAT NEED VALIDATION -->
$(document).ready(function() {
  $.validator.addMethod("nourl", function(value, element) {
    return !/http\:\/\/|https\:\/\/|www\.|link\=|url\=/.test(value);
  }, "No URL's");

  $("form").validate({
    rules: {
      xfirstx: {
        required: true,
		nourl: true
      },
	  xlastx: {
        required: true,
		nourl: true
      },
	  xtitlex: {
		nourl: true
      },
	  xorganizationx: {
		nourl: true
      },
	  xcityx: {
        required: true,
		nourl: true
      },
	  xstatex: {
        required: true,
		nourl: true
      },
	  xcountryx: {
        required: true,
		nourl: true
      },
      xemailx: {
        required: true,
        email: true,
		nourl: true
      },
	  
	  
	  
      xcaptchax: {
        required: true,
        remote: {
          url: "captcha.php",
          type: "post"
        }
      }
    },
    messages: {
	
		}
  });
});
</script>


</body></html>

<!-- <a href="https://webinar-portal.net/webinars/templates/registration_000000.php" target="_blank">TEXT</a> -->

<!-- &mdash; -->

<!-- <span style="color:#000000"> -->
		
