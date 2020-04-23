<?php
include "excel_reader2.php";
include "../config.php";

// file yang tadinya di upload, di simpan di temporary file PHP, file tersebut yang kita ambil
// dan baca dengan PHP Excel Class
$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);
// default nilai 
$sukses = 0;
$gagal = 0;

for ($i=1; $i<=$hasildata; $i++)
{
  $data1 = $data->val($i,1); 
  $data2 = $data->val($i,2);
  $data3 = $data->val($i,3);
  $data4 = $data->val($i,4);
  $data5 = $data->val($i,5);
  $data6 = $data->val($i,6);
  $data7 = $data->val($i,7);
  $data8 = $data->val($i,8);
    
$query = "INSERT INTO tbl_siswa VALUES ('$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8')";
$hasil = mysql_query($query);

if ($hasildata) $sukses++;
else $gagal++;
  
echo "<pre>";
print_r($query);
echo "</pre>";

}
echo "<b>import data selesai.</b> <br>";
echo "Data yang berhasil di import : " . $sukses .  "<br>";
echo "Data yang gagal diimport : ".$gagal .  "<br>";
echo "kembali ke halaman <a href='index.php?page=import'>Import </a>";
echo "ke halaman <a href='index.php?page=data-siswa'>Data Siswa</a>";
?>
