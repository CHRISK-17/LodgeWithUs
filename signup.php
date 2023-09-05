<?php 

session_start();

$con = mysqli_connect('localhost', 'root', '', 'customertb');

mysqli_select_db($con, 'LodgeWithUs');

$name = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = " select * from customertb where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header("Location: signup.html ? message: Username Taken");
}else{
    $reg = " insert into customertb(Username, Email, Password) values ('$name', '$email', '$pass')";
    mysqli_query($con, $reg);
    header("Location: rooms.html ? message: Registration Succesful");
}
?>