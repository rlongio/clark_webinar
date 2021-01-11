<?php

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 

function remove_headers($string) { 
  $headers = array(
    "/to\:/i",
    "/from\:/i",
    "/bcc\:/i",
    "/cc\:/i",
    "/Content\-Transfer\-Encoding\:/i",
    "/Content\-Type\:/i",
    "/Mime\-Version\:/i" 
  ); 
  if (preg_replace($headers, '', $string) == $string) {
    return $string;
  } else {
    die('');
  }
}


$uself = 0;
$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;

   
// FORM SUBMISSION EMAIL ADDRESS
$mailto = 'xxx.webinars@gmail.com' ;

// CHANGE EMAIL SUBJECT
$from = "00-00-00" ;



$errorurl = "https://webinar-portal.net/webinars/templates/error.php" ;

// FORM SUBMISSION THANK YOU PAGE REDIRECT */
// WEBINAR CLOSED: https://webinar-portal.net/webinars/templates/registration_closed.php */
// WEBINAR OPEN: https://webinar-portal.net/webinars/templates/registration_thanks_000000.php */
$thankyouurl = "https://webinar-portal.net/webinars/templates/registration_thanks_000000_webex.php" ;


// CHANGE FORM FIELDS
$xfirstx = remove_headers($_POST['xfirstx']);
$xlastx = remove_headers($_POST['xlastx']);
$xtitlex = remove_headers($_POST['xtitlex']);
$xorganizationx = remove_headers($_POST['xorganizationx']);
$xcityx = remove_headers($_POST['xcityx']);
$xstatex = remove_headers($_POST['xstatex']);
$xcountryx = remove_headers($_POST['xcountryx']);
$xemailx = remove_headers($_POST['xemailx']);


$spam = remove_headers($_POST['xcaptchax']);
$http_referrer = getenv( "HTTP_REFERER" );




// MAKE SURE ALL SINGLE-LINE TEXT FIELDS ARE LISTED
if ( ereg( "[\r\n]", $xfirstx ) 
|| ereg( "[\r\n]", $xlastx ) 
|| ereg( "[\r\n]", $xtitlex ) 
|| ereg( "[\r\n]", $xorganizationx ) 
|| ereg( "[\r\n]", $xcityx ) 
|| ereg( "[\r\n]", $xstatex ) 
|| ereg( "[\r\n]", $xcountryx ) 
|| ereg( "[\r\n]", $xemailx ) 
 ) {
	header( "Location: $errorurl" );
	exit ;
}


if (!empty($xemailx) && !preg_match("/^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,9}$/i",$xemailx)) { 
    header( "Location: $errorurl" );
    exit ;
}  

// MAKE SURE ALL MUTLI-LINE TEXT FIELDS ARE LISTED
if (get_magic_quotes_gpc()) {
$xtextx = stripslashes( $xtextx );
}

// MAKE SURE ALL MUTLI-LINE TEXT FIELDS ARE LISTED
if (strlen($xtextx) > 9999) {
$xtextx=substr($xtextx, 0, 9999).'...';
}

// MAKE SURE ALL MUTLI-LINE TEXT FIELDS ARE LISTED
if (preg_match("{link=}", $xtextx) 
|| preg_match("{url=}", $xtextx) 
|| preg_match("{https://}", $xtextx))
{
    header( "Location: $errorurl" );
	exit ;
}

// MAKE SURE ALL REQUIRED FIELDS ARE LISTED
if (empty($xfirstx) 
|| empty($xlastx) 
|| empty($xcityx) 
|| empty($xstatex) 
|| empty($xcountryx) 
|| empty($xemailx)) 
{
	header( "Location: $errorurl" );
	exit ;
}

session_set_cookie_params(["SameSite" => "lax"]); //none, lax, strict
session_set_cookie_params(["Secure" => "false"]); //false, true
session_set_cookie_params(["HttpOnly" => "false"]); //false, true
session_start();
if (!isset($_SESSION['num1']) || !isset($_SESSION['num2'])) {
    header( "Location: $errorurl" );
    exit;
}
$sum = (int)$_SESSION['num1'] + (int)$_SESSION['num2'];
if (isset($_POST['xcaptchax']) && (int)$_POST['xcaptchax'] !== $sum) {
    header( "Location: $errorurl" );
    exit;
} else {
	unset($_SESSION['num1'], $_SESSION['num2']);
}


