<?php

$conn = mysqli_connect("localhost","root","") or die("database not connected");
mysqli_select_db($conn,'restro');

$name = $_POST['cname'];
$email = $_POST['email'];
$contact = $_POST['mob'];
$date = $_POST['date'];
$person = $_POST['person'];
$time = $_POST['timing'];

 $reg = "insert into booking (name,email,contact,date,time,person) values ('$name','$email','$contact','$date','$time','$person')";
   if( mysqli_query($conn,$reg)){
       
       header("location:mail.php?id=$email");
   }
   else{
       echo "order not accepted";
   }


  mysqli_close($conn);
?>