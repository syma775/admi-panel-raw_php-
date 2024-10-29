<?php

require_once('config.php');

$slug = $_GET['slug'];

$sql = "DELETE FROM person WHERE slug = '$slug'";

$data = mysqli_query($conn,$sql);

if($data){
    header('location:student.php');
}
?>