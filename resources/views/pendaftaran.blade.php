<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran - GarudaGym</title>
    <link rel="icon" type="image/png" href="images/dumbbell_9383480.png">
    <link rel="stylesheet" href="{{ asset('css/stylePendaftaran.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1><span>Garuda</span>Gym</h1>
            <nav>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/Fasilitas">Fasilitas</a></li>
                    <li><a href="/Pendaftaran" class="active">Pendaftaran</a></li>
                    <li><a href="/lokasi">Lokasi</a></li>
                    <li><a href="/Kontak">Kontak</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <section class="form-section">
                <h2>Formulir Pendaftaran</h2>
                <p>Isi data berikut untuk bergabung bersama kami</p>
                <form action="{{ route('pendaftaran.store') }}" method="POST">
                    @csrf
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" value="{{ old('nama') }}" required>
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan alamat Anda" value="{{ old('alamat') }}" required>
                    @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Masukkan pekerjaan Anda" value="{{ old('pekerjaan') }}" required>
                    @error('pekerjaan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <label for="telepon">No Telepon</label>
                    <input type="number" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" value="{{ old('telepon') }}" required>
                    @error('telepon')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit">Daftar Sekarang</button>
                </form>
            </section>
            <div class="gambar">
                <div class="ilustasi">
                  <img src="{{ asset('images/Forms-bro.png') }}" alt="">
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
