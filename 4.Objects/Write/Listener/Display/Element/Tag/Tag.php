<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class Tag
	{
	public 		$strHTML;
	private 	$strReality;
	private		$strDesignTag;
	private		$strParamName;
	private		$arrParams;
	private 	$strLayer;
	public function __construct($_objKIIM, $_strStyle, $arrParams, $_strParamName='strStyle', $_intLayer='11')
		{
		$this->arrParams	=$arrParams;
		$this->intLayer		=$_intLayer;
		$this->strParamName	=$_strParamName;
		//echo $_strStyle;
		$мФразы			=мСобратьФразы($_strStyle);
		foreach($мФразы as $сФраза)
			{
			$this->strReality	=$сФраза;
			//echo '<br/>';
			$this->strHTML		.=$this->strObject();
			}
/*-[.]*/	}
/*-[E]*/private function strEvent()
		{
		//echo 'strEvent';
		//echo '<br/>';
		$strE	='';
		if(сДляСравнения($this->arrParams[$this->strParamName])==сДляСравнения($this->strReality))
			{
			$arrEventLink	=arrEventLink($this->arrParams, $this->strParamName, '', 		false, 0);
			$strE	.=$arrEventLink['strHref'];
			$strE	.=$arrEventLink['strOnClick'];
			}
		else
			{
			$arrEventLink	=arrEventLink($this->arrParams, $this->strParamName, $this->strReality(), false, 0);
			$strE	.=$arrEventLink['strHref'];
			$strE	.=$arrEventLink['strOnClick'];
			}
		return $strE;
/*-[.]*/	}
/*-[D]*/private function strDesign()
		{
		
		if(сДляСравнения($this->arrParams[$this->strParamName])==сДляСравнения($this->strReality))
			{
			$strD	=' '.'class	="sensor block rel left BC2 TC2 BRJ2 BBV layer_'.$this->intLayer.'"'.' ';
			$strD	.=' '.'style	="
				padding-left	:5px;
				padding-right	:5px;
				text-align	:center;
				font-size	:medium;
				height		:19px;
				text-decoration	:none;
				"'.' ';
			}
		else
			{
			$strD	=' '.'class	="sensor block rel left BRJ2 BBV layer_'.$this->intLayer.'"'.' ';
			$strD	.=' '.'style	="
				color		:#4d4d4d;
				background-color:#e1dfdf;
				padding-left	:5px;
				padding-right	:5px;
				text-align	:center;
				font-size	:medium;
				height		:19px;
				text-decoration	:none;
				"'.' ';
			}
		return $strD;
/*-[.]*/	}
/*-[R]*/private function strReality()
		{
		$strR=сПреобразовать($this->strReality, 'вСтроку');
		//$strR='Reality';
		return $strR;
		}
/*-[O]*/private function strObject()
		{
		$strOpen="<";
		$strClose=">";
		$strO=$strOpen.'a ';
				$strO.=$this->strEvent();
				$strO.=$this->strDesign();
			$strO.=$strClose;
			$strO.=$this->strReality();
		$strO.=$strOpen.'/'.'a'.$strClose;
		return $strO;
/*-[.]*/	}
/*-[R]*/public static function strHTML($_objKIIM, $_strStyle, $arrParams, $strParamName='strStyle', $_intLayer='11')
		{
		$obj=new Tag($_objKIIM, $_strStyle, $arrParams, $strParamName, $_intLayer);
		return $obj->strHTML;
/*-[.]*/	}
	}
?>