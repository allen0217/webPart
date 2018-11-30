<?php
session_start();
#print_r($_SESSION);

##########################################33
if($_GET['album'] != "")
{
unset($_SESSION['gallery']['images']);

$_SESSION['gallery']['directory'] = $dir = $_GET['album'];
$_SESSION['gallery']['title'] = $_SESSION['gallery']['list'][$_GET['album']]['title'];
$_SESSION['gallery']['titlebar'] = $_SESSION['gallery']['list'][$_GET['album']]['titlebar'];
$_SESSION['gallery']['embed'] = $_SESSION['gallery']['list'][$_GET['album']]['embed'];

if(ereg("_video", $dir))
{
#	header("location: $dir/index.html");
	header("location: showvideo.php");
	exit;
}

$files = scandir($dir);
if(is_array($files))
	foreach($files as $value)
		if(is_file("$dir/$value") && substr($value, -4) == ".jpg" && "$value" != "thumbnail.jpg")
			$_SESSION['gallery']['images'][] = "$dir/$value";

$_SESSION['gallery']['index'] = 0;
$_SESSION['gallery']['max'] = count($_SESSION['gallery']['images'])-1;
header("location: slideshow.php");
exit;
}
##########################################
unset($SESSION['gallery']);

$directs = scandir(".");
$idx = 0;
$cntr= 0;
$content = "<TR><TD><DIV style=\"margin-left: auto; margin-right: auto; width: 600px;\"><BR><DIV style=\"font-size: 14pt; text-align: center;\">Click an image to start a slide show</DIV><BR>";
foreach($directs as $value)
{
	if(!is_dir("$value"))  continue;	//a directory?
	if("$value" == "." || "$value" == "..") continue;	//current or parent directory?
	if(! is_file("$value/thumbnail.jpg")) continue; //if not an image directory, bug-out
	$descript = file_get_contents("$value/album.txt");

	$vals = array("title","titlebar","caption","embed");
	foreach($vals as $valx)
		if( ereg("\[$valx\](.*)\[/$valx\]", $descript, $arr)) $_SESSION['gallery']['list'][$idx][$valx] = $$valx = $arr[1]; 
	$_SESSION['gallery']['list'][$idx]['directory'] = "$value";

	$content .= "<A class=tn href=\"gallery.php?album=$value\"><IMG src=\"$value/thumbnail.jpg\" height=100px width=100px border=0><BR>$caption</A>\n";
	$idx++;
}
$content .= "<?DIV></TR>\n";

$hdr =  file_get_contents("../db_header.html");
$ftr =  file_get_contents("../db_footer.html");
$menu =  file_get_contents("../db_menu.html");

print <<<EOD
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<HTML>
<HEAD>
<TITLE>DFW Dragon Boat Festival</TITLE>
<link rel="stylesheet" type="text/css" href="/dragon.css" />
<STYLE type="text/css">
A {color: white; text-decoration: none; }
A.tn {float: left; text-align: center; margin-left: 15px;}
</STYLE>
</HEAD>
<BODY>
<CENTER>
<TABLE id=maintbl border=0>
$hdr
<TR id=menubar>
$menu
</TR>
$content
$ftr
</TABLE>
</CENTER>
</BODY>
</HTML>
EOD;

?>
