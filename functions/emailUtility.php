<?php
function sendWelcomeEmail($userEmail) {
	// $root = realpath($_SERVER["DOCUMENT_ROOT"]);
	include 'environment.inc.php';
	$date = date ( "mdy" );
	$encrypt = openssl_encrypt ( $userEmail, "aes256", $date, 0, "MWa6PN4H9XkzCQh5" );
	// $url = "riekersolutions.dev.riekerinc.com/accountActivation.php?key=" . rawurlencode ( $encrypt );
	// $url = "localhost/TotalSolutionsPortal/accountActivation.php?key=" . rawurlencode ( $encrypt );
	$url = $envConfiguration ['app_url'] . 'accountActivation.php?key=' . rawurlencode ( $encrypt );
	
	// To send HTML mail, the Content-type header must be set
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: Rieker Support <support@riekerinc.com>' . "\r\n";
	
	$message = '<html><head><title>Welcome to TotalSolutions</title></head><body>
	<div><div style="direction:ltr;font-family:Tahoma;color:#000000;font-size:10pt"><br></div>
	<br><p><div>Thank you for registering a Total Solutions Account.&nbsp;
	please click on Verify buttton to Activate your account.</div><br>
	<div><tr><td>';
	
	$message .= '<a href="' . $url . '" >Click Here to Activate</a>';
	
	$message .= '</td></tr></div></br></body></html>';
	
	return mail ( $userEmail, "Welcome to TotalSolutions", $message, $headers );
}

sendWelcomeEmail ( "xiubin.zheng7@gmail.com" );

// sendVerificationCode("xzheng@riekerinc.com");

?>