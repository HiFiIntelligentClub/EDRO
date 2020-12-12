<?php
/*
<!---
© A.A.CheckMaRev assminog@gmail.com
-->
*/
class Полоса
	{
	public $с;
	public function __construct($_objKIIM, $_strData, $_arrSearch='')
		{
		$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		unset($_objKIIM);


		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function с($_objKIIM, $_strData, $_arrSearch='')
		{
		$obj=new Полоса($_objKIIM, $_strData, $_arrSearch);
		return $obj->с;
		}
	}
?>