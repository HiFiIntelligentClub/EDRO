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
			'strLink'		=>'',
			'strOnClick'		=>'',
		);
	private $arrDesign	=
		array(
			'strClass'		=>'',
			'strStyle'		=>'',
			'intLayer'		=>1,
		);
	private $objReality	=
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
			);
	private $arrObjects	=array(
			'strClass'		=>'a',
			'strOpen'		=>'>',
			'strClose'		=>'<',
		);

	public function __construct($_objKIIM, $_strStyle, $arrParams,  $_intLayer)
		{
		$this->arrEvent	=
		array(
			'strLink'		=>'"/search'.strLinkGroove($this->arrEvent['arrParams'], 'strStyle', '').'"',
			'strOnClick'		=>
<<<oo2oo
					//objSearch.objValueInputStyle.value='';
					objEvent.arrParams.strStyle='';
					objEvent._UpdateURLDyn();
					return false;
oo2oo,
			'arrParams'		=>$arrParams,
			);
		$this->arrDesign=
		array(
			'strClass'		=>'block abs layer_'.($_intLayer+1),
			'strStyle'		=>
<<<oo2oo
					top		: 0;
					left		: 0;
					width		: 100%;
					height		: 100%;
					text-align	: center;
					color		: #fff;
					background-color: #000;
oo2oo,
			);
		$this->objReality=
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
			);
		$this->arrObjects=
		array(
			'strClass'		=>'a',
			'strOpen'		=>'<',
			'strClose'		=>'>',
			);

		if(сДляСравнения($arrParams['strStyle'])==сДляСравнения($_strStyle))
			{
			$this->objReality['arrLang']['ifEN']	=$_strStyle;
			$this->objReality['arrLang']['ifRU']	=$_strStyle;
			$this->strHTML				=$this->strObject();
			}
		}
/*-[E]*/private function strEvent()
		{
		$strE='href="'.$this->arrEvent['strLink'].'" ';
		$strE.='onClick="'.$this->arrEvent['strOnClick'].'" ';
		return $strE;
/*-[.]*/	}
/*-[D]*/private function strDesign()
		{
		$strD='class="'.$this->arrDesign['strClass'].'" ';
		$strD.='style="'.$this->arrDesign['strStyle'].'" ';
		return $strD;
/*-[.]*/	}
/*-[R]*/private function strReality()
		{
		//print_r($_SESSION);
		//$this->objReality['arrRole'];
		//$this->objReality['arrLang'];
		$strR='<ifRU>'.$this->objReality['arrLang']['ifRU'].'</ifRU>';
		$strR.='<ifEN>'.$this->objReality['arrLang']['ifEN'].'</ifEN>';
		return $strR;
		}
/*-[O]*/private function strObject()
		{
		$strE=$this->strEvent();
		$strD=$this->strDesign();
		$strR=$this->strReality();
		$strO=$this->arrObjects['strOpen'].$this->arrObjects['strClass'].$this->arrObjects['strClose']."\n";
		$strO.=$strE.$strD.$strR;
		$strO.=$this->arrObjects['strOpen'].'/'.$this->arrObjects['strClass'].$this->arrObjects['strClose']."\n";
		return $strO;
/*-[.]*/	}
	public static function strHTML($_objKIIM, $_strStyle, $arrParams, $_intLayer)
		{
		$objOverlay=new Overlay($_objKIIM, $_strStyle, $arrParams, $_intLayer);
		return $objOverlay->strHTML;
		}
	}
?>