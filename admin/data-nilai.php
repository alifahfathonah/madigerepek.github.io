<h3>Data Nilai</h3>
<div class="well">
<fieldset>
<legend>Daftar Nilai</legend>
<table class="table table-striped table-hover">
<thead>
<th>No</th>
<th>No Ujian Peserta</th>
<th>Nama Siswa</th>
<th>Keterangan</th>
</tr>
</thead>
<?php
include('../config.php');
$q = mysql_query("SELECT * FROM tbl_nilai INNER JOIN tbl_siswa ON tbl_nilai.noujian=tbl_siswa.noujian group by tbl_nilai.noujian" );
$n = 1;
while($r = mysql_fetch_array($q))
{
	echo '<tbody><tr class="info"><td>'.$n.'</td><td>'.$r["noujian"].'</td><td>'.$r["name"].'</td><td><a href="lihatnilai.php?noujian='.$r['noujian'].'">Lihat Nilai</a></td></tr></tbody>';
	$n++;
}
?>
</table>
*) Anda dapat mempersiapkan dan mengedit data melalui microsoft Excel. Format file dapat di download <a href="import-nilai.xls">Disini</a><br />
*) Jangan lupa hapus header di file excel setelah mengedit / input data, kemudian disave dan diimport <a href="index.php?page=nilai">disini.</a>
</div>
<a href="index.php?page=hapus-nilai" class="btn btn-primary">Hapus Semua Data Nilai</a>
</fieldset>
	