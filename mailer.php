<?php
// =======================================================================
// NOTE: In the 3 places below that are wrapped in comments exactly like
// the ones wrapping this sentence INSERT YOUR specific information
// Author: Eric Watson @ https://www.websitecodetutorials.com
// =======================================================================

// Prevent browser cache
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 

// Remove headers
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

// Separate headers by either \r\n or \n to ensure email sends properly
$uself = 0;
$headersep = (!isset( $uself ) || ($uself == 0)) ? "\r\n" : "\n" ;

   
// =======================================================================
// Insert your information and correct link paths here
$mailto = 'dave@clarkwebinar.com' ;
$from = "$subject" ;
$formurl = "contact.php" ;
$errorurl = "error.php" ;
$thankyouurl = "thanks.php" ;
// =======================================================================

// =======================================================================
// Add or remove your specific Form variables here
$name = remove_headers($_POST['name']);
$company = remove_headers($_POST['company']);
$email = remove_headers($_POST['email']);
$phone = remove_headers($_POST['phone']);
$spam = remove_headers($_POST['captcha']);
$subject = remove_headers($_POST['subject']);
$comments = remove_headers($_POST['comments']);
$contact = remove_headers($_POST['contact']);
$http_referrer = getenv( "HTTP_REFERER" );
// =======================================================================

// =======================================================================
// Un-comment if you want to add/clean PHONE to form
// if (preg_match("{[A-Za-z]}", $phone))
// {
//   header( "Location: $errorurl" );
//	exit ;
// }
// =======================================================================

// If name or email contain carriage returns or new line characters stop execution and direct to errorurl
if ( ereg( "[\r\n]", $name ) || ereg( "[\r\n]", $company ) || ereg( "[\r\n]", $email ) || ereg( "[\r\n]", $phone ) || ereg( "[\r\n]", $subject )  ) {
	header( "Location: $errorurl" );
	exit ;
}

// Clean Email - if empty ignore - if value in form input clean
if (!empty($email) && !preg_match("/^[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i",$email)) { 
    header( "Location: $errorurl" );
    exit ;
}  

// Clean Comments
if (get_magic_quotes_gpc()) {
	$comments = stripslashes( $comments );
}

// Clean Comments - max 9999 characters
if (strlen($comments) > 9999) {
$comments=substr($comments, 0, 9999).'...';
}

// Clean Comments - no URL's
if (preg_match("{link=}", $comments) || preg_match("{url=}", $comments) || preg_match("{https://}", $comments))
{
    header( "Location: $errorurl" );
	exit ;
}

// Make Name, Email, and Comments required before form submission
if (empty($name) || empty($company) || empty($email) || empty($phone) || empty($subject) || empty($comments)) {
	header( "Location: $errorurl" );
	exit ;
}

// Clean Captcha: random numbers 1 through 5 (1+3, 4+2, 5+3, etc)
session_start();
if (!isset($_SESSION['num1']) || !isset($_SESSION['num2'])) {
	// no known session. cannot validate captcha
    header( "Location: $errorurl" );
    exit;
}
$sum = (int)$_SESSION['num1'] + (int)$_SESSION['num2'];
if (isset($_POST['captcha']) && (int)$_POST['captcha'] !== $sum) {
	// captcha given but incorrect
    header( "Location: $errorurl" );
    exit;
} else {
	// captcha correct, show a new one next time
	unset($_SESSION['num1'], $_SESSION['num2']);
}

// Send Message
$message =
// =======================================================================
// Add or remove your specific Form variables here
	"Name: $name\n\n" .
	"Company: $company\n\n" .
	"E-mail: $email\n\n" .
	"Phone: $phone\n\n" .
	"Subject: $subject\n\n" .
	"Comments: $comments\n\n" .
	"Contact: $contact\n\n" .
// =======================================================================
	"Captcha: $spam\n\n" .
	"\n\n------------------------------------------------------------\n" ;

mail($mailto, $subject, $message,
	"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep );
header( "Location: $thankyouurl" );






