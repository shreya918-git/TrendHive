<?php
$conn = new mysqli("localhost", "root", "", "project", 3306);

$name = $_POST["name"];
$mail = $_POST["mail"];
$password = $_POST["password"];

$query = "INSERT INTO blog_user(name, mail, password) VALUES('$name', '$mail', '$password')";

if (mysqli_query($conn, $query)) {
    header("Location: login.html");
    exit(); // Important to prevent further code execution
} else {
    echo "Error: " . mysqli_error($conn);
}

?>