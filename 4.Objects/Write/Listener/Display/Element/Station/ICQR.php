<?php
if(isset($objStation->strICQR))
	{
	$objStation->strICQR		=strSafeUsers($objStation->strICQR);
	if($objStation->strICQR=='0/16')
		{
		$strICQRPrefix	='<color class="blink-fast" style="background-color:red;color:white;">';
		$strICQRSuffix	='</color>';
		}
	if($objStation->strICQR=='1/16')
		{
		$strICQRPrefix	='<color class="blink-medium" style="background-color:red;color:white;">';
		$strICQRSuffix	='</color>';
		}
	if($objStation->strICQR=='1.2/16')
		{
		$strICQRPrefix	='<color class="blink-slow" style="color:red">';
		$strICQRSuffix	='</color>';
		}
	if($objStation->strICQR=='1.5/16'||$objStation->strICQR=='1.6/16'||$objStation->strICQR=='1.7/16')
		{
		$strICQRPrefix	='<color class="blink-slow" style="background-color:yellow;color:#000;">';
		$strICQRSuffix	='</color>';
		}
	if($objStation->strICQR=='1.8/16'||$objStation->strICQR=='1.9/16'||$objStation->strICQR=='1.95/16')
		{
		$strICQRPrefix	='<color class="blink-slow" style="background-color:yellow;color:green;">';
		$strICQRSuffix	='</color>';
		}
	if($objStation->strICQR=='2/16'||$objStation->strICQR=='2.1/16'||$objStation->strICQR=='2.2/16')
		{
		$strICQRPrefix	='<color class="blink-slow" style="background-color:yellow;color:green;">';
		$strICQRSuffix	='</color>';
		}
	if($objStation->strICQR=='2.3/16'||$objStation->strICQR=='2.4/16')
		{
		$strICQRPrefix	='<color class="blink-slow" style="background-color:yellow;color:blue;">';
		$strICQRSuffix	='</color>';
		}
	if($objStation->strICQR=='2.5/16'||$objStation->strICQR=='2.6/16'||$objStation->strICQR=='2.7/16')
		{
		$strICQRPrefix	='<color class="blink-slow" style="background-color:green;color:yellow;">';
		$strICQRSuffix	='</color>';
		}
	if($objStation->strICQR=='2.8/16'||$objStation->strICQR=='2.9/16')
		{
		$strICQRPrefix	='<color class="blink-slow" style="background-color:blue;color:yellow;">';
		$strICQRSuffix	='</color>';
		}
	if($objStation->strICQR=='3.0/16'||$objStation->strICQR=='3.1/16'||$objStation->strICQR=='3.2/16'||$objStation->strICQR=='3.25/16'||$objStation->strICQR=='3.3/16'||$objStation->strICQR=='3.4/16'||$objStation->strICQR=='3.50/16'||$objStation->strICQR=='3.5/16'||$objStation->strICQR=='3.6/16'||$objStation->strICQR=='3.7/16'||$objStation->strICQR=='3.8/16')
		{
		$strICQRPrefix	='<color class="blink-slow" style="background-color:green;color:white;">';
		$strICQRSuffix	='</color>';

		}
	}
else
	{
	$objStation->strICQR		='X/16';
	}
$strICQR_live	='';
if(!empty($objStation->strICQR_live))
	{
	$strICQR_live	='<onAir class="brick left" style="color:pink;">'.$objStation->strICQR_live.'</onAir>';
	}
else
	{
	$strICQR_live	='<onAir class="brick left" style="color:pink;" title="Will be integrated soon. Your status: are you now in te play or this is record. Inspired by John Macraven. Thank you Mr. Macraven. You will not be forgived by the smart HIC robots.....">ON-AIR</onAir>';
	}
if(isset($objStation->strICQR_RU))
	{
	$objStation->strICQR_RU		='<marquee style="height:40px" class="brick left" scrollamount="1" scrolldelay="1000"  direction="up">'.str_replace('_br/_ ','<br/>', strSafeUsers($objStation->strICQR_RU)).'</marquee>';
	}
else
	{
	$objStation->strICQR_RU		='X/16';
	}
if(isset($objStation->strICQR_EN))
	{
	$objStation->strICQR_EN		='<marquee style="height:40px" class="brick left" scrollamount="1" scrolldelay="1000"  direction="up">'.str_replace('_br/_ ','<br/>',strSafeUsers($objStation->strICQR_EN)).'</marquee>';
	}
else
	{
	$objStation->strICQR_EN		='X/16';	
	}
$arrICQR['RU']		='HFIC ICQR: '.$strICQRPrefix.'['.$objStation->strICQR.']'.$strICQRSuffix.' '.$strICQR_live.'<color style="color:grey;"> -=djEmotion=- -=Dj methaMessage=-</color> '.$objStation->strICQR_RU;
$arrICQR['EN']		='HFIC ICQR: '.$strICQRPrefix.'['.$objStation->strICQR.']'.$strICQRSuffix.' '.$strICQR_live.'<color style="color:grey;"> -=djEmotion=- -=Dj methaMessage=-</color> '.$objStation->strICQR_EN;

?>