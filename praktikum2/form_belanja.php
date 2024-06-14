<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1 class="text-center">Belanja Online</h1> <br>
    <form method="post" action="">
      <div class="form-group row">
        <label class="col-1 col-form-label" for="text1">Customer</label> 
        <div class="col-8">
          <input id="text1"  name="customer" placeholder="Name..." type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-1">Pilih Produk</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV" required="required" aria-describedby="radioHelpBlock"> 
            <label for="radio_0" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="KULKAS" required="required" aria-describedby="radioHelpBlock"> 
            <label for="radio_1" class="custom-control-label">KULKAS</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI" required="required" aria-describedby="radioHelpBlock"> 
            <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
          </div> 
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-1 col-form-label">Jumlah Produk</label> 
        <div class="col-8">
          <input id="text2" name="jumlah" type="text" required="required" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
      </div>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $customer = $_POST['customer'];
        $produk = $_POST['radio'];
        $jumlah = $_POST['jumlah'];
        $harga = 0;

        if($produk == "TV"){
            $harga = 4200000 * $jumlah;
        } elseif($produk == "KULKAS"){
            $harga = 3100000 * $jumlah;
        } elseif($produk == "MESIN CUCI"){
            $harga = 3800000 * $jumlah;
        }
        
        echo "Nama Pembeli: $customer";
        echo "<br/>";
        echo "Jenis Produk: $produk";
        echo "<br/>";
        echo "Jumlah Barang: $jumlah";
        echo "<br/>";
        echo "Harga Barang: Rp " . number_format($harga, 0, ',', '.');
    }
    ?>
</body>
</html>