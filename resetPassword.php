<?php
//$email = strip_tags($_POST['Email']);
$to = "anyuhang@gmail.com";
$subject = "Reset your password";
$txt = "newpassword";
$headers = "From: yan@expedia.com" . "\r\n" ;
echo "done";
mail($to,$subject,$txt,$headers);

?> 