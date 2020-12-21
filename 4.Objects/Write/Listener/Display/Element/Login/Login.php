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
class LogIn
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<buttonLogin
				id	="objLoginButton"
				class	="brick left BLL BLR sensorButton"
				style	="
					text-align	:center;
					padding		:0 5px 0 5px;
					"
				>
				<ifEN style="width:100%;">LogIn</ifEN>
				<ifRU style="width:100%;">Вход</ifRU>
			</buttonLogin>
			';

		$this->strHTML.='
			<HiFiLoginForm
				id	="objLoginForm"
				class	="fix block layer_6  HL0 V99 TC1 BC1 BBV"
				onclick	="
					//this.parentNode.classList.remove(\'CutDown\');
					//this.parentNode.className+=\' Expanded\';
					"
				style	="
					width		:100vw;
					height		:100vh;
					"
				>
				<menu
					class	="block"
					style	="
						width		:100%;
						height		:40px;
						padding		:0;
						margin		:0;
						"
					>
					<topTouchBuffer
						class	="block TC2 BC2"
						style	="
							height	:10px;
							width	:100%;
							font-size	:x-small;
							"
						>
					</topTouchBuffer>
					<ifRU>Вход</ifRU>
					<ifEN>LogIn</ifEN>
					<closeButton
						class	="sensor block right TC3 BC3"
						style	="
							height		:20px;
							width		:60px;
							text-align	:center;
							line-height	:18px;
								"
						onclick	="
							this.parentNode.parentNode.parentNode.classList.remove(\'Expanded\');
							this.parentNode.parentNode.parentNode.className+=\' CutDown\';
							"
						>
						<ifRU>
							x
						</ifRU>
						<ifEN>
							x
						</ifEN>
					</closeButton>
					<bottomTouchBuffer
						class	="block TC2 BC2"
						style	="
							height		:10px;
							width		:100%;
							font-size	:x-small;
							"
						>
					</bottomTouchBuffer>
				</menu>
				<data
					class	="block scrollerY TC1 BC1"
					style	="
						width	:100%;
						height	:152px;
						"
					>
					<form 
						id		="objFormLogin"
						class		="block TC1 BC1"
						action		="/search"
						onsubmit	="return false;"
						style		="
								width		:100%;
								height		:152px;
								"
						>
					</form>
				</data>
			</HiFiLoginForm>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO LogIn: Declare.');
			class Login // Init after signal panel//
				{
				constructor()
					{
					console.log('[Vv]EDRO Login: construct.');
					
				
					this.objButton			=document.getElementById('objLoginButton');
					this.objFormBrick		=document.getElementById('objLoginForm');
					this.objForm			=document.getElementById('objFormLogin');

					console.log('[..]EDRO Login: construct.');
					}
				}
			console.log('[.]EDRO LogIn: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('LogIn');
		}
	public static function strButton()
		{
		}
	public static function strHTML()
		{
		//$obj		=new LogIn();
		//return $obj->strHTML;
		}
	}
?>