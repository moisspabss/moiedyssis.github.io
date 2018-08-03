<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
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
	
	<!-- JQUERY -->
	<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	<!-- -END- JQUERY -->
	
	<!-- Superfish Menu -->
	<script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
	<script type="text/javascript" SRC="js/superfish/superfish.js"></script>
	<script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){ 
			$("ul.sf-menu").supersubs({ 
				minWidth:    12,   // minimum width of sub-menus in em units 
				maxWidth:    27,   // maximum width of sub-menus in em units 
				extraWidth:  1     // extra width can ensure lines don't sometimes turn over 
								   // due to slight rounding differences and font-family 
			}).superfish();  // call supersubs first, then superfish, so that subs are 
							 // not display:none when measuring. Call before initialising 
							 // containing tabs for same reason. 
		}); 
	</script>
	<!-- -END- Superfish Menu -->
	<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
	<!-- IE6 PNG Transparency Fix -->
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
	</script>
	<!-- -END- IE6 PNG Transparency Fix -->
	
	<!-- CUFON Font Replacement -->
	<script SRC="js/cufon-yui.js" type="text/javascript"></script>
	<script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1,h2,h3,h4,h5,h6');
		Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
	</script>
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
url: "search2.php",
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
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>

	<!-- -END- CUFON Font Replacement -->
	   <style type="text/css">
