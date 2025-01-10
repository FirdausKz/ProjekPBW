<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] !== true) {
    header("Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .nav-link {
            color: white;
            font-size: 18px;
        }

        h3 {
            margin-top: 20px;
            margin-left: 20px;
            margin-bottom: 0px;
        }

        .trending img {
            margin: 10px;
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
                            <a class="nav-link" href="#article">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Menu
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="daftar.php">Daftar Buku</a></li>
                                <li><a class="dropdown-item" href="tabel.php">Input Buku</a></li>
                                <li><a class="dropdown-item" href="#gallery">Gallery</a></li>
                              </ul>                              
                        </li>
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

    <section id="hero" class="p-3 mb-2 text-center p-5" style="background-color: #7E99A3; color: white;">
        <img src="Assets/punyakita.png"
            style="width: 400px; height: 300px; float: right; margin-left: 100px; margin-right: 100px; ">
        <h1 class="fw-bold display-4 pb-3">Perpus</h1>
        <p>Perpus adalah situs web pendataan buku secara online dari Internet Archive yang bertujuan untuk menciptakan halaman web untuk setiap buku yang pernah diterbitkan. 
            Bayangkan, jutaan buku dari berbagai genre dan bahasa dapat diakses di sini! Tidak hanya buku-buku klasik, Perpus juga menyediakan buku-buku modern yang dapat kamu pilih dan data secara online.
            Prosesnya sangat mudah; cukup buat akun, dan kamu dapat mulai mengelola buku-buku yang kamu sukai. Inilah yang membuat Perpus menjadi komunitas pembaca yang saling mendukung dan berbagi.
        </p>

    </section>
 
    <section id="article">
        <h3>Terpopuler
            <hr>
        </h3>
        <div class="trending">
            <img src="https://mediapijar.com/wp-content/uploads/2016/11/FA-GADIS-KRETEK-ratih-kumala-fix-httpbukuygkubaca.blogspot.co_.id201205gadis-kretek-draft.html.jpg"
                class="img-fluid" width="200">
            <img src="https://cdn.gramedia.com/uploads/items/9786020366517_Cantik-Itu-Luka-Hard-Cover---Limited-Edition.jpg"
                class="img-fluid" width="195">
            <img src="https://cdn.gramedia.com/uploads/items/9786239712716.jpg"
                class="img-fluid" width="215">
            <img src="https://cdn.gramedia.com/uploads/items/img20220205_15065175.jpg"
                class="img-fluid" width="200">
            <img src="https://awsimages.detik.net.id/community/media/visual/2017/06/16/2769fd27-c3a2-4afb-a3c9-3ef087241901.jpg?w=780&q=90"
                class="img-fluid" width="200">
                <img src="https://cdn.gramedia.com/uploads/items/pulang_tere_liye.jpeg"
                class="img-fluid" width="200">
        </div>
        <h3>Top Tere Liye
            <hr>
        </h3>
        <div class="trending">
            <img src="https://1.bp.blogspot.com/--kpCVJPBdEo/VzU32DFLJgI/AAAAAAAAAEo/EX6e8xQQTIUyUsm2VPXmoIIW54_zvGJawCLcB/s1600/jual-novel-hujan-karya-tere-liye.jpg"
                class="img-fluid" width="200">
            <img src="https://cdn.gramedia.com/uploads/items/9786239554569.jpg"
                class="img-fluid" width="200">
            <img src="https://cdn.gramedia.com/uploads/items/9786239554583.jpg"
                class="img-fluid" width="200">
            <img src="https://cdn.gramedia.com/uploads/items/REMBULAN_TENGGELAM_DIWAJAHMU.jpg"
                class="img-fluid" width="200">
            <img src="https://cdn.gramedia.com/uploads/items/pulang_tere_liye.jpeg"
                class="img-fluid" width="200">
                <img src="https://cdn.gramedia.com/uploads/items/pulang_tere_liye.jpeg"
                class="img-fluid" width="200">
        </div>
        <h3>Top Books
            <hr>
        </h3>
        <div class="trending">
            <img src="https://cdn.gramedia.com/uploads/picture_meta/2022/12/7/bfqtvu2tmnjv8gflwayyvr.jpg"
            class="img-fluid" width="200">
        <img src="https://i.pinimg.com/originals/fd/0f/38/fd0f38dba4384005eb944e35ee87d6c7.jpg"
            class="img-fluid" width="190">
        <img src="https://cdn.gramedia.com/uploads/items/REMBULAN_TENGGELAM_DIWAJAHMU.jpg"
            class="img-fluid" width="200">
        <img src="https://1.bp.blogspot.com/-DSYRuFFQo_Q/WkciRmb49hI/AAAAAAAAFSI/W5Mzyy33VGkEb0Xntxk9cimBodULoV-cQCLcBGAs/s1600/cover-novel-bintang-karya-tere-liye.jpg"
            class="img-fluid" width="200">
            <img src="https://cdn.gramedia.com/uploads/picture_meta/2023/8/12/qxt63qkjxklcjyfcfbwr8w.jpg"
                class="img-fluid" width="200">
                <img src="https://cdn.gramedia.com/uploads/items/pulang_tere_liye.jpeg"
                class="img-fluid" width="200">
        </div>
    </section>

    <section id="gallery" class="p-3 mb-2 text-center p-5" >
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Daftar Buku <hr></h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i.pinimg.com/736x/c6/8c/a5/c68ca5856a957b894ef38363454e2187.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/a0/c9/42/a0c9426ad639ecf3bfcf43bb7ef45809.jpg"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="text-center p-4" style="background-color: #7E99A3; color: white;">
            © 2025 Copyright:
            <a class="text-reset fw-bold" href="">openlibrary.org</a>
        </div>
    </footer>
    
</body>

</html>