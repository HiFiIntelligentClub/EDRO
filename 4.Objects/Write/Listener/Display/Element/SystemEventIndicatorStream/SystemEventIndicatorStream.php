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
//         /\                  // /   
//       <  **>               /// /  
 //////    jl                ///// /    
./././././././*/
class SystemEventIndicatorStream
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
	public function __construct()
		{
		$this->strHTML='
		<EDROContextSignals
			class="abs layer_4 matrixTop BBV V100 BC3 BT3"
			style="	
				left		:0;
				height		:20px;
				width		:100%;
				"
			>'.
			Login::strHTML().
			DynaScreenEventIndicator::strHtml().
			Player::strIndicatorTop().
			IndicatorHiFi::strHtml().
			IndicatorMasterClock::strHTML().
			IndicatorNetwork::strHTML().
			IndicatorDimensions::strHTML().
			IndicatorLang::strHtml().
			IndicatorRole::strHTML().
		'</EDROContextSignals>';
		}
	public static function strHTML()
		{
		//$arrData['_strName']=$_objData->strName;
		$objSystemEventIndicatorStream		=new SystemEventIndicatorStream();
		return $objSystemEventIndicatorStream->strHTML;
		}
	}
?>