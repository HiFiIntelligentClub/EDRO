<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class StationQualityUPLink
	{
	public $strHTML='';
	public function __construct($_objKIIM, $_strData, $_arrSearch)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//$strData=$_strData;
		  // unset($_strData);
		/*foreach($_arrSearch as $strName=>$strValue)
			{
			//$arrSearch[$strName]	=нольЧИлиС($strName,'');	
			$arrSearch[$strName]	='';
			}
		unset($_arrSearch)*/
		
		$arrEvent=arrEventLink($_arrSearch, 'strName', $_strData);
		$this->strHTML=''.
		'<a 
			'.$arrEvent['strHref'].'
			'.$arrEvent['strOnClick'].'
			class="block TC3 BC3"

			style="
				width		:100%;
				height		:10px;
				text-align	:center;
				text-decoration	:none;
				font-size	:xx-small;
				line-height	:9px;
				"
			>
			>'.
		'</a>';
;
		//
//		$arrEvent=arrEventLink($arrSearch, 'name', $strData);
//		$this->strHTML=''.
/*		'<a 
			'.$arrEvent['strHref'].'
			'.$arrEvent['strOnClick'].'
			class="block"
			title=""
			style="
				color		:#000;
				background-color:#FFF;
				width		:100%;
				height		:100%;
				text-align	:center;
				text-decoration	:none;
				"
			>'.
			'+'.
		'</a>';*/
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}

	public static function strHTML($_objKIIM, $_strData, $_arrSearch)
		{
		$objStationLink=new StationQualityUPLink($_objKIIM, $_strData, $_arrSearch);
		return $objStationLink->strHTML;
		}
	}
?>