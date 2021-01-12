
<?php
$to = "anupmkumar10@gmail.com";
$subject = "test email";
$txt = "Hello world hello b";
$headers = 'from: <support@tripzilaa.com>'."\r\n";
 if(mail($to,$subject,$txt,$headers)){
echo "mail sent";
}
else{
	echo "email failled";
}
?> 