<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script SRC="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/ppic.css" />	
	
 <?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
<title>meetme - <?php echo $display['firstname'] . " " . $display['lastname'] ?> </title>	
<link rel="shortcut icon" HREF="photos/log.jpg" />
	
	<!-- Metadescription and MetaKeyWords are used for SEO -->
	<meta content="Metadescription" name="Insert the description of this page here" />
    <meta content="MetaKeyWords" name="Insert the keywords that descrive this page here" />
		<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>
			
	<!-- JQUERY -->
	<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {

	$("#editpic").click( function() {
		$("#forms").fadeIn();
		$("#editpic").fadeOut();
	});	
});
</script>
	<script language="Java Script" type="text/javascript">
function addSC(textToAdd)
{
document.form.content.value += textToAdd;
document.form.content.focus();
}
</script>

	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	    <script type="text/javascript" SRC="js/js2/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" SRC="js/js2/jquery.easing.1.3.js"></script>
    <script type="text/javascript" SRC="js/js2/jquery.nivo.slider.js"></script>
    <script type="text/javascript" SRC="js/js2/twitter.js"></script>
    <script type="text/javascript" SRC="js/js2/custom.js"></script>

	<script SRC="js/js2/cufon-yui.js" type="text/javascript"></script>
    <script SRC="js/js2/tindog_400.font.js" type="text/javascript"></script>

	
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    12, 
				maxWidth:    27,  
				extraWidth:  1    
								
			}).superfish();
							
		}); 
	</script>

	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>
	
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
		<link rel="stylesheet" href="js/prettyphoto/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
	<script SRC="js/prettyphoto/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>

	
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
	
	<script SRC="js/portfolio.js" type="text/javascript"></script>
		<script type="text/javascript" src="js2/jquery.js"></script>
		<script type="text/javascript" src="js2/popup.js"></script>
<script type="text/javascript" src="js2/jquery.watermarkinput.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
}
else
{

$.ajax({
type: "POST",
url: "search.php",
data: dataString,
cache: false,
success: function(html)
{

$("#display").html(html).show();
	
	
	}




});
}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Search");
   });
</script>
<script language="javascript" type="text/javascript">
   
    </script>
<style type="text/css">









#info {
text-transform:capitalize;
font-weight: bold;
}
#names a {
text-transform:capitalize;
color: #51B22E;
 }
#names a:hover {
text-decoration: underline; }

#uu {
text-transform:none;
font-weight: bold;
}
#dd {
font-weight: normal;
color: #FFFFFF;
width: 100px;
text-transform: capitalize;
}
#check {
width: 20px;
float: left;
}

#id {
width: 300px;
font-weight: bold;
color: #FFFF66;
text-transform: none;
}
#divider {
border-top: 1px solid;
}
#sharetext {
width: 300px;
height: 60px;
background: #E8E8E8;
font-family: Arial, 'Helvetica', sans-serif;
font-size: 10px;
color: #000;
}
#share {
width: 300px;
height: auto;
}
#speak {
width: 75px;
margin-left: 230px;
}
#entry-text {
padding-left: 30px;
}
#cap {
text-transform: capitalize;
}
#catchy {
color: #000;
font-weight: bold;
text-transform: capitalize;
}
#type {
color: #008000;
font-weight: bold;
text-transform: capitalize;
}

#but {
padding-left: 200px;
}
#tym {
font-size: 10px;
text-transform:capitalize;
color: #FFCC33;
}
#comment {
color: #FFFFFF;
}
#post {
color: #E5E5E5;
width: 200px;
}
.nn {
color: #33FF00;
text-transform: capitalize;
}

/* -------------------------------------------------------------------------------------- TEASER */
#basic-modal a:hover {
color: #01651B;
text-decoration:underline;
}

#teaser{
	width:200px; height:117px;
	margin:15px 0 0 auto;
	display:block; clear:both;
	color:#FFF;
}
#teaser .cols{
	position:relative;
	width:200px; height:100px;
	margin:10px 0 0 0;
	display:block; float:left;
}
#teaser .cols h4{font-size:20px;}
#teaser .state_1{
	padding:25px 0 0 0px;
	display:block;
	width:195px;
	height:82px;
	position:absolute;
	top:0; left:0;
	z-index:49;
}
#teaser .state_2{
	padding:20px 10px 0 30px;
	display:block;
	width:195px;
	height:87px;
	text-align:center;
	position:absolute;
	top:-5px;
	left:-10px;
	z-index:50;
}

