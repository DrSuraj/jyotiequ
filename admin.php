<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $features = $_POST["features"];
    
    // Image Upload
    $image = $_FILES["image"]["name"];
    $target = "uploads/" . basename($image);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target);

    // Insert Data
    $sql = "INSERT INTO product (name, description, features, image) VALUES ('$name', '$description', '$features', '$image')";
    if ($conn->query($sql) === TRUE) {
        echo "Product Added Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add New Product</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Product Name" required><br>
        <textarea name="description" placeholder="Description" required></textarea><br>
        <input type="text" name="features" placeholder="Features" required><br>
        <input type="file" name="image" required><br>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>