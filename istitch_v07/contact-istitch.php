<?php
//sets the page title
$page_title = 'contact';
//sets the keywords
$keywords = 'san diego graphic design, nick cottrell, graphic communication';
//also includes the header
include ('includes/header.php');
?>

<!--CONTENT-->
<div id="content">
<!--//-->

<?php
include ('includes/nav1.php');
?>

<!--#middle column#-->
<!--middle top-->
<div id="top_midcol">
<!--//-->
	<h3>Mailing Address:</h3>
	
	<div class="copy3">
	<p class="addressCol1"><em>telephone</em> <strong>619 228 3079</strong><br /></p>
	
	<!--<p class="addressCol2"></p>-->
	</div>
	
	
<!--//-->
</div>
<!--middle top-->
<!--#end middle column#-->

<!--#right column#-->
<!--main right-->
<div id="right2col1row">
<!--//-->
	<div class="divide"></div>
	
	<div id="formcontent"><img src="images/alt_email.gif" alt="email: info(at)istitch.net" /></div>
		
		<script type="text/javascript">
		// <![CDATA[
		var so = new SWFObject("flash/contactform.swf", "form", "698", "435", "8", "<?php include ('includes/pop-color.php'); ?>");
		so.write("formcontent");
		// ]]>
		</script>
	
<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#left column#-->
<!--top left-->
<div id="top_leftcol">
<!--//-->

	<h4>Business Hours</h4>
	<div class="copy2"><p>Off Hours</p></div>
		
<!--//-->
</div>
<!--end top left-->

<!--main left-->
<div id="leftcol">
<!--//-->
	<div class="divide"></div>
	
	<h4>Nick Cottrell V-card</h4>
	<a href="vcard/nick_cottrell.zip" target="_blank"><img border="0" src="images/vcard.png" alt="nick v-card" /></a>
	<br />
	<br />
		
	<h4>Make a Payment</h4>
	
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="image" src="http://www.istitch.net/images/pay_button.gif" border="0" name="submit" alt="Make Payment">
	<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
	</form>
	<img border="0" src="images/paypal_info.gif" alt="PayPal information" />
	<br />
	<br />
	
	

<!--//-->
</div>
<!--end main left-->
<!--#end left column#-->

<!--//-->
</div>
<!--END CONTENT-->

<?php
include ('includes/footer.php');
?>