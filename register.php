<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email', '$phone','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful. ";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="post">
    <input type="text" name="name" placeholder="Full Name" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="number" name="phone" placeholder="Phone Number" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>


<!-- add in homepgaw -->
<?php while ($row = $result->fetch_assoc()) { ?>
        <div>
            <h3><?php echo $row['name']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <p>Feature: ₹<?php echo $row['features']; ?></p>
            <img src="uploads/<?php echo $row['image']; ?>" width="150px">
        </div>
    <?php } ?>