$message =

// CHANGE FORM FIELDS
	"First: $xfirstx\n\n" .
	"Last: $xlastx\n\n" .
	"Title: $xtitlex\n\n" .
	"Organization: $xorganizationx\n\n" .
	"City: $xcityx\n\n" .
	"State: $xstatex\n\n" .
	"Country: $xcountryx\n\n" .
	"E-mail: $xemailx\n\n" .
	
// =======================================================================
	
	"\n\n------------------------------------------------------------\n" ;

	



mail($mailto, $from, $message,
	"From: <$mailto>" . $headersep . "Reply-To: <$mailto>" . $headersep );
	
	
	
// AUTORESPONDER SENDER NAME AND EMAIL 
$myname = "Organization";
$mymail = "noreply@webinar-portal.net";

// AUTORESPONDER SUBJECT 
$respond_subject = "Webinar Registration Confirmation -- Webinar Title -- 00/00/00";



// FOR BULLET POINTS
// <ul>
// <li>point 1<br><br>
// <li>point 2<br><br>
// <li>point 3</li>
// </ul>

$respond_message = "<a href='https://webinar-engine.net/' target='_blank'><img src='https://webinar-engine.net/images/logo_organization.png' style='max-width: 100%' height='auto'></a><br><br><br>

Thank you for registering for the webinar. Please see below for important information for attending. We recommend that you join the webinar a few minutes ahead of the start time.<br><br>

For the best webinar experience, we recommend using a laptop or desktop computer and <u>not</u> using the \"Join From Your Browser\" option when connecting to the webinar. To test your computer ahead of time, <a href='https://zoom.us/test'>join a test meeting</a>.<br><br>

We look forward to seeing you at the webinar!<br><br>

------------------------------------<br><br>


<b>Date:</b> Day, Month 00, 0000<br>
<b>Time:</b> 00:00xx - 00:00xx ET <a href='https://bit.ly/XXXXXX'>change time zone</a><br><br>

<b>Webinar URL:</b> <a href='https://zoom.us'>https://zoom.us</a><br>
<b>Webinar ID (if needed):</b> 000-0000-0000<br><br>

After you've joined the webinar, audio will be available directly through your computer when the webinar starts. If you would like to access audio over the telephone instead, please mute your computer speakers and use the following:<br><br>

							
<b>Telephone Conferencing:</b> +1 (000) 000-0000<br>
<b>Access Code:</b> 000-0000-0000#<br> 
<a href='https://zoom.us/zoomconference'>Global Call-In Numbers</a><br><br>

------------------------------------<br><br>


<b>This is your personal invitation; it should not be forwarded.</b> If you have colleagues that would like to attend the webinar, please ask them to <a href='https://bit.ly/2FhAB3p'>register here</a>.<br><br>


<b>Questions about this webinar?</b> <a href='mailto:abc@example.com?subject=Webinar Question -- WEBINAR TITLE (ABC) -- 00-00-00'>abc@example.com</a><br><br>

<b>Add this webinar to your calendar:</b><br>
<a href='https://www.addevent.com/event/iI3109526+outlook'>Outlook</a> | 
<a href='https://www.addevent.com/event/iI3109526+google'>Google</a> | 
<a href='https://www.addevent.com/event/iI3109526+yahoo'>Yahoo!</a> | 
<a href='https://www.addevent.com/event/iI3109526+outlookcom'>Outlook.com</a> |
<a href='https://www.addevent.com/event/iI3109526+apple'>Apple</a>

";

$headers = "Content-Type: text/html; charset=utf-8\nFrom: $myname <$mymail>\nReply-To: <$mymail>\nReturn-Path: <$mymail>\nX-Mailer: PHP";

// THIS IS THE AUTORESPONDER - REMOVE THIS TO NOT SEND AN EMAIL 
  mail($xemailx, $respond_subject, $respond_message, $headers);

header( "Location: $thankyouurl" );


