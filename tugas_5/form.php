<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        /* Custom CSS for styling the output section */
        #output-section {
            margin-top: 30px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 20px;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">BMI Pasien</h1>
        <!-- Form Section -->
        <?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST["submit"])) {
        ?>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="berat" class="col-4 col-form-label">Berat Badan</label>
                    <div class="col-8">
                        <input id="berat" name="berat" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label>
                    <div class="col-8">
                        <input id="tinggi" name="tinggi" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="umur" class="col-4 col-form-label">Umur</label>
                    <div class="col-8">
                        <input id="umur" name="umur" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L">
                            <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P">
                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        <?php
        } else {
            // Form submitted, process input
            $nama = $_POST["nama"];
            $berat = $_POST["berat"];
            $tinggi = $_POST["tinggi"];
            $umur = $_POST["umur"];
            $jenis_kelamin = $_POST["jk"];

            // Calculate BMI
            $tinggi_m = $tinggi / 100; // Convert tinggi from cm to m
            $bmi = $berat / ($tinggi_m * $tinggi_m);

            // Display output
            echo "<div id='output-section'>";
            echo "<h2>Hasil</h2>";
            echo "<p>Nama: $nama</p>";
            echo "<p>Berat Badan: $berat kg</p>";
            echo "<p>Tinggi Badan: $tinggi cm</p>";
            echo "<p>Umur: $umur tahun</p>";
            echo "<p>Jenis Kelamin: ";
            echo ($jenis_kelamin == "L") ? "Laki-Laki" : "Perempuan";
            echo "</p>";
            echo "<p>BMI: " . number_format($bmi, 2) . "</p>";
            echo "</div>";
        }
        ?>
    </div>

    <!-- JavaScript and Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
