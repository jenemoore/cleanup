<?php $page_title = "WPLD Website Search Results"; ?>

<?php include("includes/header.php"); ?>

<div id="content" class="internal">

<div id="oneCol">
<h3>Website Search Results</h3>
<p>Your website search results are:  </p>
<p>&nbsp;</p>

<div id="cse-search-results"></div>

<script type="text/javascript">
  var googleSearchIframeName = "cse-search-results";
  var googleSearchFormName = "cse-search-box";
  var googleSearchFrameWidth = 600;
  var googleSearchDomain = "www.google.com";
  var googleSearchPath = "/cse";
</script>
<script type="text/javascript" src="https://www.google.com/afsonline/show_afs_search.js"></script>
</div>




</div><!--end content-->

<?php include("includes/footer.html"); ?>