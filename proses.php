<?php

    include "koneksi.php";

        //mengambil data inputan
        $nama_mhs = $_POST['nama'];
        $npm_mhs = $_POST['npm'];
        $prodi_mhs = $_POST['prodi'];

        $proses =  mysqli_query($koneksi,"INSERT INTO mahasiswa (nama_mahasiswa, npm, prodi) 
        VALUES ('".$nama_mhs."','".$npm_mhs."','".$prodi_mhs."') ")
        or die (mysqli_error($koneksi));

        if($proses){
            echo "
                    <script>
                        alert('Data Berhasil Disimpan');
                        window.location.href='form.php';
                        </script>";
        } else echo "<script>
                        alert('Data Gagal Disimpan');
                        window.location.href='form.php';
                    </script>";

?>