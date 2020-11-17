<?php
include 'connection.php';
$name= $_POST["Name"];
$name=mysqli_real_escape_string($con , $name);
$email= $_POST["email"];
$email=mysqli_real_escape_string($con ,$email);
$message= $_POST['message'];
$message=mysqli_real_escape_string($con ,$message);
/*
echo $name;
echo $email;
echo $message;
*/
$contact_insert_query="INSERT INTO contact_us( Name , email_id , message) values ('$name','$email','$message');";

//die($contact_insert_query);

$contact_submit=mysqli_query($con,$contact_insert_query)
or die(mysqli_error($con));

$conformation="<span style='color: green;'>Sucessfully Inserted</span>";
header("location:contact.php?m1=".$conformation);
?>