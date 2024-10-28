<?php
include 'authorise.php';
$conn = new mysqli("localhost", "root", "", "project", 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$source = $_FILES['image']['tmp_name'];
$target = $_FILES['image']['name'];
move_uploaded_file($source, $target);

$name = ($_POST['name']);
$details = ($_POST['desc']);
$imgpath = $target;
$owner = $_SESSION['userid'];
$price = ($_POST['price']);
$pid = $_SESSION['pid'];

$query = "UPDATE add_product SET
    name = '$name',
    details = '$details',
    imgpath = '$imgpath',
    owner = '$owner',
    price = '$price'
WHERE pid = '$pid'";

if ($conn->query($query) === TRUE) {
    header("Location: view.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
