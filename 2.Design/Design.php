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
class Design extends Reality
	{
	public	$arrDesign;
	public function __construct($мКИМ)
		{
		$this->arrDesign['strTemplate']	='/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/'.strDataBase().'/Events/'.сПреобразовать($this->arrEvent['strEvent'], "вКоманду").'/run.php';
		//echo '<pre>';
		//print_r($this->arrDesign);
		//echo '</pre>';
		parent::__construct($мКИМ);
		}
	protected function сПостроитьПакетДанныхЛоготипКартинка($strJPG)
		{
		//$strJPG		=file_get_contents('/home/HiFiIntelligentClub.Ru/Hfic_Samin.jpg');
		return 			"HTTP/1.1 200 OK\r\nContent-Type: image/ico\r\nServer-name: Abhasia LaDa.Rdo\r\nContent-Length: ".strlen($strJPG)."\r\nConnection: close\r\n\r\n".$strJPG;
		}
	protected function сПостроитьПакетДанныхЛоготипИконка($faviconBin)
		{
		//$faviconBin		=file_get_contents('/home/HiFiIntelligentClub.Ru/favicon.png');
		return			"HTTP/1.1 200 OK\r\nContent-Type: image/ico\r\nServer-name: Abhasia LaDa.Rdo\r\nContent-Length: ".strlen($faviconBin)."\r\nConnection: close\r\n\r\n".$faviconBin;
		}
	protected function сПостроитьПакетДанныхРоботТхт($robotsTxt)
		{
		//$robotsTxt		=file_get_contents('/home/HiFiIntelligentClub.Ru/robots.txt');
		 return			"HTTP/1.1 200 OK\r\nContent-Type: text/plain\r\nServer-name: Abhasia LaDa.Rdo\r\nContent-Length: ".strlen($robotsTxt)."\r\nConnection: close\r\n\r\n".$robotsTxt;
		}
	protected function сПостроитьПакетДанных($_objKIIM, $objEDRO)
		{
		$strContentType		='Content-Type: text/html';
		$strNextDate		=date(DATE_RFC822, mktime(0, 0, 0, date("m")  , date("d"), date("Y")+1));
		// "set-cookie: username=aaa13; expires=friday,31-dec-99 23:59:59 gmt; path=/win/internet/html/; domain=citforum.ru;nn";

		//echo $objEDRO->arrDesign['strTemplate']."\n"; 
	
		require			$this->arrDesign['strTemplate'];
		$strBuffer		=str_replace("\r\n\r\n", "", $str);
		unset($str);
		if($objEDRO->arrEvent['bIzDynamic'])
		    	{
			}
		else
			{
			$strBuffer		.='</body>';
			$strBuffer		.='</html>';
			}
		return 	    		"HTTP/1.1 200 OK\r\n".$strContentType."\r\nServer-name: Abhasia LaDa.Rdo\r\nContent-Length: ".strlen($strBuffer)."\r\n".$strCookie."\r\nConnection: close\r\n\r\n".$strBuffer;
		}
	public static function strObjectInit()
		{
		return EDRO::strObjInit('Design');
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO.Design: Declare');
			class Design
				{
				constructor()
					{
					console.log('[Vv]EDRO.Design: Construct');
					this.objStationsOnPage;
					//objEvent._CreateParamsArr();
					//this._UpdateDimensions();
					//objSearch.onPage		=this.intTotalElements;
					//objSearch.strEvent		='';
					//objSearch._CreateUrl();
					//alert(objSearch.strURL);
					//objDynaScreen.strURL		=objSearch.strURL;
					//objEvent.strURL			=objSearch.strURL;
					//objDynaScreen._Update();
					console.log('[..]EDRO.Design: Construct');
					}
				_UpdateDimensions()
					{
					objDynaScreen._GetDimensions();
					
					this.objElement		=document.getElementsByTagName('station')[0];
					if(typeof(this.objElement)=='object')
						{
						if(typeof(this.objElement)=='object')
							{
							this.intElementHeight	=this.objElement.offsetHeight+10;
							this.intElementWidth	=this.objElement.offsetWidth+10;
							}
						else
							{
							this.intElementHeight	=90;
							this.intElementWidth	=410;
							}
						this.intScreenWidth	=objDynaScreen.intWidth;
						this.intScreenHeight	=(objDynaScreen.intHeight-180);
						this.intWidthElements	=Math.floor(this.intScreenWidth/this.intElementWidth);
						if(this.intWidthElements<1)
							{
						//	console.log('[Vvv]EDRO.Design: intWidthElements<=1');
							this.intWidthElements=1;
						//	console.log('[...]EDRO.Design: intWidthElements<=1');
							}
						this.intHeightElements	=Math.floor(this.intScreenHeight/100);
						if(this.intHeightElements<1)
							{
							this.intHeightElements=1;
							}
						this.intTotalElements	=this.intWidthElements*this.intHeightElements;
						if(this.intTotalElements<1)
							{
						//	console.log('[Vvv]EDRO.Design: intTotalElements<=1');
							this.intTotalElements		=1;
						//	console.log('[...]EDRO.Design: intTotalElements<=1');
							}
						//objIndicatorDimensions.objStr.innerHTML	=this.intScreenWidth+'x'+this.intScreenHeight+'<br/>V'+this.intWidthElements+':H'+this.intHeightElements+':T'+this.intTotalElements;
						if(objEvent.arrReality.int1OnPage!=this.intTotalElements)
							{
							//objEvent.arrReality.strName=objPlayer.strStationName; objEvent.arrReality.strStyle=\'\';objEvent.arrReality.intBitrate=\'\';objEvent.arrReality.strCodec=\'\';objEvent._UpdateURLDyn(true);
							//EDRO::strObjInit('Search');
							objSearch				=new Search();
							objEvent.arrReality.strName		=objSearch.strValueInputstrName;
							objEvent.arrReality.strGenre		=objSearch.strValueInputstrGenre;
							//objEvent.arrReality.intBitrate	=objSearch.strValueInputintBitrate;
							//objEvent.arrReality.strCodec		=objSearch.strValueInputstrCodec;
							objEvent.arrReality.int1OnPage		=this.intTotalElements;
							//console.log(objEvent.arrReality.int1OnPage);
							objEvent._UpdateURLDyn(false);
							objIndicatorDimensions.objStr.style.backgroundColor	='red';
							objIndicatorDimensions.objStr.style.color		='#FFF';
							}
						else
							{
							objIndicatorDimensions.objStr.style.backgroundColor	='';
							objIndicatorDimensions.objStr.style.color		='';
							}
						}
					}
				_CheckElements()
					{
					//console.log('[Vvv]EDRO.Design: checkElements');
					objDesign.objStationsOnPage	=document.getElementsByTagName('station');
					if(objDesign.objStationsOnPage['length']==0)
						{
						}
					//console.log(objDesign.objStationsOnPage['length']);
					//console.log('[...]EDRO.Design: checkElements');
					}
				}
			console.log('[.]EDRO.Design: Declare');
		</script>
oo2oo;
		return $str;
		}
	}
?>