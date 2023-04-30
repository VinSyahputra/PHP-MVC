<?php include("pages/parts/header.php"); ?>
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php $base_url ?>index.php?pages=dashboard">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row justify-content-center justify-content-sm-end">
        <!-- <div class="col-5">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    Selamat Datang di Sistem Informasi <b>E - KOST</b> by Vin.Site. Sistem Informasi yang digunakan untuk berbagai macam keperluan seperti melihat informasi kamar kost, pembayaran kost, dan informasi Wi-Fi.
                </div>
            </div>
        </div> -->
        <!-- Sales Card -->
        <div class="col-10 col-sm-3">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Sisa <span>| Hari</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-clock"></i>
                        </div>
                        <div class="ps-3">
                            <h6>145</h6>
                            <span class="text-success small pt-1 fw-bold">Senin</span> <span class="text-muted small pt-2 ps-1">30 Maret 2024</span>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Galery</h5>

            <!-- Slides with indicators -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="vendor/assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="vendor/assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="vendor/assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div><!-- End Slides with indicators -->

        </div>
    </div>
</section>

</main><!-- End #main -->
<?php include("pages/parts/footer.php"); ?>
</body>

</html>