<?php                /*_
© Andrey Chekmaryov (https://vk.com/Hfic.Samin) 2021
*/
class оПрочитать
	{
	protected $E	= array();
	protected $D	= '';
	protected $R	= array();
	protected $O	= array();
	public function __construct()
		{$ф			= фОтчёт('[vЧТЕНИЕ]: '.$сРеальность.'/'.$сОбъект);
		}
	private function _socketCreate()
		{
		$lnSOCK			= socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
		}
	private function _socketConnect()
		{
		$bIzSocket 		= socket_connect($lnSOCK, '127.0.0.1', 81);
		}
	private function _socketWrite()
		{
		socket_write($lnSOCK, $сРасположение, strlen($сРасположение));
		}
	private function _socketRead()
		{
		socket_read($lnSOCK, 512)
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