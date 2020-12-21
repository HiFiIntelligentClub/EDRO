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
class IndicatorHiFi
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
		<HiFi
			class="rel left no-select ifNoFollowingDj TC3 BC3"
			style="
				height		:20px;
				font-size	:smaller;
				text-align	:center;
				line-height	:18px;
				"
			>
			<PictogramHelper
				id		="strListener"
				class		="block"
				>


			</PictogramHelper>
		</HiFi>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorHiFi: Declare.');
			class IndicatorHiFi // Init after signal panel//
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorHiFi: construct.');
					
				
					this.objStr			=document.getElementById('strListener');

					console.log('[..]EDRO IndicatorHiFi: construct.');
					}
				}
			console.log('[.]EDRO IndicatorHiFi: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('IndicatorHiFi');
		}
	public function strHTML()
		{
		$objIndicatorHiFi		=new IndicatorHiFi();
		return $objIndicatorHiFi->strHTML;
		}
	}
?>