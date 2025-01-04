<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Journal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .card-article {
            background-color: #858585;
            color: #e0e0e0;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        .card-article:hover {
            transform: scale(1.02);
        }
        .card-article img {
            border-bottom: 2px solid #ffffff;
            height: 250px ;
            overflow: hidden;
        }
        .card-article .card-body {
            padding: 15px;
        }
        .card-article .card-title {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">BAMBUCOI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="article.html">Article</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="gallery.html">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="AllAssets/bambu1.jpeg" class="d-block w-100" height="800px" alt="Isagi Yoichi">
                <div class="carousel-caption d-none d-md-block text-light">
                    <h5>1</h5>
                    <p>Bambu Brow</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="AllAssets/bambu2.jpeg" class="d-block w-100" height="800px" alt="Nagi Seishiro">
                <div class="carousel-caption d-none d-md-block text-light">
                    <h5>2</h5>
                    <p>Bambu Kah</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="AllAssets/bambu3.jpg" class="d-block w-100" height="800px" alt="Bachira Meguru">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <h5>3</h5>
                    <p>Bambu Bang</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

  
    <blockquote class="blockquote text-center my-4">
        <p class="mb-0">Daftar Bambu</p>
    </blockquote>

    
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-article">
                    <img src="AllAssets/bambu4.jpeg" class="card-img-top" alt="Bambu Panjang">
                    <div class="card-body">
                        <h5 class="card-title">Kamis, 3 Oktober 2024</h5>
                        <p class="card-text">Memasuki minggu ke-3 perkuliahan, seperti biasa matkul sore ini adalah Pemrogaman Berbasis Web. 
                            Awalnya kami belajar tentang penggunaan table, materi ini cukup mudah untuk dipahami pemula seperti aku.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-article">
                    <img src="AllAssets/bambu6.jpeg" class="card-img-top" alt="Itoshi Rin">
                    <div class="card-body">
                        <h5 class="card-title">Jumat, 4 Oktober 2024</h5>
                        <p class="card-text">Mandi pagi, kemudian sarapan seperti biasa. Saat akan memasuki kelas basis data, dosen tiba tiba mengumumkan 
                            bahwa kelas hari ini kosong. Seketika menyesal untuk berangkat, tau gitu lanjur mimir aja tadi 😴😴</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-article">
                    <img src="AllAssets/bambu7.jpeg" class="card-img-top" alt="Chigiri Hyoma">
                    <div class="card-body">
                        <h5 class="card-title">Sabtu, 5 Oktober 2024</h5>
                        <p class="card-text">Pagi ini saya ada kegiatan BTNG pada gedung H. Peranku disini adalah sebagai pengajar, masih pemula udah 
                            jadi pengajar aja bjir 🗿🗿. Gapapa la penting dapet konsum 😋😋, mayan dapet risol ma arem-arem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex justify-content-center my-4">
        <button class="btn btn-primary">Selanjutnya</button>
    </div>

    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="AllAssets/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 align-self-start">
                <h1>BAMBUCOI</h1>
            </div>
            <div class="col-md-8 align-self-center">
                <p>Bambucoi berisi tentang keseharianku saat sedang berada di masa perkuliahan. Mulai dari pengalaman sehari hari sampai keluh kesah pun ada disini. Selamat Membaca ! ! !</p>
            </div>
        </div>
    </div>

  
    <footer class="text-center bg-light p-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
          </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
          </svg>
        <div> Bhima Pradita Hidayat &copy; 2024</div>
    </footer>
</body>
</html>