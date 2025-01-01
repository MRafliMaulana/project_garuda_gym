<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/dashboard_16912971.png">
    <title>Dashboard Admin - Garuda Gym</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styleDashboard.css">
</head>
<body>
    <aside class="sidebar">
        <div>
            <h2>Garuda Gym</h2>
            <nav>
                <ul>
                    <li><a href="/dashboard" class="active">Dashboard</a></li>
                    <li><a href="/data_masuk">Data Anggota</a></li>
                    <li><a href="/pesan_masuk">Pesan Masuk</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </nav>
        </div>
    </aside>

    <main class="main-content">
        <header>
            <h1>Selamat Datang, Admin</h1>
            <p>Kelola data dan pantau statistik anggota gym dengan mudah.</p>
        </header>

        <section class="cards">
            <div class="card">
                <h3>Total Anggota</h3>
                <p>{{ $totalPendaftaran }}</p>
            </div>
            <div class="card">
                <h3>Pesan Masuk</h3>
                <p>{{ $totalKontak }}</p>
            </div>
        </section>

        <footer class="footer">
            &copy; 2024 Garuda Gym. All Rights Reserved.
        </footer>
    </main>
</body>
</html>
