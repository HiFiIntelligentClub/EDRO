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

		$сРасположениеКорень	='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub';
		$strPlatformPrefix	='';
		$strHiFiType		=$this->arrEvent['arrReality']['strHiFiType'];
		$strHiFiType		='HiFi beginner';

		if($this->arrReality['bIzAndroid'])
			{
			$strPlatformPrefix	='/Android';
			}
		if($this->arrReality['bIzApple'])
			{
			$strPlatformPrefix	='/Apple';
			}
		$сРасположениеКорень	=$сРасположениеКорень.$strPlatformPrefix;
		$strSearchName		=сПреобразовать(mb_strtolower($this->arrEvent['arrReality']['strName']),'вКоманду');
		if(strlen($strSearchName)<3)
			{
			$strSearchName	='';
			}
		//$strSearchStyle		=сПреобразовать(mb_strtolower($this->arrEvent['arrReality']['strStyle']),'вКоманду');
		$strSearchGenre		=сПреобразовать(mb_strtolower($this->arrEvent['arrReality']['strGenre']),'вКоманду');
		$strSearch		=мЖанр_мЯзык_мТранскрипция($strSearchGenre);

		$strSearchICQR		=сПреобразовать(mb_strtolower($this->arrEvent['arrReality']['strICQRType']),'вКоманду');

		$strSearchType   	=empty($strSearchName)? 'unordered':'search';

		$strSearchPath		='/Stations';
		$strSearchPath		.= '/ICQR_Q/'.$strHiFiType.'/unordered';
		if($strSearchGenre=='')
			{
			
			}
		else
			{
			$strSearchPath	.= '/Genres/search'.'/'.$strSearchGenre.'/unordered';
			}
		
		/*
		if($strSearchICQRType=='')
			{
			
			}
		else
			{
			$strSearchPath	.= '/ICQRType/search'.'/'.$strSearchCodec.'/unordered';
			}
		*/

		if($strSearchPath=='')
			{
			$strSearchPath='/Stations/unordered';
			}

		$strSearchPath;

		$this->arrObjects['сРасположение']		=$сРасположениеКорень.$strSearchPath;

		if($strSearchName=='')
			{
			$objTotal	=FileRead::objJSON($objKIIM, $this->arrObjects['сРасположение'].'/total.plmr');

			$this->arrObjects['ч0РасположениеTotal']	= $objTotal->int0Total;
			if($this->arrObjects['ч0РасположениеTotal']=='')
				{
				echo 'No data';
				}
			
			$this->arrObjects['мРасположение']		=Pagination::arr($objKIIM, $this);
			for($int0I=$this->arrObjects['мРасположение']['int0Start'];$int0I<=$this->arrObjects['мРасположение']['int0Untill'];$int0I++)
				{
				$this->arrObjects['мТаблица'][]	=$this->arrObjects['сРасположение'].'/'.$int0I.'.plmr';
				}
			}
		else
			{
			echo $this->arrObjects['сРасположение']	=substr($this->arrObjects['сРасположение'], 0, -9).'search';
			$strSearch		=$this->arrObjects['сРасположение'].'/*'.$strSearchName.'*';
			$strPattern		='ls -R -1 '.$strSearch;
			$arrSearch		=exec($strPattern, $arrSearchPaths, $arrSearchPaths2);
			$strPath		='';
			$ч1РасположениеTotal	=0;
			$мРасположение		=array();
			if(is_array($arrSearchPaths))
				{
				print_r($arrSearchPaths);
				exit;
				/*foreach($arrSearchPaths as $intPosition=>$strRecord)
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
					}*/
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
			/*echo '<pre>';
			print_r($мРасположение);
			echo '</pre>';*/
			}
		echo '<pre>';
		print_r($this->arrObjects);
		echo '</pre>';
		//exit;
		/*echo '<pre>';
		print_r($this);
		echo '</pre>';
		exit;*/
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strObjectInit()
		{
		$str	=<<<oо2оo
		<script>
			console.log('[V]EDRO.O: Declare');
			console.log('[.++.+.*.*.++.+.+]EDRO.Event: Init event stream graph circle.');
			objEDRO._CircleControllerGraph	=setInterval(objEDRO.funControllerGraph, 1000);
			console.log('[.]EDRO.O: Declare');
		</script>
oо2оo;
		return $str;
		}
	public static function strCopyrightDeclare()
		{
		$str='
		<copyright
			id="PageCopyrightTag"
			class="BC3 TC3 layer_5_Nav no-select"
			style="
				position	:fixed;
				bottom		:0;
				left		:0;
				width		:100%;
				height		:20px;
				text-align	:center;
				font-size	:small;
				"
			>
		© HiFiIntelligentClub tubmulur@yandex.ru 2020 
			<ifRU 
				
				>
				На облаке Reg.Ru.
			</ifRU>
			<ifEN
				>
				On Reg.Ru cloud.
			</ifEN>
		</copyright>
		<script>
			var oEl=document.getElementById("PageCopyrightTag");
		</script>';
		return $str;
		}
	public static function strAudioDeclare()
		{
		/*$str='
		<audio 
			id="objHiFiIntelligentClubAudio"
			class	="fix layer_5"
			style	="margin-top:60px;"
			controls	=""
			name		="media"
			>
			<source src="" type="audio/mpeg"/>
		</audio>';
		return $str;*/
		}
	public static function strObjectDeclare()
		{
		$str	=	<<<oо2оo

		<script>
			console.log('[V]EDRO.O: Declare');
			objEDRO.funControllerGraph= function()
				{
				var objDate	=new Date();
				if(objPlayer.bIzPlaying) //!!!    objReality.bIzPlayerPlaying!!!
					{
					document.title	=objPlayer.strStationName+' at HiFiIntelligentClub.com';
					//objPlayer.objVisibleControlsPlayingDuration.innerHTML=objPlayer.intPlayingDuration;
					//objPlayer.objVisibleControlsPlayingDuration.innerHtml	=objPlayer.intPlayingDuration;
					objPlayer.intPlayingDuration++;
					}
				if(objReality.arrPlayer.bIzLoading||objReality.arrPlayer.bIzPlaying)
					{
				//	console.log(objPlayer.objAudio.textTracks);
					if(objPlayer.objAudio.networkState==1)
						{
						objIndicatorNetwork.objStrSrvReady.style.backgroundColor	='yellow';
						objIndicatorNetwork.objStrSrvReady.style.color			='black';
						}
					else if(objPlayer.objAudio.networkState==2)
						{
						objIndicatorNetwork.objStrSrvReady.style.backgroundColor	='green';
						objIndicatorNetwork.objStrSrvReady.style.color			='white';
						}
					else
						{
						objIndicatorNetwork.objStrSrvReady.style.backgroundColor	='red';
						objIndicatorNetwork.objStrSrvReady.style.color			='white';
						}

					if(objPlayer.objAudio.readyState==0)
						{
						objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='red';
						objIndicatorNetwork.objStrSrvPortsReady.style.color		='white';
						}
					else if(objPlayer.objAudio.readyState==1)
						{
						objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='yellow';
						objIndicatorNetwork.objStrSrvPortsReady.style.color		='black';
						}
					else if(objPlayer.objAudio.readyState==2)
						{
						objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='blue';
						objIndicatorNetwork.objStrSrvPortsReady.style.color		='white';
						}
					else if(objPlayer.objAudio.readyState==3)
						{
						objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='green';
						objIndicatorNetwork.objStrSrvPortsReady.style.color		='white';
						}
					else
						{
						objIndicatorNetwork.objStrSrvPortsReady.style.backgroundColor	='white';
						objIndicatorNetwork.objStrSrvPortsReady.style.color		='black';
						}
					objPlayer.intPlayingDuration++;
					}
				
				if(objReality.arrPlayer.bIzLoading)
					{
					//objPlayer.objVisibleControlsLoadingDuration.innerHTML=objPlayer.intLoadingDuration;
					if(objPlayer.intPlayerLoadingAnim==3)
						{
						objPlayer.intPlayerLoadingAnim	=0;
						objPlayer.strPlayerLoadingAnim	='';
						}
					objPlayer.intPlayerLoadingAnim++;
					objPlayer.strPlayerLoadingAnim	+='.';
					document.title	=objPlayer.strPlayerLoadingAnim+decodeURIComponent(objPlayer.strStationName)+'on HiFiIntelligentClub.com';
					objIndicatorMasterClock.objStrServerLoading.innerHTML	=objReality.intMaxLoadingTime+'/'+objReality.intLoadingTime+'/'+objPlayer.intLoadingDuration;
					if(!objPlayer.bIzNeedToBeStoppedEvent)
						{
						//objPlayer.objAudio.load();
						}
					objPlayer.intLoadingDuration++;
					//objPlayer.bIzLoading=false;
					}
				else
					{
					objPlayer.strPlayerLoadingAnim	='';
					document.title	=objPlayer.strPlayerLoadingAnim+decodeURIComponent(objPlayer.strStationName)+'|HiFiIntelligentClub.com';
					}
				if(objReality.bIzLoading)
					{
					objIndicatorMasterClock.objStrServerLoading.innerHTML	=objReality.intMaxLoadingTime+'/'+objReality.intLoadingTime;
					if(objReality.intLoadingTime>=objReality.intMaxLoadingTime)
						{
						objReality.intMaxLoadingTime=objReality.intLoadingTime;
						}
					objReality.intLoadingTime++;
					}
				//if(objPlayer.bIzError)
				//	{
			
				//	}
				if(objReality.arrPlayer.bIzWaiting)
					{
				
					}
				if(objEDRO.intVector==2)
					{
				//	console.log('[=^Vvv]EDRO.Event: (objEDRO.intVector==2)');
				//	console.log(objEDRO.intStep);
					objEDRO.intVector	=0;
					if(bizHiFiNavigationInputSelect)
						{
						//console.log('[=^Vvv]objReality.bizAndroid&&objHiFiNavigation.bizPageSelectFoucus');
						//alert('objReality.bizAndroid&&bizHiFiNavigationInputSelect');
						}
					else
						{
						//console.log('[=^Vvv]!objReality.bizAndroid&&!objHiFiNavigation.bizPageSelectFoucus');
						objDesign._UpdateDimensions();
						objDesign._CheckElements();
						}
					
					
				//	console.log('[[=^...]EDRO.Event: (objEDRO.intVector==2)');
					}
				/*if(objKIIM_StatisticalMembrane.bIzRunning==true)
					{
					objKIIM_StatisticalMembrane._incTime();
					}*/
				objIndicatorMasterClock.objStr.innerHTML	=objEDRO.intStep++;
				objEDRO.intVector++;
				objEDRO._CircleControllerGraph;
				return 0;
				}
			console.log('[.]EDRO.O: Declare');
		</script>
oо2оo;
		return $str;
		}
	}
?>