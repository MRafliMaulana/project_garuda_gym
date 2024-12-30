<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GarudaGym - Lokasi</title>
  <link rel="stylesheet" href="{{ asset('css/styleLokasi.css') }}">
</head>
<body>
  <!-- Navigation Bar -->
  <nav class="navbar">
    <div class="logo">
      <a href="#">GarudaGym</a>
    </div>
    <div class="menu-nav">
      <a href="/home">Home</a>
      <a href="/Fasilitas">Fasilitas</a>
      <a href="/Pendaftaran">Pendaftaran</a>
      <a href="/lokasi" class="active">Lokasi</a>
      <a href="/Kontak">Kontak</a>
      <a href="/">Logout</a>
    </div>
  </nav>

  <!-- Lokasi Section -->
  <section class="lokasi">
    <div class="lokasi-container">
      <h1>Lokasi Kami</h1>
      <p>
        GarudaGym terletak di pusat kota yang sangat strategis, mudah dijangkau oleh semua moda transportasi dan dikelilingi oleh berbagai fasilitas umum.
      </p>
      <!-- Google Maps Embed -->
      <div class="lokasi-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.366673825291!2d110.38401897453855!3d-7.750877076850237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a598e4d774c0b%3A0x889c27b319f38dc5!2sGaruda%20fitnes%20403!5e0!3m2!1sid!2sid!4v1734443481594!5m2!1sid!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>
</body>
</html>
