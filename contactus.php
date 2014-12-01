<!DOCTYPE HTML>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<!--Google Fonts-->
<!-- *************************************************************************
**************************   STYLE SHEET   *******************************
************************************************************************** -->

<link href="css/main.css" rel="stylesheet" type="text/css" />




<title>ISCHOOL</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">


 <!-- *************************************************************************
*****************                FAVICON               ********************
************************************************************************** -->






<!-- *************************************************************************
**************************        JS       *******************************
************************************************************************** -->
<script type="text/javascript" src="js/jquery.js"> </script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"> </script>




<!-- *************************************************************************
******************     THESE ARE THE SCRIPT CALLS    ***********************
************************************************************************** -->
<script type="text/javascript">
jQuery(window).load(function() {
	
jQuery('.slider').flexslider();
 
// Create the dropdown base
jQuery("<select />").appendTo(".topmenu");

// Create default option "Go to..."
jQuery("<option />", {
 "selected": "selected",
 "value"   : "",
 "text"    : "Menu"
}).appendTo(".topmenu select");

// Populate dropdown with menu items
jQuery(".topmenu a").each(function() {
var el = jQuery(this);
jQuery("<option />", {
   "value"   : el.attr("href"),
   "text"    : el.text()
}).appendTo(".topmenu select");
});

// To make dropdown actually work
// To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
jQuery(".topmenu select").change(function() {
window.location = jQuery(this).find("option:selected").val();
});
	
jQuery('.fancybox').fancybox();
	
});
	
</script>

</head>
	<body>


<!-- Start of top wrapper -->
<div id="top_wrapper">

<!-- Start of content wrapper -->
<div class="content_wrapper">




</div><!-- End of content wrapper -->

<!-- Clear Fix --><div class="clear"></div>

</div><!-- End of top wrapper -->

<!-- Start of header wrapper -->
<div id="header_wrapper">

<!-- Start of content wrapper -->
<div class="content_wrapper">

<!-- Start of logo -->
<div id="logo">University of Pittsburgh
  
<div class="button_red">
<a href="login.php">Log in</a>
</div>

</div><!-- End of logo -->


<!-- Start of top menu wrapper -->
<div class="topmenuwrapper">

<!-- Start of topmenu -->
<nav class="topmenu">
 
<ul class="sf-menu">

<li><a class="active" href="index.php">Home</a>


</li>
        
<li><a href="checkinlist.php">Check in list</a>
</li>



<li><a href="entertainmentfood.php">Entertainment</a>
</li>


<li><a href="contactus.php">Contact</a></li>

</ul>

</nav><!-- End of topmenu -->
<!-- Clear Fix --><div class="clear"></div>

</div><!-- End of top menu wrapper -->

</div>

<!-- Start of breadcrumb wrapper -->
<div class="breadcrumb_wrapper">

<!-- Start of breadcrumb -->
<div class="breadcrumb">

<ul>
<li><a href="index.php">Home</a> &nbsp; / &nbsp;</li>
<li>Contact us</li>

</ul>

</div><!-- End of breadcrumb -->

<!-- Clear Fix --><div class="clear"></div>

</div><!-- End of breadcrumb wrapper -->