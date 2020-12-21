<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////   /\ RCe	[E] Event
   //  <  **> 	[D] Design/Destination/Doing
 //     Jl   	[R] Reality/Role
////// 2020	[O] Objects
/*array(
	'CopyrightSign'=>array(
		'strType'=>'dir/',
		);
);*/
class FileUploadDesignRead extends Reality
	{
	public	$arr	=array();
	private $strPath	='/home/RCe.EDRO/2.Events/Upload/upload.php';
	public function __construct($_objKIIM, $_arrData=array(), $_strAction='default')
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//$strSubDir='/'.preg_replace('[^A-Za-z\.0-9]', '', $_strSubDir);

		parent::__construct($objKIIM);
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function strHtml($_objKIIM)
		{
		$objKIIM=$_objKIIM;
        	unset($_objKIIM);
        	$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>$this->strName));
		
		require_once($this->strPath);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>$this->strName));
		}
	public static function html($_objKIIM, $_arrData=array(), $strAction='default')
		{
		$objKIIM=$_objKIIM;
        	unset($_objKIIM);
        	$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		
		$html=DynaBlock::html($objKIIM, $this);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $html;
		}
	}
?>
