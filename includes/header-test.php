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
name : pcID,
email : 'visitor@email.com'
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
Tawk_API.onLoad = function(){
    Tawk_API.maximize();
};
</script>
<!--End of Tawk.to Script-->
<!--slideshow javascript-->
<script type="text/javascript">
	$(document).ready(function() {
		$('#slides').cycle({
			fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		});
	});
</script>
<script type="text/javascript">
	/* <![CDATA[ */
	$(function() {
		$('#pause').click(function() { $('#slides').cycle('pause'); return false; });
		$('#play').click(function() { $('#slides').cycle('resume'); return false; });
    
		$('#slideshow').hover(
			function() { $('#sscontrols').fadeIn(); },
			function() { $('#sscontrols').fadeOut(); }
		);
    
		$('#slides').cycle({
			fx:     'fade',
			speed:   400,
			timeout: 3000,
			next:   '#next',
			prev:   '#prev'
		});
	});
	/* ]]> */
	</script>
<!--menu javascript-->
<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    8,   			// minimum width of sub-menus in em units
				maxWidth:    17,   			// maximum width of sub-menus in em units
				extraWidth:  1     			// extra width can ensure lines don't sometimes turn over
											// due to slight rounding differences and font-family
			}).superfish({
				autoArrows	: true, 		// sets arrows to appear or not
				animation: {height:'show'}, // slide-down effect without fade-in
				delay:     800              // 1.2 second delay on mouseout
			}).supposition();  				// call supersubs first, then superfish, so that subs are
											// not display:none when measuring. Call before initialising
											// containing tabs for same reason.
		});
</script>
        
  <!--[if IE]>		
		<style type="text/css">
			#header table#search input.search-field {
				width: 160px;
			}
			#header #header-right {
				margin: 33px 0 0 0;
			}
			#header #search-options {
				padding-right:15px;
			}
		</style>
	<![endif]-->      
	
<!--Google Analytics javascript-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-33493009-1', 'auto');
  ga('send', 'pageview');

