<?php
// Database connection
$servername = "172.31.22.43";
$username = "Kritika200553441";
$password = "ASIzfPKdD_";
$dbname = "Kritika200553441";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pizza_size = $_POST["pizz_size"];
    $toppings = implode(", ", $_POST["toppings"]);
    $quantity = $_POST["quantity"];

    // Insert data into the database
    $sql = "INSERT INTO pizza form (name, email, phone, pizza_size, toppings, quantity) VALUES ('$name', '$email', '$phone', '$pizza_size', '$toppings', $quantity)";

    if ($conn->query($sql) === TRUE) {
        $confirmation_message = "Thank you, $name! Your pizza order has been placed.";
    } else {
        $confirmation_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order Confirmation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-success">Pizza Order Confirmation</h1>
        <p><?php echo $confirmation_message; ?></p>
    </div>
</body>
</html>
