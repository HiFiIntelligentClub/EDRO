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

		foreach($objEDRO->arrObjects['мТаблица'] as $сРасположение)
			{
			$objStation	=FileRead::objJSON($objKIIM, $сРасположение);
			$objStation->listen_url			=strSafeUsers($objStation->listen_url);
			$objStation->server_name		=strSafeUsers($objStation->server_name);
			$objStation->server_type		=strSafeUsers($objStation->server_type);
			$objStation->bitrate			=strSafeUsers($objStation->bitrate);
			$objStation->genre			=strSafeUsers($objStation->genre);
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
				'strName'		=>$objStation->server_name,
				'strAudio'		=>$strAudio,
				'strAudioType'		=>$objStation->server_type,
				'strAudioBitrate'	=>$objStation->bitrate,
				'strStyle'		=>$objStation->genre,
				);
			$arrPagination['int0CurrentStation']=$int0I;
			$this->strHTML.= StationBlock::strHTML($objKIIM, $arrStation, $arrPagination, $objEDRO->arrEvent['arrParams']);
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