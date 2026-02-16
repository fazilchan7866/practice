<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$conn=new mysqli('localhost','root','','flat');
if($conn->connect_error){
    die('connection faild:'.$conn->connect_error);
}else{
    $stmt=$conn->prepare("insert into reg (firstname,lastname,email,password) values(?,?,?,?)");
    $stmt->bind_param("ssss",$firstname,$lastname,$email,$password);
    $stmt->execute();
    echo "ayipoyindhi ra ";
    $stmt->close();
    $conn->close();
}
?>
