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
class Overlay
	{
	public 	$strHTML;
	private $arrEvent	=
		array(
		'close'=>
			array(
			'strLink'		=>'',
			'strOnClick'		=>'this.parentNode.className +=\' hidden\';',
			)
		);
	private $arrDesign	=
		array(
		'close'=>
			array(
			'strClass'		=>'',
			'strStyle'		=>'',
			'intLayer'		=>'',
			),
		'informationWindow'=>
			array(
			'strClass'		=>'',
			'strStyle'		=>'',
			'strLayer'		=>'layer_6',
			),
		'scrollerPart '=>
			array(
			'strClass'		=>'',
			'strStyle'		=>'',
			'intLayer'		=>1,
			),
		);
	private $objReality	=
		array(
		'close'=>
			array(
			'arrRole'=>
			array(
				'Listener', 'Operator'
				),
			'arrLang'=>
			array(
				'ifEN'	=>'',
				'ifRU'	=>'',
				),
			),
		'informationWindow'=>
			array(
			'arrRole'=>
			array(
				'Listener', 'Operator'
				),
			'arrLang'=>
			array(
				'ifEN'	=>'',
				'ifRU'	=>'',
				),
			),
		'scrollerPart'=>
			array(
			'arrRole'=>
			array(
				'Listener', 'Operator'
				),
			'arrLang'=>
			array(
				'ifEN'	=>'',
				'ifRU'	=>'',
				),
			),
		);
	private $arrObjects	=
		array(
		'title'=>array(
			'EN'=>'Close this window',
			'RU'=>'Закрыть это окошко',
			),
		);
	public function __construct($objEDRO=array())
		{
		$this->strHTML='
		<informationWindow
			id	="objInformationOverlay"
			class	="fixed V94 block window '.$this->arrDesign['informationWindow']['strLayer'].' TC3 BC3 BBV BTA"
			style	="
				width		:100vw;
				height		:300px;
				max-height	:50vh;
				"
			>
			<close
				class		="block TC1 BC2 sensor"
				onClick		="'.$this->arrEvent['close']['strOnClick'].'"
				>
				<close
					class	="block right"
					style	="
						width		: 40px;
						color		: #fff;
						background-color: #000;
						text-align	: center;
						"
					title	="'.$this->arrObjects['title'][$objEDRO->arrReality['strLangSignal']].'"
						>
						X
	    				</close>
				HiFiIntelligentClub
			</close>
			<scrollerPart 
				class	="block scrollerY"
				style	="
					width		:100vw;
					height		:240px;
					max-height	:40vh;
					"
				>
				<ifEN>HiFi Intelligent Club - is the friend for the real people who are exist right here and now. Only for today.</ifEN>
				<ifRU>HiFi Intelligent Club - для людей, существующих сдесь и сейчас. Только сегодня.</ifRU>
				<ifRU>
					<p>
						<a name="УвеличитьЭкран"><h2>Слишком мелко?</h2></a>
						<p>
							<color style="font-size:x-large;color:green">Зажмите клавишу ctrl(Контрл) 
							и крутите колесо мышки. Станет крупнее/мельче.</color><br/>
							Приложение само подстроится под ваши настройки, удалив с экрана выступающие за край элементы.<br/>
							CTRL+Колесо мыши: Выведите на экран станцию такого размера, как вам удобно смотреть!
						</p>
						<p>
							Искренне ваш Hfic.Samin Президент HiFiIntelligentClub.
						</p>
					</p>
				</ifRU>
				<ifEN>
					<p>
						<a name="Enlarge_ctrlmouseWheel"><h2>"Too small text?"</h2></a>
						<p>
							<color style="font-size:x-large;color:green">Hold down the ctrl key and turn the 
							mouse wheel</color><br/>
							The application will adjust itself to your vision, Displaying a station of the 
							size that is convenient for you to look at!
						</p>
						<p>
							Sincerely yours Hfic. Samin President of HiFiIntelligentClub.
						</p>
					</p>
				</ifEN>
			</scrollerPart>

		</informationWindow>';




/*-[.]*/	}

/*-[E]*/private function strEvent()
		{
		//$strD='class="'.$this->arrDesign['strClass'].'" ';
		//$strD.='style="'.$this->arrDesign['strStyle'].'" ';
		return $strD;
/*-[.]*/	}
/*-[D]*/private function strDesign()
		{
		//$strD='class="'.$this->arrDesign['strClass'].'" ';
		//$strD.='style="'.$this->arrDesign['strStyle'].'" ';
		return $strD;
/*-[.]*/	}
/*-[R]*/private function strReality()
		{
		//print_r($_SESSION);
		//$this->objReality['arrRole'];
		//$this->objReality['arrLang'];
		//$strR='<ifRU>'.$this->objReality['arrLang']['ifRU'].'</ifRU>';
		//$strR.='<ifEN>'.$this->objReality['arrLang']['ifEN'].'</ifEN>';
		return $strR;
		}
/*-[O]*/private function strObject()
		{
		return $strO;
/*-[.]*/	}
	public static function strHTML($objEDRO=array())
		{
		$objOverlay=new Overlay($objEDRO);
		return $objOverlay->strHTML;
		}
	}
?>