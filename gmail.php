<?php
    		
    require_once('phpMailer\PHPMailer-master\class.phpmailer.php');
		
	function sendEmail($fromEmail, $fromName, $subject, $message){
			
	$mailer = new PHPMailer();
			
	$mailer->IsSMTP();
	$mailer->SMTPAuth = TRUE;
	$mailer->Host = 'ssl://smtp.gmail.com:465';
	
	$mailer->Username = "geogumd@gmail.com";
	$mailer->Password = "mps12345";
	
	$mailer->From = $fromEmail;
	$mailer->FromName = $fromName . " (" . $fromEmail . " )";
	$mailer->Subject = $subject;
	$mailer->Body = $message;
	$mailer->AddAddress("dgrolling@gmail.com", "Dave Grolling");
			
	$mailer->isHTML(TRUE);
			
	if(!$mailer->Send()){
				
		$h = "Mailer Error " . $mailer->ErrorInfo;
		$m = "Mailer Error was not sent";
			
		print "<div id='content'>";
		print "<h1>$h</h1>";
		print "<pre>$m</pre>";
		print "</div>";
				
	}else{
		print "<div id='subcontent'>";
		print "<h1>Mail Sent</h1>";
		print "<p>Thank you. Your message is being processed.</p>";
		print "</div>";
		 }
	}
			
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Wildlife Collision</title>
		<link href="layout.css" rel="stylesheet" type="text/css" media="screen"/>
		<link href="content.css" rel="stylesheet" type="text/css" media="screen"/>
		<meta charset="UTF-8"/>
	</head>
	
	<body>
		<div id="container">
			<div id="header">
				<h1>Wildlife Collision Management Program</h1>
			</div>	
						
			<div id="nav">
				<a href="index.html">Intro</a>
				<a href="routes.html">Routes</a>
				<a href="trails.html">Trails</a>
				<a href="winery.html">Winery</a>
				<a href="contact.html">Contact</a>
			</div>
			
			<div id="content">
				<h3>Message Submission Information</h3>
				
				<?php
				$fromEmail = $_POST['email'];
				$fromName = $_POST['senderName'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];
				
				if(!empty($fromEmail) && !empty($message)){
					sendEmail($fromEmail, $fromName, $subject, $message);
					}else{
						print "<h4 style= 'color: red'>Warning!</h4>";
						print "<p>You must specify your email address and message.";
					}
				?>
				
			</div>
			
			<div id="footer">
				<p>&copy; Dave Grolling</p>
			</div>				
		</div>
	</body>
</html>
