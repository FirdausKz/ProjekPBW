<?php
    include "connection.php";
    session_start();

    if (!isset($_SESSION['isLoggedIn']))
    {
        header("Location: login.php"); 
    }

    $id = $_GET['id'];
    $dbh = $dbh->prepare("SELECT * FROM buku WHERE id = ?");
    $dbh->execute([$id]);

    if($dbh->rowCount() == 1 )
    {
        $data = $dbh->fetch(PDO::FETCH_ASSOC);
?>
    <div class=" d-flex justify-content-center align-items-center vh-100 " style="background-color:  #7E99A3;">
        <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-5 w-50">
        <form method="POST" action="aksiedit.php">
        Judul: <input  name="judul" type="text" value="<?php echo $data['judul']?>" class="form-control"><br>
        Tahun <input name="tahun" type="text" value="<?php echo $data['tahun']?>" class="form-control"> <br>
        id penulis <input name="id_penulis" type="text" value="<?php echo $data['id_penulis']?>" class="form-control"> <br>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>  
        </div>
        </div>
    </div>
<html> 
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
    
</html>    
    

<?php 
    }
    else {
        echo" <script> alert('Data tidak di temukan')</script>";
        header("location:main.php");

    }

