<?php header("Expires: Sun, 30 Dec 2011 05:00:00 GMT"); if (strpos(' '.$_SERVER['HTTP_ACCEPT_ENCODING'], 'x-gzip')!==false){$miniBB_gzipper_encoding='x-gzip';}
if (strpos(' '.$_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')!==false) {$miniBB_gzipper_encoding='gzip';}
if (isset($miniBB_gzipper_encoding)) {ob_start();}
function percent($a, $b) {$c = $b/$a*100; return $c;}
?>