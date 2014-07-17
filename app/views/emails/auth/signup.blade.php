<?php
	$verifyLink = "http://" . $_SERVER['SERVER_NAME'] . "/signup/verify?id=$id&signupToken=$signupToken";
?>

Dear {{ $alias }},

Thank you for signing up to ratneck.com

To complete your registration, please click on the following link:

<br />

<a href="<?php echo $verifyLink; ?>" target="_blank"><?php echo $verifyLink ?></a>
