<?php

//根据类型得到导航框
function getNavByTypeId($typeId) 
{
	$nav='';
	switch($typeId) {
		case 3;$nav='strategy';break;
		case 4;$nav='note';break;
		case 5;$nav='blog';break;
		case 7;$nav='about';break;
		default;$nav='index';break;
	}
	return $nav;
}