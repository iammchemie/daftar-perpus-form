<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pengunjung Perpustakaan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; background-color: #f9f9f9; }
        .container { max-width: 400px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input[type="text"], input[type="tel"] { width: 100%; padding: 10px; margin: 8px 0 20px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; }
        button:hover { background-color: #45a049; }
        .success { background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 4px; border: 1px solid #c3e6cb; }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Peminjaman Buku</h2>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama      = htmlspecialchars($_POST['nama']);
        $no_hp     = htmlspecialchars($_POST['no_hp']);
        $institusi = htmlspecialchars($_POST['institusi']);

        echo "<div class='success'>
                <strong>Pendaftaran Berhasil!</strong><br><br>
                Nama: $nama <br>
                No. HP: $no_hp <br>
                Sekolah/Institusi: $institusi
              </div>";
              
    }
    ?>

    <!-- Form HTML -->
    <form method="POST" action="">
        <label for="nama">Nama Pengunjung:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>

        <label for="no_hp">Nomor HP:</label>
        <input type="tel" id="no_hp" name="no_hp" placeholder="Contoh: 081234567890" required>

        <label for="institusi">Sekolah / Institusi:</label>
        <input type="text" id="institusi" name="institusi" placeholder="Nama sekolah/kampus/kantor" required>

        <button type="submit">Daftar & Pinjam</button>
    </form>
</div>

</body>
</html>