<?php
require_once '../../config/autoload.php';
require_once '../../config/config.php';
require_once '../../config/connection.php';
include('../../models/admin.php');

$obj = new Connection($host, $user, $pass, $db);
$objAdmin = new Admin($obj);

ob_start();
define('K_PATH_IMAGES', '../../assets/image/');

// create new PDF document
$pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, True, 'UTF-8', false);

// header & footer data
$pdf->SetHeaderData('posyandu.jpg', 20, "MADRASAH ALIYAH DARUL AZHAR BATULICIN",
            "", array(48,89,112), array(48,89,112));

$pdf->SetFooterData( array(0, 0, 0), array(0, 0, 0));
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margin
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP + 20, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set page break
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set scaling image
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// font subsetting
$pdf->setFontSubsetting(true);

$pdf->SetFont('helvetica', '', 14, '', true);

$pdf->AddPage();

// $pdf->Ln(0);
$pdf->SetX(220);
$pdf->Cell(60,0, 'Batulicin, '.date("d-m-Y"), 0, 1, 'L', 0, '', 0); // untuk tanggal
$pdf->setJPEGQuality(100);

// $pdf->writeHTMLCell(0, 0, '', '', '<H2>NOTA PEMBELIAN</H2>' , 0, 2, 0, true, 'C', true);
$html2=<<<EOD
  <table border="" cellpadding="4" width="600">
      <tr>
        <td>Nis</td><td>:</td><td>
EOD;
$html5=<<<EOD
        </td>
      </tr>
    </table>
EOD;
$pdf->Ln(10);
$pdf->SetX(10);

$no = 1;
      $nis  = @$_GET['nis'];
      $sql = $objAdmin->editAlumni($nis);
      while ($data = $sql->fetch_object()) {
      $pdf->SetX(10);
      $pdf->Image('../../assets/images/'.$data->foto, 160, 68, 90, 80, '', '', '', true, 400);
      $pdf->writeHTMLCell(0, 0, '', '', $html2.''.
            $data->Nis.'</td><td rowspan="17" width="500"></td></tr>
            <tr><td>Nama Lengkap</td><td>:</td><td>'.$data->nama_lengkap .'</td></tr>
            <tr><td>Tempat Lahir</td><td>:</td><td>'.$data->tempat_lahir .'</td></tr>
            <tr><td>Tanggal Lahir</td><td>:</td><td>'.$data->tgl_lahir .'</td></tr>
            <tr><td>Jenis Kelamin</td><td>:</td><td>'.$data->jenis_kelamin .'</td></tr>
            <tr><td>Agama</td><td>:</td><td>'.$data->agama .'</td></tr>
            <tr><td>Jurusan</td><td>:</td><td>'.$data->jurusan .'</td></tr>
            <tr><td>Alamat Rumah</td><td>:</td><td>'.$data->alamat_rumah .'</td></tr>
            <tr><td>Alamat Sekarang</td><td>:</td><td>'.$data->alamat_sekarang .'</td></tr>
            <tr><td>No Hp</td><td>:</td><td>'.$data->no_hp_alumni .'</td></tr>
            <tr><td>Email</td><td>:</td><td>'.$data->email .'</td></tr>
            <tr><td>Angkatan</td><td>:</td><td>'.$data->angkatan_alumni .'</td></tr>
            <tr><td>Lulusan</td><td>:</td><td>'.$data->lulusan_alumni .'</td></tr>
            <tr><td>Nama Ayah</td><td>:</td><td>'.$data->nama_ayah .'</td></tr>
            <tr><td>Nama Ibu</td><td>:</td><td>'.$data->nama_ibu .'</td></tr>
            <tr><td>Alamat Orang Tua</td><td>:</td><td>'.$data->alamat_ortu .'</td></tr>
            <tr><td>No Hp Orang Tua</td><td>:</td><td>'.$data->no_hp_ortu.'
            '.$html5 , 0, 1, 0, true, '', true);
    $no++;
  }

  $pdf->Ln(10);
$pdf->SetX(230);
$pdf->Cell(60,0, ' Mengetahui', 0, 1, 'L', 0, '', 0);
$pdf->SetX(200);
$pdf->Cell(60,0, ' Kepala Madrasah Aliyah Darul Azhar', 0, 1, 'L', 0, '', 0);
$pdf->SetX(234);
$pdf->Cell(60,0, ' Batulicin', 0, 1, 'L', 0, '', 0);
$pdf->Ln(20);
$pdf->SetX(228);
$pdf->Cell(60,0, ' Nama Kepala', 0, 1, 'L', 0, '', 0);
$pdf->SetX(231);
$pdf->Cell(60,0, ' Nip Kepala', 0, 1, 'L', 0, '', 0);

ob_end_clean();
$pdf->Output('petugas.pdf', 'I');
