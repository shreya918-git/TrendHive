<?php  
$conn=new mysqli("localhost","root","","project",3306);
$query="select * from add_product";
mysqli_query($conn,$query);
?>