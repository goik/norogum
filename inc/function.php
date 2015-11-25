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

$postImages=array(
											'large'=>				array(
																					"1-large.jpg",
																					"2-large.jpg",
																					"3-large.jpg",
																					"4-large.jpg",
																					"5-large.jpg",
																					"6-large.jpg",
																					"7-large.jpg",
																					"8-large.jpg",
																					"9-large.jpg",
																					"10-large.jpg",
																					"11-large.jpg",
																					"12-large.jpg",
																					"13-large.jpg",
																					"14-large.jpg",
																					"15-large.jpg",
																					"16-large.jpg",
																					"17-large.jpg",
																					"18-large.jpg",
																					"19-large.jpg",
																					"20-large.jpg"
																				),

											'small'=>				array(
																					"1.jpg",
																					"2.jpg",
																					"3.jpg",
																					"4.jpg",
																					"5.jpg",
																					"6.jpg",
																					"7.jpg",
																					"8.jpg",
																					"9.jpg",
																					"10.jpg",
																					"11.jpg",
																					"12.jpg",
																					"13.jpg",
																					"14.jpg",
																					"15.jpg",
																					"16.jpg",
																					"17.jpg",
																					"18.jpg",
																					"19.jpg",
																					"20.jpg"
																				)
						);

?>