<?php
/* © A.A.CheckMaRev assminog@gmail.com*/
//////		 ....	..	   ..	 ..    .. .....   /////  ///// /////  //   // /////  //    //  ////
   //   /\ RCe	..	..	..    .. ..    .. ..   .. //  // //    //  // //   // //  // //    // //
  //  <  **> 	..	..	..    .. ..    .. ..   .. // //  ///   /////  //   // ////   //    // //
 //     Jl   	..	..	..    .. ..    .. ..   .. //  // //    //     //   // //  // //    // //
//////		 .....	......	   ..	   ....   .....   //  // ///// //       ///   /////  ///// //  /////
//setcookie('strListener', $this->сМойНомерок, time()+(60*60*24*365), '/', 'HiFiInteligentClub.'.strGetDomainZone(), false, false);
//1.Разбираем сеанс
//1.1.Проверяем есть ли он
//1.1.1.ЕСТЬ
//1.1.1.1.Читаем предидущмй сеанс.
//1.1.2.НЕТ
//1.1.2.1.Записываем новый сеанс.
//1.2.З.Записываем в историю текущий сеанс.

//1                       
//1                    |Я|
//1///////////// //////| |////////
//1//         // //    | |      //---------------->
//1//         // //    | |      //
//1____________________|Я|________________________________________________________________________
//2                    | |////////Сервер 1) Сессия/Пустая сессия
//2                    | |EDRO  //---------------->
//2                    | |      //
//2		       | ---------------->
//2                    | ---------------->
//2                    | ---------------->
//2                    '---------------->
class СоздатьСеанс
	{
	public	$сПредидущаяПозиция		= '';
	private	$сРасполож			= '/home/EDRO.o2o';
	private	$сРоль				= 'Listener';
	private $сОконч				= '.О20';
	private $сОНастройкиСлушателя		= '';
	private	$ч0ВсегоСлушателей		= 0;
	private $сМояПозицияО2О			= '';
	private	$сТекущийСеанс			= '';
	private	$сМойНомерок			= '';
	private $сЖанр				= '';
	private $objEDRO			= array();
	public function __construct($_сРоль, $objEDRO)
		{
		$this->сРоль			= $_сРоль;
					    unset($_сРоль);
		$this->$objEDRO			= $objEDRO;
		$this->сМояПозицияО2О		= '_'.floor(microtime(true));
		$this->сОНастройкиСлушателя	= '0'.$this->сОконч;
		$this->сРасположИтого		= $this->сРасполож.'/'.$this->сРоль.'Total'.$this->сОконч;
		$this->сМойНомерок		= $this->$objEDRO->arrEvent['arrListener']['Cookie'];

		if($this->сМойНомерок=='')
			{
			$this->сМойНомерок		= $this->сПолучитьНастройкиСлушателя();
			}
		else
			{
			$this->сМойНомерок		= $this->сЗаписатьНастройкиСлушателя();
			}

		$this->сТекущийСеанс		= $this->сМойНомерок.'_'.$this->сМояПозицияО2О.$this->сОконч;
						$this->_ЗаписатьСлушателя();
						$this->_ЗаписатьИсторию();
		}
	private function _ЗаписатьРоль()
		{
		$сРасположРоль	=$this->сРасполож.'/'.$this->сРоль;
		if(!is_dir($сРасположРоль))
			{
			if(mkdir($сРасположРоль)===FALSE)
				{
				_Report('Не создать расположение: '.$сРасположРоль);
				}
			}
		}
	private function сЗаписатьНастройкиСлушателя()
		{
		//echo 'сНоваяАвторизация()'."\n";
					$this->_ЗаписатьРоль();
		$oCountWoW		= FileRead::objО2О($this->сРасположИтого);
		if(isset($oCountWoW->int0Total))
			{
			$ч0ВсегоСлушателей	= $oCountWoW->int0Total;
			}
		else
			{
			_Report(__CLASS__.' '.__FUNCTION__.' $ч0ВсегоСлушателей: '.$ч0ВсегоСлушателей);
			}
		$ч0ВсегоСлушателей++;
		$оO2oЗаписьИтого	= new O2oЗаписьИтого($this->сРоль, array(
							'int0Total'		=>$ч0ВсегоСлушателей,
							'int0'.$this->сРоль	=>$ч0ВсегоСлушателей
							)
						);
		return $ч0ВсегоСлушателей;
		}//+
	private function сПолучитьНастройкиСлушателя()
		{
		//echo 'сПолучитьАвторизацию()'."\n";
		$сЗаписаннаяПозиция		= '';
		
		$сРасположОНастройки		= $this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок.'/'.$this->сОНастройкиСлушателя;
		if(is_file($сРасположОНастройки))
			{
			$сЗаписаннаяПозиция 	=FileRead::objО2О($сРасположОНастройки);
			}
		if($сЗаписаннаяПозиция=='')
			{
			_Report(__CLASS__.' '.__FUNCTION__.' $сЗаписаннаяПозиция: '.$сЗаписаннаяПозиция);
			}
		return $сЗаписаннаяПозиция;
		}





	private function _ЗаписатьСлушателя()
		{
		$сРасположМойНомерок	=$this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок;
		$сРасположОМойНомерок	=$this->сРасполож.'/'.$this->сРоль.'/'.$this->сМойНомерок.'.'.$this->сОконч;
		if(is_dir($сРасположМойНомерок))
			{
			FileWrite::objJSON($сРасположОМойНомерок, $this->$objEDRO);
			}
		else
			{
			if(mkdir($сРасположМойНомерок)===FALSE)
				{
				_Report('Cant create dir: '.$сРасположМойНомерок);
				}
			else
				{
				FileWrite::objJSON($сРасположОМойНомерок, $this->$objEDRO);
				}
			}
		}

	private function _ЗаписатьИсторию()
		{
		$сОИстория	=$this->сРасполож.'/'.$this->сРоль.'/'.$this->сТекущийСеанс;
		if(FileWrite::objJSON($сОИстория, $this->$objEDRO))
			{
			_Report('Не записать историю: '.$сОИстория);
			}
		}
	public static function с($_сРоль, $objEDRO)
		{
		$obj	= new СоздатьСеанс($_сРоль, $objEDRO);
		return $obj->сМойНомерок;
		}
	}
?>