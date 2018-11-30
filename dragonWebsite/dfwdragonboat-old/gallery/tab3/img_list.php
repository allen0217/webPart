<?php
$img_array = scandir(".");
sort($img_array);

$imgList = "<!-- DO NOT EDIT LIST.  Generated by img_list.php -->\n";
foreach($img_array as $value)
{
	if(!ereg("^img_.*jpg$", $value)) continue;

	$img = ImageCreateFromJPEG ( $value ); 
  $width = imagesx ($img);    // image width 
  $height = imagesy ($img);   // image height
	$imgList .= "<A href=\"javascript: ShowImage('$value',$height,$width);\"><IMG src=\"thumbnails/$value\" border=0></A>\n";
}

$fp = fopen("img_list.html", "w");
fwrite($fp, $imgList);
fclose($fp);
?>
