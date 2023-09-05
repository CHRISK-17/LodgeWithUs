<?php 
$fname = $_POST["firstname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];

$cname = $_POST["cardname"];
$ccard = $_POST["cardnumber"];
$expm = $_POST["expmonth"];
$expy = $_POST["expyear"];
$cvv = $_POST["cvv"];

if (!empty($fname) || !empty($email) || !empty($address) || !empty($city) || !empty($state) || !empty($zip) || !empty($cname) || !empty($ccard) || !empty($expm) || !empty($expy) || !empty($cvv)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "paymentTb";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {
        $reg = " insert into paymenttb(FName, Email, Address, City, State, ZipCode, CardName, CardNo, ExpiryMon, ExpiryYear, CVV) values ('$fname', '$email', '$address', '$city', '$state', '$zip', '$cname', '$ccard', '$expm', '$expy', '$cvv')";
        mysqli_query($con, $reg);
        header("Location: lodgeFeedback.html");
       }
   
} else {
    header("Location: payment.html ? message: Enter all fields");
    die();
}
?>