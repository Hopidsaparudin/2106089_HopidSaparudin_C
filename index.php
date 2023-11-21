<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Panitia Qurban</title>
</head>

<body>
    <div class="container">
        <h2>FORM <br> PENDAFTARAN HEWAN QURBAN</h2>
        <form action="proses_input.php" method="post">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <!-- <label for="jenis"></label> -->
            Jenis Hewan Qurban:
            <select id="jenis" name="jenis" required>
                <option value="sapi">Sapi</option>
                <option value="kambing">Kambing</option>
            </select>

            <label for="jumlah">Jumlah Hewan:</label>
            <input type="number" id="jumlah" name="jumlah" required>

            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <input type="submit" value="Daftar" name="submit">
        </form>
    </div>
</body>

</html>