/*#teaser .icon1{
	background:url(../tmp/teaser_icon1.png) no-repeat 15px 5px;
}
#teaser .icon2{
	background:url(../tmp/teaser_icon2.png) no-repeat 15px 5px;
}
#teaser .icon3{
	background:url(../tmp/teaser_icon3.png) no-repeat 15px 5px;
}
*/
/* -------------------------------------------------------------------------------------- MAIN */
h7{	font-size:14px; color: #FFFF66;}
.box {min-height:1px;}
.box:after {display:block; visibility:hidden; clear:both; line-height:0; font-size:0; content:".";}
#photos {margin-bottom:15px; font-size:0; width: 600px;}
#photos img {display:block; float:left; width:116px; height:90px; border:0; margin-right:10px;}
#div {
margin-left: -149px; width: 550px; margin-top: 20px;
width: 545px;
border: none;
}
#quotes {
font-family:"Times New Roman", Courier, monospace;
font-style:italic;
text-align:center;
font-weight: bolder;
font-size: 15px;
line-height: 30px;
text-align: center;
color: #1001C9;
margin-top: 8px;
background: url("photo/b.png");
width: 350px;
height: 120px;
}
.separator_1{
		background:url(../images/highlight_1col.png);
		display:block; clear:both;
		margin:0 auto;
		width:215px; height:40px;
		border-top: 1px dotted #FFF;
	}
.col_1{
		display:block;
		float:left;
		width:215px;
		margin:0 10px;
	}
	.col_1 li{
		padding:0 0 10px 0;
		margin:0 0 10px 0;
		border-bottom:1px solid #333;
	}
	.col_3{
		display:block;
		float:left;
		width:685px;
		margin:0 10px;
	}
	
	.separator_3{
		background: url(../images/highlight_3cols.png);
		display:block; clear:both;
		margin:0 auto;
		width:685px; height:40px;
	}
	quote{ color: #767676;
		margin:0;
		padding-left: 0px;
		padding-right: 520px;
		padding-top: 0px;
		font-size:12px;
		text-align: inherit;
		float:none;
		width: 520px;
		font-family:Georgia, "Times New Roman", Times, serif;
		font-style:italic; }

/*8888*/

