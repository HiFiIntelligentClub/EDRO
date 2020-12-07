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
class IndicatorLang
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<lang
				id="SignalLanguage"
				class="rel right BC3 TC3"
				style="	
					height		: 100%;
					width		: 25px;
					text-align	: center;
					margin-right	: 1px;
					font-size	: small;
					line-height	: 19px;
					"
				>
				<!--handle
					id="SignalLanguageInteractiveBlock"
					class="block abs layer_3_2"
					style="
						display	:none;
						right	:0;
						top	:0;
						width	:188px;
						height	:86px;
						"
					>'.
					/*SensorList::strHTML(array(
								"RU","EN","FR","IT","BY","UA"
								)
							).*/
				'</handle-->
				<result
					id="LanguageSignalWindow"
					>
					<ifRU
						class="no-select"
						>
						RU
					</ifRU>
					<ifEN
						class="no-select"
						>
						EN
					</ifEN>
				</result>
			</lang>
			';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorLang: Declare.');
			class IndicatorLang // Init after signal panel//
				{
				constructor()
					{
					this.objStr		=document.getElementById('LanguageSignalWindow');
					this.objStr.innerHTML	=strSignalLang;
					}
				}
			console.log('[.]EDRO IndicatorLang: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('IndicatorLang');
		}
	public function strHTML()
		{
		$objIndicatorLang		=new IndicatorLang();
		return $objIndicatorLang->strHTML;
		}
	}
?>