<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class StationLink
	{
	public $strHTML='';
	public function __construct($_objKIIM, $_strData, $_arrSearch)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$strData=$_strData;
		   unset($_strData);
		$arrSearch=$_arrSearch;
		     unset($_arrSearch);
		$arrEvent=arrEventLink($arrSearch, 'name', $strData);
		$this->strHTML=''.
		'<a 
			'.$arrEvent['strHref'].'
			'.$arrEvent['strOnClick'].'
			class="block"

			style="
				color		:#000;
				background-color:#FFF;
				width		:100%;
				height		:100%;
				text-align	:center;
				text-decoration	:none;
				"
			>
			>'.
		'</a>';
		//	onclick="
		//		objSearch.strValueInputName=\''.$strData.'\';
		//		objSearch._ActualizeInputFields();
		//		objDynaScreen.strURL=this.href;
		//		objEvent.strURL=this.href;
		//		objDynaScreen._Update();
		//		return false;
		//		"
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}

	public static function strHTML($_objKIIM, $_strData, $_arrSearch)
		{
		$objStationLink=new StationLink($_objKIIM, $_strData, $_arrSearch);

		return $objStationLink->strHTML;
		}
	}
?>