<?php
    include "connection.php";
    session_start();

    if (!isset($_SESSION['isLoggedIn']))
    {
        header("Location: login.php"); 
    }

    $id = $_POST['id'];
    $judul = $_POST ['judul'];
    $tahun = $_POST ['tahun'];
    $id_penulis = $_POST ['id_penulis'];

    $stmt = $dbh->prepare("UPDATE buku SET judul = ?, tahun = ?, id_penulis= ? WHERE id = ?");
    $stmt->execute([$judul, $tahun,$id_penulis, $id]);

    if ($stmt->rowCount() > 0) {
        echo "<script>alert('Data berhasil diperbarui');</script>";
    } else {
        echo "<script>alert('Tidak ada perubahan pada data');</script>";
    }

    header("Location: tabel.php");
    exit;