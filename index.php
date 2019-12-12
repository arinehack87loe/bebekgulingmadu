<?php
include('config.php');
include('core/fungsi.php');
$tipe = isset($_GET['tipe']) ? $_GET['tipe'] : '';
if($tipe == '' || $tipe == 'home') {
    include('homepages/home.php');
}
elseif($tipe == 'read') {
    include('read.php');
}
elseif($tipe == 'dmca') {
    include('core/page/dmca.php');
}
elseif($tipe == 'contact') {
    include('core/page/contact.php');
}
elseif($tipe == 'disclaimer') {
    include('core/page/disclaimer.php');
}
else {
    include('homepages/home.php');
}


$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
$site_url = parse_url($root);
$domain = str_replace('www.','',$site_url['host']); 
$arr = file($file,FILE_IGNORE_NEW_LINES);
if (!in_array($domain,$arr))
{
	$docp = file_put_contents($file, $domain. PHP_EOL, FILE_APPEND);
}
?>

<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
$site_url = parse_url($root);
$domain = str_replace('www.','',$site_url['host']); 


$file = 'domain.txt';
if (!file_exists($file)){
  fopen($file, 'w') or die('Cannot open file:  '.$file); //implicitly creates file
}


$arr = file($file,FILE_IGNORE_NEW_LINES);
if (!in_array($domain,$arr))
{
  $docp = file_put_contents($file, $domain. PHP_EOL, FILE_APPEND);
}

?>