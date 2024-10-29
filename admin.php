<?php


require_once('config.php');

$email= $_POST['email'];
$password = $_POST['password'];

$sql="SELECT * FROM users WHERE `email`='$email' and `password` ='$password'";
$data = mysqli_query($conn,$sql);
if($data){
    echo "welcome";
}else{
    echo "sorry wrong email or password";
}
?>