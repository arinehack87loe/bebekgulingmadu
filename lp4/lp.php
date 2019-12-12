<?php
$domains = $_SERVER['HTTP_HOST'];
$file = $_GET['file'];
$title = str_replace('-', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title = preg_replace('/[^A-Za-z0-9 ]/', ' ', $title);
$title = ucwords($title);
$domen = $_SERVER['HTTP_HOST'];
$gambar = preg_replace('/[0-9]+/', '', $title);
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
$urlredirect = '/';
header("HTTP/1.1 301 Moved Permanently");
header( "Location: $urlredirect" );
}
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
function spinText($text){
    $test = preg_match_all("#\{(.*?)\}#", $text, $out);
    if (!$test) return $text;
    $toFind = Array();
    $toReplace = Array();
    foreach($out[0] AS $id => $match){
    $choices = explode("|", $out[1][$id]);
    $toFind[]=$match;
    $toReplace[]=trim($choices[rand(0, count($choices)-1)]);
    }
    return str_replace($toFind, $toReplace, $text);
}  
$fakemd5 = md5($title);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<base href="/" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo $title; ?> le livre numrique aussi connu sous les noms de livre lectronique et de livrel est un livre dit et diffus en version numrique disponible sous la forme" />
<title><?php echo $title; ?> PDF Book</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link type="text/css" rel="stylesheet" href="/lp4/asset/costum.css" />
<link type="text/css" rel="stylesheet" href="/lp4/asset/overide.min.css" />
<link rel="stylesheet" href="/lp3/font-awesome-4.7.0/css/font-awesome.css">
<link rel='icon' type='image/png' href='/lp4/asset/icon-book.png'>
<link href="/lp4/asset/style.css" rel="stylesheet">

