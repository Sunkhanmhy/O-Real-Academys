 <?php
	

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["fullname"]);
	$resident = htmlspecialchars($_POST["resident"]);
  	$email = htmlspecialchars($_POST["email"]);
	$subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);
	
	

    $to = "shurtzpaul@gmail.com"; // Change this to your email
    $headers = "From: $email\r\nReply-To: $email\r\n";
    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again.'); window.location.href='/contact.html';</script>";
    }
} else {
    header("Location: contact.html");
    exit();
}

?>

