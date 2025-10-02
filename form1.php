<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
        }
        form {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 5px;
        }
        h2 {
            color: #333;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], textarea, select {
            width: 98%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"], input[type="checkbox"] {
            margin-right: 5px;
            vertical-align: middle; 
        }
        
        .inline-item {
            display: inline-block; 
            margin-right: 15px;
            font-weight: normal;
        }

        .group-label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        button {
            background-color: #5cb85c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 4px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Biodata Mahasiswa</h2>
    <form action="" method="post">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>

        <label for="prodi">Program Studi:</label>
        <select id="prodi" name="prodi" required>
            <option value="">-- Pilih --</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Elektro">Teknik Elektro</option>
        </select>

        <label class="group-label">Jenis Kelamin:</label>
        <span class="inline-item">
            <input type="radio" id="jk_pria" name="jenis_kelamin" value="Pria" required>
            <label for="jk_pria" style="display: inline; font-weight: normal;">Pria</label>
        </span>
        <span class="inline-item">
            <input type="radio" id="jk_wanita" name="jenis_kelamin" value="Wanita">
            <label for="jk_wanita" style="display: inline; font-weight: normal;">Wanita</label>
        </span>
        <br><br>

        <label class="group-label">Hobi:</label>
        <span class="inline-item">
            <input type="checkbox" id="hobi1" name="hobi[]" value="Membaca">
            <label for="hobi1" style="display: inline; font-weight: normal;">Membaca</label>
        </span>
        <span class="inline-item">
            <input type="checkbox" id="hobi2" name="hobi[]" value="Olahraga">
            <label for="hobi2" style="display: inline; font-weight: normal;">Olahraga</label>
        </span>
        <span class="inline-item">
            <input type="checkbox" id="hobi3" name="hobi[]" value="Programming">
            <label for="hobi3" style="display: inline; font-weight: normal;">Programming</label>
        </span>
        <br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4" required></textarea>

        <button type="submit">Kirim Biodata</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $prodi = $_POST['prodi'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "Tidak ada";
        $alamat = $_POST['alamat'];
        
        echo "<h3>Hasil Biodata Mahasiswa:</h3>";
        echo "<table>";
        echo "<tr><th>Data</th><th>Keterangan</th></tr>";
        echo "<tr><td>Nama Lengkap</td><td>$nama</td></tr>";
        echo "<tr><td>NIM</td><td>$nim</td></tr>";
        echo "<tr><td>Program Studi</td><td>$prodi</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>$jenis_kelamin</td></tr>";
        echo "<tr><td>Hobi</td><td>$hobi</td></tr>";
        echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
        echo "</table>";
    }
    ?>

    <hr>

    <h2>Form Pencarian</h2>
    <form action="" method="get">
        <label for="keyword">Kata Kunci Pencarian:</label>
        <input type="text" id="keyword" name="keyword" placeholder="Masukkan kata kunci...">
        <button type="submit">Cari</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['keyword'])) {
        $keyword = htmlspecialchars($_GET['keyword']);
        echo "<p>Anda mencari data dengan kata kunci: <strong>$keyword</strong></p>";
    }
    ?>

</div>

</body>
</html>