body { background: url("images/header4.jpg") repeat-x top center; color:#555;}



#header{ background-color:#111; }



/* Elements ****************************************************************/

a { color:#51B22E; }



hr { background-color:#AAA; color:#AAA; }

blockquote { background:transparent url("../images/quote.png") no-repeat 10px 10px; color:#777; }

blockquote cite { color:#333; }

dt { color:#333; }

ul.green li { background:transparent url("../images/bullet_green.png") no-repeat scroll 7px 7px; }

ul.yellow li { background:transparent url("../images/bullet_yellow.png") no-repeat scroll 7px 7px; }

ul.blue li { background:transparent url("../images/bullet_blue.png") no-repeat scroll 7px 7px; }



img.framed { background-color:#F0F0F0; border:1px solid #AAA; }

a img.framed:hover { background-color:#DDD;  }



fieldset, legend { background-color:#F5F5F5; border:1px solid #AAA; }

input, textarea, select { background-color:#F0F0F0; border:1px solid #AAA; color:#444; }

input.button:hover { background-color:#111; color:#CCC; }



tr { background-color: #F5F5F5; }

th, td { border:1px solid #AAA; }

th { background-color: #F0F0F0; color:#333; }



acronym { border-bottom: 1px dotted #AAA; }

/* -END- Elements **********************************************************/



/* Headings ****************************************************************/

h1, h2, h3, h4, h5, h6 { color:#222; }

h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color:#222; }

h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover { color:#999; }



h1.border, 

h2.border, 

h3.border,

h4.border,

h5.border,

h6.border { border-bottom:1px solid #AAA; }



h1.logo a { background:transparent url("../images/logo.png") no-repeat center left; color:#EEE; }

/* -END-  Headings *********************************************************/



/* Breadcrumb **************************************************************/

#breadcrumb { background:#ddfecd url("../images/border_shadow.png") repeat-x 0 0; border-bottom:1px solid #FFF; border-top:1px solid #EAEAEA; color:#999; }

#breadcrumb input { background-color:#F0F0F0; border:1px solid #CCC; color:#444; }

#breadcrumb input.button { color:#555; }

#breadcrumb input.button:hover { background-color:#111; color:#CCC; }

/* -END- Breadcrumb ********************************************************/



/* Content *****************************************************************/

#content { background:#ddfecd url("../images/border_shadow.png") repeat-x 0 0; border-top:1px solid #EAEAEA; }

/* -END- Content ***********************************************************/



/* Portfolio ***************************************************************/

a.switch_thumb { background:#F0F0F0 url(../images/gallery.png) no-repeat right top; border:1px solid #AAA; color:#444; }

a.switch_thumb:hover { background-color:#111; color:#CCC; }

a.swap { background-position:right bottom; }



ul.portfolio a.lightbox { background:transparent  url("../images/magnifier.png") no-repeat center center; }



ul.portfolio .list_view h3 { border-bottom:1px solid #AAA; }



.portfolio_single h3, 

.portfolio_single h4, 

.portfolio_single h5, 

.portfolio_single h6 { border-bottom:1px solid #AAA; }

/* -END- Portfolio *********************************************************/



/* Blog ********************************************************************/

ul.blog .blog_info { background-color:#111; }

ul.blog .blog_info { color:#CCC; }

ul.blog li.entry h3, 

ul.blog li.entry h4, 

ul.blog li.entry h5, 

ul.blog li.entry h6 { border-bottom:1px solid #AAA; }



ul.blog ul.comments .comment_content { border:1px solid #AAA; }

ul.blog ul.comments .comment_content small { color:#999; }

/* -END- Blog **************************************************************/



/* Blog_brief **************************************************************/

ul.blog_brief .blog_info { background-color:#111; }

ul.blog_brief .blog_info { color:#CCC; }

/* -END- Blog_brief ********************************************************/



/* Sidebar *****************************************************************/

.sidebar h3 { border-bottom:1px solid #AAA; }

.sidebar ul li a { color:#555; }

.sidebar ul li a:hover { color:#999; }

/* -END- Sidebar ***********************************************************/



/* Contact *****************************************************************/

#contact_form span.error { color:#C00; }

/* -END - Contact **********************************************************/



/* Pagination **************************************************************/

ul.pagination { color:#999; }

ul.pagination .current { border:1px solid #AAA; color:#555; }

/* -END- Pagination ********************************************************/



/* Footer ******************************************************************/

#footer { border-bottom:1px solid #000; color:#CCC; }

#footer h2, #footer h3, #footer h4, #footer h5, #footer h6 { color:#DDD; }

#footer ul.pages li a { color:#CCC; }

#footer ul.pages li a:hover { color:#51B22E; }

#footer .flickr img { border:1px solid #888; }

#footer .flickr img:hover { border-color: #FFF; }



#sub_footer { color:#CCC; border-top:1px solid #222; }

#sub_footer  a.logo { background:transparent url("../images/logo-32.png")no-repeat center left; color:#EEE; }

/* -END- Footer ************************************************************/


.container_12,.container_16{margin-left:auto;margin-right:auto;width:1000px}.grid_1,.grid_2,.grid_3,.grid_4,.grid_5,.grid_6,.grid_7,.grid_8,.grid_9,.grid_10,.grid_11,.grid_12,.grid_13,.grid_14,.grid_15,.grid_16{display:inline;float:left;position:relative;margin-left:20px;margin-right:20px}.container_12 .grid_3,.container_16 .grid_4{width:220px}.container_12 .grid_6,.container_16 .grid_8{width:460px}.container_12 .grid_9,.container_16 .grid_12{width:700px}.container_12 .grid_12,.container_16 .grid_16{width:940px}.alpha{margin-left:0}.omega{margin-right:0}.container_12 .grid_1{width:60px}.container_12 .grid_2{width:140px}.container_12 .grid_4{width:300px}.container_12 .grid_5{width:380px}.container_12 .grid_7{width:540px}.container_12 .grid_8{width:620px}.container_12 .grid_10{width:780px}.container_12 .grid_11{width:860px}.container_16 .grid_1{width:40px}.container_16 .grid_2{width:100px}.container_16 .grid_3{width:160px}.container_16 .grid_5{width:280px}.container_16 .grid_6{width:340px}.container_16 .grid_7{width:400px}.container_16 .grid_9{width:520px}.container_16 .grid_10{width:580px}.container_16 .grid_11{width:640px}.container_16 .grid_13{width:760px}.container_16 .grid_14{width:820px}.container_16 .grid_15{width:880px}.container_12 .prefix_3,.container_16 .prefix_4{padding-left:240px}.container_12 .prefix_6,.container_16 .prefix_8{padding-left:480px}.container_12 .prefix_9,.container_16 .prefix_12{padding-left:720px}.container_12 .prefix_1{padding-left:80px}.container_12 .prefix_2{padding-left:160px}.container_12 .prefix_4{padding-left:320px}.container_12 .prefix_5{padding-left:400px}.container_12 .prefix_7{padding-left:560px}.container_12 .prefix_8{padding-left:640px}.container_12 .prefix_10{padding-left:800px}.container_12 .prefix_11{padding-left:880px}.container_16 .prefix_1{padding-left:60px}.container_16 .prefix_2{padding-left:120px}.container_16 .prefix_3{padding-left:180px}.container_16 .prefix_5{padding-left:300px}.container_16 .prefix_6{padding-left:360px}.container_16 .prefix_7{padding-left:420px}.container_16 .prefix_9{padding-left:540px}.container_16 .prefix_10{padding-left:600px}.container_16 .prefix_11{padding-left:660px}.container_16 .prefix_13{padding-left:780px}.container_16 .prefix_14{padding-left:840px}.container_16 .prefix_15{padding-left:900px}.container_12 .suffix_3,.container_16 .suffix_4{padding-right:240px}.container_12 .suffix_6,.container_16 .suffix_8{padding-right:480px}.container_12 .suffix_9,.container_16 .suffix_12{padding-right:720px}.container_12 .suffix_1{padding-right:80px}.container_12 .suffix_2{padding-right:160px}.container_12 .suffix_4{padding-right:320px}.container_12 .suffix_5{padding-right:400px}.container_12 .suffix_7{padding-right:560px}.container_12 .suffix_8{padding-right:640px}.container_12 .suffix_10{padding-right:800px}.container_12 .suffix_11{padding-right:880px}.container_16 .suffix_1{padding-right:60px}.container_16 .suffix_2{padding-right:120px}.container_16 .suffix_3{padding-right:180px}.container_16 .suffix_5{padding-right:300px}.container_16 .suffix_6{padding-right:360px}.container_16 .suffix_7{padding-right:420px}.container_16 .suffix_9{padding-right:540px}.container_16 .suffix_10{padding-right:600px}.container_16 .suffix_11{padding-right:660px}.container_16 .suffix_13{padding-right:780px}.container_16 .suffix_14{padding-right:840px}.container_16 .suffix_15{padding-right:900px}.container_12 .push_3,.container_16 .push_4{left:240px}.container_12 .push_6,.container_16 .push_8{left:480px}.container_12 .push_9,.container_16 .push_12{left:720px}.container_12 .push_1{left:80px}.container_12 .push_2{left:160px}.container_12 .push_4{left:320px}.container_12 .push_5{left:400px}.container_12 .push_7{left:560px}.container_12 .push_8{left:640px}.container_12 .push_10{left:800px}.container_12 .push_11{left:880px}.container_16 .push_1{left:60px}.container_16 .push_2{left:120px}.container_16 .push_3{left:180px}.container_16 .push_5{left:300px}.container_16 .push_6{left:360px}.container_16 .push_7{left:420px}.container_16 .push_9{left:540px}.container_16 .push_10{left:600px}.container_16 .push_11{left:660px}.container_16 .push_13{left:780px}.container_16 .push_14{left:840px}.container_16 .push_15{left:900px}.container_12 .pull_3,.container_16 .pull_4{left:-240px}.container_12 .pull_6,.container_16 .pull_8{left:-480px}.container_12 .pull_9,.container_16 .pull_12{left:-720px}.container_12 .pull_1{left:-80px}.container_12 .pull_2{left:-160px}.container_12 .pull_4{left:-320px}.container_12 .pull_5{left:-400px}.container_12 .pull_7{left:-560px}.container_12 .pull_8{left:-640px}.container_12 .pull_10{left:-800px}.container_12 .pull_11{left:-880px}.container_16 .pull_1{left:-60px}.container_16 .pull_2{left:-120px}.container_16 .pull_3{left:-180px}.container_16 .pull_5{left:-300px}.container_16 .pull_6{left:-360px}.container_16 .pull_7{left:-420px}.container_16 .pull_9{left:-540px}.container_16 .pull_10{left:-600px}.container_16 .pull_11{left:-660px}.container_16 .pull_13{left:-780px}.container_16 .pull_14{left:-840px}.container_16 .pull_15{left:-900px}.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:after{clear:both;content:' ';display:block;font-size:0;line-height:0;visibility:hidden;width:0;height:0}* html .clearfix,*:first-child+html .clearfix{zoom:1}
</style>	
</head>
<?php
include ("session/session.php");
include("session/DBConnection.php");
?>

<body>
	<div id="header">
	  <div class="container_12">
			<div class="grid_3">
			</div><!-- end grid -->
			<div class="grid_9">
              <ul class="sf-menu">
               <li> <a class="current" href="index.php">Home</a> </li>
                <li> <a href="home.php"></a> </li>
                <li> <a  href="home.php"></a> </li>
                <li> <a  href="home.php"></a> </li>
               
                
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="profile.php"></a></li>
                   <li><a href="info.php">Info</a></li>
                   <li><a href="info.php"></a></li>
                   <li><a href="photos.php"> Photos</a></li>
                <li><a href="photos.php"></a></li>
               
              
                <li> <a href="friends.php">Friends
                <li> <a href="friends.php"></a></li>  <?php
	$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM friends WHERE friend = '" . $user ."' and status = 'requesting'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	 
				if ($numberOfRows > 0 )
				  echo '<font size="2" color="red">' . $numberOfRows .'</font>' ;
				else
    			 echo " ";	
				?>
                </a> </li>
                <li> <a href="mail.php">Messages
                  <?php
$user = $_SESSION['log']['username'];
$status = 'unread';
$result = mysql_query("SELECT * FROM messages WHERE recipient='" . $user."' AND status='$status'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '<font size="1" color="red"><b>' . $numberOfRows .'</b></font>';} 
	?>
                </a> </li>
              
              </ul>
			
            </div>
			
	  </div>
		<div class="clear"></div>
	</div>
	<div id="content" style="min-height:400px;">
		<div class="container_16 clearfix">
			<div class="grid_11 suffix_1 clearfix" style="border-right: 1px solid #222; width: 600px;">
				<ul class="blog_brief">
				  <li class="entry clearfix">
						<?php 
$user= $_SESSION['log']['username'];
$image=mysql_query("SELECT * FROM members WHERE username='$user'");
			$row=mysql_fetch_assoc($image);
			$_SESSION['image']= $row['image'];
			/*echo '<div class="pp_hoverContainer" style="margin-left: 20px; height: 273px; width: 204.005px;">
<a class="pp_next" href="#" style="visibility: visible;">Chage Profile Picture</a>
</div>';*/
			echo '<img class="framed" width=130 height=150 align="left" SRC="' . $_SESSION['image'] . '" alt="Unable to view" />';
			?><?php  
		$user = $_SESSION['log']['username'];
		$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
							$result = mysql_fetch_array($query);	
															?>
						<div class="grid_7 omega">
							<h4><a href="profile.php" id="catchy"><?php echo $result['firstname'] . " " . $result['lastname']; ?></a></h4><div id="editpic"><a>Edit Profile Picture</a><br><br><br></div>
							<fieldset id="forms" style="display:none; background: #333; border: 1px solid #fff;">
							 <form action="editpropic.php" method="post" enctype="multipart/form-data"><p><span class="style23">Source:</span>
    <input name="image" type="file" size="30"> 
  </p>
  <br />
 
                       <input name="post" type="submit" class="button"  value="Upload"  />
                
</form>

							</fieldset>
							 				<form id="share" method="get" action="save.php" name="form">
            <label>
              <p>  <?php  
								$id = $_SESSION['log']['username'];
		$query = mysql_query("SELECT * FROM members WHERE username = '$id'") or die (mysql_error()); 
							$result = mysql_fetch_array($query);	
															?>
                  <textarea name="content" id="sharetext"  cols="50" rows="1" onclick="this.value='';">Write something
                </textarea>
                </p>
               <p>
			   	<!--<a onClick="addSC(' (: ')"><img src='images/smiley/1.gif'></a> 
                  <a onClick="addSC(' :) ')"><img src='images/smiley/2.gif'></a> 
                  <a onClick="addSC(' :)) ')"><img src='images/smiley/3.gif'></a> 
                  <a onClick="addSC(' ((: ')"><img src='images/smiley/4.gif'></a> 
                  <a onClick="addSC(' (:: ')"><img src='images/smiley/5.gif'></a> 
                  <a onClick="addSC(' ::) ')"><img src='images/smiley/6.gif'></a>
				  <a onClick="addSC(' :) ')"><img src='images/smiley/7.gif'></a> 
                  <a onClick="addSC(' :)) ')"><img src='images/smiley/8.gif'></a> 
                  <a onClick="addSC(' ((: ')"><img src='images/smiley/9.gif'></a> 
                  <a onClick="addSC(' (:: ')"><img src='images/smiley/10.gif'></a> 
                  <a onClick="addSC(' ::) ')"><img src='images/smiley/11.gif'></a>--> 
                  <input name="username" type="hidden" id="namebox" value="<?php echo $result['username']?>"/>
                  <input name="firstname" type="hidden" id="namebox" value="<?php echo $result['firstname']?>"/>
                  <input name="lastname" type="hidden" id="namebox" value="<?php echo $result['lastname']?>"/>
                  <input name="picture" type="hidden" id="namebox" value="<?php echo $result['image']?>"/>
                </p>
			</label>
            <p>
                       <input name="post" class="button" id="speak" type="submit" value="Share" />		
      
            </p>
          </form>
          <form>
          <br>
          <ul>
          	<h5>Add:</h5>
           &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          		<a href="add.php">Photos</a> &nbsp &nbsp &nbsp &nbsp 
          
          		<a href="add.php">Videos</a>&nbsp &nbsp &nbsp &nbsp

          
          		<a href="Upload.php">File</a>
         
	</form>
	

</div>			
<?php
$username =  $_SESSION['log']['username'];
$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM post WHERE friend ='$username'  ORDER BY post_id DESC LIMIT 12";
$result = mysql_query($query);

while($row = mysql_fetch_assoc($result))

{				 echo '<li class="entry clearfix" >';
				 echo '<div class="blog_info">';
				 /*echo '<span class="date"></span>';*/
				 echo '<span class="info" style="float: left;">';
$user = $row['username'];
$q = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$dis = mysql_fetch_array($q);
$username =  $_SESSION['log']['username'];
$id = $dis['member_id'];
if($user == $username){
				 echo '<a href="profile.php" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }
				elseif($user != $username){
				 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
				 echo $row['firstname'] . " " . $row['lastname'] . '</a>'; }

				 echo '&nbsp;post</span>';
				 echo '<div class="clear"></div>';
				 echo '</div>';
				 echo '<img class="framed" height=100 width=80 align="left" SRC="'. $row['picture'] .'" alt="'. $row['firstname'] . " " . $row['lastname'] .'" />';
				 echo '<div class="grid_7 omega">';
 $position=30; // Define how many character you want to display.

$content= $row['content']; 


				 echo '<p style="color: #000;"><a style="color: #000;" HREF="postcomment.php?pid='. $row['post_id'].'">' . wordwrap($content, 8, "\n", true) . '</a></p><br />';
				 echo '<font style="color:#000099;font-size: 10px;">';
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
			echo '</font><br />';

$qqq = mysql_query("SELECT * FROM postcomment WHERE post_id='" . $row['post_id']."'");
	$numberOfRows = MYSQL_NUMROWS($qqq);
	if ($numberOfRows > 0){
	if ($numberOfRows == 1){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>1 comment</small></a>';}
	if ($numberOfRows==3 || $numberOfRows==2){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>' . $numberOfRows. " comments</small></a>";}
	if ($numberOfRows >= 4){
	echo '<a HREF="postcomment.php?pid='. $row['post_id'].'"><small>('. $numberOfRows.')View all comments</small></a>'; }
	}echo '<br /><br />';
	
	$query1  = "SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE post_id=" . $row['post_id'] . " ORDER BY comment_id ASC LIMIT 3";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_assoc($result1))
	{				 
		echo '<br /><div style="color: #222">';
		$user = $row1['commentby'];
$s = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
$d = mysql_fetch_array($s);
$id = $d['member_id'];

		echo '<img class="framed" height=40 width=40 align="left" SRC="'. $row1['picture'] .'" alt="'. $row1['firstname'] . " " . $row1['lastname'] .'" />';
		echo '&nbsp;';
		echo '<span class="nn">';
		$username =  $_SESSION['log']['username'];
$id = $d['member_id'];
if($user == $username){
 echo '<a href="profile.php" style="text-transform: capitalize;">';
		echo $row1['firstname'] . " " . $row1['lastname'] . "</a></span>";
		echo '<br />&nbsp;&nbsp;&nbsp;'; }
elseif($user != $username){
 echo '<a href="userprofile.php?userid=' . $id . '" style="text-transform: capitalize;">';
		echo $row1['firstname'] . " " . $row1['lastname'] . "</a></span>";
		echo '<br />&nbsp;&nbsp;&nbsp;'; }	
		 $position1=30; // Define how many character you want to display.

$content1= $row1['content']; 
echo '<a style="color: #222;" HREF="postcomment.php?pid='. $row1['post_id'].'">' . wordwrap($content1, 8, "\n", true) . '</a>';
				 	
	
		echo '<br />';
		echo '&nbsp;';
		echo '<font style="color:#000099;font-size: 10px;">';
						$days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
						$remainder = $row1['CommentTimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;	
						if($days2 > 0)
							echo date('F d Y', $row1['date_created']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
							echo $minutes.' minutes ago';
											
		echo '</font>';				
		echo '</div>';
	
	}
		$qr = mysql_query("SELECT * FROM members WHERE username='".$_SESSION['log']['username'] ."'");
echo "<br />";
while($row3 = mysql_fetch_array($qr))
  {  
	echo '<div class="fieldcomment">';
	echo '<form action="commentpost.php" method="GET">'; 
	echo'<input type="hidden" name="post_id" value="'. $row['post_id'] .'">';
	echo'<input type="hidden" name="username" value="'. $row3['username'] .'">';
	echo'<input type="hidden" name="firstname" value="'. $row3['firstname'] .'">';
	echo'<input type="hidden" name="lastname" value="'. $row3['lastname'] .'">';
	echo'<input type="hidden" name="picture" value="'. $row3['image'] .'">';
	echo '<img class="framed" height=40 width=40 align="left" SRC="'. $row3['image'] .'" alt="'. $row3['firstname'] . " " . $row3['lastname'] .'" />';
	echo '&nbsp;';
	echo '<input type="text" value="Leave a comment" onclick="this.value=\'\'" style="color: #333333; width: 200px;" name="postcomment" />';
	echo '&nbsp;<input type="submit" value="Post" style="background-color: #333; color: #fff; width: 50px;" name="post" />';
	echo '</form></div>';
	echo '</div></li>';
		} 
}
?>
				 <br />
				</ul>
				
			</div>
			
			<div class="sidebar grid_4">
			<div align="left" style="width: 300px;">
       <a href="profile.php" id="cap"><?php echo $display['firstname']?> <?php echo $display['lastname']?></a>
	   &nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php"></a></div><br />
		
<div align="left" style="height: auto; width: 230px; overflow:auto;">
				
      <div style="font-weight:bold; color: #FFFFFF; background: #000000; width: 400px; height: 20px; border: 10px solid #666666;">Recent Activities</div>
	  <div class="separator_1"></div>
	  <?php /*?> <?php
	$user = $_SESSION['log']['username'];
	$sql  = "SELECT * FROM friends WHERE username='$user' OR friend='$user' AND status = 'accepted' order by date_added limit 6 ";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
if ($row['friend'] != $user) { $friend = $row['friend']; } else { $friend = $row['username']; }
?>
<?php 
									$query  = "SELECT * FROM members WHERE username='$friend'";
									$res = mysql_query($query);
									while($row1 = mysql_fetch_assoc($res))
									{
								$f_id = $row1['member_id'];
								$m_id = $display['member_id'];
									 ?><?php */?>
  <?php 
$result = mysql_query("SELECT * FROM updates WHERE status !='' ORDER BY RAND() LIMIT 5");
while($row = mysql_fetch_array($result))
{
$mem_id = $row['member_id'];
$friend = $row['friend'];
$image = $row['image'];
			$query = mysql_query("SELECT * FROM members WHERE member_id = '$mem_id'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);
echo "<span style='text-transform: capitalize;'>";
$_SESSION['image']= $display['image'];	
echo '<img class="" width=20 height=20 align="left" SRC="' . $_SESSION['image'] . '" alt="Unable to view" />';
echo "&nbsp;" . $display['firstname'] . "&nbsp;". $display['lastname'] . "</span>";
echo "&nbsp;";
echo $row['status'];
if($row['status']=="changed profile picture."){
echo "<br />";		
echo '<img width=40 height=40 align="left" SRC="' . $image . '" alt="Unable to view" />';
echo "&nbsp;". $row['date']."<br />";
}
elseif($row['status']=="just uploaded a photo."){
echo "&nbsp;". $row['date'];
echo "<br />";

}
elseif($row['friend']!=""){
echo "<span style='text-transform: capitalize;'>". $row['friend']."</span><br />";
}
echo "<br /><br />--------------------------------------<br />";
}
?>

				</div><!-- Cols 1 -->
<!-- /Cols 1 -->
<?php
include("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	?>
 <?php
$user = $_SESSION['log']['username'];
	$sql_qry  = mysql_query("SELECT * FROM friends WHERE (username='$user' OR friend='$user') AND status = 'accepted'") or die (mysql_error());
$show_result = mysql_fetch_array($sql_qry);

if ($user != $show_result['friend'] ) { $friend = $show_result['friend']; } else { $friend = $show_result['username']; }

$result = mysql_query("SELECT * FROM members WHERE username != '$friend' and member_id != '".$display['member_id']."' AND confirmation = '1'  ORDER BY rand(member_id)  LIMIT 5");
if($result > 0){

echo ' <br>
<div style="font-weight:bold; color: #FFFFFF; background: #000000; width: 210px; height: 20px; border: 5px solid #666666;">ADD friends</div>
	  <div class="separator_1"></div>';
	  }
while($row = mysql_fetch_array($result))
{
 echo '<div align="left" id="names">';
 echo '<a href="userprofile.php?userid='.$row["member_id"].'" valign="top" >';
   echo "<img style='padding-top: 10px; border-width: 0px;' align='center' width=50 height=50 alt='Unable to View' src='" . $row["image"] . "'>";
  echo '&nbsp;';
  echo '<div style="margin: -50px 113px 3px 55px;">';
  echo '<b align="left">'; 
  echo $row['firstname'] . " " . $row['lastname'];
  echo '</b>';
  echo '</div></a>';
  echo '</div>';
  echo '<br />';	
   } 
   ?>
			</div>
		</div>
	</div>

		
	<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("a[rel^='prettyPhoto']").prettyPhoto();
	});
	</script>
	<script type="text/javascript"> Cufon.now(); </script></body> 
</html>
