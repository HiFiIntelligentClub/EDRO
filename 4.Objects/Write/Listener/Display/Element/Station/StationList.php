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
	public $strHTML		='';
	private $strEvent	='Print';
	private $strDesign	='';
	private $strReality	='';
	private $strObject	='';
	private	$objEDRO;
	/*private $arrEDRO=
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
		);*/
	public function __construct($_objKIIM, $objEDRO)
		{
		$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		unset($_objKIIM);
		$this->objEDRO		=$objEDRO;
		$this->_Event();
		$this->_Design();
		$this->_Reality($objKIIM);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public function _Event()
		{
		}
	public function _Reality($objKIIM)
		{
		$arrPagination				=$this->objEDRO->arrObjects['мРасположение'];
		$int0ListNum				=0;
		foreach($this->objEDRO->arrObjects['мТаблица'] as $сРасположение)
			{
			$objStation			=FileRead::objJSON($objKIIM, $сРасположение);
			///$objGenres			=FileRead::objJSON($objKIIM, $сРасположение);
			
			$arrStationS['strId']		=strSafeUsers($objStation->id);
			$arrStationS['strStationName']	=strSafeUsers($objStation->server_name);
			if(isset($objStation->strICQR_Q))
				{
				$arrStationS['strICQR_Q']			=strSafeUsers($objStation->strICQR_Q);
				}
			else
				{
				$arrStationS['strICQR_Q']			='N/A';
				}
			//$objStation->server_type			=strSafeUsers($objStation->server_type);
			//$objStation->bitrate				=strSafeUsers($objStation->bitrate);
			//$objStation->genre				=strSafeUsers($objStation->genre);
			if(isset($objStation->strICQR_live))
				{
				$arrStationS['strICQR_LIVE']			=strSafeUsers($objStation->strICQR_live);
				}
			else
				{
				$arrStationS['strICQR_LIVE']			='RECORD';
				}
			$arrStationS['arrStationDeclaredGenres']	=array();
			$arrStationS['arrICQRGenres']			=array();
			$arrStationS['arrCurrentGenres']		=array();
			$arrStationS['arrCurrentDjMessages']		=array();
			$arrStationS['arrStationShedullerNotice']	=
				array(
				'strShedulledProgramName'=>
					array(
					'strBegin'=>'xxxx-xx-xx xx:xx:::xx GMT+X',
					'strEnd'=>'xxxx-xx-xx xx:xx:::xx GMT+X',
					'strDjName'=>
						array(
						'Dj Logo',
						'Dj NickName',
						'Dj Contacts',
						'Dj Welcome Message',
						'Dj programm genre',
						'Dj programm position HiFi/NoHiFi',
						'Dj Social networks links',
						'Dj own site',
						'Dj adverticement messages',
						'Dj adverticement images',
						'Dj adverticement links',
						'Dj adverticement interval',
						'Dj thanks and respects words',
						'Label name',
						'Label logo image',
						'Label Contacts',
						'Label site',
						'Label adverticement messages'
						),
					'arrChatMessages'=>array(),
					'arrConnectionReport'=>
						array(
						'ConnectedFrom',
						'FailureDate/Time',
						'FailureType',
						),
					'arrQualityReport'=>
						array(
						'From',
						'Date/Time',
						),
					'arrListenersReport'=>
						array(
						'From',
						'Date/Time1',
						'Date/Time2',
						)
					),
				);
			$arrICQR				=array();
			$strICQRPrefix				='';
			$strICQRSuffix				='';
			if($this->objEDRO->arrReality['bIzAndroid'])
				{
				$strAudio	=сКодировать($arrStationS['strId'], 'д');
				}
			else
				{
				$strAudio	=$arrStationS['strId'];
				//echo	$strAudio;
				}
			$arrStationGenres		=(array)FileRead::objJSON($objKIIM, $this->objEDRO->arrReality['сРасположениеКорень'].'/Stations/belongs/Genres/'.$arrStation['strId'].'.plmr');
			$arrStation=
			array(
				'strId'			=>$arrStationS['strId'],
				'int0ListNum'		=>$int0ListNum,
				'strName'		=>$arrStationS['strStationName'],
				'strAudio'		=>$strAudio,
				'strICQR_Q'		=>$arrStationS['strICQR_Q'],
				// 'strAudioType'	=>$objStation->server_type,
				// 'strAudioBitrate'	=>$objStation->bitrate,
				// 'strStyle'		=>$objStation->genre,
				'arrICQR'		=>$arrICQR
				);
			//echo'<pre>';
			//print_r($objStation);
			//echo'</pre>';

			//echo'<pre>';
			//	print_r($arrStationS);
			//echo'</pre>';
			//$a					=strSafeUsers(sarrConnect_RU);
			//$b					=strSafeUsers(sarrConnect_EN);
			$arrPagination['int0CurrentStation']	=$int0ListNum;
			$this->strHTML		.= StationBlock::strHTML($objKIIM, $arrStation, $arrPagination, $this->objEDRO->arrEvent['arrReality']);
			$int0ListNum++;
			}
		}
	public function _Design()
		{
		}
	public function _Object()
		{
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