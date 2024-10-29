<?php
session_start();
if(!isset($_SESSION["loggedin"])){
    header("Location: login.html");
    die;
}
if($_SESSION["loggedin"]==false){
    echo "<h1>unauthorized attempt to access</h1>";
    die;
}
?>