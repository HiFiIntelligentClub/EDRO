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
|Event|Design|Reality|Objects|         ЕДРО:ПОЛИМЕР
 ////// 2020                   /////  /  
//        /\                  // /      
//      <  **>               /// /     
 //////   jl                ///// /   
./././././././*/
//My lasts impulse of power 
// ---------------
// | $rRadio     |<--.
// |             |   |
// ---------------   |
//       |  .--FALSE-'
//       V /         | GET Listener
// ----rRadio.Step-- ^--------------------
//       |           |
//       | .--FALSE--'
//       V/
// ---rRadio.Step
//--------------------------------------------------------------------------------------------------------
//EDRO_Абхазия------------------------.
// 1.CreateEnterPoint                 |
// Listener_Package--------------. ^  |
// |                             | ^  | 
// |   1.CreateEnter             | ^  |  
// |   2.Init EDRO               | ^  |
// |   2.1. E getLisSetup        |FALSE
// |   2.2. D SelectTemplateObj  |----|
// |   2.3. R CreateReality      |    |
// |   2.4. O Build Polimer Obj->sendPListener
// |                             |    |
// |                             |    |
// |                             |    |
// '-----------------------------'    |
//------------------------------------'

class Event extends Design
	{
	public $arrEvent;
	public function __construct($мКИМ, $rRadio)
		{
		//$this->arrEvent['arrListener']['arrPlatform']['bIzCheckMaPhone']	= true;
		//$this->arrEvent['arrListener']['arrPlatform']['bIzAndroid']		= true;
		//$this->arrEvent['arrListener']['arrPlatform']['bIzAppleMobile']	= true;
		//$this->arrEvent['arrListener']['arrPlatform']['bIzCheckMaPhone']	= true;
		//$this->arrEvent['arrListener']['arrPlatform']['bIzDesktop']		= true;
		//$this->arrEvent['arrListener']['arrPlatform']['bIzOther']		= true; 
		//$this->arrEvent['arrListener']['arrAccept'][1]			= '';
		//$this->arrEvent['arrListener']['arrAccept'][2]			= '';
		//$this->arrEvent['arrListener']['arrAcceptLanguage']			= '';
		//$this->arrEvent['arrListener']['arrAcceptLanguage']			= '';
		//$this->arrEvent['arrListener']['arrAcceptEncoding']			= '';
		//$this->arrEvent['arrListener']['arrAcceptEncoding']			= '';
		//$this->arrEvent['arrListener']['arrConnection']['strHost']		= 'www.hui.ru';
		//$this->arrEvent['arrListener']['arrConnection']['strType']		= 'close';
		//$this->arrEvent['arrListener']['arrConnection']['strCacheControl']	= 'no';
		//$this->arrEvent['arrListener']['strConnection']['strHost']		= '/hui.ru';
		//$this->arrEvent['arrListener']['strConnection']['strMethod']	= 'POST';
		//$this->arrEvent['arrListener']['strConnection']['strProto']		= 'sFTP/0.9';
		//$this->arrEvent['arrListener']['strConnection']['strObject']	= '/';
		//$this->arrEvent['arrListener']['strConnection']['strObjectType']	= 'audio/wav';
		//$this->arrEvent['arrListener']['arrObject'][int0Page]		= 1;
		//$this->arrEvent['arrListener']['arrObject'][int0OnPage]		= 1;
		//arrGetEvent($rRadio);
		//$arrEvent			= arrRestrictAndReportEventsAndParametrs(
		//			array(
		//				'strEvent'	=>urldecode($strEvent), //Why it is encoded? Shall find
		//				'arrReality'	=>arrEventParams2Array($strEvent),
		//				)
		//			);
		//stream_socket_accept($rRadio, -1);
		//$arrReadRequestFromListenersBrowser	= arrRequest2IndexArray(arrReadRequestFromListenersBrowser($rRadio));
		//1.Create door
		//2.Meet Listener
		//3.Read Listener setup
		//4.Create setup for listener
		//5.Write listener package to listener
		//6.
		$this->arrEvent				= arrGetEventSetter($rRadio);
		$this->arrEvent['bIzDynamic']		= $this->bIzDynamic();
		$this->arrEvent['strArrReality']	= '';
		
		if($this->arrEvent['bIzDynamic'])
			{
			
			}
		else
			{
			$this->arrEvent['strObjectReality']	= 'objEvent.arrReality={'.strArrayRec2JS($this->arrEvent, 'arrReality').'};';
			}
		//echo '<pre>';
		//print_r($this->arrEvent);
		//echo '</pre>';
		parent::__construct($мКИМ);

		
		/*$arrAllParams	=
		array(
			'strAppTitle'			=>'',
			'strAppMembrane'		=>'',
			'strAppCRCS'			=>'',
			'intAppETime'			=>0,

			'strPageTitle'			=>'',
			'strPageMembrane'		=>'',
			'strPageCRCS'			=>'',
			'intPageOTime'			=>0,

			'strListenerPlayingStaionId'	=>'',
			'strListenerSearchStaionName'	=>'',
			'strListenerStyle'		=>'',
			'intListenerBitrate'		=>0,
			'intListenerPage'		=>0,
			'intListenerOnPage'		=>0,

			'strEventURL'			=>'',
			'strEventURLD'			=>'',
			'strEventEDRO_URL'		=>'',
			);*/
		}
	private function bIzDynamic()
		{
		$bIzDynamic	=false;
		if(isset($_REQUEST['d']))
			{
			$bIzDynamic	=true;
			}
		return $bIzDynamic;
		}
	public function strRealityInit()
		{
		$str='<script>';
			//$str.='alert(\'x\');';
			$str.='console.log(\'[V]EDRO.Event: strParamsInit()\');';
			$str.=rmlb($this->arrEvent['strObjectReality']);
			$str.='objEvent._Search();';
			$str.='console.log(\'[.]EDRO.Event: strParamsInit()\');';
		$str.='</script>';
		return $str;
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oо2оo
		<script>
			console.log('[V]EDRO.Event: Declare');
			var bizHiFiNavigationInputSelect	=false;
			class Event
				{
				constructor()
					{
					console.log('[Vv]EDRO.Event: Constructor');
					//this.strURL		='';
					this.strEvent 		='';
					this.objXHR		=new XMLHttpRequest();
					this.strURL		='';
					this.strURLDyn		='';
					this.arrReality		=[];
					this.arrRealityPair	=[];
					this.arrRealityTemp	=[];
					/*this.arrReality={
						'strPlayingStationId'	:'',
						'strName'		:'',
						'strStyle'		:'',
						'intBitrate'		:'',
						'strCodec'		:'',
						'int0Page'		:0,
						'int1OnPage'		:3,
						'int0PlayingStationNum'	:0,
						};*/
					this.strParams		='';
					//console.log(this.arrReality);
					this.objNav		={'HFIC':'ICQR'};
					this._SetLanguageMood();
					this._SetRoleSignal();
					document.onkeydown=function(e)
						{
						console.log(e.keyCode);
						switch(e.keyCode)
							{
							case 9: //TAB

							break;
							case 32: //SpaceBar space fun :)

							break;
							case 27: //ESC
								    
							break;
							case 37: //<-
								objHiFiNavigation	=new HiFiNavigation();
								if(objHiFiNavigation.objLeft.href)  //f&objHiFiNavigation.objRight.int0Page<=objHiFiNavigation.objRight.href.int0PageMaximum
									{
									var arrReality		=objHiFiNavigation.objLeft.href.split('?');
									objEvent._GoToUrl(arrReality[1]);
									}
							break;
							case 39: //->
								objHiFiNavigation	=new HiFiNavigation();
								if(objHiFiNavigation.objRight.href)//&&objHiFiNavigation.objRight.int0Page<=objHiFiNavigation.objRight.href.int0PageMaximu
									{
									var arrReality		=objHiFiNavigation.objRight.href.split('?');
									objEvent._GoToUrl(arrReality[1]);
									}
							break;
							}
						}
					window.onpopstate=function(event)
						{
						console.log('[Vvv]EDRO.Event: onpopstate');
						objEvent._GoBack(event.target.location);
						console.log('[...]EDRO.Event: onpopstate');
						}
					this.objXHR.onload	=function()
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onload');
						if(objEvent.objXHR.status==200)
							{	
							if(objReality.bIzPlayer)
								{
								//console.log(objObjects.objXHR.response);
								var strAudio 		= objEvent.objXHR.response;
								//strAudio
								objPlayer.objAudio.src		=strAudio;
								objPlayer.objAudio.volume	=1;
								objPlayer.objAudio.play();
								//objPlayer.objAudio.load();
								objPlayer.objVisibleControlsStopped.setAttribute('playerId', strAudio);
								objReality.bIzPlayer		=false;
								objReality.bIzLoading		=false;
								//alert('ok');
								}
							/*if(objReality.bIzDynaScreen)
								{
								objDynaScreen.objHTML.innerHTML	=objEvent.objXHR.response;
								objReality.bIzHistory		=false;
								objReality.bIzDynaScreen	=false;
								objReality.bIzLoading		=false;
								}*/
							if(objReality.bIzCheckMaNet)
								{
								objReality.bIzCheckMaNet	=false;
								}
							objReality.bIzPlayer		=false;
							//objReality.bIzLoading		=false;
							objReality.bIzHistory		=false;
							//objReality.bIzDynaScreen	=false;
							objReality.bIzCheckMaNet	=false;
							objPlayer.updateOnReload();
							objDynaScreenEventIndicator.objHTML.style.display="none";
							}
						else
							{
							objReality.bIzPlayer		=false;
							//objReality.bIzLoading		=false;
							objReality.bIzHistory		=false;
							objReality.bIzCheckMaNet	=false;
							objDynaScreenEventIndicator.objHTML.style.display="none";
							}
						console.log('[...]EDRO.Objects: objXHR.onload');
						}
					this.objXHR.onProgress		=function(event)
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onProgress');
						if(event.lengthComputable)
							{
							//console.log('Получено'+event.loaded+'байт из'+event.total+'байт.');
							}
	    					else
							{
							//console.log('Получено'+event.loaded+'байт');
								}
						console.log('[...]EDRO.Objects: objXHR.onProgress');
						}
					this.objXHR.onError=function()
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onError');
						objReality.bIzLoading		=false;
						objReality.bIzPlayer		=false;
						objReality.bIzDynaScreen	=false;
						objReality.bIzCheckMaNet	=false;
						objReality.bIzError		=true;
						
						objDynaScreenEventIndicator.objHTML.style.display="none";
						console.log('[...]EDRO.Objects: objXHR.onError');
						}
						console.log('[..]EDRO.Event: Constructor');
					}
				_PlayStation(strPlayerId)
					{
					console.log('[Vv]EDRO.Objects: _PlayStation(strPlayerId)');
					objReality.bIzPlayer			=true;
					objEvent.arrReality.strListenerDate	=new Date();
					objEvent.strEvent			='/getStation';
					objEvent.arrReality.strStationId		=strPlayerId;
					objEvent._RequestURLDyn();
					console.log('[..]EDRO.Objects: _PlayStation(strPlayerId)');
					}
				_Search()
					{
    					console.log('[Vv]EDRO.Objects: _Search()');
					objReality.bIzDynaScreen		=true;
					objEvent.strEvent			='/Search';
					objEvent.arrReality.page			=0;
					if(objDynaScreenEventIndicator.objHTML!=null)
						{
						objDynaScreenEventIndicator.objHTML.style.display="block";
						}
					//objEvent.PushEvent; ////// ++
					this._RequestURLDyn() //objObjects->objEvent
					console.log('[..]EDRO.Objects: _Search()');
					}
				_CheckMaNet()
					{
					console.log('[Vv]EDRO.Objects: _CheckMaNet()');
					objReality.bIzHistory			=false; //objObjects->objReality
					objEvent.strEvent			='/checkMaNet';
					objEvent._CreateURL();			//objObjects->objEvent
					objEvent._Request();			//objObjects->objEvent
					console.log('[..]EDRO.Objects: _CheckMaNet()');
					}
				_GoBack(obj)
					{
					console.log('[Vv]EDRO.Objects: _CreateParamsArr(obj)');
					objReality.bIzHistory		=false;
					objReality.bIzLoading		=true;
					objReality.bIzDynaScreen	=true;
					objReality.intLoadingTime	=0;
					objEvent.strParams		=obj.search.substr(1);
					//console.log(objEvent.strParams);
					objEvent.arrRealityPair		=objEvent.strParams.split("&");
					
					//console.log(objEvent.arrRealityPair);
					Object.keys(objEvent.arrRealityPair).forEach(function(strKey)
						{
						objEvent.arrRealityTemp	=objEvent.arrRealityPair[strKey].split('=');
						objEvent.arrReality[objEvent.arrRealityTemp[0]]	=decodeURIComponent(objEvent.arrRealityTemp[1]);
						});

					objSearch.objValueInputstrName.value		=objEvent.arrReality.strName;
					objSearch.objValueInputstrGenre.value		=objEvent.arrReality.strGenre;
					//objSearch.objValueInputintBitrate.value		=objEvent.arrReality.intBitrate;
					//objSearch.objValueInputstrCodec.value		=objEvent.arrReality.strCodec;

					console.log(objSearch.objValueInputstrName.value);
					objEvent.strURL			=obj.pathname+'?'+objEvent.strParams;
					objEvent.strURLDyn		=objEvent.strURL+'&d=1';//objObjects->objEvent
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objDynaScreen.objXHR.open('POST', objEvent.strURLDyn);
					objDynaScreen.objXHR.send();
					console.log('[..]EDRO.Objects: _CreateParamsArr(obj)');
					}
				_GoToUrl(strParams)
					{
					console.log('[Vv]EDRO.Objects: _GoToUrl(strParams)');
					objReality.bIzHistory		=false;
					objReality.bIzLoading		=true;
					objReality.bIzDynaScreen	=true;
					objReality.intLoadingTime	=0;
					objEvent.strParams		=strParams;
					console.log(objEvent.strParams);
					objEvent.arrRealityPair		=objEvent.strParams.split("&");
					
					//console.log(objEvent.arrRealityPair);
					Object.keys(objEvent.arrRealityPair).forEach(function(strKey)
						{
						objEvent.arrRealityTemp	=objEvent.arrRealityPair[strKey].split('=');
						objEvent.arrReality[objEvent.arrRealityTemp[0]]	=decodeURIComponent(objEvent.arrRealityTemp[1]);
						});

					objSearch.objValueInputstrName.value		=objEvent.arrReality.strName;
					objSearch.objValueInputstrGenre.value		=objEvent.arrReality.strGenre;


					//console.log(objSearch.objValueInputstrName.value);
					objEvent.strURL			='/?'+objEvent.strParams;
					objEvent.strURLDyn		=objEvent.strURL+'&d=1';//objObjects->objEvent
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objDynaScreen.objXHR.open('POST', objEvent.strURLDyn);
					objDynaScreen.objXHR.send();
					console.log('[..]EDRO.Objects: _GoToUrl(strParams)');
					}
				_CreateParamsStr()
					{
					console.log('[Vv]EDRO.Reality: _CreateParamsStr()');
					//console.log(this.arrParam);
					objEvent.strParams		='';
					Object.keys(objEvent.arrReality).forEach(function(strKey)
						{
						objEvent.arrReality[strKey]	=objEvent.arrReality[strKey];
						//alert(objEvent.arrReality[strKey]);
						objEvent.strParams	+='&'+strKey+'='+objEvent.arrReality[strKey];
						});
					objEvent.strParams		=objEvent.strParams.substr(1);
					//alert(objEvent.strParams);
					console.log('[..]EDRO.Reality: _CreateParamsStr()');
					}
				_CreateURLDyn()
					{
					console.log('[Vv]EDRO.Objects: _CreateUrl()');
					objEvent._CreateParamsStr();
					objEvent.strURL			=objEvent.strEvent+'?'+objEvent.strParams; //objReality->objObjects
					objEvent.strURLDyn		=objEvent.strURL+'&d=1';//objObjects->objEvent
					console.log('[..]EDRO.Objects: _CreateURL()');
					}
				_RequestURLDyn() //objObjects->objEvent
					{
					console.log('[Vv]EDRO.Objects: _Request()');//objObjects->objEvent
					objReality.bIzHistory					=true;
					objReality.bIzLoading					=true;
					objReality.intLoadingTime				=0;
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objEvent._CreateURLDyn();
					objEvent.objXHR.open('POST', objEvent.strURLDyn);
					objEvent.objXHR.send();
					if(objReality.bIzHistory)
						{
						objEvent.strEvent	='/';
						objEvent._CreateURLDyn();
						history.pushState(objEvent.objNav, objEvent.strEvent, objEvent.strURL);
						}
					console.log('[..]EDRO.Objects: _Request()');//objObjects->objEvent
					}
				_UpdateURLDyn(bIzHistory=true, objProcessing='') //objObjects->objEvent 
					{//(CAUTION!!!:Inside of updating object must be information of EDRO DESIGN MATRIX position!!)
					//    //  ///  Don't create functions with declareddestination of the request!! 06.08.2020 ChekMaNet
					console.log('[Vv]EDRO.Objects: objDynaScreen objXHR.send()'+objEvent.strURL);//objObjects->objEvent
					
					objReality.bIzHistory					=bIzHistory;
					objReality.bIzLoading					=true;
					objReality.bIzDynaScreen				=true;
					objReality.intLoadingTime				=0;
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objEvent._CreateURLDyn();
					if(objReality.bIzHistory)
						{
						history.pushState(objEvent.objNav, objEvent.strEvent, objEvent.strURL);
						}
					objDynaScreen.objXHR.open('POST', objEvent.strURLDyn);
					objDynaScreen.objXHR.send();
					if(objProcessing)
						{
						objProcessing.classList.remove('loading');
						}
					console.log('[..]EDRO.Objects: objDynaScreen objXHR.send()'+objEvent.strURL);//objObjects->objEvent4
					}
				_ActualizeSearch()
					{
					objSearch.objValueInputstrName.value	=decodeURIComponent(this.arrReality['strName']);
					objSearch.objValueInputstrGenre.value	=decodeURIComponent(this.arrReality['strGenre']);
					//objSearch.objValueInputintBitrate.value	=this.arrReality['intBitrate'];
					//objSearch.objValueInputstrCodec.value	=this.arrReality['strCodec'];
					}
				_SetLanguageMood() //objEDRO->strReality['strLangSignal'];
					{
					/*console.log('[Vv]EDRO.Reality: Master Mood SET  _SetLanguageMood');
					document.body.className		+=' '+strSignalLang;
					console.log('[..]EDRO.Reality: Master Mood SET  _SetLanguageMood');*/
					}
				_SetRoleSignal()//Visual placement of the role fact in objEDRO->strReality['strRoleSignal'];
					{
					console.log('[Vv]EDRO.Reality: Master Mood SET  _SetRoleSignal()');
					//this.objRoleSignal		=document.getElementById('SignalRole');		//temp
					//this.objRoleSignal.innerHTML	=strSignalRole;					//temp
					console.log('[..]EDRO.Reality: Master Mood SET  _SetRoleSignal()');
					}

				/*_Send()
					{
					console.log('[Vv]EDRO.Event: _Send.');
					if(objReality.bIzHistory)
						{
						console.log('[Vv]EDRO.Event: Push history'+this.strURL);
						//this.objNav.strSearchName		=objSearch.strValueInputName;
						//this.objNav.strSearchStyle		=objSearch.strValueInputStyle;
						//this.objNav.strSearchBitrate		=objSearch.strValueInputBitrate;
						//this.objNav.strSearchCodec		=objSearch.strValueInputCodec;
						history.pushState(this.objNav, 'Search', this.strURL);
						console.log('[..]EDRO.Event: Push history');
						}
					}
				_CheckNetwork()
					{
					
					}*/
				}
			console.log('[.]EDRO.Event: Declare');
		</script>
oо2оo;
		return $str;
		}
	public static function _V($мКИМ, $rRadio)
		{
		return new Event($мКИМ, $rRadio);
		}
	public static function strObjectInit()
		{
		return EDRO::strObjInit('Event');
		}
	
	}
?>