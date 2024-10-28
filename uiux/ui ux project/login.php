<?php
session_start();
$_SESSION["loggedin"]=false;
$conn=new mysqli("localhost","root","","project",3306);
$query="select id,name,mail,password from blog_user where mail='$_POST[mail]' and password='$_POST[pass]'";
echo $query;
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$_SESSION["pid"]=$row['id'];
if(mysqli_num_rows($result) > 0){
    header("Location: createblog.php");
    $_SESSION["loggedin"]=true;
}
else{
    echo "not logged in";
}
?>