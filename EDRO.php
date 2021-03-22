#!/usr/bin/php
<?php
                     /*_____
© Andrey Chekmaryov 2021

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)787-44-57
Whatsapp: +7(911)787-44-57
Telegram: https://t.me/HficSamin
VK:       https://vk.com/Hfic.Samin
VK:       https://vk.com/HiFiIntelligentClub
Facebook: https://facebook.com/Hfic.Samin
Facebook: https://facebook.com/HiFiIntelligentClub
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion
|E    |D     |R      |O      |
|Event|Design|Reality|Objects|
 //////                     /////  / 
//        /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/ //КИМ in latin is KIIM Иcкуственный Интеллект Кирилл и Мефодий (). 
			/*_\\KIIM//__Start_____*/ 
			/*__\\  //___Checkpiont*/ 
			/*___\\//____Finish___ */ 
			/*____\/ECTOR <-->_____*/ 
	//if finish than compete if the result EXIST! Filosophy

//My lasts impulse of power 
// ---------------
// | $rRadio     |<--.
// |/////////////|   ||                      Request processing2EDRO: 	Абхазия serve;
// ---------------   ||                      Store images:		Saint-Petersbourg serve;
//       |  .--FALSE-'                       Store personal messages:  	Moscow serve;
//       V /         || GET Listener         Store music: 		Chechnia serve;
// ----rRadio.Step-- ^--------------------
//       |           ||
//       | .--FALSE--'
//       V/
// ---rRadio.Step
//--------------------------------------------------------------------------------------------------------
//
//EDRO--------------------------------.
// 1.CreateEnterPoint                 |
//                                 ^  |
//                                 ^  |
// 1.CreateEnter                   ^  |
// 2.Init EDRO                     ^  |
// 2.1. E getLisSetup            FALSE
// 2.2. D SelectObjPacket         ----|
// 2.3. R CreateReality               |
// 2.4. O Build Polimer Obj->sendPListener
//                                    |
//                                    |
//                                    |
//                                    |
//------------------------------------'
//

//The upper level singularity will be in https://github.com/HiFiIntelligentClub/public very soon
//We are processing from here.
//      //
//     //
 //   //
  // //
   ///
function сВремя(){return round(microtime(true), 4);}
class КИМ
	{
	public $oEDRO			= array();
	public $сИмяФайла		='';
	public $дВремяСтарт		= 0.0000;
	public $дВремяНач		= 0.0000;
	public $дВремяКон		= 0.0000;
	public $дДельтаВремяСтартНач	= 0.0000;
	public $дДельтаВремяНачКон	= 0.0000;
	public $ч0ВыполненоЧастей	= 0;
	public $ч0Шаг			= 0;
	public $ч0Уровень		= 0;
	private $фРезультат		= false;
	private $сПроцессСтадия		= '';
	
	public function __construct()
		{
		$this->дВремяСтарт		= сВремя();
		$this->дВремяНач		= 0.0000;
		$this->дВремяКон		= 0.0000;
		$this->дДельтаВремяСтартНач	= 0.0000;
		$this->дДельтаВремяНачКон	= 0.0000;
		$this->ч0ВыполненоЧастей	= 0;
		$this->фРезультат		= false;
		}
	public function сНач()
		{
		$str				= '';
		$this->дВремяНач		= сВремя();
		$this->дДельтаВремяСтартНач	= ($this->дВремяНач-$this->дВремяСтарт);
						$this->ч0Шаг++;
						$this->ч0Уровень++;
						$this->_ПроцессСтадия();
						$this->_ВыводВ();
						require($this->сИмяФайла);
		return $str;
		}
	public function _Кон()
		{
		$this->дВремяКон		= сВремя();
		$this->дДельтаВремяНачКон	= ($this->дВремяКон-$this->дВремяНач);
						$this->_ПроцессСтадия();
						$this->_ВыводВ();
		$this->ч0Уровень		= ($this->ч0Уровень-1);
		}
	public function _КонПроц()
		{
						$this->_Кон();
		$this->фРезультат		= true; //Calculate
		echo 'ч0ВыполненоЧастей:'.$this->ч0ВыполненоЧастей."\n";
		}
	private function _ПроцессСтадия()
		{
		$this->сПроцессСтадия	='[';
		for($ч0=0;ч0<=$this->ч0Уровень;ч0++)
			{
			$this->сПроцессСтадия		.=($ч0==0)?'V':'v';
			}
		$this->сПроцессСтадия	.=']';
		}
	private function _ВыводВ()
		{
		echo $this->сПроцессСтадия.$this->сИмяФайла."\n";
		}
	}
