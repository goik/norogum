<?php
if (isset($miniBB_gzipper_encoding)) {
$miniBB_gzipper_in=ob_get_contents();
$miniBB_gzipper_inlenn=strlen($miniBB_gzipper_in);
$miniBB_gzipper_out=gzencode($miniBB_gzipper_in, 2);
$miniBB_gzipper_lenn=strlen($miniBB_gzipper_out);
$miniBB_gzipper_in_strlen=strlen($miniBB_gzipper_in);
$gzpercent=percent($miniBB_gzipper_in_strlen, $miniBB_gzipper_lenn);
$percent=round($gzpercent);
$miniBB_gzipper_in=str_replace('<!- GZipper_Stats ->', 'Original size: '.strlen($miniBB_gzipper_in).' GZipped size: '.$miniBB_gzipper_lenn.' Сompression: '.$percent.'%<hr>', $miniBB_gzipper_in);
$miniBB_gzipper_out=gzencode($miniBB_gzipper_in, 2);
ob_clean();
header('Content-Encoding: '.$miniBB_gzipper_encoding);
echo $miniBB_gzipper_out;
}
?>