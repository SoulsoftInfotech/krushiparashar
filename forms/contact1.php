<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

//Database connection
new mysqli('localhost','root','','krushiparashar');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}
else
{
    $stmt = $conn->prepare("insert into contact(Name, Email, Subject, Message) values(?, ?, ?, ?)");

    $stmt->bind_param("ssss",$Name, $Email, $Subject, $Message);
    $stmt->execute();
    echo"send successfully...";
    $stmt->close;
    $stmt->close;
}
?>


