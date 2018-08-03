<?php ob_start(); ?>
<?php session_start();?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready( function() {
	$("#edit").click( function() {
		$("#forms").fadeIn();
		$("#cancel1").fadeIn();
		$("#form01").fadeOut();
		$("#edit").fadeOut();
	});	
	$("#cancel1").click( function() {
		$("#forms").fadeOut();
		$("#cancel1").fadeOut();
		$("#form01").fadeIn();
		$("#edit").fadeIn();
	});	
	$("#cancel2").click( function() {
		$("#forms2").fadeOut();
		$("#cancel2").fadeOut();
		$("#form02").fadeIn();
		$("#edit2").fadeIn();
	});	
	$("#edit2").click( function() {
		$("#forms2").fadeIn();
		$("#cancel2").fadeIn();
		$("#form02").fadeOut();
		$("#edit2").fadeOut();
	});	
	$("#change").click( function() {
		$("#account").fadeIn();
		$("#cancel3").fadeIn();
		$("#pass").fadeOut();
		$("#change").fadeOut();
	});	
	$("#cancel3").click( function() {
		$("#account").fadeOut();
		$("#cancel3").fadeOut();
		$("#pass").fadeIn();
		$("#change").fadeIn();
	});	
});
</script>

	
		<script type="text/javascript" src="js2/jquery.js"></script>
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
	<link rel="stylesheet" type="text/css" href="css/pswd.css" />
	<script type="text/javascript" SRC="js/jquery.pngFix.pack.js"></script>
<script type="text/javascript"> 
		$(document).ready(function(){ 
			$(document).pngFix(); 
		}); 
		
function passwordStrength(password)

{

        var desc = new Array();

        desc[0] = "Very Weak";
        desc[1] = "Weak";
        desc[2] = "Better";
        desc[3] = "Medium";
        desc[4] = "Strong";
        desc[5] = "Strongest";

        var score   = 0;

        //if password bigger than 6 give 1 point

        if (password.length > 6) score++;

        //if password has both lower and uppercase characters give 1 point      

        if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

        //if password has at least one number give 1 point

        if (password.match(/\d+/)) score++;

        //if password has at least one special caracther give 1 point

        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;

        //if password bigger than 12 give another 1 point

        if (password.length > 12) score++;

         document.getElementById("passwordDescription").innerHTML = desc[score];

         document.getElementById("passwordStrength").className = "strength" + score;

}
	</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="css/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" media="all" />	
	<!-- Here is where your page title must go -->
 <?php
include ("session/DBConnection.php");
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
	<!-- -END- CUFON Font Replacement -->
	<style>
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
include ("session/DBConnection.php");
$error = "";
?>
<body>
<div id="header">
  <div class="container_12">
    <div class="grid_3">
			</div>
    <!-- end grid -->
    <div class="grid_9">
      <ul class="sf-menu">
       <li> <a class="current" href="home.php">Home</a> </li>
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
                <li> <a href="friends.php"></a></li> <?php
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

	
	<div id="breadcrumb">
		<div class="container_12 clearfix">
			<div class="grid_9">
				<p><a id="cap" href="profile.php"><?php echo $display['firstname'] . "  " . $display['lastname'] ?></a> » Photos</p>
						
				<p> <?php
include ("session/DBConnection.php");
$user = $_SESSION['log']['username'];
			$query = mysql_query("SELECT * FROM members WHERE username = '$user'") or die (mysql_error()); 
			$display = mysql_fetch_array($query);	
	
if(isset($_POST['edit1'])){ 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$birthdate = ($_POST['birthday_month'] . "/" . $_POST['birthday_day']. "/" . $_POST['birthday_year'] );
$b_month = $_POST['birthday_month'];
$b_day = $_POST['birthday_day'];
$b_year = $_POST['birthday_year'];
$gender = $_POST['gender'];
$relationship = $_POST['relationship'];
$hometown = $_POST['hometown']; {

$query = "UPDATE members SET firstname='$firstname', lastname='$lastname', birthdate='$birthdate', b_month='$b_month', b_day='$b_day', b_year='$b_year', address='$address', contact_no='$contact_no', email='$email', gender='$gender', relationship='$relationship', hometown='$hometown' WHERE username='$user'";
$result = mysql_query($query);
}

// if successful redirect to delete_multiple.php 
if($result){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=info.php\">";
}

}

