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
require'/home/EDRO.SetOfTools/2.Ресурсы/3.EDRO/1.Event/1.Read/1.Время.php';

Read::VoId();

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
				'мЗаголовки'		=> array(),
				'strReadedBlock'	=> '',
			);
	public $O	= array(
			);

	public function __construct()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->_СтартЖурнала();
		$this->_Буфферизация();
		$this->_memoryPrepare();
		while($this->ifGgetRead())
			{
			$this->_ЧтениеЗапросаИзБраузераСлушателя();
			$this->_ЗаписьОтветаВБраузерСлушателя();
			$this->_СбросEventЖурнала();
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
	private function _ЧтениеЗапросаИзБраузераСлушателя()
		{
		$this->E[]			= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->R['strReadedBlock']	= fread($this->R['рПередача'], $this->D['intReadBlockSize']);
		if(!empty($this->R['strReadedBlock']))
			{
			$this->R['мЗаголовки']		= explode("\n", $this->R['strReadedBlock']);
			}
		else
			{
			$this->E[]			= array('!'.__CLASS__.'/'.__FUNCTION__ => 'fread($_рПередача'.$this->D['intReadBlockSize'].') empty.');
			$this->R['мЗаголовки']		= array();
			}
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
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _ЗаписьОтветаВБраузерСлушателя()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		fwrite($this->R['рПередача'], $this->R['strReadedBlock'], strlen($this->R['strReadedBlock']));
		fclose($this->R['рПередача']);
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	private function _СбросEventЖурнала()
		{
		$this->E = array();
		}
	public function _СтартЖурнала()
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
	private function _Буфферизация()
		{
		$this->E[]		= array('v'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime = сВремя()));
		$this->O['strFaviconBin']		= file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		$this->O['strJPGLogo']			= file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		$this->O['strJPGLogo']['strRobotsTxt']	= file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		$this->E[]		= array('.'.__CLASS__.'/'.__FUNCTION__ => ($intStartTime - сВремя()));
		}
	public function _КИМ($strDirection='Start')
		{
		/*
		$this->мКИМ[$this->ч0КИМШаг][$strDirection][__CLASS__]			=__FUNCTION__;
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
		*/
		}
	public static function VoId()
		{
		$оRead= new Read();
			Read::VoId();
		}
	}
?>