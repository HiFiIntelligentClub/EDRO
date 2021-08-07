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

Read::VoId();

function _Report($str)
	{
	echo $str."\n";
	}

class Read
	{
	private $E	= array(
			);
	private $D	= array(
				'strAddr'		=> '127.0.0.1',
				'strPort'		=> 81,
				'intReadBlockSize'	=> 512,
				'сРасположение'		=> '',
			);
	private $R	= array(
				'рПриёмник'		=> '',
				'рПередача'		=> '',
				'bIzSocket'		=> FALSE,
				'intWritedBytes'	=> 0,
				'мЗаголовки'		=>array(),
				'strReadedBlock'	=> '',
			);
	public $O	= array(
			);

	public function __construct()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));

		$this->_memoryPrepare();
		while(ifGgetRead())
			{
			$this->R['мЗаголовки'] 	= $this->мЧтениеЗапросаИзБраузераСлушателя();
			if(isset($this->R['мЗаголовки'][0]))
				{
				if(is_file($this->R['мЗаголовки'][0]))
					{
					$this->R['strReadedBlock']		= file_get_contents($this->R['мЗаголовки'][0]);
					}
				else
					{
					
					}
				}
			fwrite($this->R['рПередача'], $this->R['strReadedBlock'], strlen($this->R['strReadedBlock']));
			fclose($this->R['рПередача']);
			}
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _memoryPrepare()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['рПриёмник']	= stream_socket_server('tcp://'.$this->D['strAddr'].':'.$this->D['strPort'], $errno, $errstr);
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function ifGgetRead()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['рПередача'] 	= stream_socket_accept($this->R['рПриёмник'], -1);
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		return $this->R['рПередача'];
		}
	private function мЧтениеЗапросаИзБраузераСлушателя()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$сПередача		= fread($this->R['рПередача'], $this->D['intReadBlockSize']);
		if(!empty($сПередача))
			{
			$мПередача		= explode("\n", $сПередача);
			}
		else
			{
			_Report('fread($_рПередача, '.$this->D['intReadBlockSize'].') empty.');
			$мПередача		= array();
			}
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		return $мПередача;
		}
	public function сСтартЖурнала()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		//$this->_КИМ('Start');
		//$сРасположениеСчётчикВход	=$this->сЖурналРасположение.'/CountUp/Вход.plmr';
		//$сРасположениеСчётчикВходИстор	=$this->сЖурналРасположение.'/CountUp/History/Вход.plmr';
		
		//$ч0СчётчикВход			=file_get_contents($сРасположениеСчётчикВход); сТекущееВремяСтемп()
		//				 file_put_contents($сРасположениеСчётчикВход, ($ч0СчётчикВход+1));
		//				 /*DEBUG*/ file_put_contents($сРасположениеСчётчикВходИстор,"\n=====\n".'	Start:		'.date("Y-m-d H:i:s").сТекущееВремяСтемп()."\n", FILE_APPEND);
		//$this->_КИМ('End');
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
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
		$оRead= new Read();
		}
	}
?>