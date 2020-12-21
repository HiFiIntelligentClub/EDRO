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
class StationSearchBlock  // feat Мира Стрельцова. 07.08.2020 Шеорше ля фам, господа конкуренты. Hfic.Samin
	{
	private $arr;
	public $strHTML;
	private $strLogo;
	private $strName;
	private $strFile;
	private $strType;
	private $strAudio;
	public function __construct($_objKIIM, $_arrValues=array()) //$_arrValues 'name' 'style' 'bitrate' 'codec'
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
			$strSearchName		=$_arrValues['strName'];
			$strSearchStyle		=$_arrValues['strStyle'];
			$strSearchBitrate	=($_arrValues['intBitrate']==0)?'':$_arrValues['intBitrate'];
			$strSearchCodec		=$_arrValues['strCodec'];
			unset($_arrValues);

		$this->strHTML	='
			<hficMenu
				class="fix HR0 V99 layer_4 default"
				>
				<ifCutDown
					class="fix block layer_4  right sensor TC1 BC1 no-select"
					onclick="
						this.parentNode.classList.remove(\'CutDown\');
						this.parentNode.className+=\' Expanded\';
						"
					style="
						text-align	:center;
						line-height	:36px;
						height		:38px;
						width		:60px;
						"
					>
					<ifRU>
						МЕНЮ
					</ifRU>
					<ifEN>
						MENU
					</ifEN>
				</ifCutDown>
				<ifExpanded
					class="fix block layer_4  HL0 HV99 TC1 BC1 BBV"

					style="
						height		:150px;
						width		:100vw;
						"
					>
					<menu
						class="block"
						style="
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
							'.
							//$_SERVER['HTTP_X_FORWARDED_FOR'].
							'
						</topTouchBuffer>
						//Menu
						<closeButton
							class="sensor block right TC3 BC3"
							style="
								height		:20px;
								width		:60px;
								text-align	:center;
								line-height	:18px;
								"
							onclick="
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
							<ifEN>Your IP:</ifEN><ifRU>Ваш IP:</ifRU>
							'.$_SERVER['REMOTE_ADDR'].'
						</bottomTouchBuffer>
					</menu>
					<data
						class="block scrollerY TC1 BC1"
						style="
							width	:100%;
							height	:152px;
							"
						>
						<form 
							id		="formStationSearch"
							class		="block TC1 BC1"
							action		="/search"
							onsubmit	="return false;"
							style		="
									width		:100%;
									height		:152px;
									"
								    
							>'.
							//FormInput::strHtml($objKIIM, array('RU'=>'РФИд','EN'=>'RFId'), $strSearchId).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Название',
									'_EN'=>'Name'
								), array(
									'_strValue'	=>$strSearchName,
									'_strInputType'	=>'text',
									'_strInputName'	=>'strName'
								)).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Стиль',
									'_EN'=>'Style'
								), array(
									'_strValue'	=>$strSearchStyle,
									'_strInputType'	=>'text',
									'_strInputName'	=>'strStyle'
								)).
							FormInput::strHtml($objKIIM, array(
									'_RU'=>'Ограничения',
									'_EN'=>'Limiting'
								), array(
									'_strValue'	=>$strSearchBitrate,
									'_strInputType'	=>'select',
									'_strInputName'	=>'intBitrate',
									'_arrInput'	=>array()
								), array(
									'bIzOn'		=>true,
									'_strInputName'	=>'strCodec',
									'_strValue'	=>$strSearchCodec,
								
								), array(
									'bIzOn'		=>true,
									'_strValue'	=>$strSearchBitrate,
									'_strInputType'	=>'number',
									'_strInputName'	=>'intBitrate'
									)
								).
							/*FormInput::strHtml($objKIIM, array(
									'_RU'=>'Кодек',
									'_EN'=>'Codec'
								), array(
									'_strValue'	=>$strSearchCodec,
									'_strInputType'	=>'text',
									'_strInputName'	=>'strCodec'
								), array(
									'bIzEq'		=>false
								
								)).*/
							'</form>';
							$this->strHTML	.=FileRead::str($objKIIM,'/home/EDRO/4.Objects/Read/Cloud/Disk/Pages/SearchBlock.php');
							$this->strHTML	.='<hr/>';
							foreach($_SERVER as $strName => $strValue)
								{
								$this->strHTML	.='<srv class="block">'.$strName.' - '.$strValue.'</srv>';
								}
							$this->strHTML	.='<hr/>';
						$this->strHTML	.='
						</questions>';

						$this->strHTML	.='
						<bottomTouchBuffer
						class	="block TC1 BC1"
							style	="
							height	:200px;
							width	:100%;
								"
							>
						</bottomTouchBuffer>
					</data>
				</ifExpanded>
				'.
				$this->strObjectInit();

				$this->strHTML	.=
			'</hficMenu>
			';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function strObjectInit()
		{
		return EDRO::strObjInit('Search');
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
		console.log('[V]EDRO.Object.SearchForm: Declare');
		class Search //Init in  StationSearchBlock.php
			{
			constructor()
				{
				console.log('[Vv]EDRO.Object.SearchForm: Construct');
				this.objStationSearch		=document.getElementById('formStationSearch');
				this.objValueInputstrName	=document.getElementById('SearchBystrName');
				this.strValueInputstrName	=this.objValueInputstrName.value;
				this.objValueInputstrStyle	=document.getElementById('SearchBystrStyle');
				this.strValueInputstrStyle	=this.objValueInputstrStyle.value;
				//this.objValueInputintBitrate	=document.getElementById('SearchByintBitrate');
				//this.strValueInputintBitrate	=this.objValueInputintBitrate.value;
				//this.objValueInputstrCodec	=document.getElementById('SearchBystrCodec');
				//this.strValueInputstrCodec	=this.objValueInputstrCodec.value;
				this.bIzHistory			=true;
				console.log('[..]EDRO.Object.SearchForm: Construct');
				}
			}
		console.log('[.]EDRO.Object.SearchForm: Declare');
		</script>
oo2oo;
		return $str;
		}
	public static function strHTML($_objKIIM, $_arrValues=array())
		{
		//$arrData['_strName']=$_objData->strName;
		$obj=new StationSearchBlock($_objKIIM, $_arrValues);
		return $obj->strHTML;
		}
	}
?>