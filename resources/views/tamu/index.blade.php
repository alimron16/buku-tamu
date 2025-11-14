<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Tamu</title>
</head><center>
<body>
    <h1>DAFTAR TAMU</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataTamu as $index => $tamu)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $tamu->nama }}</td>
                    <td>{{ $tamu->alamat }}</td>
                    <td>{{ $tamu->email }}</td>
                    <td>{{ $tamu->telepon }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <a href="/tamu" style="padding:8px 16px; background:#333; color:#fff; text-decoration:none; border-radius:4px;">Tambah Tamu</a>
</body></center>
</html>

