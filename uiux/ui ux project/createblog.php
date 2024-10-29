<?php
include "authenticate.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #form{
            background-image: url("https://images.unsplash.com/photo-1518553634183-40a6deeae021?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div id="form" class="d-flex justify-content-center align-items-center vh-100">
        <form action="addblog.php" enctype="multipart/form-data" method="POST" class="w-50">
            <h2 class="text-center">Get Started With Your Own Blog :)</h2>
        <textarea name="desc" required maxlength="800" class="form-control mt-4"></textarea>
        <input type="date" placeholder="Enter the date of the event" required class="form-control mt-4" name="date">
        <input type="file" required name="images" class="form-control mt-4" accept=".jpg,.png">
       <div class="text-center mt-4"> <button type="submit">Create Blog</button></div>
    </form>
    </div>
</body>
</html>