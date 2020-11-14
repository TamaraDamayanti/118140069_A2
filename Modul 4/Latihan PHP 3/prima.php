<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
if (isset($_POST['submit'])) {
  $angka = $_POST['angka'];
  $prima = true;
  for ($i = 2; $i < $angka; $i++) {
    if ($angka % $i == 0)
      $prima = false;
  }
    if ($prima) {
      $hasil = "Bilangan Prima";
    } else {
      $hasil = "Bukan Bilangan Prima";
    }
}
?>

<div class="prima">
  <h1 class="judul">Menentukan Bilangan Prima</h1>
  <form method='post' action='prima.php'>
    <h3>Bilangan : </h3>
    <input type='text' name='angka' class='angka' autocomplete='off' placeholder='Masukkan Angka '>
    <input type='submit' name='submit' value='submit' class='tombol'>
  </form>
  <?php if (isset($_POST['submit'])) { ?>
    <input type="text" value="<?php echo $hasil; ?>" class="angka">
  <?php } else { ?>
    <h3>Output :</h3> 
    <input type="text" class="angka" autocomplete='off' placeholder='Hasil'>
  <?php } ?>
</div>
</body>

</html>