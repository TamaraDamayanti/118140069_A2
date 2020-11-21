<?php 
    require 'fungsi.php';
    $id_jur = $_GET["id_jur"];
    if ( hapus($id_jur) > 0 ){
        echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = 'tampil.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('data gagal dihapus');
                document.location.href = 'tampil.php';
            </script>
        ";
    }


 ?>