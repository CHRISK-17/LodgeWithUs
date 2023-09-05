<?php
$host = "localhost";
$user = "root";
$key = "";
$db = "customertb";

mysql_connect($host, $user, $key);
mysql_select_db($db);

if(isset($_POST['username'])){
    $uname = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "select * from customertb when Username = '".$uname."' AND Password = '".$pass."' limit 1 ";
    $result = mysql_query($sql);

    if(mysql_num_rows($result)==1){
        header("Location:rooms.html?message= Login Successful");
        exit();
    }
    else{
        header("Location:login.html?message=Login Failed");
        exit();
    }
}