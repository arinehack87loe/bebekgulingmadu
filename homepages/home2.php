<?php
error_reporting(0);
ini_set("display_errors", 0);
include('PENGATURAN/config.php');
function poplist() {
	if (file_exists('KEY/pop.txt')) {
 include('PENGATURAN/config.php');
		$myfile = fopen("KEY/pop.txt", "r") or die("Unable to open file!");
		while( $i < $feed) {
			$seek = rand(0, filesize("KEY/pop.txt"));
			if ($seek > 0) {
				fseek($myfile, $seek);
				fgets($myfile);
			}
			$kiwot = fgets($myfile);
			if (!empty($kiwot)) {
				include('PENGATURAN/config.php');
				$url = $linkfont($kiwot);
				$url =  ltrim(rtrim($url));
				$url = str_replace (' ',''.$linkstyle.'',$url);
                                $judul = $kiwot;
				echo '<li class="list-group-item "><i class="fa fa-file-pdf-o" aria-hidden="true"style=" color:red"></i> <a href="/'.$url.''.$linkstyle.''.$unixurlcode.'.pdf" title="'.ucwords($judul).'">'.ucwords($judul).'</a></li>';
				
			}
			$i++;
		}
		fclose($myfile);
	}
}

;?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="/xmlrpc.php">
<link rel="dns-prefetch" href="//code.jquery.com" />
<link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com" />
<title><?php echo $site_name;?> - <?php echo $site_description;?> at <?php echo strtoupper($domen);?></title>
<meta charset="UTF-8">
<meta name="description" content="<?php echo $site_description;?>">
<meta name="keywords" content="<?php echo $site_keyword;?>">
<meta name="author" content="<?php echo strtoupper($domen);?>">
<link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
	
<?php
    $file_name = 'head.txt';
    $script_head = file_get_contents( $file_name );
    echo $script_head;
    ?>	
</head>
<body class="home blog">
<div id="page" class="hfeed site">
	<nav id="site-navigation" class="main-navigation navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
		<header id="masthead" class="site-header navbar-header" role="banner">
			<a class="navbar-brand" href="/"alt="<?php echo $site_name;?>"><?php echo strtoupper($domen);?></a>
		</header>
				</div>
	</nav><!-- #site-navigation -->

	<div id="content" class="site-content container clearfix">

	
<div id="tertiary" class="widget-area col-md-2 hidden-xs hidden-sm" role="complementary">
	</div><!-- #secondary -->

	<div id="primary" class="content-area col-md-12">

		
			<main id="main" class="site-main clearfix" role="main">

				<header class="page-header">
				<h1 class="page-title"><?php echo $site_name;?></h1>
				
				</header><!-- .page-header -->

			<ul class="list-group">
<?php poplist();?>
						</ul>
						</main><!-- #main -->
			
						
			</div><!-- #primary -->

	
<div id="secondary" class="widget-area col-md-2" role="complementary">
	</div><!-- #secondary -->


	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	    <div class="container">
		<div class="site-info col-md-12 footer-logo">
			<small>&copy;</small> <?php echo strtoupper($domen);?> Website
		</div><!-- .site-info -->
		<hr>
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="/feed">RSS Feed</a></li>
			<li><a href="/contact.html">Contact</a></li>
			<li><a href="/dmca.html">DMCA</a></li>
			<li><a href="/sitemap-index.xml">Sitemap</a></li>
			<li><a href="/indexer">index</a></li>	
		</ol>
	    </div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

</body>
</html>