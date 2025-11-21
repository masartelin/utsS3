<?php 
    #1. koneksi database
    include_once("../koneksi.php");

    #2. Ambil ID dari GET dan pastikan angka
    if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        die("ID tidak valid!");
    }
    
    $idhapus = (int)$_GET['id'];   // diubah jadi integer biar aman sedikit

    #3. Query hapus yang benar (pakai ID yang bener, bukan $modalohapus)
    $qry = "DELETE FROM event WHERE id = '$idhapus' LIMIT 1";

    #4. Jalankan query + cek apakah berhasil
    $hapus = mysqli_query($koneksi, $qry);

    if($hapus) {
        // Optional: kasih pesan sukses lewat URL
        header("location:index.php?status=hapus_sukses");
    } else {
        // Kalau gagal
        header("location:index.php?status=hapus_gagal");
    }
    exit;
?>