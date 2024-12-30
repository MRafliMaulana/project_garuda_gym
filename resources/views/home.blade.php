<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/styleHome.css') }}">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <title>Home</title>
</head>
<body>
  <nav class="navbar">
    <div class="logo">
    <a href="" class="logo">GarudaGym</a>
    </div>
    <div class="menu-nav">
      <a href="/home" class="active">Home</a>
      <a href="/Fasilitas">Fasilitas</a>
      <a href="/Pendaftaran">Pendaftaran</a>
      <a href="/lokasi">Lokasi</a>
      <a href="/Kontak">Kontak</a>
      <a href="/">Logout</a>
    </div>
  </nav>
  <main>
    <div class="hero-secttion">
      <div class="aksi">
        <h1>Selamat Datang</h1>
        <p>Disini kamu bisa mencapai tubuh impianmu</p>
      </div>
      <div class="gambar">
        <div class="gambar-1">
          <img src="{{ asset('images/pretty-fitness-girl-putting-effort-into-exercising-using-heavy-dumbbells-side-view-confident-removebg-preview.png') }}" alt="" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        </div>
        <div class="gambar-2">
          <img src="{{ asset('images/shirtless-bodybuilder-jumping-place-removebg-preview.png') }}" alt=""data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        </div>
      </div>
      {{-- <div class="gambar-gym">
      </div>
      <div class="gambar2">
    </div> --}}
  </main>
  <script>
    AOS.init();
  </script>
</body>
</html>
