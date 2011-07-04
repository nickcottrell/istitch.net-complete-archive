<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, Neenah Paper, Cuatro De Mayo, invitation, invite, lettering';
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

	<h1>cuatro de mayo</h1>
	<h2>paper event invitation</h2>
	
	<p>While employed at <a href="http://www.buchanandesign.com" target="_blank">Buchanan Design</a> (BD), istitch collaborated with BD to design an invitation for a Neenah Paper promotional event, commemorating the launch of a new line of paper, <em>Neenah Classic Columns</em>. With the happening scheduled for May 4, the theme was "Cuatro De Mayo."</p>
	
	<p>The BD team concept was "Jump the Gun", so jumping beans were shipped in small boxes with the invite. istitch created custom lettering for the entire project, highlighting the culture of hand-painted Mexican signs. istitch also managed the production of the piece.</p>
		
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
	
	<div id="imagecontent"><img src="images/01projects/cuatro.jpg" alt="cuatro de mayo invite" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/cuatro.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
	so.write("imagecontent");
	// ]]>
	</script>

<!--//-->
</div>
<!--end main middle-->

<!--middle top-->
<div id="top_midcol">
<!--//-->

	<h3>Similar Projects:</h3>
	<ul>
	<li><a href="safe-event.php">SAFE Event </a></li>
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