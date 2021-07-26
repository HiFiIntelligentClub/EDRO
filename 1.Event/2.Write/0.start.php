#!/usr/bin/php
<?php
// © A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru 2021
//р=Ресурс	сп=СтрокаПакет(Пакет для вебсервера)
//Вдохновлённый коммуникацией с Алексеем Семёновым, по-настольгировав по былым временам ИТМО,
//постеснялся оставлять недоинтегрированную структуру и витая мыслями где-то там, 
//доделал интеграл, получив 1 абстрактный класс EDRO, и интерфейс EDRO-ЕДРО, переписываю уже целый день,
//очень боюсь критики от спеца.. Надеюсь успею к утру :). Хорошего дня.
//
//          .                         .             .                           .                      .
// .            .         Е  .                        .                           .                               .
//                        Д
//      .               EDRO              .              .                            .                                     .
//                        О:ПОЛИМЕР
//			    EDRO.SOT													
//																	
//																	
//																	
set_time_limit(0);

Write::VoId();

function _Report($str)
	{
	echo $str."\n";
	}

class Read
	{
	private $рПриёмник;
	private $рПередача;
	private $мЗаголовки	= array();
	private $сБуффер	= '';

	public function __construct()
		{
		$this->рПриёмник	= $this->рОрганизацияПриёмникаЗапросовСлушателя();
		while($this->рПередача 	= stream_socket_accept($this->рПриёмник, -1))
			{
			$this->мЗаголовки 	= $this->мЧтениеЗапросаИзБраузераСлушателя();
			//print_r($this->мЗаголовки);
			if(isset($this->мЗаголовки[0]))
				{
				if(is_file($this->мЗаголовки[0]))
					{
					
					}
				else
					{
					$this->сБуффер		= file_put_contents($this->мЗаголовки[0]);
					}
				}
			fwrite($this->рПередача, $this->сБуффер, strlen($this->сБуффер));
			fclose($this->рПередача);
			}
		}
	private function рОрганизацияПриёмникаЗапросовСлушателя()
		{
		//$this->_КИМ('Start');
		$рПриёмникЗапросовСлушателя	= stream_socket_server("tcp://127.0.0.1:82", $errno, $errstr);
		//$this->_КИМ('End');
		return $рПриёмникЗапросовСлушателя;
		}
	private function мЧтениеЗапросаИзБраузераСлушателя()
		{
		$сПередача		= fread($this->рПередача, 512);
		if(!empty($сПередача))
			{
			$мПередача		= explode("\n", $сПередача);
			}
		else
			{
			_Report('fread($_рПередача, 512) empty.');
			$мПередача		= array();
			}

		return $мПередача;
		}
	public function сСтартЖурнала()
		{
		//$this->_КИМ('Start');
		//$сРасположениеСчётчикВход	=$this->сЖурналРасположение.'/CountUp/Вход.plmr';
		//$сРасположениеСчётчикВходИстор	=$this->сЖурналРасположение.'/CountUp/History/Вход.plmr';
		
		//$ч0СчётчикВход			=file_get_contents($сРасположениеСчётчикВход); сТекущееВремяСтемп()
		//				 file_put_contents($сРасположениеСчётчикВход, ($ч0СчётчикВход+1));
		//				 /*DEBUG*/ file_put_contents($сРасположениеСчётчикВходИстор,"\n=====\n".'	Start:		'.date("Y-m-d H:i:s").сТекущееВремяСтемп()."\n", FILE_APPEND);
		//$this->_КИМ('End');
		}
	private function мБуфферизация()
		{
		//$this->_КИМ('Start');
		//$м	=array();
		//$м['strFaviconBin']		=file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		//$м['strJPGLogo']		=file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		//$м['strRobotsTxt']		=file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		//$this->_КИМ('End');
		//return $м;
		}
	public function _КИМ($strDirection='Start')
		{
		/*$this->мКИМ[$this->ч0КИМШаг][$strDirection][__CLASS__]			=__FUNCTION__;
		switch($strDirection)
			{
			case 'Start':
				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTime'] 			=сТекущееВремяСтемп();
				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDelta']		=0;
				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDeltaAll']= 
					($this->мКИМ[$this->ч0КИМШаг]['Start']['strTime']-
						$this->мКИМ[(($this->ч0КИМШаг-1)>0)?$this->ч0КИМШаг-1:$this->ч0КИМШаг]['End']['strTime']);
			break;
			case 'End':
				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTime'] 		=сТекущееВремяСтемп();
				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDelta']= 
					($this->мКИМ[$this->ч0КИМШаг]['End']['strTime']-
						$this->мКИМ[$this->ч0КИМШаг]['Start']['strTime']);

				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDeltaAll']= 
					($this->мКИМ[$this->ч0КИМШаг]['End']['strTime']-
						$this->мКИМ[0]['Start']['strTime']);

				$this->ч0КИМШаг++;
			break;
			}
		file_put_contents();*/
		}
	public static function VoId()
		{
		$оWrite= new Write();
		}
	}
?>