<?php                /*_
© Andrey Chekmaryov (https://vk.com/Hfic.Samin) 2021
*/
class оПрочитать
	{
	protected $E	= array(
				
			);
	protected $D	= array(
				'strAddr'		=> '127.0.0.1',
				'strPort'		=> 81,
				'intReadBlockSize'	=> 512,
				'сРасположение'		=> '',
			);
	protected $R	= array(
				'lnSOCK'		=> '',
				'bIzSocket'		=> FALSE,
				'intWritedBytes'	=> 0,
				'strReadedBlock'	=> '',
			);
	protected $O	= array(
				'сОтвет'		=> '',
			);
	public function __construct()
		{
		$this->E[]		= array('v'.__FUNCTION__ => ($intStartTime = сВремя()));
					$this->_memoryPrepare();
					$this->_connectRemote();
					$this->_writeRemote();
					$this->_readRemoteReport();
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
		$this->R['bIzSocket'] 		= socket_connect($this->R['lnSOCK'], $this->D['strAddr'], $this->D['intPort']);
		$this->E[]		= array('.'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _writeRemote()
		{
		$this->E[]		= array('v'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['intWritedBytes']	= socket_write($this->R['lnSOCK'], $this->O['сРасположение'], strlen($this->O['сРасположение']));
		$this->E[]		= array('.'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _readRemoteReport()
		{
		$this->E[]		= array('v'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['strReadedBlock']    	= socket_read($this->R['lnSOCK'], $this->D['intReadBlockSize']);
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