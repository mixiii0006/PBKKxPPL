<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Sistem Penjadwalan Fakultas Kedokteran</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
   
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            
            background-size: cover;
            background-position: center;background-image: url('/images/background.jpg');
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
        }
        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.6);
        }
        .features-section {
            padding: 50px 0;
        }
        .feature-box {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section d-flex justify-content-center align-items-center">
        <div>
            <h1>Manajemen Sistem Penjadwalan</h1>
            <p>Atur Jadwal Ruangan dan Dosen Fakultas Kedokteran dengan Mudah</p>
            <a href="#features" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Fitur Unggulan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box p-4">
                        <img src="/images/ruangan.jpg" alt="Penjadwalan Ruangan" class="img-fluid mb-3">
                        <h4>Penjadwalan Ruangan</h4>
                        <p>Atur jadwal penggunaan ruangan secara efisien dan real-time.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box p-4">
                        <img src="https://source.unsplash.com/200x200/?professor,teaching" alt="Penjadwalan Dosen" class="img-fluid mb-3">
                        <h4>Penjadwalan Dosen</h4>
                        <p>Integrasikan jadwal mengajar dosen dengan kalender akademik.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box p-4">
                        <img src="https://source.unsplash.com/200x200/?hospital,planning" alt="Manajemen Jadwal" class="img-fluid mb-3">
                        <h4>Manajemen Jadwal</h4>
                        <p>Optimalkan alokasi waktu dan pemanfaatan fasilitas dengan mudah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Fakultas Kedokteran. All rights reserved.</p>
    </footer>

    <!-- Link to Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
