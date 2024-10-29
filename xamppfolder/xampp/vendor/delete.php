<?php
$conn=new mysqli("localhost","root","","project",3306);
$pid=$_GET['pid'];
$query="delete from add_product where pid='$pid'";
echo $query;
if(mysqli_query($conn,$query)){
    header('location:view.php');
}
?>