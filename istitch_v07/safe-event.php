<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, theme, non-profit, silent auction, SAFE, san diego advertising fund for emergencies, public relations';
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

	<h1>hush...</h1>
	<h2>graphics for silent auction</h2>
	
	<p>The istitch team worked with local non-profit organization San Diego Advertising Fund for Emergencies (SAFE) to develop the creative theme for its annual silent auction fundraiser in 2006. "Hush...It's On-Broadway" was a well-suited theme for the silent auction event, which ended up being one of the most successful SAFE fundraisers to-date.</p>
	
	<p>the istitch creative team was responsible for the conceptual development and graphic design of all printed material and event graphics, management of the print process, and intensive copy-editing and public relations support.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed at the istitch studio.</em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/hush.jpg" alt="hush... it's on broadway" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/hush.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="cuatro-de-mayo.php">Cuatro De Mayo </a></li>
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