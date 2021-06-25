<?php 

$email_id = $_GET['id'];

$to = "$email_id";
$subject = "Booking confirmed";
$message = "your Table booking has been confirmed. Be ready for the great experiance 
if u want to cancel your table booking go to the link given below and submit your query.
for any help call on this no : 7238877144.
cancel_order.html";
 $from = "sagarsharma6970@gmail.com";
 $header = "from:$from";
 if(mail($to,$subject,$message,$header)){
    header("location:home.html");
 }else{
     echo "something went wrong";
 }

?>