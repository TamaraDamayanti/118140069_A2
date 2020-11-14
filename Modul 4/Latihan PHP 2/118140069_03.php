<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Menentukan Bilangan Prima</h3>
	<?php
		if (isset($_POST['submit'])) {
			$angka = $_POST['angka'];

  		$prima = true;
  		for ($i = 2; $i < $angka; $i++) {
    		if ($angka % $i == 0)
      			$prima = false;
  		}	

  		if ($prima) {
    		$hasil = " Bilangan Prima";
  		} else {
    		$hasil = "Bukan Bilangan Prima";
  			}
		}
	?>

	<form method='post' action='118140069_03.php'>
		 	Bilangan : <input type='text' name='angka' class='angka' autocomplete='off'><br><br>
		 	<input type='submit' name='submit' value='submit' class='tombol'>
		 <br><br>
	</form>

	<?php if (isset($_POST['submit'])) { ?>
		<input type="text" value="<?php echo $hasil; ?>" class="angka">
	<?php } else { ?>
		Output : <input type="text" value=" " class="angka">
	<?php } ?>

</body>
</html>