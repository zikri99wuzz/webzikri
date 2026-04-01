<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kegiatan Lebaran - Lailatul Zikri</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            scroll-behavior: smooth;
        }
        .hero-section {
            background: linear-gradient(rgba(46, 125, 50, 0.8), rgba(46, 125, 50, 0.8)), 
                        url('https://images.unsplash.com/photo-1584551246679-0daf3d275d0f?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0; /* padding dikurangi agar header tidak terlalu tinggi */
        }
        
        /* UKURAN FOTO PROFIL DIUBAH DI SINI */
        .profile-img {
            width: 140px;  /* Ukuran lebih proporsional */
            height: 140px; /* Ukuran lebih proporsional */
            border-radius: 50%;
            border: 4px solid white;
            object-fit: cover;
            transition: 0.3s;
        }
        
        .profile-img:hover { transform: scale(1.05); }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        .card:hover { transform: translateY(-10px); }
        .img-kegiatan {
            height: 220px;
            object-fit: cover;
        }
        footer {
            background-color: #1b5e20;
            color: white;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">LZ TECH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan Lebaran</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header id="profil" class="hero-section text-center">
        <div class="container">
            <img src="{{ asset('img/profil2.jpg') }}" class="profile-img mb-4 shadow" alt="Foto Lailatul Zikri">
            <h1 class="display-5 fw-bold">Lailatul Zikri</h1>
            <p class="lead">Mahasiswa Pendidikan Teknik Informatika Komputer (Semester 6)</p>
            <p><i class="bi bi-building"></i> UIN Sjech M. Djamil Djambek Bukittinggi</p>
        </div>
    </header>

    <main id="kegiatan" class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Kegiatan Lebaran Saya</h2>
            <p class="text-muted">Implementasi Materi 1-7: Dokumentasi Idul Fitri 1447H</p>
            <hr class="mx-auto bg-success" style="width: 80px; height: 4px;">
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/sholat3.jpg') }}" class="img-kegiatan" alt="Sholat Idul Fitri">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-success">1. Sholat Idul Fitri</h5>
                        <p class="card-text text-muted small">Melaksanakan ibadah Sholat Id di pagi hari yang fitri bersama masyarakat sekitar di lapangan terbuka.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/silaturahmi.jpg') }}" class="img-kegiatan" alt="Silaturahmi">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-success">2. Silaturahmi</h5>
                        <p class="card-text text-muted small">Berkunjung ke rumah sanak saudara untuk saling bermaaf-maafan dan mempererat tali persaudaraan.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('img/warung.jpg') }}" class="img-kegiatan" alt="Menjaga Warung">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-success">3. Menjaga Warung</h5>
                        <p class="card-text text-muted small">Saya membantu orang tua menjaga warung di shift malam karena ramainya pemudik. Alhamdulillah ramai pembeli sehingga saya fokus membantu di rumah dan silaturahmi ke sanak keluarga.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="bg-white py-5 border-top border-bottom shadow-sm">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold text-success">7</h3>
                    <p class="text-muted small mb-0">Materi Diimplementasi</p>
                </div>
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold text-success">Laravel 11</h3>
                    <p class="text-muted small mb-0">Framework MVC</p>
                </div>
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold text-success">Bootstrap</h3>
                    <p class="text-muted small mb-0">Responsive Design</p>
                </div>
                <div class="col-6 col-md-3">
                    <h3 class="fw-bold text-success">Blade</h3>
                    <p class="text-muted small mb-0">Templating Engine</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="kontak" class="py-5">
        <div class="container text-center">
            <h5 class="fw-bold mb-3">Lailatul Zikri</h5>
            <p class="small opacity-75 mb-1">Mahasiswa PTIK Semester 6</p>
            <p class="small opacity-75 mb-3"><i class="bi bi-whatsapp"></i> 082283629962</p>
            
            <div class="py-2">
                <a href="https://www.instagram.com/lailatul_zikri" target="_blank" class="text-white mx-2 fs-4"><i class="bi bi-instagram"></i></a>
                <a href="mailto:zikrilailatul0@gmail.com" class="text-white mx-2 fs-4"><i class="bi bi-envelope"></i></a>
                <a href="https://github.com/zikri99wuzz?tab=repositories" class="text-white mx-2 fs-4"><i class="bi bi-github"></i></a>
            </div>
            
            <hr class="bg-white opacity-25 my-4">
            <p class="mb-0 small opacity-50">&copy; 2026 UIN Sjech M. Djamil Djambek Bukittinggi</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>