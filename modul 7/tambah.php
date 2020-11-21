<?php 
	require 'fungsi.php';  
    if (isset($_POST["submit"])){
            if ( tambah($_POST) > 0 ){
                echo "
                    <script>
                        alert('data berhasil ditambahkan');
                        document.location.href = 'tampil.php';
                    </script>
                ";
            }else {
                echo "
                    <script>
                        alert('data gagal ditambahkan');
                        document.location.href = 'tampil.php';
                    </script>
                ";
            }
    }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h1> Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="nrp" > NRP : </label>
                <input type="text" name="nrp" id="nrp" required>
            </li> 
            <li>
                <label for="nama" > Nama: </label>
                <input type="text" name="nama" id="nama" required>

            </li>
             <li>
                <label for="alamat" > Alamat: </label>
                <textarea name="alamat" id="alamat" cols="20" rows="2"></textarea>

            </li>
            <li>
                <label for="id_jur" > ID_Jur : </label>
                <input type="text" name="id_jur" id="id_jur" required>
            </li> 
            <li>
                <button type="submit" name="submit"> Tambah Data</button>
            </li>
        </ul>
    </form>
 
 </body>
 </html>