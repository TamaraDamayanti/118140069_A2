<?php 
	$koneksi = mysqli_connect("localhost", "root", "praktikum_118140069");
	if(mysqli_connect_errno()){
		echo "koneksi database gagal : ".mysqli_connect_error();
	}else{
		echo "sukses";
	}

	function query($query){
        global $koneksi;
        $result = mysqli_query($koneksi, $query); 
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ){
            $rows[] = $row; 
        }
        return $rows;
    }

    function tambah($data){
        global $koneksi;
        $nrp = htmlspecialchars( $data["nrp"]);                
        $nama = htmlspecialchars( $data["nama"]);
        $alamat = htmlspecialchars( $data["alamat"]);
        $id_jur = htmlspecialchars( $data["id_jur"]);
        $query= "INSERT INTO siswa VALUES
        ('$nrp','$nama', '$alamat', '$id_jur')";
        mysqli_query($koneksi, $query);      
        return mysqli_affected_rows($koneksi);
    }

    function hapus($nrp){
        global $koneksi;
            mysqli_query($koneksi, "DELETE FROM Mahasiswa WHERE Mahasiswa.id_jur = Jurusan.id_jur");
        return mysqli_affected_rows($koneksi);
    }
 ?>