//Usage:
//$оКИМ			= new КИМ();
//$оКИМ->сИмяФайла	= '';
//			$оКИМ->_Нач();
//
//			$оКИМ->ч0ВыполненоЧастей++;
//			$оКИМ->_Кон();
//			$оКИМ->_КонПроц();
$оКИМ			= new КИМ();
$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/0.Loader/0.loader.php';
			$оКИМ->сНач();
		
$oEDRO	=new Event($мКИМ, $_strStyle, $arrParams,  $_intLayer);

			$оКИМ->oEDRO		= $oEDRO;

$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/5.Styles/0.CSS.Styles.php';
			$оКИМ->сНач();


$оКИМ->сИмяФайла	= '/home/EDRO.SetOfTools/System/6.HTML_Interfaces/0.HTML_HeadInterface.php';
			$оКИМ->сНач();

//require('/home/EDRO.SetOfTools/System/7.Templates/0.strKIIM.Template.php');




class EDRO
	{
	public 	$strHTML;
	private $сЖурналРасположение	='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub/Журнал';
	private $ч0КИМШаг		=0;
	private $rRadio;
	private $arRAM		=array();
	private $мКИМ		=array();
	private $oEDRO;
	private $arrE	=
		array(
			'strLink'		=>'',
			'strOnClick'		=>'',
		);
	private $arrD	=
		array(
			'strClass'		=>'',
			'strStyle'		=>'',
			'intLayer'		=>1,
			);
	private $objR	=
		array(
			'arrRole'=>
			array(
				'Listener', 'Operator'
				),
			'arrLang'=>
			array(
				'ifEN'	=>'',
				'ifRU'	=>'',
				),
			);
	private $arrO	=array(
			'strClass'		=>'a',
			'strOpen'		=>'>',
			'strClose'		=>'<',
			);
	public function __construct($_strStyle, $arrParams,  $_intLayer)
		{
		//		$this->_КИМ('Start');
		//		$this->_ПредпусковаяПроверка();
		//		$this->_СтартЖурнала();
		//$this->arRAM	=$this->mReadStatic();
		//		$this->_КИМ('End');
		//$int0Attempts	= 0;

		//while(true)	//
		//	{
		//	$this->rRadio	= $this->rOrganiseListenersRadioRequests();
/*x1*/		//	$oEDRO		= Event::_V($this->мКИМ, $this->rRadio);
/*x2*/		//	while($oEDRO->arrEvent['rRadio'])
		//		{

		//		}
		//	_Report('Lost radio concrette!!!! AttemptsFromZero: '.$int0Attempts);
		//	$int0Attempts++;
		//	}
/*x3*/		//_Report('>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>Exiting forever circle');
		//$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		/*$this->arrEvent	=
		array(
			'strLink'		=>'"/search'.strLinkGroove($this->arrEvent['arrParams'], 'strStyle', '').'"',
			'strOnClick'		=>'',
			'arrParams'		=>$arrParams,
			);
		$this->arrDesign=
		array(
			'strClass'		=>'block abs layer_'.($_intLayer+1),
			'strStyle'		=>'',
			);
		$this->objReality=
		array(
			'arrRole'=>
			array(
				'Listener', 'Operator'
				),
			'arrLang'=>
			array(
				'ifEN'	=>'',
				'ifRU'	=>'',
				),
			);
		$this->arrObjects=
		array(
			'strClass'		=>'a',
			'strOpen'		=>'<',
			'strClose'		=>'>',
			);

		if(сДляСравнения($arrParams['strStyle'])==сДляСравнения($_strStyle))
			{
			$this->objReality['arrLang']['ifEN']	=$_strStyle;
			$this->objReality['arrLang']['ifRU']	=$_strStyle;
			$this->strHTML				=$this->strObject();
			}

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));*/
		}
