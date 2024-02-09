<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$description = $_POST["description"];

		$to = "17EastM@gordons.school";
		$subject = "New booking Inquiry";
		$message = "Name: $name\n";
		$message = "Email: $email\n";
		$message = "Phone: $phone\n";
		$message = "Description: $description\n";

		$headers = "From $email\r\n";
		$headers = "Reply-To $email\r\n";

		if (mail($to, $subject, $message, $headers)) {
			echo "<h2>success</h2>";
		} else {
			echo "<h2>error</h2>";
		}
}
?>