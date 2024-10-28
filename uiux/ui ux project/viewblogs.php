<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .container{
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        background-color: #F3F0F9;
        height:fit-content;
        width:40vw;
        margin:20px;
        margin-left:15%;
    }
    .image{
        height:40%;
        width:40%;
        margin: auto;
        margin-bottom:10%;
        margin-top:10%;
    }
    .container:hover{
        box-shadow: -2px -2px 5px black;
        transition:transform 2s;
        transform:scale(1.05);
    }
</style>
</head>
<body>
<h2 style="margin-bottom:5%; margin-top:5%; text-align:center; font-size:xx-large;">My Blogs</h2>
    <script>
        var text=document.getElementsByTagName("h2")[0];
        var textcontent=text.innerText;
        text.innerHTML='';
        var i=0;
        function type(){
            if(i<textcontent.length)
            {text.innerHTML+=textcontent[i];
            i++;}
            else{
                clearInterval(set);
            }
        }
        var set=setInterval(type,200);
    </script>
</body>
</html>




<?php
session_start();
if(!isset($_SESSION["loggedin"])){
    echo "<h1>illegal attempt to access</h1>";
    die;
}
if($_SESSION["loggedin"]==false){
    echo "<h1>unauthorized attempt to access</h1>";
    die;
}
$conn=new mysqli("localhost","root","","project",3306);
// $source=$_FILES["images"]["tmp_name"];
// $target=$_FILES["images"]["name"];
// move_uploaded_file($source,$target);
$query="select * from blogs";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){
    echo "
        <div class='d-inline-block me-4 mb-4'><div class='container'><img src='$row[imgpath]' class='image'>
        <h5>$row[details]</h5>
        <h5 class='text-center'>-$row[created_date]</h5></div>
        </div>";
}
?>