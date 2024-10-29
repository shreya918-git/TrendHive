<?php
      session_start();
      $_SESSION['logged in']=false; //declare the session variable,stored in tmp folder
      $conn=new mysqli('localhost','root','','project',3306);
      $query="select usertype,userid from user where username='$_POST[username]' and password='$_POST[password]'";
      echo $query;
      $result=mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($result);
      $usertype = $row['usertype'];
      $userid=$row['userid'];
      $_SESSION['userid']=$userid;
      echo $usertype;
      $_SESSION['usertype']=$usertype;
      if ($result->num_rows>0){
        $_SESSION['loggedin']=true;
        if ($usertype == 'vendor') {
            header("Location: /xamppfolder/xampp/vendor/home.php");
            exit;
        } else {
            header("Location: /xamppfolder/xampp/customer/home.html");
            exit;
        }        
    }
    else{
        echo "no data found";
    }
    if($_SESSION['usertype']=='vendor'){
        header('location:/xampp/vendor/home.php');
    }
    if($_SESSION['usertype']=='customer'){
        header('location:/xampp/customer/home.php');
    }
?>