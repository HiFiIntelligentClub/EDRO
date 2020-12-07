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
 ////// 2020                   /////  /
//        /\                  // /   
//      <  **>               /// /    
 //////   jl                ///// /   
./././././././*/
class Event extends Design
	{
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		// 0.strNDigit ->  arrAllIncomeActions
		// 0.strNDigit ->  arrAllIncomeParametrs
		$this->arrEvent			=arrGetEventSetter();
		
		$this->arrEvent['bIsDynamic']	=$this->bIsDynamic();
		$this->arrEvent['strObjectParams']='objEvent.arrParams={'.strArrayRec2JS($this->arrEvent, 'arrParams').'};';
		//echo '<pre>';
		//print_r($this->arrEvent);
		//echo '</pre>';
		//exit;
		//Event::strObjectDeclare();
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		parent::__construct($objKIIM);

		
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


	private function bIsDynamic()
		{
		$bIsDynamic	=false;
		if(isset($_REQUEST['d']))
			{
			$bIsDynamic	=true;
			}
		return $bIsDynamic;
		}
	public static function strObjectInit()
		{
		$str	=<<<oо2оo
		<script>
			console.log('[V]EDRO.Event: Init');
			var objEvent=new Event();
			console.log('[.]EDRO.Event: Init');
		</script>
oо2оo;
		return $str;
		}
	public function strParamsInit()
		{
		
		$str='<script>';
			$str.='console.log(\'[V]EDRO.Event: strParamsInit()\');';
			//$str.='objEvent.arrParams={"strOne":"1234"};';
			$str.=rmlb($this->arrEvent['strObjectParams']);
			$str.='console.log(\'[.]EDRO.Event: strParamsInit()\');';
		$str.='</script>';
		return $str;
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oо2оo
		<script>
			console.log('[V]EDRO.Event: Declare');
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
					this.arrParams		=[];
					this.arrParamsPair	=[];
					this.arrParamsTemp	=[];
					/*this.arrParams={
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
					//console.log(this.arrParams);
					this.objNav		={'HFIC':'ICQR'};
					this._SetLanguageMood();
					this._SetRoleSignal();

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
								var strAudio 		= JSON.parse(objEvent.objXHR.response);
								//strAudio
								objPlayer.objAudio.src	=strAudio;
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
					objEvent.strEvent			='/getStation';
					objEvent.arrParams.strStationId		=strPlayerId;
					objEvent._RequestURLDyn();
					console.log('[..]EDRO.Objects: _PlayStation(strPlayerId)');
					}
				_Search()
					{
    					console.log('[Vv]EDRO.Objects: _Search()');
					objReality.bIzDynaScreen		=true;
					objEvent.strEvent			='/Search';
					objEvent.arrParams.page			=0;
					objDynaScreenEventIndicator.objHTML.style.display="block";
					this._CreateURL();
					//objEvent.PushEvent; ////// ++
					this._Request();
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
					objEvent.arrParamsPair		=objEvent.strParams.split("&");
					
					//console.log(objEvent.arrParamsPair);
					Object.keys(objEvent.arrParamsPair).forEach(function(strKey)
						{
						objEvent.arrParamsTemp	=objEvent.arrParamsPair[strKey].split('=');
						objEvent.arrParams[objEvent.arrParamsTemp[0]]	=decodeURIComponent(objEvent.arrParamsTemp[1]);
						});

					objSearch.objValueInputstrName.value		=objEvent.arrParams.strName;
					objSearch.objValueInputstrStyle.value		=objEvent.arrParams.strStyle;
					objSearch.objValueInputintBitrate.value		=objEvent.arrParams.intBitrate;
					objSearch.objValueInputstrCodec.value		=objEvent.arrParams.strCodec;

					console.log(objSearch.objValueInputstrName.value);
					objEvent.strURL			=obj.pathname+'?'+objEvent.strParams;
					objEvent.strURLDyn		=objEvent.strURL+'&d=1';//objObjects->objEvent
					objDynaScreenEventIndicator.objHTML.style.display	="block"; 
					objDynaScreen.objXHR.open('POST', objEvent.strURLDyn);
					objDynaScreen.objXHR.send();
					console.log('[..]EDRO.Objects: _CreateParamsArr(obj)');
					}
				_CreateParamsStr()
					{
					console.log('[Vv]EDRO.Reality: _CreateParamsStr()');
					//console.log(this.arrParam);
					objEvent.strParams		='';
					Object.keys(objEvent.arrParams).forEach(function(strKey)
						{
						objEvent.arrParams[strKey]	=encodeURIComponent(objEvent.arrParams[strKey]);
						//alert(objEvent.arrParams[strKey]);
						objEvent.strParams	+='&'+strKey+'='+objEvent.arrParams[strKey];
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
				_UpdateURLDyn(bIzHistory=true) //objObjects->objEvent 
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
					console.log('[..]EDRO.Objects: objDynaScreen objXHR.send()'+objEvent.strURL);//objObjects->objEvent4
					}
				_ActualizeSearch()
					{
					objSearch.objValueInputstrName.value	=decodeURIComponent(this.arrParams['strName']);
					objSearch.objValueInputstrStyle.value	=decodeURIComponent(this.arrParams['strStyle']);
					objSearch.objValueInputintBitrate.value	=this.arrParams['intBitrate'];
					objSearch.objValueInputstrCodec.value	=this.arrParams['strCodec'];
					}
				_SetLanguageMood()
					{
					console.log('[Vv]EDRO.Reality: Master Mood SET  _SetLanguageMood');
					document.body.className		+=' '+strSignalLang;
					console.log('[..]EDRO.Reality: Master Mood SET  _SetLanguageMood');
					}
				_SetRoleSignal()
					{
					console.log('[Vv]EDRO.Reality: Master Mood SET  _SetRoleSignal()');
					this.objRoleSignal		=document.getElementById('SignalRole');
					this.objRoleSignal.innerHTML	=strSignalRole;
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
	}
?>