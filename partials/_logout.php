<?php
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login'] = false;
}
else if($_SESSION['login'] == true){
    unset($_SESSION['login']);
    session_destroy();  
}
header("Location:../index.php");

?>