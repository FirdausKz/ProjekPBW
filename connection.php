<?php

    try{
        $dbh = new PDO ("mysql:host=localhost; dbname=perpustakaan", 'root','');   
    }
    catch(PDOException $e){
        echo"Koneksi gagal ", $e->getMessage();
    }