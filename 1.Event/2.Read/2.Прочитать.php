<?php                /*_
© Andrey Chekmaryov (https://vk.com/Hfic.Samin) 2021
*/
function сПрочитать($сРеальность, $сОбъект)
	{$ф		= фОтчёт('[vЧТЕНИЕ]: '.$сРеальность.'/'.$сОбъект);
	$intTime1	= сВремя();
		$ф			= FALSE;
	$_strAddressFull	= '127.0.0.1';

	$lnSOCK			= socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
	$bIzSocket 		= socket_connect($lnSOCK, $_strAddressFull, 81);

	socket_write($lnSOCK, $сРасположение, strlen($сРасположение));
	echo(socket_read($lnSOCK, 512));

	if($lnSOCK)
		{
		echo 'socket_create: OK'."\n";
		$ф	= TRUE;
		}
	else
		{
		$ф	= FALSE;
		}
	if($bIzSocket)
		{
		echo 'socket_connect: OK'."\n";
		$ф	= TRUE;
		}
	else
		{
		$ф	= FALSE;
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
	}*/
	return $str;
	}
?>