<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, holiday card, invite';
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

	<h1>IPJ</h1>
	<h2>holiday card</h2>
	
	<p>The Institute for Peace and Justice (IPJ) at the University of San Diego has a mission to promote and foster peace around the globe. To symbolize this effort, the internationally recognized olive branch is frequently used in IPJ collateral. This holiday card provided a unique opportunity to combine two widely recognized symbols: the olive brand and the holiday wreath.</p>
	
	<p>istitch was involved with the graphic development and print-production of the piece.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed while employed at <a href="http://www.buchanandesign.com" target="_blank">Buchanan Design</a>. The Institute for Peace and Justice is a client of Buchanan Design.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/ipj_card.jpg" alt="ipj holiday card" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/ipjcard.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="magnetic-card.php">Holiday Invite</a></li>
	<li><a href="holiday-tool-kit.php">Holiday Tool Kit</a></li>
	<li><a href="ipj-books.php">IPJ Books</a></li>
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

<!--//-->
</div>
</div>
<!--END CENTERED LAYOUT-->

</body>
</html>
