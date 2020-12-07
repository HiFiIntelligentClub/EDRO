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
class FormInput
	{
	public $strHTML;
	public function __construct($_objKIIM, $_arrName, $_arrParams, $_arrFirstSelectSetup=array('bIzOn'=>false), $_arrSecSelectSetup=array('bIzOn'=>false))
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$arrName['RU']	=$_arrName['_RU'];
		$arrName['EN']	=$_arrName['_EN'];
			   unset($_arrName);

		$arrParams['strValue']		=$_arrParams['_strValue'];
		$arrParams['strInputName']	=$_arrParams['_strInputName'];
		$arrParams['strInputType']	=empty($_arrParams['_strInputType'])?'text':$_arrParams['_strInputType'];
					         unset($_arrParams);

		$bIzShowFirstSelect			=$_arrFirstSelectSetup['bIzOn'];
		if($bIzShowFirstSelect)
			{
			$arrFirstSelect['strInputName']	=$_arrFirstSelectSetup['strInputName'];
			$arrFirstSelect['strValue']	=$_arrFirstSelectSetup['_strValue'];
						   unset($_arrFirstSelectSetup);
			}
		$bIzShowSecSelect			=$_arrSecSelectSetup['bIzOn'];
		if($bIzShowSecSelect)
			{
			$arrSecSelect['strInputName']	=$_arrSecSelectSetup['strInputName'];
			$arrSecSelect['strValue']	=$_arrSecSelectSetup['_strValue'];
						   unset($_arrSecSelectSetup);
			}
		$strShowEq	='';
		$strInputWidth	='68%';
		if($bIzShowFirstSelect)
			{
			$strFirstSelect='
			<select
				id=	"SearchBy'.$arrFirstSelect['strInputName'].'"
				name	="'.strtolower($arrFirstSelect['strInputName']).'"
				class	="block left tcenter     "
				style	="
					font-size	:larger;
					width		:35%;
					height		:100%;
						"
				value	="'.$arrFirstSelect['strValue'].'"
				onChange="
					objSearch.intPage=this.value;
					//objSearch._CreateUrl();
					//objDynaScreen.strURL=objSearch.strURL;
					//objEvent.strURL=objSearch.strURL;
					//objDynaScreen._Update();
					//return false;
					"
				>
				<option value="NotHiFi" selected>Not HiFi (All)</option>
				<option value="HiFiMedium">HiFi beginner</option>
				<option value="HiFiMedium">HiFi lover</option>
				<option value="HiFiTop">HiFi expert</option>
			</select>';
			}
		if($bIzShowSecSelect)
			{
			$strSecSelect='
			<select
				id=	"SearchBy'.$arrSecSelect['strInputName'].'"
				name	="'.strtolower($arrSecSelect['strInputName']).'"
				class	="block left tcenter     "
				style	="
					font-size	:larger;
					width		:35%;
					height		:100%;
						"
				value	="'.$arrSecSelect['strValue'].'"
				onChange="
					objSearch.intPage=this.value;
					//objSearch._CreateUrl();
					//objDynaScreen.strURL=objSearch.strURL;
					//objEvent.strURL=objSearch.strURL;
					//objDynaScreen._Update();
					//return false;
					"
				>
				<option value="Apple">Apple</option>
				<option value="Android">Android</option>
				<option value="Universal">Universal</option>
				<option value="Loseless">Loseless</option>
			</select>
			';	
			$strInputWidth='62%';
			
			}

		$this->strHTML='
			<input'.$arrParams['strInputName'].'
				class="rel block BBV layer_4 TC1 BC1"
				style="
					height			:35px;
					margin-top		:1px;
					"
				>
				<ifRU
					class="block left no-select BRJ"
					style="
						width		:25%;
						height		:35px;
						line-height	:33px;
						text-align	:right;
						font-size	:smaller;
						padding-right	:5px;
						"
					>
					'.$arrName['RU'].' :
				</ifRU>
				<ifEN
					class="block left no-select  BRJ"
					style="
						width		:25%;
						height		:35px;
						line-height	:33px;
						text-align	:right;
						padding-right	:5px;
						"
					>
					'.$arrName['EN'].' :
				</ifEN>'.
				$strFirstSelect.
				$strSecSelect.
				'
				<input 
					id=		"SearchBy'.$arrParams['strInputName'].'"
					size		="40"
					maxlength	="40"
					name		="'.strtolower($arrParams['strInputName']).'"
					type		="'.$arrParams['strInputType'].'"
					onchange	="
							objEvent.arrParams[\''.$arrParams['strInputName'].'\']	=encodeURIComponent(this.value);
							objEvent._UpdateURLDyn();
							"
					value		="'.сПреобразовать($arrParams['strValue'], 'вСтроку').'"
					class		="block left HR0 LTR_RTL"
					style		="
							width		:'.$strInputWidth.';
							text-align	:center;
							height		:35px;
							padding		:0;
							border		:0px;
							font-size	:x-large;
							"
						/>
				<resetButton
					class="block left  sensor TC1 HR0"
					style="
						width			:15px;
						height			:35px;
						text-align		:right;
						margin-bottom		:5px;
						line-height		:15px;
						background-color	 :white;
						"
					onclick="
						objSearch.objValueInput'.$arrParams['strInputName'].'.value	=\'\';
						objEvent.arrParams.'.$arrParams['strInputName'].'=\'\';
						this.previousElementSibling.focus();
						objEvent._UpdateURLDyn();
						";
					>
					<ifRU	title="Сбросить"
						>
						x
					</ifRU>
					<ifEN
						title="Reset"
						>
						x
					</ifEN>
				</resetButton>

			</input'.$arrParams['strInputName'].'>
			';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_arrName, $_arrParams, $_arrFirstSelectSetup=array('bIzOn'=>false), $_arrSecSelectSetup=array('bIzOn'=>false))
		{
		$objFormInput=new FormInput($_objKIIM, $_arrName, $_arrParams, $_arrFormSetup);
		return $objFormInput->strHTML;
		}
	}
?>