<?php
//sets the page title
$page_title = 'current';
//sets the keywords
$keywords = 'san diego graphic design, graphic design san diego, graphic communication, branding, web marketing, communication, istitch, nick cottrell, newsletter';
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
	<div class="copy3"><p>This is a collection of work by Nick Cottrell and his associates. To view an updated portfolio, please click go to <a href="http://www.nickcottrell.info">www.nickcottrell.info</a> Please keep in mind that the CSS (which controls the visual design of the site) is currently turned off, emphasizing the shift to the more current website. But, by all means, have a look around and please feel free to send a message if you have any questions about anything you see here.</p></div>

<!--//-->
</div>
<!--middle top-->
<!--#end middle column#-->

<!--#right column#-->
<!--main right-->
<div id="right2col">
<!--//-->
	<div class="divide"></div>
	
	<div id="slideShow"><img src="images/stitching.jpg" alt="0" /></div>
		
	<!--<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("monoslideshow.swf", "slideshow", "698", "210", "8", "#FFFFFF");
	so.write("slideShow");
	// ]]>
	</script>-->
<!--//-->
</div>
<!--end main right-->

<!--low right-->
<div id="low_right2col">
	<!--<iframe id="ifrm" name="ifrm" src="</*?php if ($iframe_state == 'noscroll') { echo 'newsletter-form.php'; } else { echo 'http://istitch.wordpress.com'; } ?>" scrolling="</*?php if ($iframe_state == 'noscroll') { echo 'no'; } else { echo 'yes'; } ?>" width="698" height="290" frameborder="0"></iframe>-->
</div>
<!--end low right-->
<!--#end right column#-->

<!--#left column#-->
<!--top left-->
<div id="top_leftcol">
<!--//-->

	<h3>Recent Projects:</h3>
	<div id="boxes">
	<a class="box1" href="the-white-pebble-brand.php"><img border="0" src="images/thumb_01.jpg" alt="The White Pebble Brand" /></a>
	<a class="box2" href="seagraves-brand.php"><img border="0" src="images/thumb_02.jpg" alt="Seagraves Brand" /></a>
	<a class="box3" href="members-imperative.php"><img border="0" src="images/thumb_03.jpg" alt="Members Imperative" /></a>
	</div>
	
<!--//-->
</div>
<!--end top left-->

<!--main left-->
<div id="leftcol">
<!--//-->
	<div class="divide"></div>

	<h4>Branding</h4>
	<div class="copy2"><p>In this day and age, a company's brand can be it's most valuable asset. It can help communicate messages and differentiate a company from the competition.</p></div>

	<a class="arrow" href="istitch-branding.php"><font class="arrow_text">Go</font></a>

	<br /><br />
	<div class="divide"></div>

	<h4>Web Marketing</h4>
	<div class="copy2"><p>The web can provide a highly effective means of delivering fresh content to a target market.</p></div>

	<a class="arrow" href="istitch-web-marketing.php"><font class="arrow_text">Go</font></a>
	
	<br /><br />
	<div class="divide"></div>

	<h4>Newsletter</h4>
	<div class="copy2"><p>Sign up for our quarterly e-newsletter about art, branding, and design for business.</p></div>
	
	<a class="arrow" href="index2.php"><font class="arrow_text">Go</font></a>


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