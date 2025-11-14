<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Tamu</title>
</head><center>
<body>
    <h1>PENDAFTARAN TAMU</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/tamu">
        @csrf
        <label>NAMA</label><br>
        <input type="text" name="nama"><br><br>

        <label>ALAMAT</label><br>
        <input type="text" name="alamat"><br><br>

        <label>EMAIL</label><br>
        <input type="email" name="email"><br><br>

        <label>TELEPON</label><br>
        <input type="text" name="telepon"><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
<footer >
<br><br>
<a href="/tamu/daftar" style="padding:8px 16px; background:#333; color:#fff; text-decoration:none; border-radius:4px;">Data Tamu</a>
</footer></center>
</html>

