<?php 
session_start();
if(!isset($_SESSION['logged in'])){   //checks if session variable is present or not 
    echo "illegal attempt";
    die;
}
if($_SESSION['loggedin']==false){
    echo "login first";
    die;
}
?>