<?php 
$fname = $_POST["firstname"];
$email = $_POST["email"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];

$room = $_POST["roomtype"];
$guest = $_POST["guestno"];
$add = $_POST["addons"];
$arrdate = $_POST["arrdate"];
$deptdate = $_POST["deptdate"];
$in = $_POST["checkin"];
$out = $_POST["checkout"];

if (!empty($fname) || !empty($email) || !empty($address) || !empty($state) || !empty($zip) || !empty($room) || !empty($guest) || !empty($add) || !empty($arrdate) || !empty($deptdate) || !empty($in) || !empty($out)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "#blank";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    } else {
        if (mysqli_connect_error()) {
            die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
        } else {
            $reg = " insert into reservationtb(FName, Email, Address, City, State, ZipCode, RoomType, GuestNo, AddOn, ArrivalDate, DepDate, CheckIn, CheckOut) values ('$fname', '$email', '$address', '$city', '$state', '$zip', '$room', '$guest', '$add', '$arrdate', '$deptdate', '$in', '$out')";
            mysqli_query($con, $reg);
            header("Location: payment.html");
           }
       
    }
   
} else {
    header("Location: roomdetails.html");
    die();
}
?>