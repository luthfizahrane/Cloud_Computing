<!DOCTYPE html>
<html>
<head>
    <title>Kasir Pakaian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Kasir Pakaian</h1>
        <form method="post">
            <input type="text" name="item" placeholder="Nama Item" required>
            <input type="number" name="harga" placeholder="Harga" required>
            <input type="number" name="jumlah" placeholder="Jumlah" required>
            <button type="submit" name="hitung">Hitung</button>
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $subtotal = $_POST['harga'] * $_POST['jumlah'];
            echo "<div class='result'>
                    <p>Subtotal untuk " . htmlspecialchars($_POST['item']) . ": Rp " . number_format($subtotal) . "</p>
                  </div>";
        }
        ?>
    </div>
</body>
</html>