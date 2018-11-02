<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_number = $_POST['mobile'];
$field_message = $_POST['message'];

$mail_to = 'hayat@specialiseditsquad.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'mobile: '.$field_number."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

if(!empty($mail_to)) {
$mail_status = mail($mail_to,$subject, $body_message, $headers);
}

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact-us';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to info@itsquad.in');
		//window.location = 'index';
	</script>
<?php
}
}
else{?>
	<script language="javascript" type="text/javascript">
	alert('WOW!! You are a magician!');
		window.location = 'contact-us';
	</script>
<?php	
}
?>