<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, pitch, event, create, conceptual';
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

	<h1>nortel networks</h1>
	<h2>event proposal</h2>
	
	<p>istitch was recruited by event-planning company <a href="http://www.tbaglobal.com" target="_blank">TBA Global Events</a> (TBA) to create a document that would be used to pitch an event concept to global technology company Nortel Networks. inpspired by the dutch art/design movement, <em>De Stijl</em>, istitch was directly involved with the development and conceptual direction of the pitch.</p>
	
	<p>As a creative consultant, istitch worked with TBA executives and copy writing team to create the pitch document, which ultimately lead to TBA winning the account.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed while under contract with TBA Global Events. Nortel Networks is a client of TBA.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/nortel.jpg" alt="nortel event pitch" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/nortel.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="powerwave.php">Powerwave Brochures</a></li>
	<li><a href="safe-event.php">SAFE event collateral</a></li>
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