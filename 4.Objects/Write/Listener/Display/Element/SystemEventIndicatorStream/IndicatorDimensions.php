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
/*
class IndicatorDimensionsDesign
	{
	public $strEDRO		='';
	public function __construct()
		{
		$this->_Event();
		$this->_Design();
		$this->_Reality();
		$this->_ObjectHTML()
		
		}
	private 	function _Event()
		{
		}
	private  	function _Design()
		{
		}
	private  	function _Reality()
		{
		}
	private  	function _ObjectHTML()
		{
		}
	public 	staic	function strHTML()
		{
		}
	}

--.---------------------------------------------------------------------------------
1.| EDRO Разложение, запись в 1 строку:
--|---------------------------------------------------------------------------------
  | EDRO	=objName[->E(),->D(),->R(),->O()]
  |
--|---------------------------------------------------------------------------------
2.| EDRO Разложение, запись в 4 строки:
--|---------------------------------------------------------------------------------
  |[E]:=objName->strEvent()
  |[D]:=objName->strDesign()
  |[R]:=objName->strReality()
  |[O]:=objName->strObjects()
  |
*/

class IndicatorDimensions
	{
	public $strHTML ='';
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
		//$this->_Event();
		$this->_Design();
		//$this->_Reality();
		//$this->_Object();
		//$this->strEDRO		='';
		}
	private function _Event()
		{

		}
	private function _Design()
		{
		$this->strHTML='
			<dimensionsDesign
				id="designDimensions"
				class="block left no-select TC1 BC1"
				style="	
					height		: 100%;
					text-align	: center;
					margin-right	: 1px;
					font-size	: x-small;
					line-height	: 9px;
					"
				>
				xxx*xxxpx<br/>x:x:x
			</dimensionsDesign>
		';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function _Reality()
		{
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorDimensions: Declare.');
			class IndicatorDimensions // Init after signal panel//
				{
				constructor()
					{
					console.log('[Vv]EDRO.IndicatorDimensions: construct.');
					this.objStr		=document.getElementById('designDimensions');
					console.log('[..]EDRO.IndicatorDimensions: construct.');
					}
				}
			console.log('[.]EDRO IndicatorDimensions: Declare().');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('IndicatorDimensions');
		}
	public static function strHTML()
		{
		$objIndicatorDimensions		=new IndicatorDimensions();
		return $objIndicatorDimensions->strHTML;
		}
	}
?>