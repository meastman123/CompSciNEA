<form action="" method="post">
<input type="submit" value="Send details to A" />
<input type="hidden" name="button_a" value="1" />
</form>

<?php

if(isset($_POST['button_a']))
{

$to      = '17EastM@gordons.school'; //can receive notification

$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@ourcompany.com' . "\r\n" .
		'Reply-To: webmaster@ourcompany.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo 'Email Sent.';
}

?>

// credit to https://stackoverflow.com/questions/9355751/how-to-send-an-automatic-email-at-a-click-of-a-button