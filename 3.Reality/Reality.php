<?php
                     /*_____
© Andrey Chekmaryov 2020

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
 ////// Энергия                /////  / 
//  2020  /\                  // /   
//      <  **>               /// /  
 //////   jl                ///// /    
./././././././*/
class Reality extends Objects
	{
	protected 	$strBasePath	='/home/EDRO';
	public 		$arrReality	=array();
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
	///////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*+1+*/	$this->_IsDNT();
	/*+2+*/	$this->_isConsole($objKIIM);

	///////////////////////////////////////////!!!!
		
		$this->arrReality['сРасположениеКорень']	='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub';
		$this->arrReality['strRoleSignal']		='Listener';
		$this->arrReality['strListnersPath']		='/home/EDRO.o2o/'.$this->arrReality['strRoleSignal'];
		$this->arrReality['strListenerId']		=СоздатьСеанс::с($objKIIM, $this->arrReality['strRoleSignal'] , $this->arrEvent['arrReality']);
		$this->arrReality['arrCurrentListeners']	=ПрочитатьСлушателей::м($objKIIM, $this->arrReality['strListnersPath']);
		//exit;
		/////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		$this->arrReality['strRoleLangSignal']		=rmLb(FileRead::str($objKIIM, $this->strBasePath.'/3.Reality/User/'.$this->arrReality['strRoleSignal'].'/.strLang.php'));
		$this->arrReality['strLangSignal']		=strGetDomainLang();
		$this->arrReality['bIzAndroid']			=$this->bIzAndroid();
		$this->arrReality['bIzApple']			=$this->bIzApple();
		$this->arrReality['bIzDesktop']			=$this->bIzDesktop();
		
		//print_r($this->arrReality);
		//print_r($_SESSION);
		//print_r($this->arrReality);
		//exit(0);


		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		parent::__construct($objKIIM);
		}
	public static function strBasePath()
		{
		return'/home/EDRO';
		}
	private function _isConsole($_objKIIM)
		{
		$this->arrReality['bIzConsole']=false;
		if(php_sapi_name()=='cli')
			{
			$this->arrReality['bIzConsole']=true;
			}
		else
			{
			}
		}
	private function bIzCheckMaPhone()
		{
		$bIz=false;
		$strUserAgent=strtolower($_SERVER['HTTP_USER_AGENT']);
		if(strpos($strUserAgent, 'edro:polimer')!==false)
			{
			$bIz=true;
			}
		return $bIz;
		//return true;
		}
	private function bIzAndroid()
		{
		$bIz=false;
		$strUserAgent=strtolower($_SERVER['HTTP_USER_AGENT']);
		if(strpos($strUserAgent, 'android')!==false)
			{
			$bIz=true;
			}
		return $bIz;
		//return true;
		}
	private function bIzApple()
		{
		$bIz=false;
		 $strUserAgent=strtolower($_SERVER['HTTP_USER_AGENT']);
		if((strpos($strUserAgent, 'ipad')!==false)||(strpos($strUserAgent, 'iphone')!==false)||(strpos($strUserAgent, 'ipod')!==false))
			{
			$bIz=true;
			}
		return $bIz;
		//return true;
		}
	private function bIzDesktop()
		{
		$bIz=false;
		if($this->bIzAndroid()===false)
			{
			if($this->bIzApple()===false)
				{
				$bIz=true;
				}
			}
		return $bIz;
		}
	private function _IsDNT()
		{
		if(isset($_SERVER['HTTP_DNT'])&&$_SERVER['HTTP_DNT']==1)
			{
			require_once('/home/EDRO/4.Objects/Read/Cloud/Disk/Pages/_isDnt.php');
			exit(0);
			}
		}
	public static function strObjectInit()
		{	
		$str	=EDRO::strObjInit('Reality');
		$str	.="
			<script>
				console.log('[.++.+.*.*.++.+.+]EDRO.objReality.O: Init event stream graph circle.');
				objReality._CircleControllerGraph	=setInterval(objReality.funControllerGraph, 1000);
				console.log('[......*.*.......]EDRO.objReality.O: Init event stream graph circle.');
			</script>
			";
		return $str;
		}

	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
		console.log('[V]EDRO.Reality: Declare');
			
			class Reality
				{
				constructor()
					{
					console.log('[Vv]EDRO.Reality: Construct');
					//this.objDebugString		=document.getElementById('strPlayerPlayEventsDebugString');
					this.strLanguage		='';
					this.intStep			=0;
					this.intVector			=0;
					this.intStep2News		=0;

					this.arrPlayer			=[];
					this.arrPlayer.bIzLoading	=false;
					this.arrPlayer.bIzPlaying	=false;
					//this.arrParamG0.
					//this.strParams		='';
					this.intLoadingTime		=0;
					this.intMaxLoadingTime		=0;
					this.bIzError			=false;
					this.bIzLoading			=false;
					//this.bIzWaiting		=false;
					//this.bIzPlaying		=false;
					this.bIzHistory			=false;
					this.bIzPlayer			=false;
					this.bIzDynaScreen		=false;
					this.bIzCheckMaNet		=false;
					this.deviceType			=navigator.userAgent.toLowerCase();
					//alert(this.deviceType);
					this.bIzAndroid			=this.bIzAndroid();
					this.bIzApple			=this.bIzApple();
					this.bIzDesktop			=this.bIzDesktop();
					console.log('[..]EDRO.Reality: Construct');
					}
				bIzApple()
					{
					if((this.deviceType.indexOf("iphone")>-1) || (this.deviceType.indexOf("ipad")>-1)|| (this.deviceType.indexOf("ipod")>-1))
						{
						return true;
						}
					return false;
					}
				bIzAndroid()
					{
					if(this.deviceType.indexOf("android")>-1)
						{
						return true;
						}
					return false;
					}
				bIzDesktop()
					{/*и=* или=+    а*(и+с+в)    аи+ас+ав                  */
					/*		1  1 1 1=1 десктоп    					*/
					/*		0  0 0 0						*/
					/*									*/
					if(
					(this.deviceType.indexOf("android")==-1)&&
					(this.deviceType.indexOf("iphone")==-1 || 
					this.deviceType.indexOf("ipad")==-1|| 
					this.deviceType.indexOf("ipod")==-1)
					)
						{
						//this.objDebugString.innerHTML='Hfic.Samin+!!Desktop test!! all is ok';  //temp
						return true;
						}
					return false;
					}
				funControllerGraph()
					{
					console.log('[Vv]EDRO.O: Declare');
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
							objPlayer.intPlayerLoadingAnim				=0;
							objPlayer.strPlayerLoadingAnim				='';
							}
						objPlayer.intPlayerLoadingAnim++;
						objPlayer.strPlayerLoadingAnim				+='.';
						document.title						=objPlayer.strPlayerLoadingAnim+decodeURIComponent(objPlayer.strStationName)+'on HiFiIntelligentClub.com';
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
							objReality.intMaxLoadingTime		=objReality.intLoadingTime;
							}
						objReality.intLoadingTime++;
						}
					//if(objPlayer.bIzError)
					//	{
				
					//	}
					if(objReality.arrPlayer.bIzWaiting)
						{
					
						}
					if(objReality.intVector==2)
						{
						objReality.intVector	=0;
						if(bizHiFiNavigationInputSelect) //In Dynascreen input focus, no template transitions, wait for human input
							{
							}
						else
							{
							//objIndicatorLang._UpdateIndicator();
							objDesign._UpdateDimensions();
							objDesign._CheckElements();
							}
						}
					if(objReality.intStep2News==60)
						{
						objReality.intStep2News	=0;
						}
					objIndicatorMasterClock.objStr.innerHTML	=objReality.intStep++;
					objReality.intVector++;
					objReality.intStep2News++;
					objEDRO._CircleControllerGraph;
					console.log('[..]EDRO.O: Declare');
					return 0;
					}
				}
		console.log('[.]EDRO.Reality: Declare');
		</script>
oo2oo;
		return $str;
		}
	}
?>
