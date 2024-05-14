<?php
// Extract the email address, first name, and email content from the POST request
$to = $_POST['mail'];
$subject = "Email sent from BuildMyCustomPC and Their name is " . $_POST['firstname'] . "!";
$txt = $_POST['subject'];

// Set the headers for the email, including the sender's email address and a CC address
$headers = "From:" . $_POST['mail'] . "\r\n" . "CC: neversok@kean.edu, hurj@kean.edu, reidsc@kean.edu, spricigz@kean.edu ";

// Send the email using the mail function
if(mail($to, $subject, $txt, $headers)) {
    echo "Your email was sent successfully.";
} else {
    echo "There was an error sending your email.";
}
?>
