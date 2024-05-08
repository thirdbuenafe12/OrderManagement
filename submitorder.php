<!DOCTYPE html>
<html>
<head>
    <title>Order Result</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    
    $prices = array(
        "fishball" => 30,
        "kikiam" => 40,
        "corndog" => 50
    );
    
    $total_cost = $prices[$order] * $quantity;
    $change = $cash - $total_cost;
    
    echo "<h2>Total Cost: $total_cost PHP</h2>";
    echo "<h2>Change: $change PHP</h2>";
    echo "<h2>Thank you for your order!</h2>";
} else {
    echo "<h2>Error: Form data not received.</h2>";
}
?>
</body>
</html>
