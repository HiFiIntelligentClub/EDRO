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
	public function __construct($_objKIIM, $_strSetupFile)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>$_strSetupFile));

		$strSetupFile=$_strSetupFile;
		        unset($_strSetupFile);
		if(is_file($strSetupFile))
			{
			}
		else
			{
			$objError=new ReportError($objKIIM, $strSetupFile.' is not a file, or no permissions.');
			unset($objError);
			}

		$intSetupFileSize=filesize($strSetupFile);

		if($intSetupFileSize===FALSE)
			{
			$objError=new ReportError($objKIIM, $strSetupFile.' can not read file size.');
			unset($objError);
			}

		$linkFile	=fopen($strSetupFile, 'r');

		if($linkFile===FALSE)
			{
			$objError=new ReportError($objKIIM, $strSetupFile.' can not open.');
			unset($objError);
			}

		$this->str	=fread($linkFile, $intSetupFileSize);

		if($this->str===FALSE)
			{
			$objError=new ReportError($objKIIM, $strSetupFile.' can not read.');
			unset($objError);
			}

		$bIsClosed	=fclose($linkFile);
		
		if($bIsClosed===FALSE)
			{
			$objError=new ReportError($objKIIM, $strSetupFile.' can not close.');
			unset($objError);
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function arrJSON($_objKIIM, $_strDataFile)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		
		$objRead=new FileRead($objKIIM, $_strDataFile);
		$arr =json_decode($objRead->str, true);
		unset($objRead);
		if($arr===NULL)
			{
			$objError=new ReportError($objKIIM, $strSetupFile.' is not a JSON.');
			unset($objError);
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $arr;
		}
	public static function objJSON($_objKIIM, $_strDataFile)
		{
		$objRead=new FileRead($objKIIM, $_strDataFile);
		$obj =json_decode($objRead->str, false);
		unset($objRead);
		if($obj===NULL)
			{
			$objError=new ReportError($objKIIM, $strSetupFile.' is not a JSON.');
			unset($objError);
			}
		return $obj;
		}
	public static function objJSON_l($_strDataFile)
		{
		$objRead=new FileRead($objKIIM, $_strDataFile);
		$obj =json_decode($objRead->str, false);
		unset($objRead);
		if($obj===NULL)
			{
			$objError=new ReportError($objKIIM, $strSetupFile.' is not a JSON.');
			unset($objError);
			}
		return $obj;
		}
	public static function objXML($_objKIIM, $_strDataFile)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		
		$obj=simplexml_load_file($_strDataFile);

		if($obj===FALSE)
			{
			$objError=new ReportError($objKIIM, 'load_simple_xml_load is not an XML or file_access_error .');
			unset($objError);
			}
		
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $obj;
		}
	public static function str($_objKIIM, $_strDataFile)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$objRead=new FileRead($objKIIM, $_strDataFile);
		$str=$objRead->str;
		unset($objRead);

		$objDesignPosition_centerList='';

		if(empty($str))
			{
			$objError=new ReportError($objKIIM, $_strDataFile.' is empty.');
			unset($objError);
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $str;
		}
	public static function _GetDesignHTML($_objKIIM, $_strDataFile, $_objEDRO) //_GetDesignHtml
		{$objKIIM	=$_objKIIM;unset($_objKIIM);$objKIIM	=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$str		='';
		$objEDRO	=$_objEDRO;
			   unset($_objEDRO);
		$strDataFile	=$_strDataFile;
			   unset($_strDataFile);
		if(is_file($strDataFile))
			{
			require_once($strDataFile);
			}
		else
			{
			$objError=new ReportError($objKIIM, $strDataFile.' Нет файла.');
			unset($objError);
			}
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $str;
		}
	}
?>