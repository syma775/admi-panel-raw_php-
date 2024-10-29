<?php

session_start();

$data = session_destroy();
if($data){
    header('location:index.php');
}

?>