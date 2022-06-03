<?php
include "database.php";

$username=$_POST["reg_username"];
$email=$_POST["reg_email"];
$contacts=$_POST["reg_contact"];
$address=$_POST["reg_address"];
$password=$_POST["reg_password"];
$confirmp=$_POST["reg_conpassword"];

if($password==$confirmp)
{
    $query="INSERT INTO `user`(`user_id`, `user_name`, `user_mail`, `contact`, `password`) VALUES (101,$username,$email,$contacts,$password)";
    mysqli_query($conn,$query);
}


?>