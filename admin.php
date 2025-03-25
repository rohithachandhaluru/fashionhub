<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fancyshop";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle Update
if (isset($_POST["update"])) {
    $id = intval($_POST["id"]);
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $item = $conn->real_escape_string($_POST["item"]);
    $price = floatval($_POST["price"]);

    $conn->query("UPDATE orders SET name='$name', email='$email', item='$item', price='$price' WHERE id=$id");
}

// Handle Delete
if (isset($_POST["delete"])) {
    $id = intval($_POST["id"]);
    $conn->query("DELETE FROM orders WHERE id=$id");
}

// Fetch Orders
$orders = $conn->query("SELECT * FROM orders");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Orders - Fancy Trends</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="admin.php">admin</a></li>
                <li><a href="about.html">About Us</a></li>
            </ul>
        </nav>
    </header>

    <section id="admin-panel">
        <h2>Manage Orders</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Item</th>
                <th>Price</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>

            <?php while ($row = $orders->fetch_assoc()): ?>
                <tr>
                    <form method="post">
                        <td><?= $row['id'] ?></td>
                        <td><input type="text" name="name" value="<?= $row['name'] ?>"></td>
                        <td><input type="email" name="email" value="<?= $row['email'] ?>"></td>
                        <td><input type="text" name="item" value="<?= $row['item'] ?>"></td>
                        <td><input type="number" step="0.01" name="price" value="<?= $row['price'] ?>"></td>
                        <td><?= $row['order_date'] ?></td>
                        <td>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button type="submit" name="update">Update</button>
                            <button type="submit" name="delete" onclick="return confirm('Are you sure?')">Delete</button>
                        </td>
                    </form>
                </tr>
            <?php endwhile; ?>
        </table>
    </section>

</body>
</html>
