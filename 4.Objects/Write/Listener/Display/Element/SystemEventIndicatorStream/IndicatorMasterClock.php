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
class IndicatorMasterClock
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<masterClock
				class="block left no-select TC3 BC3 BLL BRJ"
				style="	
					width		: 28px;
					height		: 100%;
					text-align	: left;
					margin-right	: 1px;
					margin-left	: 1px;
					font-size	: x-small;
					"
				>
				<masterHeartBeat_ClockIndicator
					id	="MasterClock"
					class	="block"
					title	="Player session total operation time"
					style="
						width		: 100%;
						height		: 50%;
						line-height	: 9px;
						"
					>
					0
				</masterHeartBeat_ClockIndicator>
				<masterHeartBeat_ServerLoading
					id	="ServerLoadingTime"
					class	="block"
					title	="Total server loading time"
					style="
						width		: 100%;
						height		: 50%;
						line-height	: 9px;
						"
					>
					0
				<masterHeartBeat_ServerLoading>
			</masterClock>
			';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorMasterClock: Declare.');
			class IndicatorMasterClock
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorMasterClock: construct.');
					this.objStr			=document.getElementById('MasterClock');
					this.objStrServerLoading	=document.getElementById('ServerLoadingTime');
					console.log('[..]EDRO IndicatorMasterClock: construct.');
					}
				}
			console.log('[.]EDRO IndicatorMasterClock: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('IndicatorMasterClock');
		}
	public function strHTML()
		{
		$objIndicatorMasterClock		=new IndicatorMasterClock();
		return $objIndicatorMasterClock->strHTML;
		}
	}
?>