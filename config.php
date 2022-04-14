<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login_with_session";

$conn = mysqli_connect("localhost","root","");

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>