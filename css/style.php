<?php
header('Content-type: text/css');
include_once("../inc/gzip-top.php");
include_once("../inc/line-top.php");
include_once("base.css");
include_once("owl.carousel.css");
include_once("owl.theme.css");
include_once("owl.transitions.css");
include_once("select-theme-dark.css");
include_once("font-webly.css");
include_once("font-icons.css");
include_once("media-query.css");
include_once("jquery.scrollbar.css");
include_once("jquery.fancybox.css");
include_once("jquery.fancybox-buttons.css");
include_once("jquery.fancybox-thumbs.css");
include_once("style.min.css");
if (isset($_GET['lang'])){
	include_once($_GET['lang'].".css");
}else{
	include_once("arm.css");
}
include_once("../inc/line-bottom.php");
include_once("../inc/gzip-bottom.php");
?>