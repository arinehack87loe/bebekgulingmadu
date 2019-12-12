<?php
header("HTTP/1.1 403 Forbidden");
$judul = $_GET['file'];
$subId = $_GET['subId'];

$cc = trim($_SERVER["HTTP_CF_IPCOUNTRY"]);
if ($cc == "AS"|| $cc == "AT"|| $cc == "BE"|| $cc == "CL"|| $cc == "CK"|| $cc == "DK"|| $cc == "FJ"|| $cc == "FI"|| $cc == "FR"|| $cc == "DE"|| $cc == "IE"|| $cc == "JP"|| $cc == "LU"|| $cc == "NL"|| $cc == "NO"|| $cc == "PG"|| $cc == "WS"|| $cc == "SE"|| $cc == "CH") 
{
$offer = 'https://look.udncoeln.com/offer?prod=2&ref=5196830&q='.$judul.'&sub_id='.$subId.'';
}
else
{
$offer = 'https://www.translnk.com/scripts/un981c6l?a_aid=24196908&a_bid=9ad19760&chan=code2&data1='.$judul.'';
}
header("location: $offer");
?>