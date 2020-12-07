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
class IndicatorRole
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<role
				id	="SignalRole"
				class	="block right BRJ BLL BC3 TC3"
				style	="	
					height		: 100%;
					/*width		: 60px;*/
					padding-right	: 4px;
					padding-left	: 4px;
					font-size	: smaller;
					text-align	: center;
					line-height	: 18px;
					"
				>
				<ifRU
					class="no-select"
					>
					Роль
				</ifRU>
				<ifEN
					class="no-select"
					>
					Role
				</ifEN>
			</role>
		';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorRole: Declare.');
			class IndicatorRole
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorRole: construct.');
					this.objStr			=document.getElementById('SignalRole');
					this.objStr.innerHTML		=strSignalRole;
					console.log('[..]EDRO IndicatorRole: construct.');
					}
				}
			console.log('[.]EDRO IndicatorRole: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('IndicatorRole');
		}

	public function strHTML()
		{
		$objIndicatorRole		=new IndicatorRole();
		return $objIndicatorRole->strHTML;
		}
	}
?>