<style>
        body {
            background: transparent url("/BG/<?php echo rand(1,7);?>.jpg");background-repeat:no-repeat;background-size:cover;background-position:center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .des {
            text-align: justify;
        }

        .link {
            margin: 25px 0;
        }

        .mobile {
            display: none;
        }

        .button_buy {
            padding: 25px 0;
        }

        .css_btn p {
            font-size: 10px;
            font-weight: 400;
            text-align: left;
            margin: 0;
        }

        .fa.fa-angle-right {
            font-size: 18px;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 180px;
            box-shadow: inset 1px 2px 7px 0px #4d4d4d;
            margin-left: 15px;
        }

        .css_btn {
            font-size: 14px;
            font-family: Arial;
            font-weight: bold;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 5px;
            border: 1px solid #1e69de;
            padding: 8px 5px;
            text-decoration: none;
            background: #1e69de;
            background: -moz-linear-gradient(top, #1e69de 0%, #3690f0 49%, #54a3ee 70%, #6db3f2 100%);
            background: -webkit-linear-gradient(top, #1e69de 0%, #3690f0 49%, #54a3ee 70%, #6db3f2 100%);
            background: linear-gradient(to bottom, #1e69de 0%, #3690f0 49%, #54a3ee 70%, #6db3f2 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1e69de', endColorstr='#6db3f2', GradientType=0);
            background-color: #eb1a03;
            color: #ffffff;
            display: inline-block;
            text-shadow: 1px 1px 0px #888;
            -webkit-box-shadow: 1px 2px 7px 0px #4d4d4d;
            -moz-box-shadow: 1px 2px 7px 0px #4d4d4d;
            box-shadow: 1px 2px 7px 0px #4d4d4d;
            line-height: 1em;
            min-width: 195px;
        }

        .css_btn:hover {
            background: #6db3f2;
            background: -moz-linear-gradient(top, #6db3f2 0%, #54a3ee 30%, #3690f0 51%, #1e69de 100%);
            background: -webkit-linear-gradient(top, #6db3f2 0%, #54a3ee 30%, #3690f0 51%, #1e69de 100%);
            background: linear-gradient(to bottom, #6db3f2 0%, #54a3ee 30%, #3690f0 51%, #1e69de 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#6db3f2', endColorstr='#1e69de', GradientType=0);
            background-color: #ce0100;
            color: #fff;
        }

        .css_btn:active {
            position: relative;
            top: 1px;
        }
		.download-btns{
			margin: 10px 5px 5px 10px;
		}
		@media only screen and (max-device-width: 1000px) and (min-width: 768px){
			.col-md-12, .col-xs-12 {
				padding-left: 15px;
			}
		}
		@media(max-width:990px){
			.download-btns{
				margin: 10px 0px 10px 0px;
			}
		}
		@media(max-width:767px){
			.lazyload.img-responsive{
			    margin: 0px auto 15px;
			}
			#book-meta{
				text-align:center;
			}
			.offers{
				margin-bottom:15px;
			}
		}
    </style>
<script src="/lp4/asset/modernizr.min.js" type="text/javascript"></script>
</head>
<body>
<div class="container set-container">
<div class="col-md-12 col-xs-12 bg-white shadone">
<div class="col-md-12 col-xs-12 par-10">
<h3 class="color-red"><p align="center" style="font-size:18px" color="blue"> <?php echo $title; ?> PDF, ePub eBook </p>
</h3>
<div class="col-md-12 col-xs-12 bg-red"></div>
<div class="spacing"></div>
<div class="col-md-12 col-xs-12 nopadding pab-20">
<div class="col-md-2 col-sm-3 col-xs-12">
<img class="lazyload img-responsive" src="/<?php echo sanitize_title($gambar);?>.jpg"onerror="this.src='https://3.bp.blogspot.com/-GPUCXsOkt9A/WylLV5Wd2dI/AAAAAAAAAAM/-4sYWZiRKGEvwuFQ9mFaXBsrqyLiwraUACLcBGAs/s1600/largepreview.png'" data-src="http://<?php echo $gambar; ?>"onerror="this.src='/<?php echo spinText("{epub|pdf|mobi}");?>.png'" width="125px" class="img-responsive center-block" />
</div>
<div class="col-md-10 col-sm-9 col-xs-12 pad" id="book-meta">
<h4 class="color-grey mat-0 ">
<small>File Name: <?php echo $title; ?></small>
</h4>
<h4 class="color-grey mat-0 ">
<small>Hash File: <?php echo $fakemd5; ?>.pdf</small>
</h4>
<h4 class="color-grey mat-0 ">
<small>Uploaded: <?php echo "" . date("Y/m/d") . "";?></small>
</h4>
<h4>
<small>Last Checked: <?php echo rand(1,10);?> Minutes ago!</small>
</h4>
<p>
<b>Rating:</b>
<span class="starRating">
<input id="rating5" type="radio" name="rating" value="5">
<label for="rating5">5</label>
<input id="rating4" type="radio" name="rating" value="4" checked>
<label for="rating4">4</label>
<input id="rating3" type="radio" name="rating" value="3">
<label for="rating3">3</label>
<input id="rating2" type="radio" name="rating" value="2">
<label for="rating2">2</label>
<input id="rating1" type="radio" name="rating" value="1">
<label for="rating1">1</label>
</span> <font color="gray">4.4/5 from <?php echo rand(1000,5000);?> votes. </font>
</p>
<div class="col-md-4 col-sm-12 col-xs-12 nopadding pull-left" style="margin-bottom: 10px;">
<h4><span class="label label-success">Status: AVAILABLE</span></h4>
<img src="/lp4/asset/ssl-lock.png" onerror="this.src='/lp4/asset/ssl-lock.png'" width="100" style="float:center; padding-right:10px;" />
</div>
<div class="col-md-4 col-sm-12 col-xs-12 nopadding center-block download-btns">
<a href="/dl.php?file=<?php echo $title;?>" class="uhuy-dom">
<div class="css_btn">
<span style="float:left;">
DOWNLOAD NOW
<p>14 DAYS FREE ACCESS</p>
</span>
<span style="float:right;">
<i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
</div>
</a>
</div>
<div class="col-md-3 col-sm-12 col-xs-12 nopadding center-block download-btns">
<a href="/dl.php?file=<?php echo $title;?>" class="uhuy-dom">
<div class="css_btn">
<span style="float:left;">
READ ONLINE
<p>14 DAYS FREE ACCESS</p>
</span>
<span style="float:right;">
<i class="fa fa-angle-right" aria-hidden="true"></i>
</span>
</div>
</a>
</div>
</div>
<div class="spacing"></div>
</div>
<div class="col-md-12 col-xs-12 bg-red"></div>
<div class=" col-md-12 col-xs-12 spacing "></div>
<div class="col-md-12 pad">
<div class="col-md-4 col-sm-4 col-xs-12 offers">
<img src="/lp4/asset/us1.png" class="img-responsive" style="float:left; padding-right:10px;">
<p class="mat-10 fn-12">
Register Free 14 Days Trial Account
</p>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 offers">
<img src="/lp4/asset/us2.png" class="img-responsive" style="float:left; padding-right:10px;">
<p class="mat-10 fn-12">Download as many books as you like (Personal use)</p>
</div>
<div class="col-md-4 col-sm-4 col-xs-12 offers">
<img src="/lp4/asset/us3.png" class="img-responsive" style="float:left; padding-right:10px;">
<p class="mat-10 fn-12">No commitment, cancel anytime</p>
</div>
</div>
<h3 style="visibility: hidden">A</h3>
<div class="col-md-12">
<div class=" col-md-12 col-xs-12 spacing pat-20"></div>
<div class="col-md-12 col-xs-12 bg-red" style="margin-bottom: 10px;"></div>
<h3>Book Description :</h3>
<p align="justify">
<p><div><strong><?php echo $title; ?></strong> <?php echo spinText("{Unlimited {access to The|accessibility|accessibility to the|accessibility to} Books LIbrary {and all of|and every one of|causing all of|as well as} its powerful features, including {hundreds of thousands|thousands and thousands|tens of thousands|thousands} of title from favorite author, {as well as the|along with the|plus the|and also the} {ability to|capability to|capacity to|power to} read or download {hundreds of|countless|a huge selection of|numerous} boos {to your|for your|in your|on your} pc or smartphone {in minutes|within a few minutes|in seconds|within minutes}.");?></div></p>
<h3>Recent Downloads </h3>
<?php poplist();?>
</div>
<div class=" col-md-12 col-xs-12 spacing pat-20"></div>
<div class="col-md-12 col-xs-12 bg-red" style="margin-bottom: 10px;"></div>
<div class="col-md-12" style="text-align: center;">
<img src="/lp4/asset/reward.png" onerror="this.src='/lp4/asset/reward.png'" style=" width: 40%" />
</div>

<div class=" col-md-12 col-xs-12 spacing pat-20"></div>
<div class="col-md-12" style="text-align: center;">
<span><a href="/">Home |</a></span>
<span><a href="/dmca" target="_blank">Dmca |</a></span>
<span><a href="/privacy" target="_blank">Privacy |</a></span>
<span><a href="/contact" target="_blank">Contact</a></span>
</div>
<div class=" col-md-12 col-xs-12 spacing pat-20"></div>
</div>
  <div class="online">
        <span class="online-icon"></span> 
        <div class="online-text">
        <p><span id="dispnum1"></span> Users Online</p>
        </div>
    </div>
    
<script type="text/javascript"> var ttnum1=362; var tt1; function dis_num1() { document.getElementById ("dispnum1").innerHTML=ttnum1; ttnum1 = ttnum1+Math.floor(Math.random() * 31) -15; tt1 = setTimeout ("dis_num1()",5000);} dis_num1();</script>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" type="e4dfe0cb3dceac4ab303f8cf-text/javascript"></script>
<script type="text/javascript" src="/lp4/asset/jquery.min.js"></script>
<?php include('histats.php');?>

</body>
</html>