<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
 <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <article>
   <?php
    if (isset($_POST['hitung'])) {
      $angka1 = $_POST['angka1'];
      $angka2 = $_POST['angka2'];
      $operasi = $_POST['operasi'];
      switch ($operasi) {
        case '+':
          $hasil = $angka1 + $angka2;
          break;
        case '-':
          $hasil = $angka1 - $angka2;
          break;
        case '*':
          $hasil = $angka1 * $angka2;
          break;
        case '/':
          $hasil = $angka1 / $angka2;
          break;

        case '%':
          $hasil = $angka1 % $angka2;
          break;

        default:
          $hasil = "Pilih Operator";
          break;
      }
    }
    ?>
    <div class="kalkulator">
      <h1 class="judul">KALKULATOR</h1>

      <form method="post" action="kalku.php">
        <input type="text" name="angka1" class="angka" autocomplete="off" placeholder="Masukkan Angka">
        <input type="text" name="angka2" class="angka" autocomplete="off" placeholder="Masukkan Angka Lagi">
        <select class="opt" name="operasi">
          <option value="#">Operator</option>
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">x</option>
          <option value="/">/</option>
          <option value="%">Mod(%)</option>
        </select>
        <input type="submit" name="hitung" value="Hitung" class="tombol">
      </form>
       
      <?php if (isset($_POST['hitung'])) { ?>
        <input type="text" value="<?php echo $hasil; ?>" class="angka">
      <?php } else { ?>
        <input type="text" value="0" class="angka">
      <?php } ?>
    </div>
  </article>
  </div>
</body>

</html>