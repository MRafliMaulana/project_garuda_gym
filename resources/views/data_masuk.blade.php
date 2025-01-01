<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Masuk - Garuda Gym</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styleData_masuk.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Data Anggota</h1>
            <p>Kelola data anggota yang telah mendaftar dengan mudah.</p>
        </header>

        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>No Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendaftaran as $index => $data)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->pekerjaan }}</td>
                        <td>{{ $data->telepon }}</td>
                        <td class="action-buttons">
                            <a href="/edit_data_pendaftaran/{{ $data->id }}" >Edit</a>
                            <form action="/data_masuk/{{ $data->id }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="back-btn">
            <a href="/dashboard" class="btn-primary">Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
