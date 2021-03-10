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
	public function __construct($_arrValues=array(), $_arrReality) //$_arrValues 'name' 'style' 'bitrate' 'codec'
		{
		$strSearchName		=$_arrValues['strName'];
		//if($_arrValues['strGenre']!==''&&isset($_arrValues['strStyle'])&&$strStyle!=''&&$strStyle!='undefined')
		//	{
		//	$strSearchGenre		=$_arrValues['strStyle'];
		//	}
		//else
		//	{
			$strSearchGenre		=$_arrValues['strGenre'];
		//	}
		
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

				'strInputValue'		=>  $strSearchName,
				'strInputType'		=>  'text',
				'strInputName'		=>  'strName',
				'intInputSize'		=>  25,
				'intInputMaxLength'	=>  250,
				'intInputWidth'		=>  50,
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

				'strInputValue'		=> $strSearchGenre,
				'strInputType'		=> 'text',
				'strInputName'		=> 'strGenre',
				'intInputSize'		=>  15,
				'intInputMaxLength'	=>  20,
				'intInputWidth'		=>  40,
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
					class	="fix brick HL0 HV99 TC1 BC0 BBV L2" 

					style	="
						width		:100vw;
						min-width	:320px;
						"
					>
					<form 
						id		="formStationSearch"
						class		="brick TC1 BC0"
						action		="/search"
						onsubmit	="return false;"
						style		="
								width	:100%;
								"
						>
						<searchByGenre
						class	="fix brick left L0 V99 no-select layer_2_2"
						style	="
							color	:#4c4c4c;
							left	:0px;
							"
							>
							<ifEN>[=]Search by genre</ifEN>
							<ifRU>[=]Поиск по жанру:</ifRU>
						</searchByGenre>
						<searchStationName
						class	="fix brick left L0 V99 no-select layer_2_2"
						style	="
							color	:#4c4c4c;
							left	:40%;
							"
							>
							<ifEN>[+]Search by name:</ifEN>
							<ifRU>[+]Поиск по имени:</ifRU>
						</searchStationName>
						<searchInputs
							class	="brick left"
							style	="
								width		:100%;
								margin-top	:5px;
								"
							>
							'.
							FormInput::strHtml($arrInputGenre).
							FormInput::strHtml($arrInputName).
							'<closeButton
								class="fix sensor block TC2 BC2 Lx2 V99 HR0 layer_2_3"
								style="
									width		:10%;
									text-align	:center;
									"
	    							onclick="
									this.parentNode.parentNode.parentNode.parentNode.classList.remove(\'Expanded\');
									this.parentNode.parentNode.parentNode.parentNode.parentNode.className+=\' CutDown\';
									"
								>
								<ifRU
									class="brick"
									style="width:100%;height:100%;"
									title="Закрыть форму и отобразить результаты поиска. Результаты поиска можно вывсти и не закрывая форму, просто нажав на клавишу enter, на клавиатуре по окончанию ввода."
									>x
								</ifRU>
								<ifEN
									class="brick"
									style="width:100%;height:100%;"
									title="Close search form and display search results. You can display search results without closing this search form, by clicking enter button on your keyboard."
									>x
								</ifEN>
							</closeButton>
						</searchInputs>
						<!--bottomTouchBuffer
							class	="fix block TC2 BC2 V97 L0"
							style	="
								width		:100%;
								"
							>
							<ifEN>Your IP:</ifEN><ifRU>Ваш IP:</ifRU>
							'.$_SERVER['REMOTE_ADDR'].'
						</bottomTouchBuffer-->
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
		}
	private function strObjectInit()
		{
		return Event::strOConstruct('Search');
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
	public static function strHTML($_arrValues=array(), $_arrReality)
		{
		//$arrData['_strName']=$_objData->strName;
		$obj=new StationSearchBlock($_arrValues, $_arrReality);
		return $obj->strHTML;
		}
	}
?>