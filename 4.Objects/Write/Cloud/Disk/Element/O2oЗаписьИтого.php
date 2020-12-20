<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class O2oЗаписьИтого
	{
	public function __construct($_objKIIM, $_сРоль, $_мИтого)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$сРоль		=$_сРоль;
			   unset($_сРоль);
		$мИтого		=$_мИтого;
			   unset($_мИтого);

		$сРасполож	= '/home/EDRO.o2o/'.$сРоль.'total.020';

		$Записали	=file_put_contents($сРасполож, strMyJson($мИтого));

		if($Записали===FALSE)
			{
			ReportError::_Admin($objKIIM, '020ЗаписьИтого:Неозможно записать итог');
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function _Admin($_objKIIM, $_сРоль='Listemer', $_мИтого)
		{
		$оО2оЗаписьИтого	=new O2oЗаписьИтого($_objKIIM, $_сРоль, $_мИтого);
		}
	}
?>