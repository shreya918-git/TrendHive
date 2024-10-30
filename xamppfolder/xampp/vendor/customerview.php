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
    p{
        font-family:'Times New Roman', Times, serif;
        font-size: x-large;
        color:pink;
    }
    .t{
        text-align: center;
    }
  </style>
</head>
<body>
    <h1 class="t">Discover Your Next Favorite Find!</h1>
    <p class="t">From Electronics to Fashion..</p>
    <script>
        var text = document.getElementsByClassName("t")[0]; // Use the first element with class "t"
var i = 0;
var text2 = text.innerText;
text.innerHTML = '';

function type() {
    if (i < text2.length) {  // Use `if` instead of `while`
        text.innerHTML += text2[i];
        i++;
        setTimeout(type, 200);  // Set timeout here to call `type` again after 200ms
    }
}
type();

    </script>
</body>
</html>
<?php
$conn=new mysqli("localhost","root","","project",3306);
$result="select * from add_product";
$row=mysqli_query($conn,$result);
while ($v=mysqli_fetch_assoc($row))
{  
    echo "<div class='container'>
           <h2>$v[name]</h2>
           <h4>$v[details]</h4>
           <h4>$v[price]INR</h4>
           <img src='$v[imgpath]' class='images'>
           </div>
           </div>";
}
?>