<?php
@require_once 'include/fpdf/fpdf.php';
@require_once 'include/config.php';
@require_once 'include/classes/database.class.php';
@require_once 'include/phpqrcode/qrlib.php';

$dbclass    		= new database($dbtype, $dbhost, $dbname, $dbuser, $dbpass);
$mysqli     		= new mysqli($dbhost, $dbuser, $dbpass, $dbname);


class PDF extends FPDF
{
//Page header
function Header()
{
	//Logo
	$this->Image('images/propinsi.gif',22,10,20);
	$this->Image('images/logosmk.gif',165,10,26);
	//Times bold 18
	$this->SetFont('Times','',12);
	//Move to the right
	$this->Cell(85);
	//Title
	$this->Cell(25,5,'PEMERINTAH PROVINSI NUSA TENGGARA BARAT',0,1,'C');
	//Times bold 12
	$this->SetFont('Times','',12);
	//Move to the right
	$this->Cell(85);
	$this->Cell(25,5,'DINAS PENDIDIKAN DAN KEBUDAYAAN',0,1,'C');
	$this->Cell(85);
	$this->Cell(25,5,'UPT DIKMEN PK-PLK KAB. LOMBOK TENGAH',0,1,'C');
	$this->SetFont('Times','',16);
	//Move to the right
	$this->Cell(85);
	$this->Cell(25,6,'SMK NEGERI 1 PRAYA',0,1,'C');
	//Times bold 14
	$this->SetFont('Times','',10);
	//Move to the right
	$this->Cell(85);
	$this->Cell(25,5,'Jln. Pejanggik no. 8 Telp/Fax (0370) 654809  Praya, Lombok Tengah, NTB 83511',0,1,'C');
	//Times bold 12
	$this->SetFont('Times','',10);
	//Move to the right
	$this->Cell(85);
	$this->Cell(25,4,'Laman : www.smkn1praya.sch.id   e-mail : smknegeri1praya@gmail.com',0,1,'C');
	//Set Line
    $this->SetLineWidth(0.5);
    //Line
	$this->Line(15,41,195,41);
	//Line break
	$this->Ln(10);
    
}

}
//$NoUjian = "$_POST[kd1]-$_POST[kd2]-$_POST[kd3]-$_POST[kd4]";
$noujian = $_REQUEST['noUjian'];
$sql    = "SELECT * FROM tbl_siswa WHERE noujian = '$noujian'";
$query  = $dbclass->query($sql);
$data   = $dbclass->get_row();
$ket    = $data['ket'];;
$nama        = $data['name'];
$tgllhr        = $data['tgllhr'];
$jur       = $data['jurusan'];
$noujian     = $data['noujian'];
$sekolah = $data['sekolah'];
$text = "Kepala SMK Negeri 1 Praya selaku Ketua Penyelenggaran Ujian Nasional/Ujian Sekolah Tahun Pelajaran 2019/2020, berdasarkan Peraturan Menteri Pendidikan dan Kebudayaan No. 4 tahun 2018 tanggal 6 Februari 2018, Peraturan Badan Standar Nasional Pendidikan (BSNP) Nomor: 0048/BSNP/XI/2018 tanggal 29 November 2018 dan Pedoman Uji Kompetensi Keahlian SMK Tahun Pelajaran 2018/2019 serta hasil Rapat Dewan Guru SMK Negeri 1 Praya tanggal 11 Mei 2019 tentang Kelulusan Kelas  12, maka dengan ini menyatakan bahwa :";
//Instanciation of inherited class
$pdf=new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(25.4, 25.4, 25.4);
$pdf->SetFont('Times','UB',14);
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"SURAT KETERANGAN LULUS",0,'C');
$pdf->SetFont('Times','',11);
$pdf->MultiCell(0,5,"Nomor : 421/       /SMK/VI/2019",0,'C');
//Line break
$pdf->Ln(5);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5,$text,0,'J');
//Line break
$pdf->Ln(5);
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nama                     : ".$nama,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Tanggal lahir         : ".$tgllhr,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Paket Keahlian      : ".$jur,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nomor Ujian         : ".$noujian,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Asal Sekolah         : ".$sekolah,0,'J');
//Line break
$pdf->Ln(20);
$pdf->Image("images/".$ket.".jpg",75,132,60);
$pdf->MultiCell(0,5,"Dari satuan pendidikan SMK Negeri 1 Praya pada Tahun Pelajaran 2018/2019 setelah menyelesaikan Ujian Nasional, Ujian Sekolah Berstandar Nasional serta Ujian Kompetensi Keahlian dengan hasil sesuai kriteria yang ditetapkan undang-undang.",0,'J');
//Line break
$pdf->Ln(5);
$pdf->MultiCell(0,5,"Demikian Surat Keterangan ini dibuat untuk dapat dipergunakan sebagaimana mestinya sampai terbit ijazah.",0,'J');
//Line break
$pdf->Ln(5);
//Move to the right
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Praya, 13 Mei 2019",0,'J');
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Kepala Sekolah,",0,'J');
//Line break
$pdf->Ln(25);
//Move to the right
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Kasman, S.Pd.",0,'J');
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"NIP. 19781231 201001 1 031",0,'J');
//Line break
$pdf->Ln(5);
//$pdf->MultiCell(0,5,"Catatan :",0,'J');
//$pdf->MultiCell(0,5,"- Bagi siswa yang belum mengembalikan buku perpustakaan harap segera dikembalikan.",0,'J');
//TTd
$pdf->Image('images/ttd.jpg',115,195,33);

$pdf->Output();
?>
