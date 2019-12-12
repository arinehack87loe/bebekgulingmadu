<?php
$domains = $_SERVER['HTTP_HOST'];
$file = $_GET['file'];
$title = str_replace('-', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title = preg_replace('/[^A-Za-z0-9 ]/', ' ', $title);
$judul = ucwords($title);
$md5 = ucwords($title);
$domen = $_SERVER['HTTP_HOST'];
$gambar = preg_replace('/[0-9]+/', '', $title);
function poplist() {
	if (file_exists('KEY/pop.txt')) {
		$myfile = fopen("KEY/pop.txt", "r") or die("Unable to open file!");
		while( $i < 10) {
			$seek = rand(0, filesize("KEY/pop.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				include($_SERVER['DOCUMENT_ROOT']."/PENGATURAN/config.php");
				$url = $linkfont($kiwot);
				$titled =  ltrim(rtrim($titled));
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}
function agcmasterclass($haystack, $needles=array(), $offset=0) {
        $chr = array();
        foreach($needles as $needle) {
                $res = stripos($haystack, $needle, $offset);
                if ($res !== false) $chr[$needle] = $res;
        }
        if(empty($chr)) return false;
        return min($chr);
}
$dmcaurl = $_SERVER['REQUEST_URI'];
$juduldmca = str_replace('-', ' ', $dmcaurl);
$dmca		= file_get_contents('dmca.txt', true);
$dmca		= explode(',',$dmca);
if (agcmasterclass($juduldmca,$dmca))
{
$urlredirect = '/dl.php';
header("HTTP/1.1 301 Moved Permanently");
header( "Location: $urlredirect" );
}
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Download <?php echo $judul; ?> PDF Book- <?php echo strtoupper( $domains ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
<meta name="description" content="Free Download  <?php echo $judul; ?> EPub PDF Ebooks. at <?php echo strtoupper($domains); ?> ">
<meta name="author" content="">
<link rel="shortcut icon" href="/favicon.ico" title="Favicon" />
<link rel="stylesheet" href="/lp3/font-awesome-4.7.0/css/font-awesome.css">
<link rel="stylesheet" href="/lp3/dblib/style-new.css" media="screen, projection">
<link rel="stylesheet" href="/lp3/dblib/comment.css" media="screen, projection">
<link rel="stylesheet" href="/lp3/dblib/flags/flag-icon.min.css"/>

<!--Icon Fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600|Bree+Serif' rel='stylesheet' type='text/css'>
</head>
<body>
<section id="banner" role="banner" style="background-image:url(https://3.bp.blogspot.com/-xwSw6QqwAz8/WsTm-hK0uAI/AAAAAAAAAfI/4EW-BLp_GfAtQXQAKdeNyjy7j5j1-pX2QCLcBGAs/s1600/azon.jpg)">
  <div class="row">
    <div id="header_region">
      <div id="logo" class="two_thirds">
        <h1><a href="/"><img src="/lp3/dblib/logo.png" alt="Off the Shelf eBook Landing Page" title="Off the Shelf eBook Landing Page" height="41" width="41"/>E-Books Library</a></h1>
        
      </div>
    </div>
    <div class="one_half">
          <center>  <img src="/<?php echo sanitize_title($gambar);?>.jpg"onerror="this.src='https://3.bp.blogspot.com/-GPUCXsOkt9A/WylLV5Wd2dI/AAAAAAAAAAM/-4sYWZiRKGEvwuFQ9mFaXBsrqyLiwraUACLcBGAs/s1600/largepreview.png'"width="331" height="451"/>                
</center>
</div>

    <div class="one_half last">
    <h1>E-Books Library</h1>
<h2 class="subheader">
All your favorite books and authors in one place!</br></h2>
PDF, ePubs, MOBI, eMagazines, ePaper, eJournal and more
<div class="button_buy"> 

        <a href="/dl.php?file=<?php echo $judul; ?>"rel="nofollow"title="Download Book Now"><span class="button_text"><i class="fa fa-download"></i> Download Now!
  </span></a><br>*Signup to Free Download E-Books</div>

     <p>More than 10 million titles spanning every genre imaginable, at your fingertips. Get the best Books, Magazines & Comics in every genre including Action, Adventure, Anime, Manga, Children & Family, Classics, Comedies, Reference, Manuals, Drama, Foreign, Horror, Music, Romance, Sci-Fi, Fantasy, Sports and many more. </p>

<!-- <p>Access to our library is limited to certain countries.
Please see if you are allowed to start <b> READ </b> or <b> DOWNLOAD </b> from our library by creating an account.</p> -->
<style type="text/css">iframe.goog-te-banner-frame{ display: none !important;}</style>
<style type="text/css">body {position: static !important; top:0px !important;}#google_translate_element img
        {
            display: none !important;
        }.goog-logo-link {
   display:none !important;
}
.goog-te-gadget{
   color: transparent !important;
}
.goog-te-gadget .goog-te-combo{
   color: blue !important;
}</style>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'us', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

      
            <span id="counter"></span>

 </div>
  </div>
</section>
<article role="main">
  <div id="main_content"> 
 
    <div class="panel-footer">

      <div class="row">
        <div class="span panel-body">


      <p style="text-align: left;"><font size="5"><b>Book Description:</b></font><br>
<b>Title:</b> - <?php echo $judul;?><br>
<b>File Type:</b> PDF EPUB MOBI.<br>
<b>MD5 Hash Code:</b> <?php $str = "$md5"; echo md5($str);?><br>
<b>ASIN/ISBN:</b> <?php echo $asin;?><br>
       <img src="https://1.bp.blogspot.com/-GRIMN60Gl5Q/WuaqiSF0jvI/AAAAAAAAAhI/z0sUTHcbhlwDMO35GJCR-BeXz6AdaadlgCLcBGAs/s1600/liveG.gif"> <font size="4"color="blue"><b>Recent Member Activity</b></font>
    </div>
  <div class="panel-heading">
    <div class="panel-body" id="activityBody">
      <div id="loadingActivity">
        <p class="text-center">Loading...</p>
        <img class="center-block" id="loader" src="/lp3/dblib/ajax_loading.gif" alt=""/>
      </div>

                      </div>   <br>

            <h2>Related Book : <?php echo $judul;?></h2>

<?php poplist();?>
<br>
   

      </div>
    </div>

  </div>
</article>
<div class="online"><img src="https://2.bp.blogspot.com/-ghYdSy3wr4E/WuarL3vnSLI/AAAAAAAAAhQ/7aKXCZ_PmAEz3XZzHsJNWIJ2_AmI9NKDgCLcBGAs/s1600/circle_green.png"> <span id="dispnum1"></span> Members Online</div>
<script type="text/javascript"> var ttnum1=452; var tt1; function dis_num1() { document.getElementById ("dispnum1").innerHTML=ttnum1; ttnum1 = ttnum1+Math.floor(Math.random() * 31) -15; tt1 = setTimeout ("dis_num1()",5000);} dis_num1();</script> 
<footer role="contentinfo">
  <div id="page_footer" class="row">
    <ul>
      <li><a href="/" title="Home Pages">Home</a></li>
      <li><a href="/contact" title="Contact">Contact</a></li>
      <li><a href="/privacy" title="Privacy Policy">Privacy Policy</a></li>
      <li><a href="/dmca" title="DMCA Notice">DMCA Notice</a></li>
    </ul>
    <p> &copy; Books Library - 2018. All rights reserved. </p>
  </div>
</footer>
<a href="#" class="scrollup">Scroll up</a> 
<script src="/lp3/dblib/foundation.min.js"></script> 
<script src="/lp3/dblib/phrases.js"></script> 
<script src="/lp3/dblib/site.min.js"></script>
<script src="/lp3/dblib/fed.js"></script>
<script src="/lp3/dblib/jQuery.scrollSpeed.js"></script> 
<script src="/lp3/dblib/blur.js"></script>
<script src="/lp3/dblib/jquery.typewriter.min.js"></script>
<script src="/lp3/dblib/jquery.validate.min.js"></script>
<script src="/lp3/dblib/buzz.min.js"></script>


<?php include('histats.php'); ?>

</body>
</html>