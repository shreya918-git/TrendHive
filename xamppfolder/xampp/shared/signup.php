<?php
$conn=new mysqli("localhost","root","","project",3306);
mysqli_query($conn,"insert into user(username,password,usertype) values('$_POST[username]','$_POST[password]','$_POST[type]')")
?>