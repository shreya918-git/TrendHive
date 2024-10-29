<?php
include "authorise.php";
$pid=$_GET['pid'];
$_SESSION['pid']=$pid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100" >
    <form action="vendor.php" method="POST" class="bg-danger w-50 p-4 m-2" enctype="multipart/form-data" id="itemForm">
        <h3 class="text-center">Upload Item/Edit Item</h3>
         <input type="text" placeholder="name of the item" maxlength="100" name="name" required class="form-control text-center mt-2">
         <input type="number" placeholder="price of the item" name="price" required class="form-control text-center mt-2">
         <textarea placeholder="describe the item" name="desc" required class="form-control text-center mt-2" cols="30" rows="10"></textarea>
         <div class="text-center"><input type="file" required accept=".jpg,.png" class="form-control mt-2" name="image">
        <button type="submit" class="btn btn-warning mt-4">Add Item</button>
        <button type="button" class="btn btn-warning mt-4" id="edit" onclick="changeAction()">Edit Item</button></div> 
    </form>
</div>
<script>
    function changeAction() {
        document.getElementById('itemForm').action = "edit.php";  // Change the action to edit.php
        document.getElementById('itemForm').submit();  // Optionally submit the form
    }
</script>
</body>
</html>