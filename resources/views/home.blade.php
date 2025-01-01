<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="images/dumbbell_9383480.png">
  <link rel="stylesheet" href="{{ asset('css/styleHome.css') }}">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Home</title>
</head>
<body>
  <nav class="navbar">
    <div class="logo">
    <a href="" class="logo"><span>Garuda</span>Gym</a>
    </div>
    <div class="menu-nav">
      <a href="/home" class="active">Home</a>
      <a href="/Fasilitas">Fasilitas</a>
      <a href="/Pendaftaran">Pendaftaran</a>
      <a href="/lokasi">Lokasi</a>
      <a href="/Kontak">Kontak</a>
      <a href="/logout">Logout</a>
    </div>
  </nav>
  <main>
    <div class="hero-secttion">
      <div class="aksi">
        <h1>Selamat Datang</h1>
        <h2>GARUDA GYM</h2>
        <p>Disini kamu bisa mencapai tubuh impianmu, Setiap tetes keringat yang kamu keluarkan di sini adalah investasi untuk tubuh yang lebih kuat, pikiran yang lebih tajam, dan hidup yang lebih sehat. Jangan berhenti sampai kamu bangga dengan hasilnya!</p>
        <div class="button-daftar">
          <a href="/Pendaftaran">Daftar Sekarang</a>
        </div>
      </div>

      <div class="gambar">
        <div class="ilustasi">
          <img src="{{ asset('images/Gym-rafiki.png') }}" alt="">
        </div>

      </div>

    
  </main>
  <script>
    AOS.init();
  </script>
</body>
</html>
