<?php
                     /*_____
© Andrey Chekmaryov 2020

Email:    assminog@gmail.com
Email:    tubmulur@yandex.ru
Phone:    +7(911)7874457
Whatsapp: +7(911)7874457
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
|ЕСЛИ /ДЕЙСТВИЕ/РЕАЛЬНОСТЬ/ОБЪЕКТ/


//        /\              
//      <  **>           
 //////   jl             
./././././././*/							

class Objects
	{
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__,'_strMethod'=>__FUNCTION__, '_strMessage'=>'', '_objCurrent'=>'', '_intShowTempo'=>'' ));

		//$this->arrReality['сРасположениеКорень']	='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub'; //moved to REALITY
		$strPlatformPrefix	='';
		$strHiFiType		=сПреобразовать($this->arrEvent['arrReality']['strHiFiType'], 'вСтроку');
		//$strHiFiType		='/HiFi beginner';

		$arrHiFi['Low quality']		='Low';   //NoHiFi
		$arrHiFi['HiFi beginner']	='beginner'; //HiFi
		$arrHiFi['HiFi casual']		='casual'; //HiFi
		$arrHiFi['HiFi often']		='often';  //HiFi
		$arrHiFi['HiFi mustbe']		='mustbe'; //HiFi
		//$arrHiFi[]='HiFi 2';       //2.1
		//print_r($this->arrEvent['arrReality']['strStationID']);
		//exit();
		foreach($arrHiFi as $strHiFiTypeName =>$strHiFiShortName)

			{
			if(strpos($strHiFiType, $strHiFiShortName)!==FALSE)
				{
				$strHiFiType	=$strHiFiTypeName;
				}
			}
		if($strHiFiType=='')
			{
			$strHiFiType		='/HiFi beginner';
			}
		else
			{
			$strHiFiType		='/'.$strHiFiType;
			}
		$this->arrEvent['arrReality']['strHiFiType']	=$strHiFiType;
		if($this->arrReality['bIzAndroid'])
			{
			$strPlatformPrefix	='/Android';
			}
		if($this->arrReality['bIzApple'])
			{
			echo $strPlatformPrefix	='/Apple';
			}
		//$сРасположениеКорень	=$сРасположениеКорень;

		$strSearchName		=сПреобразовать(mb_strtolower($this->arrEvent['arrReality']['strName']),'вКоманду');
		if(strlen($strSearchName)<3)
			{
			$strSearchName	='';
			}
		$strSearchGenre		=сПреобразовать(mb_strtolower($this->arrEvent['arrReality']['strGenre']),'вКоманду');
		$strSearch		=мЖанр_мЯзык_мТранскрипция($strSearchGenre);

		$strSearchType   	=empty($strSearchName)? '/unordered/':'/search/';
		//echo $сРасположениеКорень.'/Stations/strICQRTypeF.php';
		include($this->arrReality['сРасположениеКорень'].'/Stations/strICQRTypeF.php');

		$strSearchPath		='/Stations/'.$strICQRTypeF.'/'.$strHiFiType.$strPlatformPrefix;
		if($strSearchGenre=='')
			{
			$strSearchPath	.=$strSearchType;
			}
		else
			{
			$strSearchPath	.='/Genres/search/'.$strSearchGenre.$strSearchType;
			}
		$strSearchPath;

		

		if($this->arrEvent['arrReality']['strStationID']!='')
			{
			}
		else
			{
			
			}


		$this->arrObjects['сРасположение']		=$this->arrReality['сРасположениеКорень'].$strSearchPath;
		if($strSearchName=='')
			{
			$objTotal	=FileRead::objJSON($objKIIM, $this->arrObjects['сРасположение'].'/total.plmr');

			$this->arrObjects['ч0РасположениеTotal']	= ($objTotal->int1Total-1);
			if($this->arrObjects['ч0РасположениеTotal']=='')
				{
				echo 'No data';
				}
		//exit;
			$this->arrObjects['мРасположение']		=Pagination::arr($objKIIM, $this);

			for($int0I=$this->arrObjects['мРасположение']['int0Start'];$int0I<=$this->arrObjects['мРасположение']['int0Untill'];$int0I++)
				{
				$this->arrObjects['мТаблица'][]	=$this->arrObjects['сРасположение'].'/'.$int0I.'.plmr';
				}

			}
		else
			{
			
			$this->arrObjects['сРасположение']	=$this->arrObjects['сРасположение'];
			$strSearch		=$this->arrObjects['сРасположение'];
			$strPattern		='ls -R -1 "'.$strSearch.'"'.'*'.$strSearchName.'*';
			
			$arrSearch		=exec($strPattern, $arrSearchPaths, $arrSearchPaths2);
			//print_r($arrSearchPaths);
			$strPath		='';
			$ч1РасположениеTotal	=0;
			$мРасположение		=array();
			if(is_array($arrSearchPaths))
				{
				//print_r($arrSearchPaths);
				//exit;
				foreach($arrSearchPaths as $intPosition=>$strRecord)
					{
					if(preg_match('/^[0-9]+\.plmr$/', $strRecord, $arrMatches)===1)
						{
						if(substr($strRecord,0,1)==0)
							{
							$strPath =substr($arrSearchPaths[($intPosition-1)],0 ,-1);
							}
						$мРасположение[]	=$strPath.'/'.$strRecord;
						$ч1РасположениеTotal++;
						}
					}
				}
			if($ч1РасположениеTotal>1)
				{
				$ч0РасположениеTotal			=($ч1РасположениеTotal-1);
				}
			else
				{
				$ч0РасположениеTotal			=0;
				}
			$this->arrObjects['ч0РасположениеTotal']	=$ч0РасположениеTotal;
			$this->arrObjects['мРасположение']		=Pagination::arr($objKIIM, $this);

			for($int0I=$this->arrObjects['мРасположение']['int0Start'];$int0I<=$this->arrObjects['мРасположение']['int0Untill'];$int0I++)
				{
				$this->arrObjects['мТаблица'][]		=$мРасположение[$int0I];
				}
			//echo '<pre>';
			//print_r($мРасположение);
			//echo '</pre>';
			}
		/*if($this->arrReality['bIzAndroid'])
			{
			echo '<pre>';
			print_r($this->arrEvent['arrReality']['strHiFiType']);
			echo '</pre>';
			exit;
			}*/
		//echo '<pre>';
		//print_r($this);
		//echo '</pre>';
		//exit;

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strObjectInit()
		{
		$str='';
		return $str;
		}
	public static function strCopyrightDeclare()
		{
		$str='
		<copyright
			id="PageCopyrightTag"
			class="BC3 TC3 layer_5_Nav no-select halfLine"
			style="
				text-align	:center;
				position	:fixed;
				bottom		:0;
				left		:0;
				width		:100%;
				"
			>
		<font style="font-size:xx-small">© HiFiIntelligentClub.COM tubmulur@yandex.ru 2020 
			<ifRU 
				
				>
				На облаке Reg.Ru.
			</ifRU>
			<ifEN
				>
				On Reg.Ru cloud.
			</ifEN>
			</font>
		</copyright>
		<script>
			var oEl=document.getElementById("PageCopyrightTag");
		</script>';
		return $str;
		}
	public static function strAudioDeclare()
		{
		$str='
		<shader
			class	="fix brick layer_5"
			style	="
				margin-top	:60px;
				height		:40px;
				width		:40px;
				"
			>
			<audio 
				id		="objHiFiIntelligentClubAudio"
				class		="block right"
				
				controls	=""
				name		="media"
				>
				<source 
					src		="" 
					type		="audio/mpeg"
					/>
			</audio>
		</shader>
		';
		return $str;
		}
	public static function strObjectDeclare()
		{
		$str='';
		return $str;
		}
	}
?>