<?php
//sets the page title
$page_title = 'San Francisco Communication Design : Nick Cottrell : Communication Designer';
//sets the keywords
$keywords = 'san francisco graphic design, san francisco communication design, Communication Designer, brands, web, identity, print, fonts, photos, nick cottrell, cottrell';
//also includes the header
include ('includes/header.php');
?>

<!--FULL 3 COLUMN LAYOUT-->
<div class="container">
<!--//-->

<!--LEFT COLUMN-->
<div class="sidebar1">
<!--//-->
	
    <div class="fixedcontent">
    
<?php
include ('includes/nav1.php');
?>
        
	<br class="clearfloat" />
    
    </div>

<!--//-->
</div>
<!--END LEFT COLUMN-->

<!--MIDDLE COLUMN-->
<div class="content">
<!--//-->

	
	<img src="images/proj_seag_01.jpg" alt="" /><br /><br />
	<img src="images/proj_seag_02.jpg" alt="" /><br /><br />
	<img src="images/proj_seag_03.jpg" alt="" /><br /><br />
    <img src="images/web-seag-01.png" alt="" /><br /><br />
    <img src="images/web-seag-02.png" alt="" /><br /><br />
	
    <br class="clearfloat" />

<!--//-->
</div>
<!--END MIDDLE COLUMN-->

<!--RIGHT COLUMN-->
<div class="sidebar2">
<!--//-->
	
    <div class="fixedcontent">
    
<?php
include ('includes/nav2_brands.php');
?>
   	
    <br class="clearfloat" />
	</div>
    
<!--//-->
</div>   
<!--END RIGHT COLUMN-->

<!--//-->
</div>
<!--END FULL 3 COLUMN LAYOUT-->
</body>
</html>
