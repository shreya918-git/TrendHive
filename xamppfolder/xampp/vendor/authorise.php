<?php 
session_start();
if(!isset($_SESSION['logged in'])){   //checks if session variable is present or not 
    echo "illegal attempt";
}
if($_SESSION['loggedin']==false){
    echo 'unauthorized access';
}
if($_SESSION['usertype']!='vendor'){
    echo "incorrect access";
    die;
}
?>