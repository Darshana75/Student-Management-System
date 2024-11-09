<?php
include('db.php');

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "UPDATE students SET name='$name', age='$age', email='$email', phone='$phone' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
