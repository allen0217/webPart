<?php
function template($content, $script=NULL, $stylesheet=NULL)
{
	if(is_file("../template1.shtml"))
	{
		$tmpltxt = file_get_contents("../template1.shtml");
		$hdr = file_get_contents("../db_header.html");
		$menu = file_get_contents("../db_menu.html");
		$ftr = file_get_contents("../db_footer.html");
	}

	$tmpltxt = str_replace("<!--#include virtual=\"/db_header.html\"-->", $hdr, $tmpltxt);
	$tmpltxt = str_replace("<!--#include virtual=\"/db_menu.html\"-->", $menu, $tmpltxt);
	$tmpltxt = str_replace("<!--#include virtual=\"/db_footer.html\"-->", $ftr, $tmpltxt);
	$tmpltxt = str_replace("<!--content here-->", $content, $tmpltxt);
	$tmpltxt = str_replace("<!--script-->",     $script, $tmpltxt);
	$tmpltxt = str_replace("<!--stylesheet-->", $stylesheet, $tmpltxt);

	print $tmpltxt;
	exit;
}
?>
