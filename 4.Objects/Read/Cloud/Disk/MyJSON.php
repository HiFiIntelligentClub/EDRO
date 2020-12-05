<?php
class MyJSON
	{
	private $bTagIn		=false;
	private $int0TagOpen	=0;
	private $int0TagClose	=0;
	private	$strInTag	='';
	private	$strTagOpen	='';
	public $arrTag		=array();
	public function __construct($strXML, $strTagOpen)
		{

		$strXML			=(string)$strXML;
		$arrOpen['str']		=(string)'<'.$strTagOpen.'>';
		$arrOpen['len']		=strlen($arrOpen['str']);
		$arrClose['str']	=(string)'</'.$strTagOpen.'>';
		$arrClose['len']	=strlen($arrClose['str']);
		$strIn			='';
		$int1Length=strlen($strXML);
		$bTagIn		=false;
		$bTagOut	=false;
		$intTag		=0;
		$arrTag		=array();
		for($int0I=0;$int0I<$int1Length;$int0I++)
			{
			//echo $intI;
			if($strXML[$int0I]==$arrOpen['str'][$this->int0TagOpen])
				{
				$this->int0TagOpen++;
				}
			else
				{
				$this->int0TagOpen=0;
				}
			if($strXML[$int0I]==$arrClose['str'][$this->int0TagClose])
				{
				$this->int0TagClose++;
				}
			else
				{
				$this->int0TagClose=0;
				}
			if($this->int0TagOpen==$arrOpen['len'])
				{
				$this->int0TagOpen	=0;
				$bTagIn			=true;
				$bTagOut		=false;
				}
			if($this->int0TagClose==$arrClose['len'])
				{
				$strTagString					=substr($strIn,1,(-$arrClose['len']+1));
				if($strTagOpen=='entry')
					{
					}
				else
					{
					$arrTag[$strTagOpen]['str']			=$strTagString;
					}
				//$arrTag[$strTagOpen]['str']			=substr($strIn,1,(-$arrClose['len']+1));
				$arrTags					=$this->arrTagName($strTagString);
				if(!empty($arrTags))
					{
					foreach($arrTags as $strTag)
						{
						$arrTag[$strTagOpen][$strTag]	=XMLTag::arr($strTagString, $strTag)[0]['str'];
						}
					}
				//$arrTag[$strTagOpen]['server_name']		=Tag::arr($arrTag[$strTagOpen]['str'], 'server_name');
				//$arrTag[$strTagOpen]['server_type']		=Tag::arr($arrTag[$strTagOpen]['str'], 'server_type');
				//$arrTag[$strTagOpen][$intTag]['bitrate']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'bitrate');
				//$arrTag[$strTagOpen][$intTag]['samplerate']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'samplerate');
				//$arrTag[$strTagOpen][$intTag]['channels']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'channels');
				//$arrTag[$strTagOpen][$intTag]['listen_url']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'listen_url');
				//$arrTag[$strTagOpen][$intTag]['current_song']	=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'current_song');
				//$arrTag[$strTagOpen][$intTag]['genre']		=Tag::arr($arrTag[$strTagOpen][$intTag]['str'], 'genre');
				$this->arrTag[]					=$arrTag[$strTagOpen];
				$intTag++;
				$strIn			='';
				$this->int0TagClose	=0;
				$bTagIn			=false;
				$bTagOut		=true;
				}
			if($bTagIn)
				{
				$strIn	.=$strXML[$int0I];
				}
			else
				{
				}
			//echo $strIn;
			}
		}
	private function arrTagName($strXML)
		{
		$arr			=array();
		$strArrType		='';
		$int0Arr		=0;
		$int0ArrLength		=0;
		$strArr			='';
		$strXML			=(string)$strXML;
		$int1Length		=strlen($strXML);
		$bTagIn			=false;
		$bTagOut		=false;
		for($int0I=0;$int0I<$int1Length;$int0I++)
			{
			if($strXML[$int0I]=='<')
				{
				$bTagIn		=true;
				}
			if(($strXML[$int0I]=='>'||$strXML[$int0I]==' '||$strXML[$int0I]=="\n")&&$bTagIn)
				{
				if($strArr[1]=='/')
					{
					}
				else
					{
					$arr[$int0Arr]	=substr($strArr,1,$int0ArrLength);
					}
				$strArr		='';
				$int0ArrLength	=0;
				$int0Arr++;
				$bTagIn		=false;
				}
			if($bTagIn)
				{
				//if($strXML[$int0I]=='/')
				//	{
				//	$strArrType	='Open';
				//	}
				$strArr		.=$strXML[$int0I];
				$int0ArrLength++;
				}
			}
		return 		$arr;
		}
	public static function arr($strXML, $strTagOpen)
		{
		$objTag	= new MyJSON($strXML, $strTagOpen);
		return $objTag->arrTag;
		}
	}
?>