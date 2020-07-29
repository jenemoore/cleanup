<!DOCTYPE HTML>
<html lang='en'>
<head>
<title><?php echo $page_title; ?></title>
<meta charset="iso-8859-1">
<meta name="author" content="Warrenville Public Library District">
<link href="https://www.warrenville.com/css/reset.css" rel="stylesheet">
<link href="https://www.warrenville.com/css/style.css" rel="stylesheet">
<link href="https://www.warrenville.com/css/superfish.css" rel="stylesheet" media="screen">
<link href="https://www.warrenville.com/css/evanced.css" rel="stylesheet">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="https://www.warrenville.com/js/hoverIntent.js"></script>
<script type="text/javascript" src="https://www.warrenville.com/js/superfish.js"></script>
<script type="text/javascript" src="https://www.warrenville.com/js/supersubs.js"></script> 
<script type="text/javascript" src="https://www.warrenville.com/js/supposition.js"></script>
<script type="text/javascript" src="https://www.warrenville.com/js/iepngfix_tilebg.js"></script>
<script type="text/javascript" src="https://www.warrenville.com/js/jquery.cycle.all.2.72.js"></script>
<!--<script src="https://www.google.com/recaptcha/api.js?fallback=true"" async defer></script> -->
<!--start of page id-->
<script type="text/javascript">
var params = new URLSearchParams(location.search);
var pcID = params.get("pcID");
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{};
Tawk_API.visitor = {
name : pcID
};

var Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f0c963b5b59f94722baa521/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

</script>
<!--End of Tawk.to Script-->



</head>

<!-- *** end HEAD *** -->

<body>


	<div id="top-border"><!--why is this here?--></div>
	<div id="wrapper">
		<div id="page-bg">
			<header id="header" class="banner-1">
				<a href="https://www.warrenville.com/index.php"><img src="https://www.warrenville.com/images/warrenvillepl-logo.png" alt="WPLD Homepage" id="logo"></a>
					<div id="header-left">
						<h1>Warrenville Public Library District</h1>
						<p>28W751 Stafford Place Warrenville, Illinois 60555<br />
						630/393-1171 &nbsp; <a href="https://www.warrenville.com/about/contact.php">Contact Us</a> &nbsp;|&nbsp; <a href="https://www.mapquest.com/maps?2a=28w751+Stafford+Pl&2c=Warrenville&2s=IL&2z=60555-3002">Get Directions</a></p>
					</div><!--/#header-left-->
					<div id="header-right">
						<table id="hours">
							<tr>
								<td width="50">
									M W F Sat
								</td>
								<td width="135">
									10:00 am - 2:00 pm
								</td>
							</tr>
							<tr>
								<td width="45">
									Tues Thurs
								</td>
								<td>
									2:00 pm - 6:00 pm
								</td>
							</tr>
		
						</table><!--/#hours-->
		
						<div id="search-wrapper">
							<script type="text/javascript">
								function OnSubmitForm() {
									if (document.search.rad[0].checked == true) {
										document.search.action = "https://wpld.ent.sirsi.net/client/en_US/wpld/search/results";
										document.search.method = "GET"
										document.search.searchtext.name = 'term'
									}
									else
									if (document.search.rad[1].checked == true) {
										document.search.action = "https://www.warrenville.com/google-search.php";
										document.search.searchtext.name = 'q';
									}
									return true;
								}
								</script>
							<form name="search" id="searchForm" onsubmit="return OnSubmitForm();">
								<input type="hidden" name="ln" value="en_US" />
								<input type="hidden" name="session" value="1299L066626E2.8890">
								<input type="hidden" name="menu" value="search">
								<input type="hidden" name="aspect" value="basic_search">
								<input type="hidden" name="npp" value="25" size="2">
								<input type="hidden" name="ipp" value="20">
								<input type="hidden" name="spp" value="20">
								<input type="hidden" name="profile" value="wpld">
								<input type="hidden" name="ri" value="">
								<input type="hidden" name="aspect" value="basic_search">
								<input type="hidden" name="index" value=".GW" />
								<input type="hidden" name="cx" value="008033022418278166517:tdnqsomizqe" />
								<input type="hidden" name="cof" value="FORID:9" />
								<input type="hidden" name="ie" value="UTF-8" />
								<input type="hidden" name="q" value="" />
								<table id="search">
									<tr>
										<td width="360" id="search-options" style="text-align:right;">
											<label>Search:</label>
											<input name="rad" type="radio" value="Library Catalog" checked class="radio">
											<label>Library Catalog</label>
											<input name="rad" type="radio" value="Website" class="radio">
											<label>Website</label>
										</td>
									</tr>
									<tr>
										<td width="360" colspan="3" style="width:355px !important;">
											<div id="social-media">
												<a href="https://www.facebook.com/pages/Warrenville-IL/Warrenville-Public-Library-District/102100486022"><img src="https://www.warrenville.com/images/social-icons-facebook.png" alt="Warrenville Public Library District Facebook"></a>
												<a href="https://www.twitter.com/warrenvillelib"><img src="https://www.warrenville.com/images/social-icons-twitter.png" alt="Warrenville Public Library District Tweet"></a>
												<a href="https://www.warrenville.com/blog/index.php/feed/"><img src="https://www.warrenville.com/images/social-icons-rss.png" alt="Warrenville Public Library District RSS Feed"></a>
											</div>
											<input id="q" title="Search For:" maxlength="256" name="q" value="" type="text" accesskey="s" />  
								<input value="Search" id="searchButton" class="button" title="Search" type="submit" />
										</td>
									</tr>
								</table>
							</form>
						</div><!--end search-wrapper -->
					</div><!--/#header-right-->
			</header><!--end header-->
			<div style="clear:both">
			
