<?php
include 'connection.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$price=$_GET['price'];
/*
echo $user_id;
echo $item_id;
echo $price;
*/
$insert_query="INSERT INTO orders( id , item_id , Price) values ('$user_id','$item_id','$price');";

$submit=mysqli_query($con,$insert_query)
or die(mysqli_error($con));

header("location:success.php")
?>