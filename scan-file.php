<?php
//scan dir
/*
$php_statis= glob("static/*.php");

echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="description" content="Index Download file ebook manual free"/>
</head>
<body>
<div class="container">
  <h2><a href="/" title="Index">Index</a></h2>
  <p>preview Index</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Page</th>
      </tr>
    </thead>
    <tbody>';

$nomor= 1;
foreach($php_statis as $item){
$html= str_replace(array('static/','.php'), '', $item).'.html';	

echo '<tr>
<td><a href="/'.$html.'">Page Num '.$nomor.'</a></td>
					</tr>';
++$nomor;					
}

echo '</tbody>
  </table>
    </div>
</body>
</html>';







exit();
*/
//GENERATE STATIS FILE
$all= glob("split/*.txt");

echo implode("<br>", $all);exit;

foreach($all as $file){
	$file_title= trim(preg_replace('![^a-z0-9]+!i', ' ', $file));
	$file_php= 'static/'.str_replace(array('split/','.txt'), '', $file).'.php';
$html= '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index '.$file_title.'</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="description" content="Index '.$file_title.' Download file ebook manual free"/>
</head>
<body>
<div class="container">
  <h2><a href="/" title="Index '.$file_title.'">Index '.$file_title.'</a></h2>
  <p>preview Index '.$file_title.'</p>            
  <table class="table">
    <thead>
      <tr>
        <th>FileName</th>
      </tr>
    </thead>
    <tbody>';
	
$array= array_filter(explode("\n", file_get_contents($file)));
		foreach($array as $item){
			$title= preg_replace('![^a-z0-9]+!i', ' ', $item);
			$title= trim($title);
			$rtf_link= '/'.trim(str_replace(' ', '-', strtolower($title)), '-').'.pdf';
			
		$html .= '<tr>
					<td><a href="'.$rtf_link.'">'.$title.'</a></td>
					</tr>';
		}
		
$html .='</tbody>
  </table>
    </div>
</body>
</html>';

//mulai bikin file
$tulis= fopen($file_php, "w");
fwrite($tulis, $html);
fclose($tulis);
}



  

