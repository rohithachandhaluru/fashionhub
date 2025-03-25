<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "fancyshop";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $item = $_POST['item'];
    $price = $_POST['price'];

    // Insert data into the database
    $sql = "INSERT INTO orders (name, email, item, price) VALUES ('$name', '$email', '$item', '$price')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2>Order placed successfully! 🎉</h2>";
        echo "<p>Thank you, <b>$name</b>. You have ordered <b>$item</b> for <b>$$price</b>.</p>";
        echo "<a href='products.html'>Back to Products</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
