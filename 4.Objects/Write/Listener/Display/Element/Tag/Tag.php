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
	public function __construct($_objKIIM, $_strStyle, $arrParams, $_strParamName='strStyle', $_intLayer='11', $objEDRO=array())
		{
		$this->arrParams	=$arrParams;
		$this->intLayer		=$_intLayer;
		$this->strParamName	=$_strParamName;
		$this->strReality	=$_strStyle;
		$this->strLanguage	=$objEDRO->arrReality['strLangSignal'];
		$strOpen="<";
		$strClose=">";

		$str=$strOpen.'a '."\n";
				$str.=$this->strEvent()."\n";
				$str.=$this->strDesign()."\n";
				$str.=$this->strObject()."\n";
			$str.="\t".$strClose;
			$str.="\t".$this->strReality()."\n";
		$str.=$strOpen.'/'.'a'.$strClose."\n";
		$this->strHTML		.=$str;
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
			$strD	=' '.'class	="sensor block rel left BC2 TC2 BLL2 BTA2 layer_'.$this->intLayer.'"'.' ';
			$strD	.=' '.'style	="
				padding-left	:5px;
				padding-right	:5px;
				text-align	:center;
				font-size	:medium;
				height		:19px;
				line-height	:18px;
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
		if($this->strLanguage=='RU')
			{
			$strO='title="Нажмите для того чтобы передать поисковой машине сигнал, искать все станции с этим жанром"';
			}
		else
			{
			$strO='title="Press this button  to search all stations with this genre"';
			}
		return $strO;
/*-[.]*/	}
/*-[R]*/public static function strHTML($_objKIIM, $_strStyle, $arrParams, $strParamName='strStyle', $_intLayer='11', $objEDRO=array())
		{
		$obj=new Tag($_objKIIM, $_strStyle, $arrParams, $strParamName, $_intLayer);
		return $obj->strHTML;
/*-[.]*/	}
	}
?>