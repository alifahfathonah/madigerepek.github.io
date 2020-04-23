<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Data nilai</title>
</head>
<body>
<?php
session_start();
if(empty($_SESSION['namauser']) and empty($_SESSION['kode']))
{
	echo "<p>Anda tidak berhak mengakses halaman ini.</p>";
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Sistem Informasi Kelulusan</title>
    <link rel="stylesheet" href="../css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../css/bootswatch.min.css">
    <script type="text/javascript" async="" src="./js/ga.js"></script>
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootswatch.js"></script>
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
          <a href="../index.php" class="navbar-brand">ASIK</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php?page=home">Beranda</a>
            </li>
            <li>
              <a href="index.php?page=data-siswa">Data Siswa</a>
            </li>
            <li>
              <a href="index.php?page=import">Import Data Siswa</a>
            </li>
            <li>
              <a href="index.php?page=data-nilai">Data Nilai</a>
            </li>
            <li>
              <a href="index.php?page=nilai">Import Nilai</a>
            </li>
            <li>
              <a href="index.php?page=user">User</a>
            </li>
            <li>
              <a href="index.php?page=hubungi">Pesan</a>
            </li>
            <li>
              <a href="index.php?page=logout">Logout</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://adikiss.net/" target="_blank">Developed by Adikiss</a></li>            
          </ul>
        </div>
  </div>
      </div>
      <table width="800" align="center">
  <tr>
    <td>
<h3>Data Nilai Siswa</h3>
<?php
include('../config.php');
$noujian = $_GET['noujian'];
$q = mysql_query("SELECT * FROM tbl_siswa where noujian = '$noujian'");
while($r = mysql_fetch_array($q))
{
  echo 'Nama : '.$r['name'].' <br>';
  echo 'No : '.$r['noujian'].' <br>';
  echo 'Jurusan : '.$r['jurusan'].' <br>';  
}
?>
<br>
<table class="table table-striped table-hover" border="1" cellpadding="5" cellspacing="0">
<tr class="info"><td>No.<td>nama mapel</td><td>nilai sekolah</td><td>nilai UN</td><td>nilai akhir</td></tr>
<?php
include('../config.php');
$noujian = $_GET['noujian'];
$q = mysql_query("SELECT * FROM tbl_siswa INNER JOIN tbl_nilai ON tbl_siswa.noujian=tbl_nilai.noujian where tbl_nilai.noujian = '$noujian' ");
$n = 1;
while($r = mysql_fetch_array($q))
{
	echo '<tr><td>'.$n.'</td><td>'.$r["nama_mapel"].'</td><td>'.$r["nilai_sekolah"].'</td><td>'.$r["nilai_un"].'</td><td>'.$r["nilai_akhir"].'</td></tr>';
	$n++;
}
?>
 </td>
  </tr>
</table>
<a href="index.php?page=data-nilai" class="btn btn-primary">Kembali ke Daftar Nama</a>
</body>
</html>
<?php
}
?>