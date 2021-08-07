<?php                /*_
© Andrey Chekmaryov (https://vk.com/Hfic.Samin) 2021
*/
class оПрочитать
	{
	protected $E	= array(
				
			);
	protected $D	= array(
				'strAddr'		= '127.0.0.1',
				'strPort'		= 81,
			);
	protected $R	= array(
				'lnSOCK'		= '',
				'bIzSocket'		= FALSE,
				'intWritedBytes'	= 0,
				'strReadedBlock'	= '',
			);
	protected $O	= array();
	public function __construct()
		{$ф			= фОтчёт('[vЧТЕНИЕ]: '.$сРеальность.'/'.$сОбъект);
		$this->E[]		= array('v'.__FUNCTION__ => ($intStartTime = сВремя()));

		$this->E[]		= array('.'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _memoryPrepare()
		{
		$this->E[]		= array('v'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['lnSOCK']		= socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		$this->E[]		= array('.'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _connectRemote()
		{
		$this->E[]		= array('v'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['bIzSocket'] 		= socket_connect($lnSOCK, '127.0.0.1', 81);
		$this->E[]		= array('.'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _writeRemote()
		{
		$this->E[]		= array('v'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['intWritedBytes']	= socket_write($lnSOCK, $сРасположение, strlen($сРасположение));
		$this->E[]		= array('.'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _readRemoteReport()
		{
		$this->E[]		= array('v'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['strReadedBlock']    	= socket_read($lnSOCK, 512);
		$this->E[]		= array('.'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	}

	/*if(filesize($сРеальность.'/'.$сОбъект)>0)
		{
		if($str	= file_get_contents($сРеальность.'/'.$сОбъект))
			{
			$intTime2	= сВремя();
			$intTime	= $intTime2 - $intTime1;
			if($intTime>0.001)
				{
				$strTime	= $intTime;
				$ф		= фОшибка('[vЧТЕНИЕ]: '.$сРеальность.'/'.$сОбъект.' |'.$strTime, array(4=>'Время чтения объекта превысило 0.001'));
				}
			else
				{
	    			$strTime	= '~0. Норм';
				}
			$ф		= фОтчёт('[.ЧТЕНИЕ]: '.$сРеальность.'/'.$сОбъект.'. Выполнено: '.strlen($str).' Байта.'.'. Время загрузки: '.$strTime);
			}
		else
			{
			return $ф	= фОшибка('[.ЧТЕНИЕ]: '.$сРеальность.'/'.$сОбъект, array(3=>'Не могу прочитать объект'));
			}
		}
	else
		{
		$ф	= фОшибка('[.ЧТЕНИЕ]: '.$сРеальность.'/'.$сОбъект, array(1=>'Не читаем объект нулевой длины'));
		$str	= '';
	}
	return $str;
	}
	*/
?>