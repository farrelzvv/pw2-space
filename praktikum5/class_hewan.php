<<<<<<< HEAD
<?php

    class HewanMamalia
    {
        public $warna;
        public $namaHewan;
        public $habitat;

        function makan()
        {
            return "Mamalia makan";
        }

        function minum()
        {
            return "Mamalia minum";
        } 

        function menyusui()
        {
            return "Mamalia menyusui";
        }

        function melahirkan()
        {
            return "Mamalia menyusui";
        }


    }

$mamalia = new HewanMamalia();
echo $mamalia->namaHewan = "Lumba-Lumba";
echo "<br>";
echo $mamalia->warna = "Abu-abu";
echo "<br>";
echo $mamalia->habitat = "Laut";
echo "<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
echo "<br>";
=======
<?php

    class HewanMamalia
    {
        public $warna;
        public $namaHewan;
        public $habitat;

        function makan()
        {
            return "Mamalia makan";
        }

        function minum()
        {
            return "Mamalia minum";
        } 

        function menyusui()
        {
            return "Mamalia menyusui";
        }

        function melahirkan()
        {
            return "Mamalia menyusui";
        }


    }

$mamalia = new HewanMamalia();
echo $mamalia->namaHewan = "Lumba-Lumba";
echo "<br>";
echo $mamalia->warna = "Abu-abu";
echo "<br>";
echo $mamalia->habitat = "Laut";
echo "<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
echo "<br>";
>>>>>>> 434e38f46c443560e8cb1f1c318de2855d84cc4b
echo $mamalia->melahirkan();