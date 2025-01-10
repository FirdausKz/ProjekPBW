<?php
    include "connection.php";
    session_start();

    if (!isset($_SESSION['isLoggedIn']))
    {
        header("Location: login.php"); 
    }

    
    $judul = $_POST ['judul'];
    $tahun = $_POST ['tahun'];
    $id_penulis = $_POST ['id_penulis'];

    $dbh = $dbh->prepare("INSERT INTO buku (judul,tahun,id_penulis, created_by, created_at) VALUES (?,?,?,?,?)");
    $dbh->execute([$judul, $tahun, $id_penulis,$_SESSION ['userid'], date("Y-m-d H:i:s")]);

    header("Location: tabel.php");

    