<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class ICQRType
	{
	public $strHTML;
	public function __construct($_objKIIM, $_strData, $_arrSearch='', $objEDRO=array())
		{
		$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));unset($_objKIIM);

		$arrHiFi[сПреобразовать('Low quality', 'вКоманду')]		='No HiFi!';
		$arrHiFi[сПреобразовать('HiFi beginner', 'вКоманду')]		='HiFi_[L]';
		$arrHiFi[сПреобразовать('HiFi casual', 'вКоманду')]		='HiFi_[N]';
		$arrHiFi[сПреобразовать('HiFi often', 'вКоманду')]		='HiFi_[T]';
		$arrHiFi[сПреобразовать('HiFi mustbe', 'вКоманду')]		='HiFi_[2.1]';
		//$arrHiFi[сПреобразовать('HiFi canBe', 'вКоманду')]		='HiFi_[5.1]';
		/*$arrHiFi[сПреобразовать('HiFi couldBe', 'вКоманду')]		='HiFi_[7.1]';*/
		if($objEDRO->arrReality['strLangSignal']=='RU')
			{
			$arrO['strTitle']['Enabled']='Нажмите на этот индикатор чтобы выбрать станции вещающие в формате доступном вашему оборудованию.';
			$arrO['strTitle']['Active']='Ваш текущий активный селектор качества, подходящий для вашего оборудования.';
			$arrO['strTitle']['Disabled']='Высококачественные каналы, для HiFi аппаратуры высшего класса. Мы в процессе поиска станций для этой категории. В настоящее время раздел отключен, тк тестирование каналов ICQR продолжается. Это высокоточная и продолжительная работа. Спасибо за ваше ожидание. Hfic.Samin федеративный канцлер HiFiIntelligentCLub.';
			}
		else
			{
			$arrO['strTitle']['Enabled']='Press this indicator to select quality format that are more situable for your equipement.';
			$arrO['strTitle']['Active']='Your current active selector of quality that could be supported by your equipement.';
			$arrO['strTitle']['Disabled']='High quality HiFi selector, for higher cost equipement. Searching stations for this category is in progress. Currently disabled, because of the ICQR testing procedure are continue. This is a high precision and hard work. Thank you for your waiting. Hfic.Samin the federal kanzler of HiFiIntelligentClub.';
			}

		$strHiFiType			=сПреобразовать($_strData, 'вСтроку');
					   unset($_strData);
		$arrSearch		=$_arrSearch;
				   unset($_arrSearch);
		$intX=0;
		foreach($arrHiFi as $strCmd=>$strName)
			{
			if(strpos($arrSearch['strHiFiType'], '/'.сПреобразовать($strCmd, 'вСтроку'))!==FALSE)
				{
	    			$arrEventLink=arrEventLink($arrSearch, 'strHiFiType', '', 		 false, 0);
				if($intX>1)
					{
					$this->strHTML.='
					<aaa
    					class="block left sensor BRJ TC3 BC3"
					style="
						padding		:0 5px 0 5px;
						margin-right	:5px;
						text-align	:center;
	    					text-decoration	:none;
						"
    						>'.$strName.
					'</aaa>';
					}
				else
					{
					$this->strHTML.='
					<a
					'.
					$arrEventLink['strHref'].
	    				$arrEventLink['strOnClick'].
					'
					class="block left sensor BRJ TC3 BC3"
					style="
						padding		:0 5px 0 5px;
						margin-right	:5px;
						text-align	:center;
	    					text-decoration	:none;
						"
					title="'.$arrO['strTitle']['Active'].'"
    						>'.$strName.
					'</a>';
					}
				}
			else
				{
				$arrEventLink=arrEventLink($arrSearch, 'strHiFiType', $strCmd, false, 0);
				if($intX>1)
					{
					$this->strHTML.='
		    			<aaa
					class="block left sensor BRJ  BC1"
					style="
						color		:#AAA;
						margin-right	:5px;
						text-align	:center;
						text-decoration	:none;
						"
					title="'.$arrO['strTitle']['Disabled'].'"
						>'.
						$strName.
					'</aaa>';	
					}
				else
					{
					$this->strHTML.='
		    			<a
					'.
					$arrEventLink['strHref'].
					$arrEventLink['strOnClick'].
					'
					class="block left sensor BRJ  BC1"
					style="
						color		:#000;
						margin-right	:5px;
						text-align	:center;
						text-decoration	:none;
						"
					title="'.$arrO['strTitle']['Enabled'].'"
					>'.
						$strName.
					'</a>';
					}
				}
			$intX++;
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_strData, $_arrSearch='', $objEDRO=array())
		{
		$obj=new ICQRType($_objKIIM, $_strData, $_arrSearch, $objEDRO=array());
		return $obj->strHTML;
		}
	}
?>