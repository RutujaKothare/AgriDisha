<?php
// Start the session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Ensure only admin can access
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ams_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch buyers and their purchased products
$buyers_query = "SELECT users.id, users.username, users.email, GROUP_CONCAT(products.name SEPARATOR ', ') AS purchased_products 
                 FROM users 
                 LEFT JOIN orders ON users.id = orders.buyer_id 
                 LEFT JOIN products ON orders.product_id = products.id 
                 WHERE users.role='Buyer' 
                 GROUP BY users.id";
$buyers_result = $conn->query($buyers_query);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manage Buyers</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    /* General Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    
    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }
</style>
<body>
    <h1>Buyers List</h1>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Purchased Products</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($buyers_result->num_rows > 0): ?>
                <?php while ($buyer = $buyers_result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($buyer['id']) ?></td>
                        <td><?= htmlspecialchars($buyer['username']) ?></td>
                        <td><?= htmlspecialchars($buyer['email']) ?></td>
                        <td><?= htmlspecialchars($buyer['purchased_products'] ?: 'No purchases') ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="4">No buyers found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
