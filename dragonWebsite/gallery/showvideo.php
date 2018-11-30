<?php
session_start();

$embed = $_SESSION['gallery']['embed'];
$title = $_SESSION['gallery']['title'];
$titlebar = $_SESSION['gallery']['titlebar'];
?>
<HTML>
  
  <HEAD>
    <TITLE><?php print $titlebar; ?></TITLE>
  </HEAD>
  
  <BODY TEXT="#FFFFFF" LINK="#FFFFFF" VLINK="#C0C0C0" BGCOLOR="#096191" 
  ALINK="#000000">
    
<H1 ALIGN="center"><FONT FACE="Arial"><A HREF="slideshow.php?cleargallery"><IMG SRC="resources/banner_top.jpg" ALT="Take Me To More Pictures"            
        WIDTH="750" HEIGHT="60"></A></FONT>
</H1>
<center>
<H2><?php print "$title"; ?></H2>
    
    <center>
    <br><br>
<?php print $embed; ?>
    
<P ALIGN="CENTER"><FONT SIZE="+2" FACE="Arial" COLOR="white">
<B><A HREF="gallery.php"><IMG SRC="resources/banner_bottom.jpg" BORDER="0"></A></B>
</FONT></P>
    
  </BODY>
</HTML>
