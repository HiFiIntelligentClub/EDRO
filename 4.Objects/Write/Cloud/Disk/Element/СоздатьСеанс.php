<?php
/*© A.A.CheckMaRev assminog@gmail.com*/
//////		 ////	//	   //	 //    // /////   /////  ///// /////  //   // /////  //    //  ////
   //   /\ RCe	//	//	//    // //    // //   // //  // //    //  // //   // //  // //    // //
  //  <  **> 	//	//	//    // //    // //   // // //  ///   /////  //   // ////   //    // //
 //     Jl   	//	//	//    // //    // //   // //  // //    //     //   // //  // //    // //
//////		 /////	//////	   //	   ////   /////   //  // ///// //       ///   /////  ///// //  /////
//setcookie('strListener', $this->сМойНомерок, time()+(60*60*24*365), '/', 'HiFiInteligentClub.'.strGetDomainZone(), false, false);!!! NO COOCKIES IS SUXX!!
class СоздатьСеанс
	{
	public	$сПредидущаяПозиция		= '';
	private	$сРасполож			= '/home/EDRO.o2o';
	private	$сРоль				= 'Listener';
	private $сОконч				= '.O20';
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
		$this->сМояПозицияО2О		='_'.floor(microtime(true)).$this->сОконч;
		$this->сМойНомерок		=$_SERVER['strListener'];
		$this->сТекущийСеанс		=$this->сМойНомерок.$this->сМояПозицияО2О;
		if($this->сМойНомерок!='')
			{
			$this->_ПолучитьАвторизацию();
			}
		else
			{
			$this->_НоваяАвторизация();
			}

		$this->_ЗаписатьРоль();
		$this->_ЗаписатьСлушателя();

		$this->_ЗаписатьИсторию();

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	private function _ПолучитьАвторизацию()
		{
		if(is_file($this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок.'/0'.$this->сОконч))
			{
			_Report('$this->сМойНомерок!=_'.$this->сМойНомерок);
			$this->сПредидущаяПозиция	=file_get_contents($this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок.'/0'.$this->сОконч);
			}
		}
	private function _НоваяАвторизация()
		{
		$оВсего		=FileRead::objО2О($objKIIM, $this->сРасполож.'/'.$this->сРоль.'Total'.$this->сОконч;
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
	private function _ЗаписатьРоль()
		{
		if(!is_dir($this->сРасполож.'/'.$this->сРоль))
			{
			if(mkdir($this->сРасполож.'/'.$this->сРоль)===FALSE)
				{
				_Report('Не создать расположение: '.$this->сРасполож.'/'.$this->сРоль);
				}
			}
		}
	private function _ЗаписатьСлушателя()
		{
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
		}
	private function _ЗаписатьИсторию()
		{
		file_put_contents($this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок.'/0'.$this->сОконч, strMyJson($м));
		}
	public static function с($_objKIIM, $_сРоль, $_м=array())
		{
		$obj	=new СоздатьСеанс($_objKIIM, $_сРоль, $_м);
		return $obj->сМойНомерок;
		}
	}
?>