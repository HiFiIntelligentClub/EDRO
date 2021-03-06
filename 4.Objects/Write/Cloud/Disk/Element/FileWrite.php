<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class FileWrite
	{
	public $int0	=FALSE;
	public function __construct($сРасполож, $м)
		{
		$this->int0	=file_put_contents($сРасполож, strMyJson($м));
		}

	public static function objJSON($сРасполож, $м=array())
		{
		$oFileWrite	=new FileWrite($сРасполож, $м);
		return $oFileWrite->int0;
		}
	}
?>