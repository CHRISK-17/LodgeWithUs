<?php
$conn = mysql_connect('localhost', 'root', '', 'reservationtb');

if(!$conn){
    header("Location: maindashboard.php");
    exit();
}
?>