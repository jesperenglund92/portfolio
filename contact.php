<?php
if(isset($_POST['submit'])){
    $to = "jesper.englund92@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $name = $_POST['Name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['Message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,"Form Message: I want to do business!",$message,$headers);
    mail($from,"Form Message: I want to do business!",$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you for your message!" . $name;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
