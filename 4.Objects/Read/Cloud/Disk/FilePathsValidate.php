<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class FilePathsValidate
	{
	public $strSetupFile;
	public $strFullPath;
	public function __construct($_objKIIM)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strFullPath	= $this->strDir.$this->strName;

		///+++ VectorKIIM  Here must be proteceted
		if($_SERVER['REQUEST_URI']!='/')
			{
			$this->strFile=urldecode($_SERVER['REQUEST_URI']).'/'.$this->strFile;
			}
		///+++ VectorKIIM  Here must be proteceted

		if(is_file($this->strFullPath))
			{
			}
		elseif(is_dir($this->strFullPath))
			{
			}
		else
			{
			$objError=new ReportError($objKIIM, $this->strFullPath.' not exist');
			}
		$this->strSetupFile	= $this->strFullPath.'/.Setup.json';
		if(is_file($this->strSetupFile))
			{
			}
		else
			{
			$objError=new ReportError($objKIIM, $this->strSetupFile.' No setup file.');
			}
		parent::__construct($objKIIM);
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	}
?>