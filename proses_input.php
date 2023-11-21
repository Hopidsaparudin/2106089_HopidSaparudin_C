<?php
$db = mysqli_connect("localhost", "root", "", "2106089_Hopid");
if (!$db) {
    echo "<script>
                alert('database tidak terhubung')
            </script>";
};

$nama = $_POST['nama'];
$password = $_POST['password'];
$jenis = $_POST['jenis'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];



$query = "INSERT INTO hopid_tabel_qurban VALUES(NULL,'$nama','$password','$jenis','$jumlah','$tanggal')";
mysqli_query($db, $query);
echo "<script>alert('data berhasil ditambahkan')</script>";
echo "<script>window.location='./index.php'</script>";
?>