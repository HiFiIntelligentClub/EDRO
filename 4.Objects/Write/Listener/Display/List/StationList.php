<?php
                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 ////// 2020                   /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class StationList
	{
	public $strHTML;
	private $arrEDRO=
	array(
		'arrE'=>
		array(
			'/','/search'
			),
		'arrD'=>
		array(
			'/home/EDRO/2.Design/.strFileList.php',
			),
		'arrR'=>
		array(
			'arrLang'=>
			array(
				'EN','RU',
			),
			'arrRole'=>
			array(
				'Listener'
				),
			),
		'arrO'=>
		array(
			'strHTML'=>''
			),
		);
	public function __construct($_objKIIM, $objEDRO)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$arrPagination=$objEDRO->arrObjects['мРасположение'];
		$int0ListNum		=0;
		foreach($objEDRO->arrObjects['мТаблица'] as $сРасположение)
			{
			$objStation	=FileRead::objJSON($objKIIM, $сРасположение);
			$objStation->listen_url			=strSafeUsers($objStation->listen_url);
			$objStation->server_name		=strSafeUsers($objStation->server_name);
			$objStation->server_type		=strSafeUsers($objStation->server_type);
			$objStation->bitrate			=strSafeUsers($objStation->bitrate);
			$objStation->genre			=strSafeUsers($objStation->genre);
			$objStation->strICQR_live		=strSafeUsers($objStation->strICQR_live);
			$arrICQR				=array();
			$a					=strSafeUsers(sarrConnect_RU);
			$b					=strSafeUsers(sarrConnect_EN);
			$strICQRPrefix				='';
			$strICQRSuffix				='';
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
				$objStation->strICQR_RU		='<marquee class="brick left" scrollamount="1" scrolldelay="1000"  direction="up">'.str_replace('_br/_ ','<br/>', strSafeUsers($objStation->strICQR_RU)).'</marquee>';
				}
			else
				{
				$objStation->strICQR_RU		='X/16';
				}
			if(isset($objStation->strICQR_EN))
				{
				$objStation->strICQR_EN		='<marquee class="brick left" scrollamount="1" scrolldelay="1000"  direction="up">'.str_replace('_br/_ ','<br/>',strSafeUsers($objStation->strICQR_EN)).'</marquee>';
				}
			else
				{
				$objStation->strICQR_EN		='X/16';	
				}
			$arrICQR['RU']		='HFIC ICQR: '.$strICQRPrefix.'['.$objStation->strICQR.']'.$strICQRSuffix.' '.$strICQR_live.'<color style="color:grey;"> -=djEmotion=- -=Dj methaMessage=-</color> '.$objStation->strICQR_RU;
			$arrICQR['EN']		='HFIC ICQR: '.$strICQRPrefix.'['.$objStation->strICQR.']'.$strICQRSuffix.' '.$strICQR_live.'<color style="color:grey;"> -=djEmotion=- -=Dj methaMessage=-</color> '.$objStation->strICQR_EN;
			if($objEDRO->arrReality['bIzAndroid'])
				{
				$strAudio	=$objStation->listen_url;
				$strId		=сКодировать($objStation->listen_url, $_сДействие='к');
				}
			else
				{
				$strAudio	=сКодировать($objStation->listen_url, $_сДействие='к');
				$strId		=$strAudio;
				}
			
			$arrStation=
			array(
				'strId'			=>$strId,
				'int0ListNum'		=>$int0ListNum,
				'strName'		=>$objStation->server_name,
				'strAudio'		=>$strAudio,
				'strAudioType'		=>$objStation->server_type,
				'strAudioBitrate'	=>$objStation->bitrate,
				'strStyle'		=>$objStation->genre,
				'arrICQR'		=>$arrICQR
				);
			$arrPagination['int0CurrentStation']=$int0I;
			$this->strHTML.= StationBlock::strHTML($objKIIM, $arrStation, $arrPagination, $objEDRO->arrEvent['arrParams']);
			$int0ListNum++;
			}
		//for($int0I=$arrPagination['int0Start'];$int0I<=$arrPagination['int0Untill'];$int0I++)
		//	{
		//	$objStation	=FileRead::objJSON($objKIIM, $objEDRO->arrObjects['сРасположение'].'/'.$int0I.'.plmr');
		//	$arrStation=
		//	array(
		//		'strName'		=>$objStation->server_name,
		//		'strAudio'		=>сКодировать($objStation->listen_url, $_сДействие='к'),
		//		'strAudioType'		=>$objStation->server_type,
		//		'strAudioBitrate'	=>$objStation->bitrate,
		///		'strStyle'		=>$objStation->genre,
		//		);
		//	$arrPagination['int0CurrentStation']=$int0I;
		//	$this->strHTML.= StationBlock::strHTML($objKIIM, $arrStation, $arrPagination, $objEDRO->arrEvent['arrParams']);
		//	}
		//	}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public function _HTML($_objKIIM, $_objEDRO)
		{
		$objStationList=new StationList($_objKIIM, $_objEDRO);
		}
	public function strHTML($_objKIIM, $_objEDRO)
		{
		$objStationList=new StationList($_objKIIM, $_objEDRO);
		return $objStationList->strHTML;
		}
	public function _EDRO($_objKIIM, $_objEDRO)
		{
		$objStationList=new StationList($_objKIIM, $_objEDRO);
		return $objStationList->strEDRO;
		}
	}
?>