<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$conn = mysqli_connect("", "", "", "") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO table (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	
}
require_once "contact.php";
?>