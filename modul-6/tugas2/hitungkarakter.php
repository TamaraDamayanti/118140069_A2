<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Menghitung Karakter</h3>
	<form method="post">
    Nama : <input type="text" name="huruf">
    <button type="submit" name="submit">Submit</button>
    <br><br>
</form>

<?php 

function jumlahhuruf($huruf){
    $jumlah = strlen($huruf);
    return $jumlah;
}

if(isset($_POST['submit'])){
    $huruf = $_POST['huruf'];
    if(jumlahhuruf($huruf)==" "){
        echo '<font color="red">Nama : Nama Belum Diisi</font>'; echo '<br>';
        echo '<font color="red">Harga : Harga Belum ada </font>';
    }

    else if(jumlahhuruf($huruf)<=10){
        $harga = 300;
        $total = jumlahhuruf($huruf)*$harga;
        echo '<font color="chocolate">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="chocolate">Harga : '.$total."</font>";
    }

    elseif(jumlahhuruf($huruf)<=20){
        $harga = 500;
        $total = jumlahhuruf($huruf)*$harga;
        echo '<font color="#AE8AB7">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="#AE8AB7">Harga : '.$total."</font>";
    }

    elseif(jumlahhuruf($huruf)>20){
        $harga = 700;
        $total = jumlahhuruf($huruf)*$harga;
        echo '<font color="coral">Nama : '.$huruf.'</font>'; echo '<br>';
        echo '<font color="coral">Harga : '.$total."</font>";
    }
}

?>

</body>
</html>