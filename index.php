<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contentleonie">
   <h1 class="title" >Tugas Praktikum <br> 5 Contoh Program PHP </h1>
         <form >
            <label for="InputPositifNegarif" class="label">Masukan Bilangan Bulat Positif dan Negatif</label><br>
            <input type="number" id="InputPositifNegarif" name="InputPositifNegatif"  placeholder="Masukan Nilai" class="input">
            <?php 
            if (isset($_GET["PeriksaBilanganPositifNegatif"])){
                $Angka = $_GET["InputPositifNegatif"];
                if ($Angka > 0){
                    echo "Bilangan $Angka adalah bilangan Positif";
                } else if ($Angka <0) {
                    echo "Bilangan $Angka adalah bilangan negatif";
                }else {
                    echo " bilangan $Angka adalah 0";
                }
            }
            ?>
            <br><br>
            <button type="submit" name="PeriksaBilanganPositifNegatif" class="Tombol">Periksa</button>
    
         </form>
         <br><br><br><br>
         <form >
            <label for="InputGenapGanjil" class="label">Masukan Bilangan Genap atau Ganjil </label><br>
            <input type="number" id="InputGenapGanjil" name="InputGenapGanjil"  placeholder="Masukan Nilai" class="input">
            <?php 
            if (isset($_GET["PeriksaBilanganGenapGanjil"])){
                $Angka = $_GET["InputGenapGanjil"];
                if ($Angka % 2 == 0){
                    echo "Bilangan $Angka adalah bilangan Genap";
                }else {
                    echo " bilangan $Angka adalah Ganjil";
                }
            }
            ?>
            <br><br>
            <button type="submit" name="PeriksaBilanganGenapGanjil" class="Tombol">Periksa</button>
    
         </form>
         <br><br><br><br>
         <form >
            <label for="InputLulusAtauTidak" class="label">Mengecek Apakah Seorang Siswa Lulus  Atau Tidak </label><br>
            <input type="number" id="InputLulusAtauTidak" name="InputLulusAtauTidak"  placeholder="Masukan Nilai" class="input">
            <?php 
            if (isset($_GET["PeriksaLulusAtauTidak"])){
                $Angka = $_GET["InputLulusAtauTidak"];
                if ($Angka >= 60){
                    echo "Selamat,Kamu Lulus";
                }else {
                    echo "Maaf,Kamu Tidak Lulus";
                }
            }
            ?>
            <br><br>
            <button type="submit" name="PeriksaLulusAtauTidak" class="Tombol">Periksa</button>
    
         </form>
         <br><br><br><br>
         <form >
            <label for="InputPalindrom" class="label">Mengecek Apakah Sebuah Kata Atau Kalimat Palindrom Atau Tidak </label><br>
            <input type="text" id="InputPalindrom" name="InputPalindrom"  placeholder="Masukan Palindrom" class="input">
            <?php 
            if (isset($_GET["PeriksaPalindrom"])){
                $Kata = $_GET["InputPalindrom"];
                $Palindrom = strrev($Kata);
                if ($Kata == $Palindrom){
                    echo "$Kata Adalah Polindrum";
                }else {
                    echo "$Kata Bukan Polindrom";
                }
            }
            ?>
            <br><br>
            <button type="submit" name="PeriksaPalindrom" class="Tombol">Periksa</button>
    
         </form>
         <br><br><br><br>
         <form >
            <label for="InputTahunKabisat" class="label">Mengecek Apakah Sebuah Tahun Kabisat Atau Tidak </label><br>
            <input type="number" id="InputTahunKabisat" name="InputTahunKabisat"  placeholder="Masukan Tahun" class="input">
            <?php 
            if (isset($_GET["PeriksaTahunKabisat"])){
                $Tahun = $_GET["InputTahunKabisat"];
                if (($Tahun % 4 == 0 && $Tahun != 0) || $Tahun % 400==0){
                    echo "$Tahun Adalah Tahun Kabisat";
                }else {
                    echo "$Tahun Bukan Tahun Kabisat";
                }
            }
            ?>
            <br><br>
            <button type="submit" name="PeriksaTahunKabisat" class="Tombol">Periksa</button>
    
         </form>
    </div>
</body>
</html>