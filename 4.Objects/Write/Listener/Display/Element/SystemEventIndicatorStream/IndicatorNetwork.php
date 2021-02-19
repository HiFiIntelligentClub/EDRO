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
class IndicatorNetwork
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<network
				class	="fix block BRJ layer_2_1"
				style	="
					line-height	:9px;
					margin-right	:1px;
					"
				>
				<NetSrvReady
					id="NetSrvReady"
					class="block left  BLL"
					style="	
						left		: 10px;
						height		: 10px;
						width		: 10px;
						background-color: #e3e3e3;
						text-align	: center;
						font-size	: x-small;
						"
					>
					<ifRU
						title		="Stream network avaliability status"
						class		="no-select"
						>
						N
					</ifRU>
					<ifEN
						title		="Статус доступности аудиопотока сети"
						class		="no-select"
						>
						H
					</ifEN>
				</NetSrvReady>
				<br/>
				<NetSrvPortsReady
					id="NetSrvPortsReady"
					class="block left  BLL"
					style="	
						height		: 10px;
						width		: 10px;
						background-color: #e3e3e3;
						text-align	: center;
						font-size	: x-small;
						"
					>
					<ifRU
						title		="Готовность к воспроизведению аудиопотока"
						class		="no-select"
						>
						Р
					</ifRU>
					<ifEN
						title		="Ready to play audiostream"
						class		="no-select"
						>
						R
					</ifEN>
				</NetSrvPortsReady>
			</network>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO IndicatorNetwork: Declare.');
			class IndicatorNetwork
				{
				constructor()
					{
					console.log('[Vv]EDRO IndicatorNetwork: construct.');
					this.objStrSrvReady			=document.getElementById('NetSrvReady');
					this.objStrSrvPortsReady		=document.getElementById('NetSrvPortsReady');
					console.log('[..]EDRO IndicatorNetwork: construct.');
					}
				}
			console.log('[.]EDRO IndicatorNetwork: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('IndicatorNetwork');
		}
	public function strHTML()
		{
		$objIndicatorNetwork		=new IndicatorNetwork();
		return $objIndicatorNetwork->strHTML;
		}
	}
?>