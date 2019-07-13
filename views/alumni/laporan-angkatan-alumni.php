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
$pdf->SetHeaderData('darul azhar.jpg', 20, "MADRASAH ALIYAH DARUL AZHAR BATULICIN",
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

$pdf->Ln(0);
$pdf->SetX(220);
$pdf->Cell(60,0, 'Batulicin, '.date("d-m-Y"), 0, 1, 'L', 0, '', 0); // untuk tanggal

// $pdf->writeHTMLCell(0, 0, '', '', '<H2>NOTA PEMBELIAN</H2>' , 0, 2, 0, true, 'C', true);

$html=<<<EOD
    <center> <h1> Laporan Data Alumni </h1> </center>
    <table border="1">
      <tr align="center" style="font-weight: bold;">
          <th width="50">No</th>
          <th width="160">NIS</th>
          <th width="160">Nama</th>
          <th width="160">Jekel</th>
          <th width="120">Jurusan</th>
          <th width="120">Angkatan Alumni</th>
          <th  width="170">Foto</th>
      </tr>
    </table>
EOD;

$html2=<<<EOD
  <table border="1" cellpadding="4">
      <tr>
        <td width="50"  height="90">
EOD;
$html5=<<<EOD
        </td>
      </tr>
    </table>
EOD;
$pdf->Ln(10);
$pdf->SetX(10);
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, 'C', true);

$no = 1;
$thn = $_GET['thn'];
      $sql = $objAdmin->showAlumniAngkatan($thn);
      while ($data = $sql->fetch_object()) {
        $foto = "../../assets/images/".$data->foto;

      $pdf->SetX(10);
      $pdf->writeHTMLCell(0, 0, '', '', $html2.''.
            $no.'</td>
            <td width="160">'.$data->Nis .'</td>
            <td width="160">'.$data->nama_lengkap.'</td>
            <td width="160">'.$data->jenis_kelamin.'</td>
            <td width="120">'.$data->jurusan.'</td>
            <td width="120">'.$data->angkatan_alumni.'</td>
            <td width="170">'.$pdf->Image($foto, 240, 92 + $x, 20, 20, '', '', '', false, 9).'
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
