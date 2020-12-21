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
	protected $strBasePath	='/home/EDRO';
	public function __construct($_objKIIM)
		{$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
	///////////////////////////////////////////////////////////////////////////////////////////////////////////
	/*+1+*/	$this->_IsDNT();
	/*+2+*/	$this->_isConsole($objKIIM);

	///////////////////////////////////////////!!!!
		
		
		$this->arrReality['strRoleSignal']		='Listener';
		$this->arrReality['strListnersPath']		='/home/EDRO.o2o/'.$this->arrReality['strRoleSignal'];
		$this->arrReality['strListenerId']		=СоздатьСеанс::с($objKIIM, $this->arrReality['strRoleSignal'] , $this->arrEvent['arrParams']);
		$this->arrReality['arrCurrentListeners']	=ПрочитатьСлушателей::м($objKIIM, $this->arrReality['strListnersPath']);

		/////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		$this->arrReality['strRoleLangSignal']		=rmLb(FileRead::str($objKIIM, $this->strBasePath.'/3.Reality/User/'.$this->arrReality['strRoleSignal'].'/.strLang.php'));
		$this->arrReality['strLangSignal']		=strGetDefaultLanguage();
		$this->arrReality['bIzAndroid']			=$this->bIzAndroid();
		$this->arrReality['bIzApple']			=$this->bIzApple();
		$this->arrReality['bIzDesktop']			=$this->bIzDesktop();
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
		if((strpos($strUserAgent, 'iPad')!==false)||(strpos($strUserAgent, 'iPhone')!==false)||(strpos($strUserAgent, 'iPod')!==false))
			{
			$bIz=true;
			}
		return $bIz;
		//return true;
		}
	private function bIzDesktop()
		{
		$bIz=false;
		if(!$this->bIzAndroid()||!$this->bIzApple())
			{
			$bIz=true;
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
		return EDRO::strObjInit('Reality');
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
					this.arrPlayer		=[];
					this.arrPlayer.bIzLoading	=false;
					this.arrPlayer.bIzPlaying	=false;
					//this.arrParamG0.
					//this.strParams		='';
					this.intLoadingTime		=0;
					this.intMaxLoadingTime		=0;
					this.bIzError			=false;
					this.bIzLoading			=false;
					//this.bIzWaiting			=false;
					//this.bIzPlaying			=false;
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
					if((this.deviceType.indexOf("android")==-1)&&(this.deviceType.indexOf("iphone")==-1) || (this.deviceType.indexOf("ipad")==-1)|| (this.deviceType.indexOf("ipod")==-1))
						{
						//this.objDebugString.innerHTML='Hfic.Samin+!!Desktop test!! all is ok';  //temp
						return true;
						}
					return false;
					}
				}
		console.log('[.]EDRO.Reality: Declare');
		</script>
oo2oo;
		return $str;
		}
	}
?>
