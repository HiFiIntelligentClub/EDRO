<?php
                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
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
class StationSearchBlock  // feat Мира Стрельцова. 07.08.2020 Шеорше ля фам, господа конкуренты. Hfic.Samin -> PreReleased at 21-21-2021
	{
	private $arr;
	public $strHTML;
	private $strLogo;
	private $strName;
	private $strFile;
	private $strType;
	private $strAudio;
	public function __construct($_objKIIM, $_arrValues=array(), $_arrReality) //$_arrValues 'name' 'style' 'bitrate' 'codec'
		{$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));unset($_objKIIM);

		$strSearchName		=$_arrValues['strName'];
		$strSearchStyle		=$_arrValues['strStyle'];
				   unset($_arrValues);
		$strLang		=$_arrReality['strLangSignal'];
				   unset($_arrReality);
		$arrInputName 		=
			array(
			'strLang'	=> $strLang,
			'arrName'	=>
				array(
				'RU'=>'Название',
				'EN'=>'Name'
				), 
			'arrSetup'	=>
				array(

				'strInputValue'		=> $strSearchName,
				'strInputType'		=> 'text',
				'strInputName'		=> 'strName',
				'intInputSize'		=>  25,
				'intInputMaxLength'	=>  250,
				'strInputWidth'		=> '40%',
				)
			);
		$arrInputGenre 		=
			array(
			'strLang'	=>$strLang,
			'arrName'	=>
				array(
				'RU'=>'Жанр',
				'EN'=>'Genre'
				), 
			'arrSetup'	=>
				array(

				'strInputValue'		=> $strSearchStyle,
				'strInputType'		=> 'text',
				'strInputName'		=> 'strGenre',
				'intInputSize'		=>  15,
				'intInputMaxLength'	=>  20,
				'strInputWidth'		=> '40%',
				)
			);

		$this->strHTML	='
			<hficSearch
				class="fix HR0 V99 layer_5 default"
				>
				<ifCutDown
					class	="block right sensor TC1 BC1 no-select"
					onclick	="
						this.parentNode.classList.remove(\'CutDown\');
						this.parentNode.className+=\' Expanded\';
						objSearch.objValueInputstrGenre.focus();
						"
					style	="
						text-align	:center;
						line-height	:36px;
						height		:40px;
						width		:80px;
						"
					>
					<ifRU>
						ПОИСК
					</ifRU>
					<ifEN>
						SEARCH
					</ifEN>
				</ifCutDown>
				<ifExpanded
					class	="fix HL0 HV99 TC1 BC1 BBV" 

					style	="
						height		:59px;
						width		:100vw;
						min-width	:320px;
						"
					>
					<form 
						id		="formStationSearch"
						class		="block TC1 BC1"
						action		="/search"
						onsubmit	="return false;"
						style		="
								width	:100%;
								"
						>
						<topTouchBuffer
							class	="block TC2 BC2"
							style	="
								height		:10px;
								width		:100%;
								font-size	:x-small;
								line-height	:9px;
								"
							>
							<genre
								class	="block left"
								style	="width		:40%"
								>[=]
								<ifEN>Search by genre</ifEN>
								<ifRU>Поиск станций по жанру:</ifRU>
							</genre>
							<genre
								class	="block left"
								style	="
									width		:50%
									"
									>[+]
								<ifEN>Search by name:</ifEN>
								<ifRU>Поиск станций по имени:</ifRU>
							</genre>
						</topTouchBuffer>'.
						FormInput::strHtml($arrInputGenre).
						FormInput::strHtml($arrInputName).
						'<closeButton
							class="sensor block right TC3 BC3"
							style="
								height		:39px;
								width		:10%;
								text-align	:center;
								line-height	:36px;
								"
							onclick="
								this.parentNode.parentNode.parentNode.classList.remove(\'Expanded\');
								this.parentNode.parentNode.parentNode.parentNode.className+=\' CutDown\';
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
							class	="abs block TC2 BC2"
							style	="
								bottom		:0;
								height		:10px;
								width		:100%;
								font-size	:x-small;
								"
							>
							<ifEN>Your IP:</ifEN><ifRU>Ваш IP:</ifRU>
							'.$_SERVER['REMOTE_ADDR'].'
						</bottomTouchBuffer>
					</form>';
				//<data
				//	class="block scrollerY TC1 BC1"
				///	style="
				//		width	:100%;
				//		height	:152px;
				//		"
					//	>
					//		//FormInput::strHtml($objKIIM, array('RU'=>'РФИд','EN'=>'RFId'), $strSearchId).
					//		$this->strHTML	.=FileRead::str($objKIIM,'/home/EDRO/4.Objects/Read/Cloud/Disk/Pages/SearchBlock.php');
					//		$this->strHTML	.='<hr/>';
					//		foreach($_SERVER as $strName => $strValue)
					//			{
					//			$this->strHTML	.='<srv class="block">'.$strName.' - '.$strValue.'</srv>';
					///			}
					//		$this->strHTML	.='<hr/>';
					//	$this->strHTML	.='
					//	</questions>';

					$this->strHTML	.='
				</ifExpanded>
				'.
				$this->strObjectInit();
				$this->strHTML	.=
			'</hficSearch>
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
				this.objValueInputstrGenre	=document.getElementById('SearchBystrGenre');
				this.strValueInputstrGenre	=this.objValueInputstrGenre.value;
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
	public static function strHTML($_objKIIM, $_arrValues=array(), $_arrReality)
		{
		//$arrData['_strName']=$_objData->strName;
		$obj=new StationSearchBlock($_objKIIM, $_arrValues, $_arrReality);
		return $obj->strHTML;
		}
	}
?>