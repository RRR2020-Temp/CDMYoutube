<?php




if (isset($_POST['submit'])) {
	
	$name = $_POST['Name'];
	$mailFrom = $_POST['Email'];
	$message = $_POST['Message'];
	
	$mailTo = "rjelmencias2018@outlook.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an email from ".$name.".\n\n".$message;
	
	mail($mailTo, $txt, $headers);
	header ("Location: contact.html?mailsend");
	
}