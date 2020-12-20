<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
//$_arrData=array('strDir'=>'dir', 'strFile'=>'file');
class FileWrite extends Reality
	{
	public	$arr	=array();
	private $strFile='';
	//public function __construct($_objKIIM, $_arrData, $_strFile)
	public function __construct($_objKIIM, $_arrData=array(), $_strAction='default')
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$this->strFile	= $this->strProtectPath($objKIIM, $_strFile);


		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	/*private function _Write($_objKIIM)
		{
		$objKIIM=$_objKIIM;
        	unset($_objKIIM);
        	$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));


		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}*/
	private function strProtectPath($_objKIIM, $_strFile)
		{
		$objKIIM=$_objKIIM;
        	unset($_objKIIM);
        	$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		/*if(strpos($_strFile,$this->)
			{
			}*/

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	/*
	private function arr($_objKIIM)
		{
		$objKIIM=$_objKIIM;
        	unset($_objKIIM);
        	$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$arr	=	array();
               	

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $arr;
		}
		*/
	}
?>