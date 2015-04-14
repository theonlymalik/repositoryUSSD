<?php 
// Reads the variables sent via POST from our gateway
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ( $text == "" ) {

	// This is the first request. Note how we start the response with CON
	$response  = "CON What would you like to do? \n";
	$response .= "1. Check My Account Number \n";
	$response .= "2. Check My Balance \n";
    $response .= "3. Check my branch ";
} else if ( $text == "1" ) {

	// Your business logic to determine the account number goes here
	$accountNumber  = "BlindHacker001"; 
	// This is a terminal request. Note how we start the response with END
	$response = "END Your account number is $accountNumber";

} else if ( $text == "2" ) {

	// Your business logic to determine the balance goes here
	$balance  = "KES 1,000";
	// This is a terminal request. Note how we start the response with END
	$response = "END Your balance is $balance";

}
else if ($text =="3")
{
    //your business logic for branch
    $branch = "Strathmore";
    //This is a terminal requestr meaning the USSD session ends header ("HTTP/1.1 301 Moved Permanently"); 
    $response = "END Welcome to your branch @ $branch";
    
}
// Print the response onto the page so that our gateway can read it
header('Content-type: text/plain');
echo $response;

// DONE!!!








?>
<br/>
<p> Hello Chinese dude </p>
<p> Wanna hack this, blind person</p>