</script>

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
									M - Th
								</td>
								<td width="135">
									9:30 am - 9 pm
								</td>
								<td width="45">
									Sat
								</td>
								<td>
									9:30 am - 5 pm
								</td>
							</tr>
							<tr>
								<td>
									Fri
								</td>
								<td>
									9:30 am - 7 pm
								</td>
								<td>
									Sun
								</td>
								<td>
									1 pm - 5 pm
								</td>
							</tr>
						</table><!--/#hours-->
						<p><a href="https://www.warrenville.com/about/libraryclosings.php">View Library Closings</a></p>
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
			<div id="nav">
				<ul class="sf-menu">
					<li><a href="#">Catalog/My Account</a>
						<ul>
							<li><a href="https://wpld.ent.sirsi.net/client/en_US/wpld">Catalog</a></li>
							<li><a href="https://wpld.ent.sirsi.net/client/en_US/wpld/search/patronlogin/http:$002f$002fwpld.ent.sirsi.net$002fclient$002fen_US$002fwpld$002fsearch$002faccount$003f">My Account</a></li>
							<li><a href="https://warrenville.libnet.info/myevents">My Events</a></li>
						</ul>
					</li>    
					<li><a href="#">About Us</a>
						<ul>
							<li><a href="https://www.warrenville.com/about/contact.php">Contact Us</a></li>
							<li><a href="https://www.warrenville.com/about/history.php">History &amp; Mission</a></li>
							<li><a href="https://www.warrenville.com/about/jobs.php">Job Opportunities</a></li>
							<li><a href="#">Library Governance</a>
								<ul>
									<li><a href="https://www.warrenville.com/about/libraryboard.php">Library Board</a></li>
									<li><a href="https://www.warrenville.com/about/agendasandminutes.php">Agendas &amp; Minutes</a></li>
									<li><a href="https://www.warrenville.com/about/budgetandfinances.php">Budget &amp; Finances</a></li>
									<li><a href="https://www.warrenville.com/about/ordinances.php">Ordinances</a></li>
								</ul>
							</li>
							<li><a href="#">Library Policies</a>
								<ul>
									<li><a href="https://www.warrenville.com/about/policies.php">Policies</a></li>
									<li><a href="https://www.warrenville.com/about/freedomofinformationact.php">FOIA</a></li>
								</ul>
							</li>
							<li><a href="https://www.warrenville.com/about/strategicplanandstatistics.php">Strategic Plan &amp; Statistics</a></li>
						</ul>
					</li>
					<li><a href="#">Services</a>
						<ul>
							<li><a href="https://www.warrenville.com/services/bookalibrarian.php">Book a Librarian</a></li>
							<li><a href="https://www.warrenville.com/services/communityinvolvement.php">Community Involvement</a></li>
							<li><a href="#">Computers & Technology</a>
								<ul>
									<li><a href="https://www.warrenville.com/services/computerskills.php">Computer Skills</a></li>
									<li><a href="https://www.warrenville.com/services/computerandwifi.php">Computers & WiFi</a></li>
									<li><a href="https://www.warrenville.com/services/copyfaxprintscan.php">Copy / Fax / Print / Scan</a></li>
									<li><a href="https://www.warrenville.com/services/MobileMenu2017.pdf">Mobile Devices</a></li>
								</ul>
							</li>
							<li><a href="https://www.warrenville.com/services/homebound.php">Homebound Service</a></li>
							<!--<li><a href="https://warrenville.libnet.info/itemrequestform">Item Request Form</a></li>-->
							<li><a href="#">Library Cards & Lending</a>
								<ul>
									<li><a href="https://www.warrenville.com/services/librarycards.php">Library Cards</a></li>
									<li><a href="https://www.warrenville.com/services/loanperiodsandfees.php">Loan Periods & Fees</a></li>
									<li><a href="https://www.warrenville.com/services/notificationandbilling.php">Notification & Billing</a></li>
								</ul>
							</li>
							<li><a href="https://www.warrenville.com/services/meetingroom.php">Meeting Spaces</a></li>
							<li><a href="https://www.warrenville.com/services/museumadventurepass.php">Museum Adventure Pass</a></li>
						</ul>
					</li>
					<li><a href="#">Programs</a>
							<ul>
								<li><a href="https://warrenville.libnet.info/events">Calendar of Events</a></li>
								<li><a href="https://www.warrenville.com/programs/readforacause.php">Summer Reading 2020</a></li>
							</ul>
					</li>
					<li><a href="#">Reading</a>
						<ul>
							<li><a href="https://www.warrenville.com/blog"> Book & Media Blog </a></li>
							<li><a href="https://www.warrenville.com/reading/localbookdiscussions.php">Book Discussions</a></li>
							<li><a href="https://warrenville.libnet.info/discover">Discover Your Next Read</a></li>
							<li><a href="# ">eBooks & eMedia</a>
								<ul>
									<li><a href="https://www.warrenville.com/reading/emedia.php">Getting Started</a></li>
									<li><a href="https://www.hoopladigital.com">Hoopla</a></li>
									<li><a href="https://emedialibrary.overdrive.com/emedialibrary-warrenville/content/" onClick="ga('send', 'event', { eventCategory: 'link', eventAction: 'service', eventLabel: 'emedialib'});">Overdrive</a></li>
									<li><a href="http://rpa.warrenville.com:80/rpa/default/webauth.htm?rs=zinio">RBdigital eMagazines</a></li>
									<li><a href="https://library.biblioboard.com/home">Biblioboard</a></li>
								</ul>
							</li> 
							<li><a href="https://www.libraryaware.com/1074/Subscribers/Subscribe">eNewsletters for Readers</a></li>
							<li><a href="https://www.warrenville.com/reading/magazinesnewspapers.php">Magazines &amp; Newspapers</a></li>
							<li><a href="https://www.warrenville.com/reading/onlineresourcesreaders.php">Online Resources for Readers</a></li>
							<li><a href="https://www.warrenville.com/reading/emedia.php#tumblebooks">Tumblebooks</a></li>
						</ul>
					</li>
					<li><a href="#" class="last">Research</a>
						<ul>
							<li><a href="https://www.warrenville.com/research/databasesatoz.php">Databases A to Z</a></li>
							<li><a href="https://www.warrenville.com/research/onlinelearning.php">Online Learning</a></li>
							<li><a href="https://www.warrenville.com/research/onlineresourcesreference.php">Online Resources</a></li>
							<li><a href="https://www.warrenville.com/covidresources.php">COVID-19 Resources</a></li>
						</ul>
					</li>
				</ul>
			</div>
			</div>

<!--end nav-->
