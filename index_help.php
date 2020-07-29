<?php $page_title = "Warrenville Public Library District"; ?>

<?php include("includes/header.php"); ?>

<div id="content">
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/hmac-sha256.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/enc-base64.min.js"></script>
<script>
  var hash = CryptoJS.HmacSHA256("user@email.com", "6910e80481dc79a1dfe129f69908d5528e0b056d");
  var hashInBase64 = CryptoJS.enc.Base64.stringify(hash);
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
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
<div id="content" class="internal">

	<div id="oneCol">
	<p id="help">Click on the chat button in the bottom right for assistance!</p>

	</div>
    
</div><!--end content-->

<?php include("includes/footer.html"); ?>