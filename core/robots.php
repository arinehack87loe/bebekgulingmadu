<?php
include('config.php');
$servername = ''.$ssl.'://'.$_SERVER['HTTP_HOST'];
$direktori = ''.$niche.'';
$handle = opendir($direktori);

while (false !== ($entry = readdir($handle))) {
	if ($entry != "." && $entry != "..") {		
		$data .= $entry."\n";		
		
	}	
}
closedir($handle);

$data = trim($data);
if ($data != "") {	
$data = explode ("\n", $data);

sort($data, SORT_NATURAL | SORT_FLAG_CASE);
//echo $data[0];
}










header("Content-Type: text/plain");
echo"User-agent: *\n"; 
foreach ($data as $judul) {
      echo "Sitemap: ".$servername."/sitemap.xml\n"; 
      echo "Sitemap: ".$servername."/sitemap/".str_replace(".txt", "", $judul).".xml\n";      

   }

;?>