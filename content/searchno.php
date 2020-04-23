<html>
<head>
<title> Hasil Pencarian </title>
</head>
<body>
<?php
include "../config.php";
$noujian= $_POST['noujian']; //get the nama value from form
$q = "SELECT * from tbl_siswa where noujian = '$noujian' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
$num_rows = mysql_num_rows($result);
if($num_rows == 0) echo "<br><div align='center' class='alert alert-dismissable alert-danger'><h4>Maaf, Nomor Peserta Ujian Salah Atau Tidak Ada Dalam Database!</h4></div><meta http-equiv='refresh' content='2; url=index.php'>";
else 
echo "<div align='center'><h4>Hasil Pencarian</h4></div>";
echo "<table width='400' class='table table-striped table-hover'>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
 <tr class='active'>
    <td width='180'>No Peserta </td>
    <td colspan='3'><strong>".$data['noujian']."</strong></td>
  </tr>
  <tr>
    <td>Nama Lengkap </td>
    <td colspan='3'><font style='text-transform: capitalize;'><strong>".$data['name']."</strong></font></td>
  </tr>
  <tr>
    <td>Jurusan </td>
    <td colspan='3'>".$data['jurusan']."</td>
  </tr>";
echo "</table>";
}
?>
<table width='400' class='table table-striped table-hover'>

<?php
include('../config.php');
$q = mysql_query("SELECT * FROM tbl_siswa where noujian = '$noujian'");
while($r = mysql_fetch_array($q))
{
  echo '<tr>
    <td>Keterangan</td>
    <td colspan="3"><font color="#0066FF" size="7" style="text-transform: uppercase;"">'.$r['ket'].'</td>
  </tr>';
  echo '</table>';
  echo '<div align="center"><a href="printsk.php?noUjian='.$r['noujian'].'" class="btn btn-success">Cetak Surat Keterangan Kelulusan</a></div>';
}
?>
</body>
</html>