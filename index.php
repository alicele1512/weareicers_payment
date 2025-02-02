<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Checkout</title>
</head>
<body>
    <form action="checkout.php" method="POST">
        <label for="payment_method">Select Payment Method:</label>
        <select name="payment_method" id="payment_method">
            <option value="paypal">PayPal</option>
            <option value="momo">MoMo</option>
            <option value="card">Card</option>
            <option value="stripe">Stripe</option>
        </select>
        <input type="hidden" name="user_id" value="12345"> <!-- Replace with dynamic user ID -->
        <input type="hidden" name="amount" value="100.00"> <!-- Replace with dynamic amount -->
        <button type="submit">Pay Now</button>
    </form>
</body>
</html>
