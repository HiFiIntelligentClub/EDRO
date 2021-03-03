<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class O2oЗаписьИтого
	{
	public function __construct($_сРоль, $_мИтого)
		{
		$сРоль		=$_сРоль;
			   unset($_сРоль);
		$мИтого		=$_мИтого;
			   unset($_мИтого);

		$сРасполож	= '/home/EDRO.o2o/'.$сРоль.'Total.020';

		$Записали	=file_put_contents($сРасполож, strMyJson($мИтого));

		if($Записали===FALSE)
			{
			ReportError::_Admin('020ЗаписьИтого:Неозможно записать итог');
			}

		}
	public static function _Admin($_сРоль='Listemer', $_мИтого)
		{
		$оО2оЗаписьИтого	=new O2oЗаписьИтого($_сРоль, $_мИтого);
		}
	}
?>