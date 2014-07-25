<?php


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
$mailto = 'info@skyconsultingchicago.com' ;
$from = "Sky Chicago Consulting Formmail" ;
$formurl = "formmail-page.php" ;
$errorurl = "errorpage.php" ;
$thankyouurl = "confirmation-page.php" ;
// =======================================================================

// =======================================================================
// Add or remove your specific Form variables here
$company = remove_headers($_POST['company']);
$contact = remove_headers($_POST['contact']);
$phone = remove_headers($_POST['phone']);
$email = remove_headers($_POST['email']);
$address = remove_headers($_POST['address']);
$city = remove_headers($_POST['city']);
$state = remove_headers($_POST['state']);
$zip = remove_headers($_POST['zip']);
$comment = remove_headers($_POST['message']);
$spam = remove_headers($_POST['message']);
$http_referrer = getenv( "HTTP_REFERER" );
// =======================================================================

// =======================================================================
 if (preg_match("{[A-Za-z]}", $phone))
  header( "Location: $errorurl" );
	exit ;
 }
// =======================================================================

// If name or email contain carriage returns or new line characters stop execution and direct to errorurl
if ( ereg( "[\r\n]", $company ) || ereg( "[\r\n]", $email ) ) {
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
	$comment = stripslashes( $comment );
}

// Clean Comments - max 250 characters
if (strlen($comment) > 250) {
$comment=substr($comment, 0, 250).'...';
}

// Clean Comments - no URL's
if (preg_match("{link=}", $comment) || preg_match("{url=}", $comment) || preg_match("{http://}", $comment))
{
    header( "Location: $errorurl" );
	exit ;
}

// Make Name, Email, and Comments required before form submission
if (empty($company) || empty($contact) || empty($phone))  || empty($email) || empty($address) || empty($city)  || empty($state)  || empty($zip) {
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
	"This message was sent from:\n" .
	"$http_referrer\n\n" .
// =======================================================================
// Add or remove your specific Form variables here
	"Company: $company\n\n" .
	"Contact: $contact\n\n" .
	"Phone: $phone\n\n" .
	"Email: $email\n\n" .
	"Address: $address\n\n" .
	"City: $city\n\n" .
	"State: $state\n\n" .
	"zip: $zip\n\n" .
	"comment: $comment\n\n" .
// =======================================================================
	"Captcha: $captcha\n\n" .
	"\n\n------------------------------------------------------------\n" ;

mail($mailto, $from, $message,
	"From: \"$name\" <$email>" . $headersep . "Reply-To: \"$name\" <$email>" . $headersep );
header( "Location: $thankyouurl" );
exit ;


