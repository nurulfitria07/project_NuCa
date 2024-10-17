<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NuCa Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">NuCa Klinik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi</a>
                    </li>
                </ul>
                <a href="/login" class="btn btn-outline-primary ms-2">Sign In</a>
                <a href="/login" class="btn btn-primary ms-2">Sign Up</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section container">
        <div class="hero-content">
            <h1>Kami Peduli tentang kesehatan Anda</h1>
            <p>Kesehatan yang lebih baik adalah tujuan sejati dari kehidupan. NuCa Klinik siap membantu Anda meraih kesehatan yang optimal.</p>
            <a href="#" class="btn btn-custom">Lihat Jadwal Dokter</a>
            <div class="search-form mt-4">
                <form class="d-flex">
                    <input type="text" class="form-control" placeholder="Nama Dokter">
                    <select class="form-select ms-2">
                        <option selected>Spesialis</option>
                        <option value="1">Spesialis Jantung</option>
                        <option value="2">Gigi</option>
                        <option value="3">Bedah</option>
                        <option value="3">Penyakit Dalam</option>
                    </select>
                    <button class="btn btn-custom ms-2">Cari</button>
                </form>
            </div>
        </div>
        <div class="doctor-image">
            <img src="img/doctor_welcome.jpg" alt="Dokter" class="img-fluid">
        </div>
    </section>

    <!-- Section Layanan Medis -->
<section class="container my-5">
    <h2 class="text-center">Layanan Medis Kami</h2>
    <p class="text-center text-muted">Kami berdedikasi untuk memberikan pelayanan medis terbaik kepada Anda.</p>
    <div class="row text-center mt-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                <a href="#">
                    <img src="/img/lab.jpg" alt="Laboratorium" class="mb-3">
                    <h5>Laboratorium</h5>
                </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <a href="#">
                    <img src="/img/ambulance.jpg" alt="Ambulance" class="mb-3">
                    <h5>Layanan Ambulans</h5>
                </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <a href="/data-diri">
                        <img src="/img/reservasi.jpg" alt="Reservasi" class="mb-3">
                        <h5>Reservasi Online</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <a href="#">
                    <img src="/img/telfon.jpg" alt="Pusat Panggilan" class="mb-3">
                    <h5>Pusat Panggilan</h5>
                </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Jadwal Dokter -->
<section class="container my-5">
    <h2 class="text-center">Jadwal Dokter</h2>
    <p class="text-center text-muted">Lihat jadwal dokter kami yang tersedia untuk layanan di NuCa Klinik.</p>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-dark">
                <tr>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Ruang</th>
                    <th>Senin</th>
                    <th>Selasa</th>
                    <th>Rabu</th>
                    <th>Kamis</th>
                    <th>Jumat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dr. Cha Eun Jae</td>
                    <td>Spesialis Jantung</td>
                    <td>Ruang A</td>
                    <td>09:00 - 12:00</td>
                    <td>10:00 - 13:00</td>
                    <td>09:00 - 12:00</td>
                    <td>09:00 - 12:00</td>
                    <td>10:00 - 13:00</td>
                </tr>
                <tr>
                    <td>Dr. Seo Woo Jin</td>
                    <td>Penyakit Dalam</td>
                    <td>Ruang B</td>
                    <td>11:00 - 14:00</td>
                    <td>12:00 - 15:00</td>
                    <td>11:00 - 14:00</td>
                    <td>12:00 - 15:00</td>
                    <td>11:00 - 14:00</td>
                </tr>
                <tr>
                    <td>Dr. Park Eun Tak</td>
                    <td>Gigi</td>
                    <td>Ruang C</td>
                    <td>09:00 - 12:00</td>
                    <td>09:00 - 12:00</td>
                    <td>09:00 - 12:00</td>
                    <td>09:00 - 12:00</td>
                    <td>09:00 - 12:00</td>
                </tr>
                <tr>
                    <td>Dr. Kang Dong Joo</td>
                    <td>Bedah</td>
                    <td>Ruang D</td>
                    <td>13:00 - 16:00</td>
                    <td>13:00 - 16:00</td>
                    <td>13:00 - 16:00</td>
                    <td>13:00 - 16:00</td>
                    <td>13:00 - 16:00</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>


<!-- Section Temui Dokter Kami -->
<section class="container my-5 text-center">
    <h3>Temui Dokter Kami</h3>
    <p class="text-muted">NuCa Klinik menyediakan dokter berpengalaman yang siap melayani Anda.</p>
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card text-center border-0 shadow-sm">
                <div class="card-body">
                    <img src="/img/doctor1.jpg" alt="Dr. Cha Eun Jae" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                    <h5>Dr. Cha Eun Jae</h5>
                    <p class="text-muted">Spesialis Jantung</p>
                    <a href="/reservasi?doctor=Dr. Cha Eun Jae" class="btn btn-outline-primary">Reservasi</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center border-0 shadow-sm">
                <div class="card-body">
                    <img src="/img/doctor2.jpg" alt="Dr. Seo Woo Jin" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                    <h5>Dr. Seo Woo Jin</h5>
                    <p class="text-muted">Penyakit Dalam</p>
                    <a href="/reservasi?doctor=Dr. Seo Woo Jin" class="btn btn-outline-primary">Reservasi</a>
                </div>
            </div>
        </div>
        <!-- Tambahkan lebih banyak dokter di sini sesuai kebutuhan -->
        <div class="col-md-3">
            <div class="card text-center border-0 shadow-sm">
                <div class="card-body">
                    <img src="/img/doctor3.jpg" alt="Dr. Park Eun Tak" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                    <h5>Dr. Park Eun Tak</h5>
                    <p class="text-muted">Gigi</p>
                    <a href="/reservasi?doctor=Dr. Park Eun Tak" class="btn btn-outline-primary">Reservasi</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center border-0 shadow-sm">
                <div class="card-body">
                    <img src="/img/doctor4.jpg" alt="Dr. Kang Dong Joo" class="rounded-circle mb-3" style="width: 150px; height: 150px;">
                    <h5>Dr. Kang Dong Joo</h5>
                    <p class="text-muted">Bedah</p>
                    <a href="/reservasi?doctor=Dr. Kang Dong Joo" class="btn btn-outline-primary">Reservasi</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Logo Below -->
<section class="logo-section text-center mt-5">
    <a href="#" class="btn btn-primary mt-3">See More</a><br><br>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>