<?php
$file = $_GET['file'];
$title = str_replace(''.$linkstyle.'', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title =  ltrim(rtrim($title));
$title = ucwords($title);
$acak = acak($singledesc);
$contentdesc = spinner($acak);
$contentdesc = str_replace('%booktitle%', $title, $contentdesc);
$acak2 = acak($singledesc2);
$contentdesc2 = spinner($acak2);
$contentdesc2 = str_replace('%booktitle%', $title, $contentdesc2);
$spinjudul = spinner($spinjudul);
$spinjudul2 = spinner($spinjudul2);
$fontpdf  = spinner($fontpdf);
$domen = $_SERVER['HTTP_HOST'];
$html = '
<h1><a name="top"></a>'.strtoupper($domen).' '.$site_name.'</h1>
<h2>'.$title.'</h2>
<p>'.$contentdesc.'</p>
<title>'.$spinjudul.' '.$title.' '.$spinjudul2.' at '.strtoupper($domen).'</title>
<pre>Free Download Books '.$title.' '.$contentdesc2.'</pre>
<div><a href="#top">Back to Top</a></div>
<div><a href="http://'.$lpdomain.'">Free PDF Books Downloads</a></div>

';


//==============================================================
//==============================================================
//==============================================================

require_once __DIR__ . '/../vendor/autoload.php';
$mpdf = new mPDF('c');
$mpdf->SetCompression(true);
$mpdf->SetTitle(''.$spinjudul.' '.$title.' '.$spinjudul2.' at '.strtoupper($domen).'');
$mpdf->SetSubject(''.$spinjudul.' '.$title.''.$contentdesc.' or '.$spinjudul2.' at '.strtoupper($domen).'');
$mpdf->SetAuthor(''.strtoupper($domen).'');
$mpdf->SetKeywords(''.keyword($title).','.$site_keyword.'');
$mpdf->WriteHTML($html);
$filename = $_SERVER['REQUEST_URI'];
$mpdf->Output($filename, 'I');
exit;

//==============================================================
//==============================================================
//==============================================================
