<?php
function compress($buffer){
$buffer=preg_replace('/<!--.*-->/Uis','',$buffer);
$buffer=preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '',$buffer);
$buffer=str_replace(array("\r\n","\r","\n","\t",'  ','    ','    '),'',$buffer);
return $buffer;
}
ob_start("compress");
?>