if(isset($_POST['edit2'])){ 
$college = $_POST['college'];
$high_school = $_POST['high_school'];
$quote =  $_POST['quote'];
$aboutme = $_POST['aboutme'];
$interest = $_POST['interest']; {

$sql2 = "UPDATE members SET interest='$interest', quote='$quote', college='$college', high_school='$high_school', aboutme='$aboutme'  WHERE username='$user'";
$result2 = mysql_query($sql2);
}

// if successful redirect to delete_multiple.php 
if($result2){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=info.php\">";
}

}
if(isset($_POST['edit3'])){ 
if(isset($_POST['old_pass'])){
$old = $_POST['old_pass'];}
if(isset($_POST['password'])){
$new = $_POST['password'];}
 {
 $oldpass = $display['password'];
 if($old !=  $oldpass){
$error = "Password Incorrect...";
}

if($old ==  $oldpass) {
if (empty($error)) {
$sql3 = "UPDATE members SET password='$new' WHERE username='$user'";
$result3 = mysql_query($sql3);
}

// if successful redirect to delete_multiple.php 
if($result3){
echo "<meta http-equiv=\"refresh\" content=\"0;URL=info.php\">";
}
}
}

if (empty($error)) { $error = "Password updated"; }

}

?></p>
			</div>
			<!-- end grid -->
			
			
			</div>
			<!-- end grid -->
		</div><!-- end container -->
	</div>
	
	<div id="content">
		<div class="container_12 clearfix">
			<div class="grid_12" style="width: 700px;">
			  <fieldset style="width: 700px;">
				<legend>Account Information</legend>
					<div id="pass">
					<span style="color:#222; font-weight:bold;">Username : </span><span id="info" style="margin-left: 61px; text-transform:none;"><?php echo $display['username'] ?></span><br />
					<script type="text/javascript">
					var password = <your password here>
var dispPassword = new String();
var n = password.length;
while(dispPassword.length < n){ 
        dispPassword.push("*"); 
}
document.getElementById("password").innerHTML = dispPassword;

</script>
					<span style="color:#222;; font-weight:bold;">Password : </span><span id="password" style="margin-left: 61px;">
			  <input type="password" name="password" value="<?php echo $display['password'] ?>" style="border: 0px black solid; width: 100px;
					font-weight: bold;" "readonly=readonly"></span><span style="color:#ff0000;"><?php echo $error;?></span></div>
					 <div id="change" style="font-size: 10px;"><a>Change Password</a></div>
				<div id="cancel3" style="display:none; padding-left: 620px;"><a>Cancel</a></div>
<div id="account" style="display:none;">
					<form id="form1" method="post" action="info.php">
						
						<p><label for="text_field">Current Password:</label>
						<div id="entry-text">
						 <input type="password" name="old_pass"/><br />
					  </div>
						</p>
						<p><label for="text_field">New Password:</label>
						<div id="entry-text">
						<input id="text" name="password" type="password" onKeyUp="passwordStrength(this.value)" /></label> 
						<br />
						<label for="passwordStrength">Password strength</label>

                        <div id="passwordDescription">Password not entered</div>

                        <div id="passwordStrength" class="strength0"></div>

                        </div>
						</p>
						<p id="but"><br />
							<input class="button" value="Submit" type="submit" name="edit3"/>
							<input class="button" value="Clear" type="reset" />
						</p>
	    </form></div>
			  </fieldset>

				<fieldset style="width: 700px;">
					<legend>Basic and Contact information</legend>
					<div id="edit" style="padding-left: 620px;"><a>Edit</a></div>
					<div id="cancel1" style="display:none; padding-left: 620px;"><a>Cancel</a></div>
					<div id="form01">
					<span style="color:#222; font-weight:bold;">Name : </span><span id="info" style="margin-left: 61px;"><?php echo $display['firstname'] . " " . $display['lastname'] ?></span><br />
					<span style="color:#222; font-weight:bold;">Address : </span><span id="info" style="margin-left: 47px;"><?php echo $display['address'] ?></span><br />
					<?php $hometown = $display['hometown'];
					if($hometown != ""){
					echo '<span style="color:#222;; font-weight:bold;">Hometown : </span><span id="info" style="margin-left: 30px;">' . $hometown . '</span><br />'; } ?>
					<?php $contact = $display['contact_no'];
					if($contact != ""){
					echo '<span style="color:#222;; font-weight:bold;">Contact No. : </span><span id="info" style="margin-left: 25px;">' . $contact .'</span><br />'; } ?>
					<span style="color:#222; font-weight:bold;">Email : </span><span id="uu" style="margin-left: 64px;"><?php echo $display['email'] ?></span><br />
					<span style="color:#222; font-weight:bold;">Birthdate : </span><span id="info" style="margin-left: 39px;"><?php echo $display['birthdate'] ?></span><br />
					<span style="color:#222; font-weight:bold;">Gender : </span><span id="info" style="margin-left: 53px;"><?php echo $display['gender'] ?></span><br />
				<?php $rel = $display['relationship'];
					if($rel != ""){
					echo '<span style="color:#222;; font-weight:bold;">Relationship : </span><span id="info" style="margin-left: 20px;">' .$rel . '</span><br />'; }?></div>
					
