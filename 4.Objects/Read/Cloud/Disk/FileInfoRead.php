<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
//$_arrData=array('strDir'=>'dir', 'strFile'=>'file');
class FileInfoRead
	{
	public 		$arr		=array();
	public	 	$strFile	='';
	public function __construct($_objKIIM, $_strAction='default', $_arrData=array())
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strDir	= $_arrData['_strDir'];
		$this->strName	= $_arrData['_strName'];
		$this->strFile	= $this->strDir.$this->strName;
		$this->arr	= $this->arrGet($objKIIM);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function arrGet($_objKIIM)
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'ReadFile'));

		$linkFile=fopen($this->strFile.'/.about.json', 'r');
		$strAbout=fread($linkFile, 4096);
		fclose($linkFile);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>'ReadFile'));
		return (array)json_decode($strAbout, true);
		}
	}
?>