<!DOCTYPE html>
<html lang="en">
<head>
 <style>
    .container{
        display: inline-block;
        background-color:#F3F0F9 ;
        margin:10%;
        height:fit-content;
        width:20%;
        padding:4%;
        text-align: center;
        border:2px groove black;
    }
    .images{
        height:10rem;
        width:10rem;
    }
    .button{
        margin-top: 5%;
    }
    nav{
        background-color: red;
        height: 20%;
        width:100vw;
    }
    #one{
         background-color: lightgreen;
         position:absolute;
         left:90%;
         bottom:90%;
         width:fit-content;
         height:fit-content;
    }
  </style>
</head>
<body>
    <nav>
    <a href="home.php"><button id="one">Upload an item</button></a>
</nav>
</body>
</html>
<?php
include "authorise.php";
$conn=new mysqli("localhost","root","","project",3306);
$result="select * from add_product where owner=$_SESSION[userid]";
$row=mysqli_query($conn,$result);
while ($value=mysqli_fetch_assoc($row))
{
    echo "<div class='container'>
           <h2>$value[name]</h2>
           <h4>$value[details]</h4>
           <h4>$value[price]</h4>
           <img src='$value[imgpath]' class='images'>
           <div class='button'><a href='home.php?pid=$value[pid]'><button>Edit</button></a>
           <a href='delete.php?pid=$value[pid]'><button>Delete</button></a></div>
           </div>";
} 
?>
