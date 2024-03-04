<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Belanja Online</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
    .blue-background {
        background-color: #007bff;
        color: white;
    }
    .footer {
        background-color: #007bff;
        color: white;
        text-align: center;
    }
    .bordered {
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 bordered">
            <h2>Belanja Online</h2>
            <form method="post">
                <div class="form-group">
                    <label for="customer">Customer:</label>
                    <input type="text" class="form-control" id="customer" name="customer" placeholder="Nama Customer">
                </div>
                <div class="form-group">
                    <label>Pilih Produk:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="product" id="tv" value="TV">
                        <label class="form-check-label" for="tv">TV</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="product" id="kulkas" value="Kulkas">
                        <label class="form-check-label" for="kulkas">Kulkas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="product" id="mesin_cuci" value="Mesin Cuci">
                        <label class="form-check-label" for="mesin_cuci">Mesin Cuci</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
                </div>
                <button type="submit" class="btn btn-success" name="submit">Kirim</button>
            </form>
        </div>
        <div class="col-md-6 bordered">
            <h2 class="text-center blue-background">Daftar Harga</h2>
            <table class="table table-bordered">
                <thead class="blue-background">
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>TV</td>
                        <td>4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas</td>
                        <td>3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci</td>
                        <td>3.800.000</td>
                    </tr>
                </tbody>
            </table>
            <p class="footer">Harga dapat berubah setiap saat.</p>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit'])){
    $customer = $_POST['customer'];
    $product = $_POST['product'];
    $jumlah = $_POST['jumlah'];

    $harga = 0;
    switch($product) {
        case 'TV':
            $harga = 4200000;
            break;
        case 'Kulkas':
            $harga = 3100000;
            break;
        case 'Mesin Cuci':
            $harga = 3800000;
            break;
    }

    $total = $harga * $jumlah;

    echo "<div class='container mt-3'>";
    echo "<div class='alert alert-success' role='alert'>";
    echo "Customer: $customer <br>";
    echo "Produk: $product <br>";
    echo "Jumlah: $jumlah <br>";
    echo "Total Harga: Rp " . number_format($total, 0, ',', '.') . "<br>";
    echo "</div>";
    echo "</div>";
}
?>

</body>
</html>
