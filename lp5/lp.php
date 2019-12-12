<?php
if(preg_match('/SemrushBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/MJ12bot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/AhrefsBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/BLEXBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/YandexBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>

<?php
if(preg_match('/DotBot/i',$_SERVER['HTTP_USER_AGENT']))
    {
    header('HTTP/1.0 403 Forbidden');
    echo "exit";
    exit();
    }
?>
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
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta property="og:title" content="Download <?php echo $judul; ?>">
  	<meta property="og:description" content="Download <?php echo $judul; ?> eBook - ePub Format">
  	<meta property="og:url" content="http://<?php echo $domen; ?>/<?php echo $file; ?>.pdf">
  	<meta property="og:image" content="http://<?php echo $domen;?>/<?php echo sanitize_title($gambar);?>.jpg">
  	<meta property="og:site_name" content="Download Free eBook - ePub Format">
	<title>Download <?php echo $judul; ?> eBook - ePub Format</title>
	<link rel="stylesheet" href="/lp5/normalize.min.css">
	<link rel="stylesheet" href="/lp5/desktop.min.css">
</head>
<body>
<div class="page">
<div class="books">
	<div class="header">
<ReadBookonline itemscope itemtype="http://schema.org/Book" itemid="http://<?php echo $domen;?>/<?php echo $file;?>.pdf">
		<div class="texttop"s><img src="/lp5/book.png" alt="brand"><h1><span itemprop="name"><?php echo $judul; ?></span></h1></div>
	</div>
		<div class="middle">
			<div class="over">
			<div class="sep">
			<section class="cover"><img src="/<?php echo sanitize_title($gambar);?>.jpg"onerror="this.src='https://3.bp.blogspot.com/-GPUCXsOkt9A/WylLV5Wd2dI/AAAAAAAAAAM/-4sYWZiRKGEvwuFQ9mFaXBsrqyLiwraUACLcBGAs/s1600/largepreview.png'"></section>
			</div>
			<section class="post">
			<span><h3 class="subheader"><b><?php echo $judul; ?> PDF</b></h3></span>	
			<p>In order to read or download <b></b> ebook, you need to create a FREE account.</p>
			<p><strong>File: <?php echo $file;?> .pdf
			<br>
			<a class="click neXt" href="/dl.php?file=<?php echo $judul; ?>"rel="nofollow"title="Download Book Now">DOWNLOAD NOW!</a>
			<span><h4 class="subheader">#14 DAYS FREE# SUBSCRIBE TO READ OR DOWNLOAD EBOOK GET UNLIMITED ACCESS..!!</h4></span>
			
			</section>
			</div>
		</div>
		<div class="article">
			<p><strong>BOOK SUMMARY :</strong>
			<br><br>
			<p><span>Download free <?php echo $judul; ?> More than 10 million titles spanning every genre imaginable, at your fingertips. Get the best Books, Magazines & Comics in every genre including Action, Adventure, Anime, Manga, Children & Family, Classics, Comedies, Reference, Manuals, Drama, Foreign, Horror, Music, Romance, Sci-Fi, Fantasy, Sports and many more. </p>
</span></p>
<h3>Popular Books</h3>
<?php poplist();?>
</ReadBookonline>
</div>
		<div class="footer"><p>Contact</p> - <p>DMCA</p> - <p>Privacy</p></div>
</div>
<div class="online">
<div class="online-circle"></div><div class="online-text"><p><span id="xYx"></span> User Online</p></div>
</div>
<script src="/assets/static/js/slim.min.js"></script>
</script>
</body>
<?php include('histats.php');?>
</html>