<!--
.style26 {font-size: 20px;
	font-weight: bold;
}
.style25 {font-family: Arial, Helvetica, sans-serif;
	color: #ff3000;
}
.style26 {color: #000}





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
height: 20px;
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



h1.logo a { background:transparent url("../photos/log.jpg") no-repeat center left; color:#EEE; }

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

-->
    </style>
</head>
<?php include("session/DBConnection.php");
include("session/session.php");
$error ="";
?>
<body>
<div id="header">
  <div class="container_12">
    <div class="grid_3">
    </div>
    <!-- end grid -->
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
                <li> <a href="friends.php"></a></li>
                  <?php
	$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM friends WHERE friend = '" . $user ."' and status = 'requesting'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	 
				if ($numberOfRows > 0 )
				  echo '<font size="2" color="red">' . $numberOfRows .'</font>' ;
				else
    			 echo " ";	
				?>
                </a> </li>
                <li> <a class="current" href="mail.php">Messages
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

	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a HREF="profile.php" style="text-transform: capitalize;"><?php echo $display['firstname'] . "  " . $display['lastname'] ?></a> » Messages</p>
				<p> </p>
			</div><!-- end grid -->
			
			<!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
			<div class="grid_12" style="width: 300px; margin-top: -55px;">
			  <div align="left"><table width="944" height="600" border="1" align="left">
  <tr>
    <td width="253" style="background-color:#fff;">
	<div >
<div id='basic-modal'>
                  <h3 class="hx-style01 nom"></h3>
                  <h3 class="hx-style01 nom"><a class='basic' href="#" style="text-decoration:none;"><button type="submit" name="edit" onclick="buttonclicked(this)"><strong> Create Message</strong></button>
                  </a></h3>
                  <p>
<?php 
if(isset($_POST['send'])){ 
$today = date("m/d/Y");
$user = $_SESSION['log']['username'];
$status = 'unread';
/*$subject = $_POST['subject'];
*/
if (empty($error)) {
$query = "INSERT INTO messages SET sender='$user', recipient='$_POST[friend]', content='$_POST[content]', date_sent='$today', status='$status'";
mysql_query($query) or die('Error, insert query failed');
}

if (empty($error)) { $error = "Message sent"; }

}

?>
</p>
                  <p class="hx-style01 nom" style="color:#66FF00; font-weight:bold; size:13px;"><?php echo $error; ?></p>
				 
      </div>
                <div id="basic-modal-content">
                  <form id="form1" method="post" action="trashmessages.php">
                 <p align="left" style="color: gold;">To:
                      <label>
                       <select name="friend" size="0" style="width: 200px; color: #fff; background-color: #333; border:none; text-transform:capitalize;">
										  <option>-Select Friend-</option>
<?php
$user = $_SESSION['log']['username'];
$sql  = "SELECT * FROM friends WHERE (username='$user' OR friend='$user') AND status = 'accepted'";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{

if ($row['friend'] != $user) { $friend = $row['friend']; } else { $friend = $row['username']; }
$query  = "SELECT * FROM members WHERE username='$friend'";
$res = mysql_query($query);
while($row1 = mysql_fetch_assoc($res))
{?>

								<option id="cap" value="<?php if ($row['friend'] != $user) { echo $row['friend']; } else { echo $row['username']; } ?>"><?php echo $row1['firstname'] . " " . $row1['lastname'] ?></option>
										<?php } ?><?php } ?>
					  </select>
                      </label>
                    </p><br />
					<!--<p align="left">Subject:
                                      <input name="subject" type="text" id="subject" />
                                      <br />
                                      </p>-->
                 <p align="left" style="color: gold;">Message:
                      <textarea name="content" cols="100" rows="6" style="width: 300px; color: #fff; background-color: #333; border:none;"></textarea>
                      <br />
					  <br />
                      <input type="submit"  style="width: 75px; margin-left: 212px; background-color:#333; color:#fff;" name="send" value="Submit" /><br />
                      <input type="reset"  style="width: 75px; margin-left: 212px; background-color:#333; color:#fff;" name="reset" value="Reset" />
                     
                    </p>
                  </form>
                </div>
                	  <img src="images/image_31.png" alt="" width="17" height="16" /> <a href="camera.php" style="text-decoration:none;">Camera</a>
                  <p><img src="images/image_31.png" alt="" width="17" height="16" /> <a href="mail.php" style="text-decoration:none;">Inbox&nbsp;&nbsp;<?php
$user = $_SESSION['log']['username'];
$status = 'unread';
$result = mysql_query("SELECT * FROM messages WHERE recipient='" . $user."' AND status='$status'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a>
	<br />
	<a href="sentmessages.php" style="text-decoration:none;">
	<img src="images/sent.png" alt="" width="17" height="16" /> Sent &nbsp;&nbsp;<?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM messages WHERE sender='" . $user."'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a>
	<br />
	<a href="draftmessages.php" style="text-decoration:none;">
	<img src="images/draft.png" alt="" width="17" height="16" /> Draft&nbsp;&nbsp;<?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM messages WHERE recipient = '$user' AND status = 'draft'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a><br />
	<a href="trashmessages.php" style="text-decoration:none;">
	<img src="images/trash.png" alt="" width="17" height="16" /> Deleted&nbsp;&nbsp;<?php
$user = $_SESSION['log']['username'];
$result = mysql_query("SELECT * FROM messages WHERE recipient = '$user' AND status = 'trash'");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	if($numberOfRows > 0){
	echo '(<font size="1" color="red"><b>' . $numberOfRows .'</b></font>)';} 
	?></a><br />
</p>
    
    <br />
    <div class="separator_1"></div>
<span style="color:#FFFFFF; font-size: 18px;">CONTACTS</span>	
	<br /><br /><?php
$user = $_SESSION['log']['username'];
$sql  = "SELECT * FROM friends WHERE (username='$user' OR friend='$user') AND status = 'accepted' ORDER BY RAND() LIMIT 2";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result))
{
if ($row['friend'] != $user) { $friend = $row['friend']; } else { $friend = $row['username']; }

 $q  = "SELECT * FROM members WHERE username='$friend'";
$a = mysql_query($q);
while($b = mysql_fetch_assoc($a))
{
$email = $b['email'];
if($email != "" ) {
echo '<img class="framed" height=40 width=40 align="left" SRC="'. $b['image'] .'" alt="'. $b['firstname'] . " " . $b['lastname'] .'" />';
echo '<span style="text-transform:capitalize; color: #fff;">&nbsp;' . $b['firstname'] . " " . $b['lastname'] .'</span>';
    echo '<p>&nbsp;'. $b['type'] . '<br /><br />';
    echo 'Email : <span style="color:#6666FF;">' . $b['email'] . '</span></p><br /><div class="separator_1"><br />';
}} }   ?>
    
</div>

</td><td width="700" border="0" style="border-bottom-width: 0px;">
<?php
 $username = $_SESSION['log']['username'];
	$query  = "SELECT * FROM messages WHERE recipient='$username' AND status != 'draft' AND status != 'trash' ORDER BY message_id DESC LIMIT 30";
$result = mysql_query($query);
$count=mysql_num_rows($result);
if($count > 0) {
echo '<div align="left">
<table width="700" height="572" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td style="border: 0px;"><form name="form1" method="post" action="">
	<table width="650" border="0" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
<td align="center" style="background: #333; border: 1px solid #331; color:#fff; font-weight: bold; width: 150px;">Options</td>
<td align="center" style="background: #333; border: 1px solid #331;color:#fff; font-weight: bold; width: 166px;"><strong>Sender</strong></td>
<td align="center" style="background: #333; border: 1px solid #331;color:#fff; font-weight: bold;width: 166px;"><strong>Message</strong></td>
<td align="center" style="background: #333; border: 1px solid #331;color:#fff; font-weight: bold; width: 166px;"><strong>Date</strong></td>
   </tr>';
   while($rows=mysql_fetch_array($result)){
echo '<tr>';
echo '<td align="center" bgcolor="#FFFFFF"><center><input style="width: 20px;" name="checkbox[]" type="checkbox" id="checkbox[]" value="' .$rows['message_id'] .'"></center></td>';
$friend = $rows['sender'];
$q  = "SELECT * FROM members WHERE username='$friend'";
$a = mysql_query($q);
while($b = mysql_fetch_assoc($a))
{
echo '<td align="center" bgcolor="#FFFFFF"><a href="userprofile.php?userid=' . $b['member_id'] . '" style="text-transform: capitalize; text-decoration:none; color: #222;">' . $b['firstname'] . " " . $b['lastname'] . '</a></td>';
$position=20; 
$message= $rows['content']; 
$msg = substr($message, 0, $position); 
if($rows['status']=='unread'){
echo '<td align="center" bgcolor="#FFFFFF"><a href="msg_stat.php?id='.$rows['message_id'].'" style="text-decoration:none; color: #111; font-weight: bold;">' . $msg .'...</a></td>';
}
if($rows['status']=='read'){
echo '<td align="center" bgcolor="#FFFFFF"><a href="msg_stat.php?id='.$rows['message_id'].'" style="text-decoration:none; color: #777;">' . $msg .'...</a></td>';
}

 echo '<td align="center" bgcolor="#FFFFFF"><font style="color:#000099;font-size: 10px;">';
	echo $rows['date_sent'];
		
			echo '</font>';

}
}
echo '<tr>';
echo '<td style="border-bottom-width: 0px; border-left-width: 0px; border-right-width: 0px;">';
echo '<div style="width: 200px; margin-top: 40px;"><input name="delete" type="submit" id="delete" style="width: 80px; color: #fff; background-color: #333;" value="Delete"></div</td>';
echo '</tr></form>';

// Check if delete button active, start this 

if(isset($_POST['delete'])){
$checked = $_POST["checkbox"];
for($i=0; $i < count($checked); $i++) {
$del_id = $checked[$i];
$sql = "DELETE FROM messages WHERE message_id='$del_id'";
$result = mysql_query($sql);
}

// if successful redirect to delete_multiple.php 
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=trashmessages.php\">";
}
}

}
?>
</table></td></tr>
	</table></div>
	
</td>
  </tr>
</table>
</div>
	
		  </div>
			<!-- end grid -->
			
		</div><!-- end container -->
	</div><!-- end content -->
	<!-- end footer -->
	
	<!-- end subfooter -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>
