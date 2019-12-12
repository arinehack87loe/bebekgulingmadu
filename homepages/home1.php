<?php
function poplist() {
	if (file_exists('KEY/pop.txt')) {
		$myfile = fopen("KEY/pop.txt", "r") or die("Unable to open file!");
		while( $i < 12) {
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
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UNLIMITED BOOKS LIBRARY</title>
		<!--pageMeta-->

	<!-- Lib CSS -->
	<link href="//fonts.googleapis.com/css?family=Rancho|Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,700italic,800" rel="stylesheet">
	<link href="/index/min.css" rel="stylesheet">
	<link href="/index/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="/lp3/font-awesome-4.7.0/css/font-awesome.css">
	<!-- Favicons -->
	<link rel="icon" href="/index/icon.ico">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--[if IE 9 ]><script src="js/ie-matchmedia.js"></script><![endif]-->
	<?php
    $file_name = 'head.txt';
    $script_head = file_get_contents( $file_name );
    echo $script_head;
    ?>

</head>
<body>
<div id="page" data-linkscroll='y'>

	<!-- Navigation -->
	<nav class="nav-wrp nav-4 dark" data-sticky="y" data-hide="y">
		<div class="container">
			
			<div class="nav-header">
				<a class="navbar-brand" href="/"></a>
				<a class="nav-handle fs-touch-element" data-nav=".nav"><i class="fa fa-bars"></i></a>	
			</div>
			
			<div class="nav vm-item">
				<ul class="nav-links">
					<li><a href="#about">About Us</a></li>
					<li><a href="#author">Unlimited Download</a></li>
					<li><a href="/member.php">Member Area</a></li>
				</ul>
				<div class="nav-other">
					<span><a href="#popup-contact-form" class="popup-contact"><i class="fa fa-envelope-o"></i> Email us</a></span>
				</div>
			</div><!-- /.nav -->
			
		</div><!-- /.container --> 
	</nav>
	
	<!-- intro-section -->
	<section class="intro-section intro-section-29 pos-rel">
		<div class="full-wh bg-cover bg-ct bg-section" data-parallax="scroll" data-image-src="https://3.bp.blogspot.com/-xwSw6QqwAz8/WsTm-hK0uAI/AAAAAAAAAfI/4EW-BLp_GfAtQXQAKdeNyjy7j5j1-pX2QCLcBGAs/s1600/azon.jpg"></div>
		<div class="pos-rel pd-tb-80 z2 content-top">
			<!-- container -->
			<div class="container">
				<div class="flex-row middle-md">
					<div class="flex-col-md-6 flex-col-md-offset-1 last-md">
						<img src="https://1.bp.blogspot.com/-67-lPV6UcK0/WsixTfSIPfI/AAAAAAAAAfk/h9yMdsSFNd8RmacCix3DerBvSLI6l9rlgCLcBGAs/s1600/bestbook2018.png" width="550" height="600" class="img-responsive book-img" alt="book-image">
					</div>
					<div class="flex-col-md-5">
						<div class="content typo-light">
							<h1 class="title fs38 lh1-3 bold-4">#1 The world's<br> unlimited books & audiobook service. No limits. All in one your book library</h1>
							<hr class="light">
							<p class="fs20 bold-2 italic">Search PDFs, eBooks, ePubs, eMagazines, ePaper, eJournal and more</p>
						</div>
					</div>
				</div>
			</div><!-- /.container -->
		</div>
		<div class="pos-rel pd-tb-60 z1 content-bottom">
			<div class="container">
				<div class="flex-row middle-md gt40">
					<div class="flex-col-md-3">
					<p class="fs28 lh1-4 mr-0 txt-light">
Limited time offer
							 <br></p>
							<p class="txt-light">START YOUR FREE ACCOUNT To access the Books Library. & get your favorite EBooks include PDF, ePub and Kindle.</p>
						<p class="txt-light">Signup today for FREE.!</p><br>
					</div>
					<div class="flex-col-md-3">
						<a href="/signup.php"class="btn btn-default no-border btn-lg">Signup now</a>
					</div>
				</div><!-- /flex-row -->
			</div><!-- /container -->
		</div>
	</section><!-- /.intro-section -->


	<!-- content-section -->
	<section class="content-section content-section-common" id="about">
		<div class="container">
			<div class="flex-row">

				<div class="flex-col-md-4">
					<h2 class="title medium">UNLIMITED BOOKS</h2>
				
					<img src="/index/ebook-image.png" class="img-responsive rd-150 mr-auto" alt="author">
				
					<p class="title-sub">YOUR FAVORITE BOOKS, MAGAZINES, & COMICS FOR FREE! READ THEM NOW!.</p>
				</div><!-- /column -->
				
				<div class="flex-col-md-7 flex-col-md-offset-1">
					<div class="row gt30">

						<div class="col-md-6">
							<div class="info-box info-box5">
								<div class="img" style="font-size: 40px;"><i class="fa fa-server"></i></div>
								<div class="info">
									<h2 class="hd">Free, Unlimited Access</h2>
									<p class="sub-txt">Experience all the content you could possibly want from our comprehensive library of timeless classics and new releases.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box info-box5">
								<div class="img" style="font-size: 40px;"><i class="fa fa-search"></i></div>
								<div class="info">
									<h2 class="hd">Search for anything.</h2>
									<p class="sub-txt">Unlimited Books Library makes it easy to discover the latest literary masterpiece, a new genre, an up and coming author. We’ve got you covered.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box info-box5">
								<div class="img" style="font-size: 40px;"><i class="fa fa-ban" style="font-size:48px;color:red"></i></div>
								<div class="info">
									<h2 class="hd">No Ads.</h2>
									<p class="sub-txt">Enjoy your books hassle free - no interruptions and no advertisements. Ever.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box info-box5">
								<div class="img" style="font-size: 40px;"><i class="fa fa-mobile-phone" style="font-size:48px;color:blue"></i></div>
								<div class="info">
									<h2 class="hd">All platforms</h2>
									<p class="sub-txt">Access your titles anywhere on any device including PC, Tablet, Mobile, PS4, Xbox One, and Smart TVs.</p>
								</div>
							</div>
						</div>

					
					</div><!-- /row -->
				</div><!-- /column -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /content-section -->


	<!-- other-section -->
	<section class="other-section other-section-common" id="author">
		<div class="container">
			<div class="flex-row middle-md mb20">
				<div class="flex-col-md-3 align-c">
					<img src="/index/device.gif" class="img-responsive rd-150 mr-auto" alt="author">
				</div><!-- /column -->
				<div class="flex-col-md-8 flex-col-md-offset-1 sm-align-c">
					<h2>Unlimited Books Library</h2>
					<hr class="dark">
					<p class="mr-b-30">
Join hundreds of thousands of satisfied members who previously spent countless hours searching for media and content online, now enjoying the hottest new Books, Magazines & Comics on Unlimited Books Library.
</br>
<b>It's HERE and it's FREE.</b> Here's why you should join:
</br>
<i class="fa fa-check" style="font-size:12px;color:green"></i> <b>Unlimited Books, Magazines, & Comics</b> wherever you are: directly in your browser on your PC or tablet.
</br>
<i class="fa fa-check" style="font-size:12px;color:green"></i> <b>More than 10 million titles</b> spanning every genre imaginable, at your fingertips.
</br>
<i class="fa fa-check" style="font-size:12px;color:green"></i> <b>Get the best Books, Magazines & Comics</b> in every genre including Action, Adventure, Anime, Manga, Children & Family, Classics, Comedies, Reference, Manuals, Drama, Foreign, Horror, Music, Romance, Sci-Fi, Fantasy, Sports and many more.
</br>
<i class="fa fa-check" style="font-size:12px;color:green"></i> <b>New titles added every day!</b> We like to keep things fresh.
</br>
<i class="fa fa-check" style="font-size:12px;color:green"></i> All platforms. Fully Optimized.
</br>
<i class="fa fa-check" style="font-size:12px;color:green"></i> Find out why thousands of people are joining every day.</br>
</p>
					
					<div class="social-links small">
<b><h3>Sign up now and experience entertainment, unlimited!</h3></b>

<br>

					</div><!-- /Social -->
<b>Recent Books Download:</b>
<?php poplist();?>
				</div><!-- /column -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /other-section -->
	
	<!-- other-section -->
	<section class="other-section other-section-common" id="download">
		<div class="container align-c">
			<h2 class="title medium">Get free account now!</h2>
			<p class="mr-b-40"><strong class="tag-text" style="background-color: #EA0707;">100% TOTALY FREE</strong></p>
				<center><a href="/signup.php"><img src="/index/free-sign-up.jpg"></a></center>
			<div class="content w-75 mr-auto">
				<div class="flex-row gt40">
			 		<!--<div class="flex-col-md-6 align-c">
						<a href="" target="_blank" class="btn-line dark btn-block btn btn-lg mr-b-20 btn-depth">
							<span class="fs30 align-m"><i class="ti-bookmark-alt"></i></span> &nbsp; Order paper book
						</a>
						<p class="fs24 mr-b-5"><span class="l-through">$200.00</span> &nbsp;&nbsp; <span class="bold-5">$100.00</span></p>
						<p>* Consectetur adipisicing elit</p>
					</div>
					<div class="flex-col-md-6 align-c">
						<a href="" target="_blank" class="btn-line dark btn-block btn btn-lg mr-b-20">
							<span class="fs30 align-m"><i class="ti-tablet"></i></span> &nbsp; Download eBook
						</a>
						<p class="fs24 mr-b-5"><span class="l-through">$100.00</span> &nbsp;&nbsp; <span class="bold-5">$50.00</span></p>
						<p>* Excepteur sint occaecat cupidatat</p>
					</div> -->
				
				</div><!-- /row -->	
			</div><!-- /content -->
		</div><!-- /container -->
	</section><!-- /other-section -->

	
	<!-- <section class="form-section form-section-4">
		<div class="container align-c">
			<h2 class="title medium mr-b-10">Get the eBook sample</h2>
			<p class="title-sub medium">Lorem ipsum dolor sitamet consectetur adipisicing elitseddo<br>eiusmod tempor incididunt utlabore</p>
			
			<form action="form-data/notify-me.php" class="form-widget" data-formtype="newsletter" data-msgpos="normal">
				<ul class="form-inline-tbl align-t">
					<li><input class="form-control large" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name"></li>
					<li><input class="form-control large" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email"></li>
					<li><button type="submit" data-loading-text="Pleae wait.." class="btn btn-primary btn-lg btn-block"><i class="fa fa-envelope-o"></i> Subscribe now</button></li>
				</ul>
			</form>
		</div>
	</section> --> 

	<!-- Footer section -->
	<section class="footer-section footer-section-1">
	    	<a href="/" target="_blank">HOME</a> | <a href="/dmca" target="_blank">DMCA NOTICE</a> | <a href="/privacy" target="_blank">Privacy Policy</a> | <a href="/disclaimer" target="_blank">Disclaimer</a>  | <a href="/contact" target="_blank">Contact Us</a> | <a href="/feed">RSS Feed</a>

		<div class="social-links">
		
		</div>
		<!-- <img src="images/logo.png" alt="Company logo"> -->
		<p class="copyright"> - Unlimited Books Library &copy; 2019</p>
	</section><!-- ./Footer section -->

	<!-- Popup contact form -->
	<div id="popup-contact-form" class="white-popup-block popup-form mfp-hide">
		<div class="pop-header">
			<i class="fa fa-envelope-o"></i>
			<h3 class="title medium">Contact Us</h3>
			<p class="title-sub mini">Let us know how to get back to you.</p>	
		</div>
		<div class="pop-body">
			<form action="form-data/formdata.php" class="form-widget" data-popup="popup-contact">
				<div class="field-wrp">
					<input type="hidden" name="to" value="dmcabooks@gmail.com">
					<div class="form-group">
						<input class="form-control" data-label="Name" required data-msg="Please enter name." type="text" name="name" placeholder="Enter your name">
					</div>
					<div class="form-group">
						<input class="form-control" data-label="Email" required data-msg="Please enter email." type="email" name="email" placeholder="Enter your email">
					</div>
					<div class="form-group">
						<input class="form-control" required data-msg="Please phone number." data-label="Phone" type="text" name="phone" placeholder="Enter your phone number">
					</div>
					<div class="form-group">
						<textarea class="form-control" data-label="Message" required data-msg="Please enter your message." name="message" placeholder="Add your message" cols="30" rows="10"></textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Submit</button>
			</form>	
			<div class="msg-block"></div>
		</div>
	</div><!-- /#popup-contact-form -->

</div>
<!-- /#page --> 

<!-- JavaScript --> 
<script src="/index/min.js"></script>
<script async src="/index/genesis.js"></script>
</body>
<?php include('histats.php');?>
</html>