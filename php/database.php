<?php

$servername="localhost";
$username="root";
$password="";
$databesename="blogging_site";

$conn=mysqli_connect($servername,$username,$password,$databesename);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo"connetion established";
}

?>