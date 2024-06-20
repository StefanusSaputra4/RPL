<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment - Fega Jaya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Payment</h1>
    </header>
    <main>
        <section class="payment-info">
            <h2>Order Summary</h2>
            <p><strong>Product:</strong> KNALPOT AKRAPOVIC</p>
            <p><strong>Price:</strong> Rp. 3.000.000,00</p>
            <form action="submit-payment.php" method="POST">
                <div>
                    <label for="card-number">Card Number:</label>
                    <input type="text" id="card-number" name="card_number" required>
                </div>
                <div>
                    <label for="expiry-date">Expiry Date:</label>
                    <input type="month" id="expiry-date" name="expiry_date" required>
                </div>
                <div>
                    <label for="cvc">CVC:</label>
                    <input type="text" id="cvc" name="cvc" required>
                </div>
                <button type="submit">Pay Now</button>
            </form>
        </section>
    </main>
</body>
</html>
