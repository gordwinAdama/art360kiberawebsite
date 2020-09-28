<?php 
if(isset($_POST['submit'])){
    $to = "gordwinodhiambo@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    echo "Mail Sent. Thank you for subscribing! we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
