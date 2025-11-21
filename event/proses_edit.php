<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $nama = $_POST['nama_event'];
    $nisn = $_POST['lokasi'];
    $tp_lahir = $_POST['tanggal'];
    $tg_lahir = $_POST['jumlah_peserta'];
   

    #3. Query Insert (proses tambah data)
    $query = "UPDATE event SET nama_event='$nama_event', lokasi='$lokasi', tanggal='$tanggal', 
    jumlah_peserta='$jumlah_peserta' 
    WHERE id='$id'";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>