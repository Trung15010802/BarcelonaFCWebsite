<?php
include 'database-connection.php';

$email = $_POST["email"];
$name = $_POST["name"];
$text = $_POST["text"];

$sqlCreate = "INSERT INTO `feedback` VALUES('$email','$name','$text')";
$sqlUpdate = "UPDATE `feedback` SET text = '$text' WHERE email = '$email'";

//kiểm tra
if (mysqli_query($conn, $sqlCreate)) {
    echo '<script language="javascript">';
    echo 'alert("Your feedback has been recorded!")';
    echo '</script>';
    echo "<script>window.history.back();</script>";
} else {
    mysqli_query($conn, $sqlUpdate);
    echo '<script language="javascript">';
    echo 'alert("Your feedback has been changed!")';
    echo '</script>';
    echo "<script>window.history.back();</script>";
}

$conn->close();
