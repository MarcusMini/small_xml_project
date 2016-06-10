<?php
include 'include/header.php';
/*  DEBUT PAGE  */


/* ------------------------- THIS PAGE DISPLAY THE XSL ----------------------------- */

/* COMPILE XML/XSL */
$xh = new XSLTProcessor();
$xml = new DOMDocument();
$xml->load('profil/'.$_GET["file"]);

$xsl = new DOMDocument();
$xsl->load('template.xsl');

$xh->importStylesheet($xsl);

print $xh->transformToXML($xml);


/*  FIN PAGE     */
include 'include/footer.php';
?>
