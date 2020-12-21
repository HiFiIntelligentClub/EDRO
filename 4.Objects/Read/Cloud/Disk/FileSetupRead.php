<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////              // //    ///
   //   /\ RCe //     //    //
  //  <  **>   // //       //
 //     Jl   // // //     //
///////// // // // // // //
//$_arrData=array('strDir'=>'dir', 'strFile'=>'file');
class FileSetupRead extends Reality
	{
	public 	$arrSetup;
	
	public function __construct($_objKIIM, $_strAction='default', $_arrData=array())
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		//print_r($this->strSetupFile);

		$this->arrSetup	=Read::arrJSON($objKIIM, $this->strSetupFile);
		//$arrType = Read::arrJSON($objKIIM, '');

		parent::__construct($objKIIM);
		
		//echo $this->strReality;
		//$this->_arrSetup < $this->strReality; [!]
		
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	}
?>