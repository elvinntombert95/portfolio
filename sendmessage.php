<html>
<head>
	<title></title>
	<link rel="shortcut icon" href="nav-icon.jpg">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/reset.css">		
	<style type="text/css">
		body {
			background:url(./img/background-image/sentemail.jpg) no-repeat fixed;
			background-size: cover;
			width:100%;
			height: 100vh;
			font-family: 'code_pro_demoregular';
		}
		@font-face {
		    font-family: 'code_pro_demoregular';
		    src: url(./font/codepro/Code_Pro_Demo-webfont.woff);
		}
		h1,h2,p {
			text-align: center;
		}
		h1 {
			font-size: 5em;
			margin-top: 150px;
			margin-bottom: 80px;
		}
		h2 {
			font-size: 25px;
    		font-weight: lighter;
		}
		p {
    		margin-top: 80px;
		}
		a {
			color: black;
			text-decoration: none;
		}
		@media screen and (max-width: 414px) {
			h1 {
				font-size: 4em;
			}
			h2 {

			}
		}
		@media screen and (max-width: 375px) {
			h1 {
				font-size: 3em;
			}
			h2 {
    			font-size: 16px;
			}
		}
		@media screen and (max-width: 320px) {
			h1 {
				font-size: 2em;
			}
		}
		</style>
</head>
<body>
	<h1>Message Sent</h1>
		<h2>Your message was sent succefully</h2>
			<p><a href="english.html">&#8592; Back to the Portfolio</a></p>
</body>
</html>

<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
   
// Create the email and send the message
$to = 'elvinn.tombert@hetic.net'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;
?>