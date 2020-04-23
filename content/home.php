<html>
<head>
<title> Halaman Pencarian </title>
</head>
<body>
<h3 align="center">Selamat datang di </h3>
<h3 align="center">Sistem Informasi Kelulusan SMKN 1 Praya 2019</h3>
<div class="well">
<div align="right"><SCRIPT language=JavaScript src="js/almanak.js"></SCRIPT> 
          <span class="style1">I</span> <SCRIPT language=JavaScript>var d = new Date();
var h = d.getHours();
if (h < 11) { document.write('Selamat pagi, kawan'); }
else { if (h < 15) { document.write('Selamat siang, kawan'); }
else { if (h < 19) { document.write('Selamat sore, kawan'); }
else { if (h <= 23) { document.write('Selamat malam, kawan'); }
}}}</SCRIPT>   </div><br/>
<script>
function cekNo() {
   var cek = document.forms['formcarino']['noujian'].value;
     if(cek==null || cek=="")
     {
       alert("Nomor Peserta harus di isi dahulu!");
       return false;
     }
}
</script>
<form class="form-horizontal" form name="formcarino" method="post" action="index.php?page=searchno" onSubmit="return cekNo()">
<fieldset>
  <div align="center">
    <legend> Cari Berdasarkan No Peserta Anda </legend>
  </div>
  <div class="form-group">
      <label for="noujian" class="col-lg-2 control-label">No Peserta</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="noujian" placeholder="Contoh : 05-0021-001-8" size="30">
      </div>
  </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari" class="btn btn-primary">
      </div>
    </div>
</fieldset>
</form>
</div>
<table width="400" align="center">
  <tr>
    <td>
      <div align="center" class="alert alert-dismissable alert-danger">
<h4>
<script language="JavaScript">
TargetDate = "05/13/2019 03:00 PM";
BackColor = "";
ForeColor = "";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Hari, %%H%% Jam, %%M%% Menit, %%S%% Detik Lagi, Menuju Waktu Pengumuman Kelulusan";
FinishMessage = "Hore, sekarang sudah waktunya pengumuman!";
</script>
<script language="JavaScript" src="js/countdown.js"></script>
</h4>
</div> 
      </td>
  </tr>
</table>
</body>
</html>