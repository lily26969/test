<?php

if(isset($_POST['submit']))
{
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$adress=$_POST['adress'];
$phone=$_POST['phone'];
$type=$_POST['mode'];


//db connection 

$conn = new mysqli('localhost:3307','root','','user');

if(!$conn->connect_error){
  die('connection failed '.$conn->connect_error);
}else{
  // echo"error";
  $stmt = $conn->prepare("insert into user (username,email,password,phone,adress,usertype)
  values(?,?,?,?,?,?)");
  $stmt->blind_param("sssisi",$name,$email,$password,$phone,$adress,$type);
  $stmt->execute();
  echo"registration successful";
  $stmt->close;
  $conn->colse;
}

 
}

?>