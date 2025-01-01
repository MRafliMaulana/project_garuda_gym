<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarudaGym - Kontak</title>
    <link rel="icon" type="image/png" href="images/dumbbell_9383480.png">
    <link rel="stylesheet" href="{{ asset('css/styleKontak.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Container Utama -->
    <div class="container">
        <!-- Header -->
        <header>
            <h1><span>Garuda</span>Gym</h1>
            <nav>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/Fasilitas">Fasilitas</a></li>
                    <li><a href="/Pendaftaran">Pendaftaran</a></li>
                    <li><a href="/lokasi">Lokasi</a></li>
                    <li><a href="/Kontak" class="active">Kontak</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </nav>
        </header>

        <!-- Konten Utama -->
        <main>
            <div class="contact-section">
                <!-- Informasi Kontak -->
                <div class="info-section">
                    <h2>Kontak Kami</h2>
                    <p>Silakan kirimkan keluhan atau saran Anda melalui formulir di bawah ini:</p>
                </div>

                <!-- Formulir Keluhan -->
                <form action="{{ route('Kontak.store') }}" method="POST">
                    @csrf
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="nama" placeholder="Masukkan nama Anda" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

                    <label for="message">Keluhan/Saran:</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tulis keluhan atau saran Anda di sini..." required></textarea>

                    <button type="submit">Kirim</button>
                </form>
            </div>

            <!-- Bagian Gambar -->
            <div class="gambar">
                <div class="ilustasi">
                  <img src="{{ asset('images/Mail sent-rafiki.png') }}" alt="">
                </div>
        
              </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif
</body>
</html>
