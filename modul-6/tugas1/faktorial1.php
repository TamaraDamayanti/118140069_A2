<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Menghitung Bilangan Faktorial</h3>
<?php 
	function faktorial($n){
		if($n>2){
			return $n*faktorial($n-1);
		}else if($n>=0 && $n<=2){
			return $n;
		}else{
			return "Mohon Masukkan Bilangan Postif";
		}
	}

	
 ?>

	<form method="POST">
    <input type="number" name="faktorial" required>
    <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php if(isset($_POST['hitung'])){
    $n = $_POST['faktorial']; echo '<br>';
   	echo 'Hasil : '.faktorial($n);
	} ?>

</body>
</html>