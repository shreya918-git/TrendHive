<?php
session_start();
if(!isset($_SESSION["loggedin"])){
    echo "<h1>illegal attempt to access</h1>";
    die;
}
if($_SESSION["loggedin"]==false){
    echo "<h1>unauthorized attempt to access</h1>";
    die;
}
?>