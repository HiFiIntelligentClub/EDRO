<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class ICQRType
	{
	public $strHTML;
	public function __construct($_objKIIM, $_strData, $_arrSearch='')
		{
		$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));unset($_objKIIM);

		$arrHiFi[сПреобразовать('Low quality', 'вКоманду')]		='No HiFi!';
		$arrHiFi[сПреобразовать('HiFi beginner', 'вКоманду')]		='HiFi_[L]';
		$arrHiFi[сПреобразовать('HiFi casual', 'вКоманду')]		='HiFi_[N]';
		$arrHiFi[сПреобразовать('HiFi often', 'вКоманду')]		='HiFi_[T]';
		$arrHiFi[сПреобразовать('HiFi mustbe', 'вКоманду')]		='HiFi_[2.1]';
		//$arrHiFi[сПреобразовать('HiFi canBe', 'вКоманду')]		='HiFi_[5.1]';
		/*$arrHiFi[сПреобразовать('HiFi couldBe', 'вКоманду')]		='HiFi_[7.1]';*/

		$strHiFiType			=сПреобразовать($_strData, 'вСтроку');
					   unset($_strData);
		$arrSearch		=$_arrSearch;
				   unset($_arrSearch);
		foreach($arrHiFi as $strCmd=>$strName)
			{
			if(strpos($arrSearch['strHiFiType'], '/'.сПреобразовать($strCmd, 'вСтроку'))!==FALSE)
				{
	    			$arrEventLink=arrEventLink($arrSearch, 'strHiFiType', '', 		 false, 0);
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
    					>'.$strName.
				'</a>';
				}
			else
				{
				$arrEventLink=arrEventLink($arrSearch, 'strHiFiType', $strCmd, false, 0);
				$this->strHTML.='
	    			<a
					'.
					$arrEventLink['strHref'].
					$arrEventLink['strOnClick'].
					'
					class="block left sensor BRJ  BC1"
					style="
						color		:#CCC;
						margin-right	:5px;
						text-align	:center;
						text-decoration	:none;
						"
					>'.
					$strName.
				'</a>';
				}
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_strData, $_arrSearch='')
		{
		$obj=new ICQRType($_objKIIM, $_strData, $_arrSearch);
		return $obj->strHTML;
		}
	}
?>