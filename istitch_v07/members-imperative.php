<?php
//sets the page title
$page_title = 'projects';
//sets the keywords
$keywords = 'san diego graphic design, theme, non-profit, members imperative, AIGA, AIGA san diego events, public relations';
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

	<h1>members' imperative</h1>
	<h2>theme design and media kit</h2>
	
	<p>The istitch team worked to develop a theme for AIGA San Diego's annual membership party which needed to tie in with the poster exhibition, "The Graphic Imperative," which was the highlight of the event. "Members' Imperative" parodied the propaganda poster style, addressing the political themes that the exhibition's posters had to do with. The theme also highlighted the idea that the members of AIGA San Diego are essential (or in this case, imperative!) to the organization.</p>
	
	<p>the istitch creative team was responsible for the conceptual development and graphic design of the theme, printed mailer, copy-editing and public relations support.</p>
	
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
	
	<div id="imagecontent"><img src="images/01projects/graphic_imp_01.jpg" alt="members imperative" /></div>
		
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("flash/00projects/members.swf", "slideshow", "398", "339", "8", "<?php include ('includes/pop-color.php'); ?>");
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