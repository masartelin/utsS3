<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $nama_event = $_POST['nama_event'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    
   
    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO event (nama_event,lokasi,tanggal,jumlah_peserta) 
    VALUES ('$nama_event','$lokasi','$tanggal','$jumlah_peserta')";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>