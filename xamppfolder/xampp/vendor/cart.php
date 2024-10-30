<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .container{
        display: inline-block;
        background-color:#F3F0F9 ;
        margin:10%;
        height:fit-content;
        width:fit-content;
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
  </style>
</head>
<body>
    <h1 class="text-center" id="cart">My Cart</h1>
    <script>
        var cart=document.getElementById("cart");
        var i=0;
        var text=cart.innerHTML;
        cart.innerHTML="";
        function type(){
            if(i<text.length){
              cart.innerHTML+=text[i];
              i++;
            }
            setTimeout(type,200);
        }
        type();
    </script>
</body>
</html>
<?php
include "authorise.php";
$conn=new mysqli("localhost","root","","project",3306);
$pid=$_GET['pid'];
$img=$_GET['img'];
$query1="select name,details,price from add_product where pid='$pid'";
$result=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$desc=$row['details'];
$price=$row['price'];
if(!empty($name) && !empty($desc) && !empty($price)){
$query="insert into cart(name,descr,price,imgpath,pid) values('$name','$desc','$price','$img','$pid')";
mysqli_query($conn,$query);
}
$query3="select * from cart";
$r2=mysqli_query($conn,$query3);
while($r3=mysqli_fetch_assoc($r2)){
    echo "<div class='container'>
           <h2>$r3[name]</h2>
           <h4>$r3[descr]</h4>
           <h4>$r3[price]</h4>
           <img src='$r3[imgpath]' class='images'>
           <div class='button'>
           <a href='../customer/deletecart.php?cid=$r3[cid]'><button>Delete</button></a></div>
           </div>";
}
?>