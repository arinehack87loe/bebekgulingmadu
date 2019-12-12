<?php
$domains = $_SERVER['HTTP_HOST'];
$file = $_GET['file'];
$title = str_replace('-', ' ', $file);
$title = str_replace('download', '', $title);
$title = str_replace('.pdf', '', $title);
$title = preg_replace('/[^A-Za-z0-9 ]/', ' ', $title);
$title = ucwords($title);
$domen = $_SERVER['HTTP_HOST'];
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
$gambar = preg_replace('/[0-9]+/', '', $title);
?>
<!DOCTYPE html> 
<html lang="EN">

<head>
    <meta charset="utf-8"> 

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Download <?php echo $title;?> PDF E-Books- <?php echo strtoupper( $domains ); ?></title>
    <meta name="description" content="Free Download <?php echo $title;?> PDF E-Books at <?php echo strtoupper( $domains ); ?>" />
    <meta http-equiv="language" content="EN">
        <!-- Bootstrap --> 
    <link href="/lp1/file/bootstrap.min.css" rel="stylesheet">
    <link href="/lp1/file/flag-icon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/lp3/font-awesome-4.7.0/css/font-awesome.css">
    <link href="/lp1/file/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/lp1/file/overide.min.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style>
.logo {
background: transparent url("") no-repeat scroll 50% 0%;
height:100px;
display: block;
margin-bottom: 10px;
}
body{
background: transparent url(/BG/<?php echo rand(1,7);?>.jpg) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
.panel-top {
padding:20px 0;
}
.mobile { display:none; }

@media only screen and (max-width:550px) { 
.mobile { display:block; }
.desktop { display:none; }
</style>
  </head>
  <body>

    <div id="body">
      <div class="container">
          <div id="scroll">
                          <div class="col-md-offset-2 col-md-8">
                  <div class="panel">
					  <div class="panel-top">
	     			  <center><a href="/">Home</a> | <a href="/privacy.html" target="_blank">Privacy Policy</a> | <a href="/contact.html" target="_blank">Contact</a> | <a href="/dmca.html" target="_blank">DMCA</a></center>
						</div>
                    <div class="panel-header">
                      <?php echo $title;?> PDF, ePub eBook
                    </div>
                    <div id="input">
                      <div class="panel-body" id="description">
                          <div class="row">
                              <div class="col-md-4"> 
                               <div class="text-xs-right">
                                <div class="desktop"><img class="img-center center-block  img-rounded center  img-thumbnail" src="/<?php echo sanitize_title($gambar);?>.jpg"onerror="this.src='https://3.bp.blogspot.com/-GPUCXsOkt9A/WylLV5Wd2dI/AAAAAAAAAAM/-4sYWZiRKGEvwuFQ9mFaXBsrqyLiwraUACLcBGAs/s1600/largepreview.png'" /></div>
                                  <div class="mobile"><img class="img-center center-block  img-rounded center  img-thumbnail"  src="/<?php echo sanitize_title($gambar);?>.jpg"onerror="this.src='https://3.bp.blogspot.com/-GPUCXsOkt9A/WylLV5Wd2dI/AAAAAAAAAAM/-4sYWZiRKGEvwuFQ9mFaXBsrqyLiwraUACLcBGAs/s1600/largepreview.png'" /></div>
                                 </div>
                            </div>
                             <div class="col-md-8">  
                                <h4><?php echo $title;?></h4>
                                <p><b>File Name:</b> <?php echo str_replace(array('.',' '),array('','-'),strtolower($title));?>.pdf<br><b>Size:</b> <?php echo rand(30000,50000);?> KB<br><b>Uploaded:</b> <span><script type="text/javascript">
var d=new Date()
var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var monthname=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
document.write(weekday[d.getDay()] + " ")
document.write(d.getDate() + ". ")
document.write(monthname[d.getMonth()] + " ")
document.write(d.getFullYear())
</script></span></p>
                                <h4>
                                  <span class="label label-success">Status: AVAILABLE</span>
                                  <small>Last checked: <?php echo rand(1,20);?> Minutes ago!</small>
                                </h4>
                                
                               
                                
                                <p>
      <b>Rating:</b>
      <span class="starRating">
        <input id="rating5" type="radio" name="rating" value="5">
        <label for="rating5">5</label>
        <input id="rating4" type="radio" name="rating" value="4" checked>
        <label for="rating4">4</label>
        <input id="rating3" type="radio" name="rating" value="3" >
        <label for="rating3">3</label>
        <input id="rating2" type="radio" name="rating" value="2">
        <label for="rating2">2</label>
        <input id="rating1" type="radio" name="rating" value="1">
        <label for="rating1">1</label>
      </span> <font color="gray">4.4/5 from <?php echo rand(1000,7000);?> votes. </font>
    </p>
    
    </div>
                          </div>
                      </div>
                      
                      <div class="panel-footer">
					   <div class="row col-md-12 center-block">

				<div class="col-md-4 col-xs-4">
                    <img src="/lp1/file/us1.png" class="img-responsive" style="float:left; padding-right:10px;">
                    <p class="mat-10 fn-12">Download Immediately</p>
                </div>
                <div class="col-md-4 col-xs-4">
                    <img src="/lp1/file/us2.png" class="img-responsive" style="float:left; padding-right:10px;">
                    <p class="mat-10 fn-12">Complete Registration Form</p>
                </div>
                <div class="col-md-4 col-xs-4">
                    <img src="/lp1/file/us3.png" class="img-responsive" style="float:left; padding-right:10px;">
                    <p class="mat-10 fn-12">File will be Downloaded Automatically</p>
                </div> 

				         
				</div>
        
<div class="row col-md-12">   
<hr>
<b>Book overview:</b>
                  <p><div><strong><?php echo $title;?></strong> can be very useful guide, and <?php echo $title;?> play an important role in your products. The problem is that once you have gotten your nifty new product, the <?php echo $title;?> gets a brief glance, maybe a once over, but it often tends to get discarded or lost with the original packaging.</div></p>
</div>
<br/>
<br/>



<center>
		<div class="desktop">
		<a href="/dl.php?file=<?php echo $title;?>" id="continue" class="x-domain"><img style="width:100%;max-width:582px;" src="/lp1/file/down.png"></a>
		</div>
		<div class="mobile">
		<a href="/dl.php?file=<?php echo $title;?>" id="continue" class="x-domain"><img style="width:100%;max-width:582px;" src="/lp1/file/down.png"></a>
		</div>
		<br/>
	</center>

            <h2>Recommended Books</h2>

<?php poplist();?>

                        </div>
                    </div>
                    <div class="panel-body" id="console" style="display: none;">
                      <code class="command"></code>
                    </div>
                    
                    <div class="panel-footer">
                      <div class="row">
                      </div>
                                        
                    </div>
                  </div>
                  
                  <div class="bottom">
                  

                  
</div>

              </div>
              
              

              <div class="col-md-offset-2 col-md-8">
                  
                </div>
          </div>
      <div>
    </div>
	<script src="/lp1/file/sizzle.js"></script>
<?php include('histats.php');?>
</body>
</html>