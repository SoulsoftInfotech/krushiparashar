<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Database connection
$conn = new mysqli ('localhost','root','','krushiparashar');

if ($conn->connect_error)
{
    die('Connection failed : ' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO tbl_contact (Name, Email, Subject, Message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);
    $stmt->execute();
    echo"Connection Successfully...";
    $stmt->close();
    $conn->close();
}
?>