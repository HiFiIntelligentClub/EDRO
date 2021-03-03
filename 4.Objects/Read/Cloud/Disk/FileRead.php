<?php




		          /*© A.A.CheckMaRev assminog@gmail.com*/
		    ////// 				//
		   //   /\ RCe			/////////
		      //  <  **> 				//
		     //     Jl   				//
		    //////				/////////
		    //$_arrData=array('strDir'=>'dir', 'strFile'=>'file');








class FileRead
	{
	public function __construct($_strSetupFile)
		{
		$strSetupFile=$_strSetupFile;
		        unset($_strSetupFile);
		if(is_file($strSetupFile))
			{
			}
		else
			{
			$objError=new ReportError(array(), $strSetupFile.' is not a file, or no permissions.');
			unset($objError);
			}

		$intSetupFileSize=filesize($strSetupFile);

		if($intSetupFileSize===FALSE)
			{
			$objError=new ReportError(array(), $strSetupFile.' can not read file size.');
			unset($objError);
			}

		$linkFile	=fopen($strSetupFile, 'r');

		if($linkFile===FALSE)
			{
			$objError=new ReportError(array(), $strSetupFile.' can not open.');
			unset($objError);
			}

		$this->str	=fread($linkFile, $intSetupFileSize);

		if($this->str===FALSE)
			{
			$objError=new ReportError(array(), $strSetupFile.' can not read.');
			unset($objError);
			}

		$bIsClosed	=fclose($linkFile);
		
		if($bIsClosed===FALSE)
			{
			$objError=new ReportError(array(), $strSetupFile.' can not close.');
			unset($objError);
			}
		}
	public static function arrJSON($_strDataFile)
		{
		
		$objRead=new FileRead($_strDataFile);
		$arr =json_decode($objRead->str, true);
		unset($objRead);
		if($arr===NULL)
			{
			$objError=new ReportError(array(), $strSetupFile.' is not a JSON.');
			unset($objError);
			}

		return $arr;
		}
	public static function objJSON$_strDataFile)
		{
		$objRead=new FileRead($_strDataFile);
		$obj =json_decode($objRead->str, false);
		unset($objRead);
		if($obj===NULL)
			{
			$objError=new ReportError(array(), $strSetupFile.' is not a JSON.');
			unset($objError);
			}
		return $obj;
		}
	public static function objО2О($_strDataFile)
		{
		$objRead=new FileRead(array(), $_strDataFile);
		$obj =json_decode($objRead->str, false);
		unset($objRead);
		if($obj===NULL)
			{
			$objError=new ReportError(array(), $strSetupFile.' is not a JSON.');
			unset($objError);
			}
		return $obj;
		}
	public static function objJSON_l($_strDataFile)
		{
		_Report('File::Read()::objJSON _l '.$_strDataFile);
		$objRead=new FileRead($_strDataFile);
		$obj =json_decode($objRead->str, false);
		unset($objRead);
		if($obj===NULL)
			{
			$objError=new ReportError(array(), $strSetupFile.' is not a JSON.');
			unset($objError);
			}
		return $obj;
		}
	public static function objXML($_strDataFile)
		{
		$obj=simplexml_load_file($_strDataFile);

		if($obj===FALSE)
			{
			$objError=new ReportError(array(), 'load_simple_xml_load is not an XML or file_access_error .');
			unset($objError);
			}
		return $obj;
		}
	public static function str($_strDataFile)
		{
		$objRead=new FileRead($_strDataFile);
		$str=$objRead->str;
		unset($objRead);

		$objDesignPosition_centerList='';

		if(empty($str))
			{
			$objError=new ReportError(array(), $_strDataFile.' is empty.');
			unset($objError);
			}
		return $str;
		}
	public static function strGetDesignHTML($_strDataFile, $objEDRO) //_GetDesignHtml
		{
		$str		='';
		$strDataFile	=$_strDataFile;
			   unset($_strDataFile);
		if(is_file($strDataFile))
			{
			require$strDataFile;
			return $str;
			}
		else
			{
			$objError=new ReportError(array(), $strDataFile.' Нет файла.');
			unset($objError);
			return '';
			}
		
		return $str;
		}
	}
?>