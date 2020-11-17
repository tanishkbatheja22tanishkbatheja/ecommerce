<?php
include 'connection.php';

$oldpassword=$_POST['opassword'];
$oldpassword=mysqli_real_escape_string($con , $oldpassword);

$newpassword=$_POST['npassword'];
$newpassword=mysqli_real_escape_string($con , $newpassword);

$retypassword=$_POST['rnpassword'];
$retypassword=mysqli_real_escape_string($con , $retypassword);

$email=$_SESSION['email'];

$select_query="SELECT Password From users WHERE email='$email'" or die(mysqli_error($select_query));

$password=mysqli_query($con ,$select_query);

$row=mysqli_num_rows($password);

if($row>0 && $newpassword==$retypassword)
{
    $success = "<span style='color: green;'>Password Changed</span>";
    $update_query = "UPDATE users SET Password = '$newPassword' WHERE email = '$email'";
    $update_query_result = mysqli_query($con , $update_query) or die(mysqli_error($con));
    header("location:settings.php?m1=".$success);

}
else{
    $error="<span style='color: red;'>Invalid Credentials</span>";
    header('location:settings.php?m1='.$error);
}
?>

