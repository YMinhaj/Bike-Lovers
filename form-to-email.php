<?php 
if(isset($_POST['submit'])){
    $to = "info@bike-lovers.tk"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Hope you like this and visit this site again and again.. \nThis Website Is Only For Educational Purpose \n This Web Site Is Made BY Yousuf Minhaj & Siyam Raza Student of Sir Syed University Of Engineering & Technology \nhttp://www.ssuet.edu.pk/ \n \n For More Query Mail Us on reply@bike-lovers.tk or Visit \n http://bike-lovers.tk/ \n\  Here is a copy of your message  " . $first_name . $last_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>