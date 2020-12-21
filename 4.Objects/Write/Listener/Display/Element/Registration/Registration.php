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
class Registration
	{
	public $strHTML		='';
	public function __construct()
		{
		$this->strHTML='
			<buttonRegister
				id	="objRegisterButton"
				class	="brick left BLL BLR sensorButton"
				style	="
					text-align	:center;
					padding		:0 5px 0 5px;
					"
				>
				<ifEN style="width:100%;">Register</ifEN>
				<ifRU style="width:100%;">Регистрация</ifRU>
			</buttonRegister>
			';

		$this->strHTML.='
			<HiFiRegistrationForm
				id	="objRegisterForm"
				class	="fix block layer_6  HL0 V99 TC1 BC1 BBV"
				onclick	="
					//this.parentNode.classList.remove(\'CutDown\');
					//this.parentNode.className+=\' Expanded\';
					"
				style	="
					height		:150px;
					width		:100vw;
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
					<ifRU>Регистрация</ifRU>
					<ifEN>REgistration</ifEN>
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
						id		="objFormRegistration"
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
			</HiFiRegistrationForm>';
		$this->strHTML.=$this->strObjectDeclare();
		$this->strHTML.=$this->strObjectInit();
		}
	private function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO Register: Declare.');
			class Registration // Init after signal panel//
				{
				constructor()
					{
					console.log('[Vv]EDRO Register: construct.');
					
				
					this.objButton			=document.getElementById('objRegisterButton');
					this.objFormBrick		=document.getElementById('objRegisterForm');
					this.objForm			=document.getElementById('objFormRegistration');

					console.log('[..]EDRO Register: construct.');
					}
				}
			console.log('[.]EDRO Register: Declare.');
		</script>
oo2oo;
		return $str;
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('Registration');
		}
	public function strHTML()
		{
		$obj		=new Registration();
		return $obj->strHTML;
		}
	}
?>