<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class FileHistoryWrite extends Reality
	{
	public $arr	=array();
	public function __construct($_objKIIM, $_arrData=array(), $_strAction='default')
		{
		$objKIIM=$_objKIIM;
		unset($_objKIIM);
    		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		
		switch($_strAction)
			{
			case 'Add':
							$this->_Create($_objKIIM);
			break;

			case 'Read':
				$this->arr	=	$this->arrRead($_objKIIM);
			break;
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function arrRead($_objKIIM)
		{
		$objKIIM=$_objKIIM;
        	unset($_objKIIM);
        	$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		
		$arr = array();

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		return $arr;
		}
	private function _Add($_objKIIM)
		{
		$objKIIM=$_objKIIM;
        	unset($_objKIIM);
        	$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	}
?>