<?php
	$languages=array('hy'=>'arm','ru'=>'rus','en'=>'eng');
	if (isset($_GET['lang']) AND array_key_exists($_GET['lang'], $languages))
	{
		include_once '/lang/'.$languages[$_GET['lang']].'.php';
		$current_language=$_GET['lang'];
		$language_text=$languages[$_GET['lang']];
	}
	else
	{
		$current_language="hy";
		$language_text="arm";
		include '/lang/arm.php';
	}

$servicesMainCatIcon=array(
								"service-icon-1",
								"service-icon-2",
								"service-icon-3"
						);
?>