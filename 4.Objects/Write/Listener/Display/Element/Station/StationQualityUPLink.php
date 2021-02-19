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
	public function __construct($_objKIIM, $_strData, $_arrSearch, $objEDRO)
		{
		//$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//unset($_objKIIM);
		//$strData=$_strData;
		  // unset($_strData);
		/*foreach($_arrSearch as $strName=>$strValue)
			{
			//$arrSearch[$strName]	=нольЧИлиС($strName,'');	
			$arrSearch[$strName]	='';
			}
		unset($_arrSearch)*/
		if($objEDRO->arrReality['strLangSignal']=='RU')
			{
			$strO='title="Записать значение имени станции в поиск по имени станции"';
			}
		else
			{
			$strO='title="Write station name to current search by name value."';
			}
		
		$arrEvent=arrEventLink($_arrSearch, 'strName', $_strData);
		$this->strHTML=''.
		'<a 
			'.$arrEvent['strHref'].'
			'.$arrEvent['strOnClick'].'
			class="block TC3 BC3 halfLine"
			'.$strO.'
			style="
				width		:100%;
				text-align	:center;
				text-decoration	:none;
				"
			>
			>'.
		'</a>';
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
		//KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}

	public static function strHTML($_objKIIM, $_strData, $_arrSearch, $objEDRO=array())
		{
		$objStationLink=new StationQualityUPLink($_objKIIM, $_strData, $_arrSearch, $objEDRO);
		return $objStationLink->strHTML;
		}
	}
?>