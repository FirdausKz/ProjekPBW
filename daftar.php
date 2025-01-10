
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        .navbar .nav-link {
            color: white 
        }

        .navbar .dropdown-menu .dropdown-item {
            color: black 
        }

        .navbar .dropdown-menu .dropdown-item:hover {
            color: white 
            background-color: #b50b17;
        }
    </style>
</head>
<body>
<section id="header">
        <nav class="navbar navbar-expand-lg" style="background-color: #7E99A3;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img id="logo1" src="Assets/punyakita.png" alt="Logo" height="50"
                        class="d-inline-block align-text-top m-1">
                </a>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" href="main.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="main.php#footer">About Us</a>
                        </li>
                        
                        
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <form action="logout.php"> 
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="30"  class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                              </svg>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <br>
    </section>
    
    <div class="container mt-3">
    <a href="tabel.php"> <button type="button" class="btn mt-3 mb-1 ms-1" style="background-color: #7E99A3; color:white "> KEMBALI </button> </a>
<table class="table table-striped mt-3">
<tr style="background-color: #7E99A3;; color:white">
    <th scope="col">id penulis</th>
    <th scope="col">Nama</th>
    <th scope="col">Judul Buku</th>
</tr>   
<?php
    include "connection.php";
    $dbh = $dbh->query("SELECT * FROM buku,penulis WHERE buku.id_penulis = penulis.id_penulis;");
    $data = $dbh->fetch(PDO::FETCH_ASSOC);   
?>
<tr>
    <td> <?php echo $data['id_penulis']; ?> </td>
    <td> <?php echo $data['nama']; ?> </td>
    <td> <?php echo $data['judul']; ?> </td>
</tr>
<?php

?>

<?php
    $no = 1;
    while($data = $dbh->fetch(PDO::FETCH_ASSOC))
    {
?>

<tr>
    <td> <?php echo $data['id_penulis']; ?> </td>
    <td> <?php echo $data['nama']; ?> </td>
    <td> <?php echo $data['judul']; ?> </td>
</tr>

<?php
    $no++;
    }
?>
</table> 
</div>
</body>
</html>