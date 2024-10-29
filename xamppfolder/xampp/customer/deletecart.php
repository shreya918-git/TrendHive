<?php
include "authorise.php";
$conn=new mysqli("localhost","root","","project",3306);
$query="delete from cart where cid='$cid'";
if(mysqli_query($conn,$query)){
header("Location: cart.php");
}
?>