<?php
include "authorise.php";
$conn=new mysqli("localhost","root","","project",3306);
$cid=$_GET['cid'];
$query="delete from cart where cid='$cid'";
if(mysqli_query($conn,$query)){
header("Location: ../vendor/cart.php");
}
?>