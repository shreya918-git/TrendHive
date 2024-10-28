<?php
session_start();
$source= $_FILES['image']['tmp_name']; //stores the current temporary location of the file
$target=$_FILES['image']['name'];      //stores the name of the image uploaded so that it can be moved,we also provide a path to a different folder like shared but as we are not giving any path here it will be stored under vendor only 
move_uploaded_file($source,$target);                       // . is for concatanetion 
$conn=new mysqli("localhost","root","","project",3306);
$name = trim($_POST['name']);
$details = trim($_POST['desc']);
$price = trim($_POST['price']);
if(!empty($name) && !empty($details) && !empty($price)){
mysqli_query($conn,"INSERT INTO add_product(name, details, imgpath, owner, price) 
          VALUES ('{$_POST['name']}', '{$_POST['desc']}', '$target', '{$_SESSION['userid']}', '{$_POST['price']}')");}
header('location:view.php');
?>