<div id="forms" style="display:none;">
					<form id="form1" method="post" action="info.php">
						
						<p>
						
							<label for="text_field">Firstname:</label>
					  <div id="entry-text">
							<input type="text" id="cap" name="firstname" value="<?php echo $display['firstname'] ?>"/></div>
					  </p>

						<p>
							<label for="text_field">Lastname:</label>
					  <div id="entry-text">
							<input type="text" id="cap" name="lastname"   value="<?php echo $display['lastname'] ?>"/></div>
						</p>
						<p><label for="text_field">Address:</label>
					  <div id="entry-text">
							 <input type="text" id="cap" name="address"   value="<?php echo $display['address'] ?>" /></div>
						</p>
						<p><label for="text_field">Hometown:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="hometown"   value="<?php echo $display['hometown'] ?>" /></p></div>
						<p>
						  <label for="text_field">Contact No.:</label>
					  <div id="entry-text">
							<input type="text" id="cap" name="contact_no"   value="<?php echo $display['contact_no'] ?>" /></div>
						<p><label for="text_field">Email:</label>
						<div id="entry-text">
							 <input type="text" name="email" id="username" value="<?php echo $display['email'] ?>" /></div>
						</p>
						<p><label for="text_field">Birthdate:</label>
					  <div id="entry-text">
							 <select class="" style="width: 100px;" name="birthday_month" onChange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(this, &quot;birthday_day&quot;, &quot;birthday_year&quot;);});">
                                  <option selected="selected"><?php echo $display['b_month'] ?></option>
                                  <option value="-1">Month:</option>
                                  <option value="January">Jan</option>
                                  <option value="February">Feb</option>
                                  <option value="March">Mar</option>
                                  <option value="April">Apr</option>
                                  <option value="May">May</option>
                                  <option value="June">Jun</option>
                                  <option value="July">Jul</option>
                                  <option value="August">Aug</option>
                                  <option value="September">Sep</option>
                                  <option value="October">Oct</option>
                                  <option value="November">Nov</option>
                                  <option value="December">Dec</option>
                        </select>
                                <select name="birthday_day" style="width: 100px;"  onchange="bagofholding" autocomplete="on">
                                  <option selected="selected"><?php echo $display['b_day'] ?></option>
                                  <option value="-1">Day:</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                  <option value="14">14</option>
                                  <option value="15">15</option>
                                  <option value="16">16</option>
                                  <option value="17">17</option>
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20">20</option>
                                  <option value="21">21</option>
                                  <option value="22">22</option>
                                  <option value="23">23</option>
                                  <option value="24">24</option>
                                  <option value="25">25</option>
                                  <option value="26">26</option>
                                  <option value="27">27</option>
                                  <option value="28">28</option>
                                  <option value="29">29</option>
                                  <option value="30">30</option>
                                  <option value="31">31</option>
                                </select>
                                <select name="birthday_year" style="width: 100px;" onChange="return run_with(this, [&quot;editor&quot;], function() {editor_date_month_change(&quot;birthday_month&quot;,&quot;birthday_day&quot;,this);});" autocomplete="on">
                                  <option selected="selected"><?php echo $display['b_year'] ?></option>
                                  <option value="-1">Year:</option>
                                  <option value="2011">2011</option>
                                  <option value="2010">2010</option>
                                  <option value="2009">2009</option>
                                  <option value="2008">2008</option>
                                  <option value="2007">2007</option>
                                  <option value="2006">2006</option>
                                  <option value="2005">2005</option>
                                  <option value="2004">2004</option>
                                  <option value="2003">2003</option>
                                  <option value="2002">2002</option>
                                  <option value="2001">2001</option>
                                  <option value="2000">2000</option>
                                  <option value="1999">1999</option>
                                  <option value="1998">1998</option>
                                  <option value="1997">1997</option>
                                  <option value="1996">1996</option>
                                  <option value="1995">1995</option>
                                  <option value="1994">1994</option>
                                  <option value="1993">1993</option>
                                  <option value="1992">1992</option>
                                  <option value="1991">1991</option>
                                  <option value="1990">1990</option>
                                  <option value="1989">1989</option>
                                  <option value="1988">1988</option>
                                  <option value="1987">1987</option>
                                  <option value="1986">1986</option>
                                  <option value="1985">1985</option>
                                  <option value="1984">1984</option>
                                  <option value="1983">1983</option>
                                  <option value="1982">1982</option>
                                  <option value="1981">1981</option>
                                  <option value="1980">1980</option>
                                  <option value="1979">1979</option>
                                  <option value="1978">1978</option>
                                  <option value="1977">1977</option>
                                  <option value="1976">1976</option>
                                  <option value="1975">1975</option>
                                  <option value="1974">1974</option>
                                  <option value="1973">1973</option>
                                  <option value="1972">1972</option>
                                  <option value="1971">1971</option>
                                  <option value="1970">1970</option>
                                </select></div>
						</p>
						<p><label for="text_field">Gender:</label>
					  <div id="entry-text">
							 <select name="gender" id="drop cap">
                                <option selected="selected"><?php echo $display['gender'] ?></option>
                                <option value="-1">-Select Gender-</option>
                                <option>Female</option>
                                <option>Male</option>
                          </select></div>
						</p>
						<p><label for="text_field">Relationship:</label>
						<div id="entry-text">
							 <select name="relationship" id="drop cap">
                                <option selected="selected"><?php echo $display['relationship'] ?></option>
                                <option value="-1">-Select Status-</option>
                                <option>Single</option>
                                <option>In a relationship</option>
                                <option>Married</option>
                                <option>Widow</option>
                                <option>Seperated</option>
                          </select>
                      </div>
						</p><p id="but"><br />
							<input class="button" value="Submit" type="submit" name="edit1"/>
							<input class="button" value="Clear" type="reset" />
						</p>
						
					</form></div>
				</fieldset>
				<br />
				<fieldset style="width: 700px;">
				<legend>Education, Interest and Entertainment</legend>
				<div id="edit2" style="padding-left: 620px;"><a>Edit</a></div>
				<div id="cancel2" style="display:none; padding-left: 620px;"><a>Cancel</a></div>

					<div id="form02">
					<?php $high = $display['high_school'];
					if($high != ""){
					echo '<span style="color:#222; font-weight:bold;">High School :</span><span id="info" style="margin-left: 23px;">' .$high . '</span><br />'; } ?>
					<?php $college = $display['college'];
					if($college != ""){
					echo '<span style="color:#222; font-weight:bold;">College :</span><span id="info" style="margin-left: 55px;">' . $college . '</span><br />'; } ?>
					<?php $interest = $display['interest'];
					if($interest != ""){
					echo '<span style="color:#222; font-weight:bold;">Interests :</span><span id="info" style="margin-left: 45px;">' . $interest .'</span><br />'; } ?>
					<?php $aboutme = $display['aboutme'];
					if($aboutme != ""){
					echo '<span style="color:#222; font-weight:bold;">About You :</span><span id="info" style="margin-left: 34px;">' . $aboutme. '</span><br />'; } ?></div>
