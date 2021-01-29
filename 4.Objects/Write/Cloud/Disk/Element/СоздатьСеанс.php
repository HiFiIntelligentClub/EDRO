<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////		 ////	//	   //	 //    // /////   /////  ///// /////  //   // /////  //    //  ////
   //   /\ RCe	//	//	//    // //    // //   // //  // //    //  // //   // //  // //    // //
  //  <  **> 	//	//	//    // //    // //   // // //  ///   /////  //   // ////   //    // //
 //     Jl   	//	//	//    // //    // //   // //  // //    //     //   // //  // //    // //
//////		 /////	//////	   //	   ////   /////   //  // ///// //       ///   /////  ///// //  /////
class СоздатьСеанс
	{
	private	$сРасполож			= '/home/EDRO.o2o';
	private	$сРоль				= 'Listener';
	private $сОконч				= 'O20';
	public	$сПредидущаяПозиция		= '';
	private	$ч0ВсегоСлушателей		= 0;
	private $сМояПозицияО2О			= '';
	private	$сТекущийСеанс			= '';
	private	$сМойНомерок			= '';
	public function __construct($_objKIIM, $_сРоль, $_м=array())
		{$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>''));unset($_objKIIM);
		$this->сРоль		=$_сРоль;
			           unset($_сРоль);
		$м['сЖанр']		=$_м['strStyle'];
				   unset($_м);

		$this->сМояПозицияО2О		= '_'.floor(microtime(true)).'.'.$this->сОконч;
		if($_SERVER['strListener']!='')
			{
			//echo $_SERVER['strListener']."\n";
			$this->сМойНомерок	=$_SERVER['strListener'];
			if(is_file($this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок.'/0.'.$this->сОконч))
				{
				$this->сПредидущаяПозиция	=file_get_contents($this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок.'/0.'.$this->сОконч);
				}
			}
		else
			{
			$оВсего		=FileRead::objО2О($objKIIM, $this->сРасполож.'/'.$this->сРоль.'Total.020');
			//print_r($оВсего);
			
			if(isset($оВсего->int0Total))
				{
				$this->ч0ВсегоСлушателей	=($оВсего->int0Total);
				}
			$this->ч0ВсегоСлушателей++;

			$оO2oЗаписьИтого	=new O2oЗаписьИтого($objKIIM, $this->сРоль, array(
							'int0Total'		=>$this->ч0ВсегоСлушателей,
							'int0'.$this->сРоль	=>$this->ч0ВсегоСлушателей
							)
						);
		
			$this->сМойНомерок		=сКодировать($this->ч0ВсегоСлушателей, 'к');
			
		//	$_SESSION['strListener']	= $this->сМойНомерок;
			}
		$this->сТекущийСеанс	=$this->сМойНомерок.$this->сМояПозицияО2О;
		if(!is_dir($this->сРасполож.'/'.$this->сРоль))
			{
			if(mkdir($this->сРасполож.'/'.$this->сРоль)===FALSE)
				{
				_Report('Не создать расположение: '.$this->сРасполож.'/'.$this->сРоль);
				}
			}
		$objKIIM_e=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'Удаление сессий о2о'));
			exec('rm -f '.$this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок.'_* &'); 
		KIIM::objFinish($objKIIM_e, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>'Удаление сессий о2о'));
		//echo $this->сРасполож.'/'.$this->сРоль.'/'.$this->сТекущийСеанс;
		
		file_put_contents($this->сРасполож.'/'.$this->сРоль.'/'.$this->сТекущийСеанс, strMyJson($м));

		if(is_dir($this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок))
			{
			}
		else
			{
			if(mkdir($this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок)===FALSE)
				{
				_Report('Cant create dir: '.$this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок);
				}
			}
		file_put_contents($this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок.'/0.'.$this->сОконч, strMyJson($м));
		
		//setcookie('strListener', $this->сМойНомерок, time()+(60*60*24*365), '/', 'HiFiInteligentClub.'.strGetDomainZone(), false, false);!!! NO COOCKIES IS SUXX!!

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function с($_objKIIM, $_сРоль, $_м=array())
		{
		$obj	=new СоздатьСеанс($_objKIIM, $_сРоль, $_м);
		return $obj->сМойНомерок;
		}
	}
?>