/*
	private function strEvent()
		{
		$strE='href="'.$this->arrEvent['strLink'].'" ';
		$strE.='onClick="'.$this->arrEvent['strOnClick'].'" ';
		return $strE;
		}
	private function strDesign()
		{
		$strD='class="'.$this->arrDesign['strClass'].'" ';
		$strD.='style="'.$this->arrDesign['strStyle'].'" ';
		return $strD;
		}
	private function strReality()
		{
		//print_r($_SESSION);
		//$this->objReality['arrRole'];
		//$this->objReality['arrLang'];
		$strR='<ifRU>'.$this->objReality['arrLang']['ifRU'].'</ifRU>';
		$strR.='<ifEN>'.$this->objReality['arrLang']['ifEN'].'</ifEN>';
		return $strR;
		}
	private function strObject()
		{
		$strE=$this->strEvent();
		$strD=$this->strDesign();
		$strR=$this->strReality();
		$strO=$this->arrObjects['strOpen'].$this->arrObjects['strClass'].$this->arrObjects['strClose']."\n";
		$strO.=$strE.$strD.$strR;
		$strO.=$this->arrObjects['strOpen'].'/'.$this->arrObjects['strClass'].$this->arrObjects['strClose']."\n";
		return $strO;

		}*/

	public static function strHTML($мКИМ, $_strStyle, $_arrParams, $_intLayer)
		{
		$objEDRO	=new EDRO($мКИМ, $_strStyle, $_arrParams, $_intLayer);
		return		$objEDRO->strHTML;
		}
	public static function strObjectDeclare()
		{
		$str	= <<<oo2oo
		<script>
			console.log('[V]EDRO: Declare');
			class EDRO
				{
				//intStep			=0;//Player session operation time
				//intVector		=0;
				//intStep2News		=0;
				constructor()
					{
					console.log('[Vv]EDRO: Construct');
					//this.K			=0;
					//this.L			=0;
					//this.strCurOperID;
					

					console.log('[..]EDRO: Construct');
					}
				_Report ()
					{
					}
				}
			console.log('[.]EDRO: Declare');
		</script>
oo2oo;
		return $str;
		}
	public function _КИМ($strDirection='Start')
		{
		$this->мКИМ[$this->ч0КИМШаг][$strDirection][__CLASS__]			=__FUNCTION__;
		switch($strDirection)
			{
			case 'Start':

				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTime'] 		=сТекущееВремяСтемп();
				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDelta']	=0;

				$ч0ПредШаг	=(($this->ч0КИМШаг-1)>0)?$this->ч0КИМШаг-1:$this->ч0КИМШаг;

				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDeltaAll']= 
					($this->мКИМ[$this->ч0КИМШаг]['Start']['strTime']-$this->мКИМ[$ч0ПредШаг]['End']['strTime']);

				$str	=$this->ч0КИМШаг.' '.$strDirection.' '.__CLASS__.' '.__FUNCTION__.' '.$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDeltaAll'];
			break;
			case 'End':
				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTime'] 		=сТекущееВремяСтемп();
				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDelta']= 
					($this->мКИМ[$this->ч0КИМШаг]['End']['strTime']-
						$this->мКИМ[$this->ч0КИМШаг]['Start']['strTime']);

				$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDeltaAll']= 
					($this->мКИМ[$this->ч0КИМШаг]['End']['strTime']-
						$this->мКИМ[0]['Start']['strTime']);
				$str	=$this->ч0КИМШаг.' '.$strDirection.' '.__CLASS__.' '.__FUNCTION__.' '.$this->мКИМ[$this->ч0КИМШаг][$strDirection]['strTimeDelta'];
				$this->ч0КИМШаг++;
			break;
			}
		if(file_put_contents($this->сЖурналРасположение.'/КИМ/КИМ.txt', $str."\n", FILE_APPEND)===FALSE)
			{
			_Report('Не могу записать: '.$this->сЖурналРасположение.'/КИМ/КИМ.txt');
			}
		}
	private function mReadStatic()
		{
		$this->_КИМ('Start');
		$м	=array();
		$м['strFaviconBin']		=file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		$м['strJPGLogo']		=file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		$м['strRobotsTxt']		=file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		$this->_КИМ('End');
		return $м;
		}
	public function _СтартЖурнала()
		{
		$this->_КИМ('Start');
		$сРасположениеСчётчикВход	=$this->сЖурналРасположение.'/CountUp/Вход.plmr';
		$сРасположениеСчётчикВходИстор	=$this->сЖурналРасположение.'/CountUp/History/Вход.plmr';
		echo $сРасположениеСчётчикВход;
		exit;
		$ч0СчётчикВход			=file_get_contents($сРасположениеСчётчикВход); сТекущееВремяСтемп();
						 file_put_contents($сРасположениеСчётчикВход, ($ч0СчётчикВход+1));
						 /*DEBUG*/ file_put_contents($сРасположениеСчётчикВходИстор,"\n=====\n".'	Start:		'.date("Y-m-d H:i:s").сТекущееВремяСтемп()."\n", FILE_APPEND);
		$this->_КИМ('End');
		}
	private function rOrganiseListenersRadioRequests()
		{$this->_КИМ('Start');
/*  [vК]	*/$rListenersRadioRequests	=stream_socket_server("tcp://".strDomain().":80", $errno, $errstr);
/*[v][И][>][-]	*/if($rListenersRadioRequests===FALSE) //NEGATIVE
/*[+]		      */{
/*   [-]		*/usleep(100000);
/*   [-]		*/$this->rOrganiseListenersRadioRequests();
/*   [-]		*/_Report('rOrganiseListenersRadioRequests() failed. Restarting after 0,1 s. delay.');
/*   [-]		*/}
/*   [M]	*/$this->_КИМ('End');
/*   [+]	*/return $rListenersRadioRequests; //POSITIVE
		}
	public static function strObjectInit()
		{
		return Event::strObjectInit('EDRO');
		}
	}
