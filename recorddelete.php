<?php
    include "koneksi.php";

    if (isset($_POST['submitdelete'])) {

    $sql=mysqli_query($koneksi,"DELETE FROM data_kriteria;") or die($conn);
    $sql1=mysqli_query($koneksi,"DELETE FROM ket_nasabah;") or die($conn);
    $sql2=mysqli_query($koneksi,"DELETE FROM gap_pm;") or die($conn);
    $sql3=mysqli_query($koneksi,"DELETE FROM hasil_pm;") or die($conn);
    $sql3=mysqli_query($koneksi,"DELETE FROM hasil_saw;") or die($conn);
    $sql3=mysqli_query($koneksi,"DELETE FROM hasil_wp;") or die($conn);
    if ($sql && $sql1) {

		echo "<script>window.location='proses.php'</script>";
    }
	}
?>
