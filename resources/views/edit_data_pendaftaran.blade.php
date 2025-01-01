<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota - Garuda Gym</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styleEdit_data.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Edit Data Anggota</h1>
            <p>Perbarui informasi data anggota dengan mudah.</p>
        </header>

        <div class="form-container">
            <form action="/edit_data_pendaftaran/{{ $pendaftaran->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-input" value="{{ $pendaftaran->nama }}" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-input" value="{{ $pendaftaran->alamat }}" required>
                </div>

                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-input" value="{{ $pendaftaran->pekerjaan }}" required>
                </div>

                <div class="form-group">
                    <label for="telepon">No Telepon</label>
                    <input type="text" id="telepon" name="telepon" class="form-input" value="{{ $pendaftaran->telepon }}" required>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn-primary">Simpan Perubahan</button>
                    <a href="/data_masuk" class="btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
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
