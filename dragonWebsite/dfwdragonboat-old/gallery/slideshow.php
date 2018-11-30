<?php
session_start();

if(isset($_GET['cleargallery']))
{
	unset($_SESSION['gallery']);
	header("location: gallery.php");
	exit;
}
####################################
if(isset($_GET['first']))
{
	$_SESSION['gallery']['index'] = 99999;
	header("location: slideshow.php?next");
	exit;
}
####################################
if(isset($_GET['Pause'])) $_SESSION['gallery']['pause'] = 50000;
####################################
if(isset($_GET['Play']))
{
	$_SESSION['gallery']['pause'] = 4;
	$go_image = "pause.gif";
	header("location: slideshow.php?next");
	exit;
}
####################################
if($_SESSION['gallery']['pause']=="") $_SESSION['gallery']['pause'] = 3;

if($_SESSION['gallery']['pause'] == 4) {$pausetxt = "Pause"; $go_image = "pause.gif";}
else { $pausetxt = "Play"; $go_image = "play_arrow.gif";}

$title = $_SESSION['gallery']['title'];
$titlebar = $_SESSION['gallery']['titlebar'];

if(isset($_GET['prev']))
	if($_SESSION['gallery']['index'] != 0)
		$_SESSION['gallery']['index']--;
	else
		$_SESSION['gallery']['index'] = $_SESSION['gallery']['max'];

if(isset($_GET['next']))
{
	if( $_SESSION['gallery']['index'] < $_SESSION['gallery']['max'])
		$_SESSION['gallery']['index']++;
	else
		$_SESSION['gallery']['index'] = 0;
}

$prev_arrow = "<A href=\"slideshow.php?prev\"><IMG src=\"/images/prev_arrow.gif\" border=0></A>";
$next_arrow = "<A href=\"slideshow.php?next\"><IMG src=\"/images/forward_arrow.gif\" border=0></A>";

$show = $_SESSION['gallery']['index'];
$image = "<IMG src=\"".$_SESSION['gallery']['images'][$show]."\">";

$fp = fopen("../db_header.html","r");
$hdr = fread($fp,10000);
fclose($fp);

$fp = fopen("../db_footer.html","r");
$ftr = fread($fp,10000);
fclose($fp);

$fp = fopen("../db_menu.html","r");
$menu = fread($fp,10000);
fclose($fp);

$pause = $_SESSION['gallery']['pause'];

print <<<EOD
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<HTML>
<HEAD>
<TITLE>DFW Dragon Boat Festival</TITLE>
<META http-equiv=refresh content="$pause; URL=slideshow.php?next">
<SCRIPT type="text/javascript">
</SCRIPT>

<link rel="stylesheet" type="text/css" href="/dragon.css" />
<STYLE type="text/css">
</STYLE>
</HEAD>

<BODY>
<CENTER>
<TABLE id=maintbl border=0>
$hdr
<TR id=menubar>$menu</TR>
<tr>    
<TD align=center>
<TABLE>
<TR>
    <td align="right"> $prev_arrow </td>
    <td align="center">
    <a href="tab1/index.shtml"><img src="/images/home_arrow.gif" ALT="go to first picture" WIDTH="50" HEIGHT"50" BORDER="0"></a>
		<A href=slideshow.php?$pausetxt><IMG src="/images/$go_image" border=0></A></td>
    <td align="left"> $next_arrow </td>
</TR>
</TABLE>
</tr>
<TR><TD align=center style="padding-bottom: 15px;">$image</TR>

$ftr
</TABLE>
</CENTER>
</BODY>
</HTML>
EOD;
?>
