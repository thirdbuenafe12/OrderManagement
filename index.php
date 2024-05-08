<!DOCTYPE html>
<html>
<head>
    <title>Order Management System</title>
</head>
<body>
    <h2>Welcome to the canteen! Here are the prices</h2>
    <form method="post" action="submitorder.php">
        <label for="order">Choose your order:</label>
        <select id="order" name="order">
            <option value="fishball">Fishball - 30 PHP</option>
            <option value="kikiam">Kikiam - 40 PHP</option>
            <option value="corndog">Corndog - 50 PHP</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>
        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" min="0" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
