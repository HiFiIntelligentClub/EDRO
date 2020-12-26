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
	public function __construct($_arrReality)
		{//$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));unset($_objKIIM);


		$strLang				=$_arrReality['strLang'];
		$arrReality['strDisplayName']		=$_arrReality['arrName'][$strLang];
		$arrReality['strInputName']		=$_arrReality['arrSetup']['strInputName'];
		$arrReality['strInputValue']		=$_arrReality['arrSetup']['strInputValue'];
		$arrReality['strInputType']		=$_arrReality['arrSetup']['strInputType'];
		$arrReality['intInputSize']		=$_arrReality['arrSetup']['intInputSize'];
		$arrReality['intInputMaxLength']	=$_arrReality['arrSetup']['intInputMaxLength'];
		$arrReality['strInputWidth']		=$_arrReality['arrSetup']['strInputWidth'];
					         unset($_arrReality);
		//print_r($arrReality);
		//exit;



		$this->strHTML='
			<input'.$arrReality['strInputName'].'
				class="brick left"
				style="

					width			:'.$arrReality['strInputWidth'].'
					"
				>'.

				//$strFirstSelect.
				//$strSecSelect.
				'
				<input 
					id=		"SearchBy'.$arrReality['strInputName'].'"
					size		="'.$arrReality['intInputSize'].'"
					maxlength	="'.$arrReality['intInputMaxLength'].'"
					name		="'.strtolower($arrReality['strInputName']).'"
					type		="'.$arrReality['strInputType'].'"
					onchange	="
							objEvent.arrReality[\''.$arrReality['strInputName'].'\']	=encodeURIComponent(this.value);
							objEvent._UpdateURLDyn();
							"
					value		="'.сПреобразовать($arrReality['strInputValue'], 'вСтроку').'"
					placeholder	="'.$arrReality['strDisplayName'].'"
					style		="
							width		:70%;
							border		:0;
							outline		:0;
							height		:30px;
							font-size	:large;
							text-align	:center;
							"
					class		="brick left HR0 LTR_RTL"
					/>
				<resetButton
					class="block left  sensor TC1 BC1"
					style="
						width			:10%;
						height			:40px;
						text-align		:center;
						line-height		:99%;
						background-color	:white;
						"
					onclick="
						objSearch.objValueInput'.$arrReality['strInputName'].'.value	=\'\';
						objEvent.arrReality.'.$arrReality['strInputName'].'=\'\';
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

			</input'.$arrReality['strInputName'].'>
			';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_arrReality)
		{
		$objFormInput=new FormInput($_arrReality);
		return $objFormInput->strHTML;
		}
	}
?>