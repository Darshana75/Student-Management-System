<?php
include('db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id = $id";
$result = $conn->query($sql);
$student = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Student</h2>
        <form action="update_student.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
            <input type="text" name="name" value="<?php echo $student['name']; ?>" required>
            <input type="number" name="age" value="<?php echo $student['age']; ?>" required>
            <input type="email" name="email" value="<?php echo $student['email']; ?>" required>
            <input type="text" name="phone" value="<?php echo $student['phone']; ?>">
            <button type="submit">Update Student</button>
        </form>
    </div>
</body>
</html>
