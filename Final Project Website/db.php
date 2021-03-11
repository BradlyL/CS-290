<?php

$servername = "localhost";
$user = "root";
$pass = "";
$datab = "user_validation";

$conn = mysqli_connect($servername, $user, $pass, $datab);

if (!$conn) {
    echo "Connection failure.";
}
?>