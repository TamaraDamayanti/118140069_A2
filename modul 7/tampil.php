<?php
        require 'fungsi.php';
        $mahasiswa = query("SELECT * FROM Mahasiswa");
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Data</h1>
        <a href="tambah.php"> Tambah </a>
        <br><br>
        <table border="1" cellpadding="10" cellspacing="0" >
        
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>ALamat</th>
                <th>ID_Jur</th>
            </tr>
                <?php $i =1; ?>
                <?php foreach($mahasiswa as $row) : //loping ?>
            <tr>
                <td><?php echo $i;  ?></td>
                <td>
                <a href="search.php? nrp= <?= $row["nrp"]; ?> ">search</a> |
                <a href="hapus.php? nrp= <?= $row["nrp"]; ?> " onclick=" return confirm ('Yakin?');"> hapus</a>
                    
                </td>
                <td> <?php echo $row["nrp"];  ?> </td>
                <td> <?php echo $row["nama"];  ?> </td>
                <td> <?php echo $row["alamat"];  ?> </td>
                <td> <?php echo $row["id_jur"];  ?> </td>
            </tr>
                 <?php $i++; ?>
                <?php endforeach;  ?>
        </table>


    </body>
</html>