<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, tool kit, promo, promotions';
//also includes the header
include ('includes/header.php');
?>

<!--CONTENT-->
<div id="content">
<!--//-->

<?php
include ('includes/nav1.php');
?>

<!--#right column#-->
<!--main right-->
<div id="rightcol">
<!--//-->

	<h1>holiday tool kit</h1>
	<h2>promo for buchanan design</h2>
	
	<p>While employed at <a href="http://www.buchanandesign.com" target="_blank">Buchanan Design</a> (BD), istitch worked with the BD team to create a unique holiday promotional piece. The team wanted to create something that would be functional, yet memorable. <em>The Holiday Tool Kit</em> did just that with its cheerful spirit and tongue-in-cheek humor. Creative writing was used to explain how each tool could be especially useful for the holidays and, more importantly, the promo provided the recipient with an actual set of functioning tools.</p>
	
	<p>istitch was responsible for the typography, layout and tool illustrations, as well as the management of print preparation and production.</p>
	
	<div class="divide"></div>
	
	<p><em>This collaborative project was completed while employed at Buchanan Design.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/toolkit.jpg" alt="holiday tool kit" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/toolkit.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
	so.write("imagecontent");
	// ]]>
	</script>

<!--//-->
</div>
<!--end main middle-->

<!--middle top-->
<div id="top_midcol">
<!--//-->

<h3>Related Projects:</h3>
	<ul>
	<li><a href="vsh-promo.php">VSH Promo</a></li>
	<li><a href="ipj-card.php">IPJ Holiday Card</a></li>
	<li><a href="magnetic-card.php">Holiday Card</a></li>
	</ul>

<!--//-->
</div>
<!--middle top-->
<!--#end middle column#-->

<!--#left column#-->
<!--top left-->
<div id="top_leftcol">
<!--//-->

<?php
include ('includes/letstalk.php');
?>

<!--//-->
</div>
<!--end top left-->

<!--main left-->
<div id="leftcol">
<!--//-->

	<div class="divide"></div>
	
<?php
include ('includes/projects.php');
?>


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