<div id="forms2" style="display:none;">
					<form id="form1" method="post" action="info.php">
						<p><label for="text_field">High School:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="high_school"   value="<?php echo $display['high_school'] ?>" /></div>
						</p>
						<p><label for="text_field">College:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="college"   value="<?php echo $display['college'] ?>" /></div>
						</p>
				<p><label for="text_field">Interests:</label>
					  <div id="entry-text">
						<input type="text" id="cap" name="interest" value="<?php echo $display['interest'] ?>" /></div>
</p>				
						<p>
						<label for="text_field">About You:</label>
						<div id="entry-text">
						 <input type="text" id="cap" name="aboutme"   value="<?php echo $display['aboutme'] ?>" /></div>
						</p>
						<p id="but"><br />
							<input class="button" value="Submit" type="submit" name="edit2"/>
							<input class="button" value="Clear" type="reset" />
						</p>
		</form></div>
				</fieldset>
		  </div>
			<!-- end grid -->
<!-- /Cols 1 -->
    
<br class="clear" />
    
</div>
</div><!-- end container -->
	</div>
	<!-- end content -->
	<!-- end footer -->
	
	<!-- end subfooter -->
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
	
	<!-- For CUFON Under IE -->
	<script type="text/javascript"> Cufon.now(); </script>
</body> 
</html>

<?php ob_flush(); ?>