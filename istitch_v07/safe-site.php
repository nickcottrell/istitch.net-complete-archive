<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, (X)HTML, PHP, CSS, SAFE website, San Diego Advertising Fund for Emergencies, non-profit, website';
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

	<h1>SAFE</h1>
	<h2>non-profit website</h2>
	
	<p>The update of website for local san diego non-profit organization, SAFE involved a complete overhaul of the design and site structure. istitch was up for the task to employ a fresh new feel for 2007. The istitch team employed a modular (X)HTML/PHP site structure that allows for easy maintanence and a wider range of browser compatablity, which allows for display on devices such as mobile phones and older browsers.</p>
	
	<div class="divide"></div>
	
	<p><em>This project was completed at the istitch studio. SAFE (San Diego Advertising Fund for Emergencies) provides grants to people experiencing life crisis in the creative industry. <a href="http://www.aboutsafe.org" target="_blank">View site.</a></em></p>

<!--//-->
</div>
<!--end main right-->
<!--#end right column#-->

<!--#middle column#-->
<!--main middle-->
<div id="midcol">
<!--//-->

	<div class="divide"></div>
	
	<div id="imagecontent"><img src="images/01projects/safe_site.jpg" alt="SAFE website" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/safe_site.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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
	<li><a href="cuatro-de-mayo.php">Cuatro De Mayo, </a></li>
	<li><a href="magnetic-card.php">Holiday Invite, </a></li>
	<li><a href="wedding-invite.php">Wedding Invite</a></li>
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