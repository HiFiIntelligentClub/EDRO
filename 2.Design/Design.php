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
	public function __construct($_objKIIM)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		$arrParams['/']=
		array(
			'strTemplate'		=>'/home/EDRO/2.Design/.strFileList.php',
			);
		$arrParams['/search']=
		array(
			'strTemplate'		=>'/home/EDRO/2.Design/.strFileList.php',
			);
		$this->arrDesign	=$arrParams[$this->arrEvent['strAction']];

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		parent::__construct($objKIIM);

		}
	public static function strObjectInit()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[V]EDRO.Design: _Init');
			var objDesign=new Design();
			console.log('[.]EDRO.Design: _Init');
		</script>
oo2oo;
		return $str;
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
					this.intBodyHeight;
					this.intBodyWidth;
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
					//this.intBodyHeight	=document.body.offsetHeight;
					//this.intBodyWidth	=document.body.offsetWidth;
					objDynaScreen._GetDimensions();
					this.objElement		=document.getElementsByTagName('station')[0];
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
					this.intScreenHeight	=(objDynaScreen.intHeight-110);
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
						this.intTotalElements=1;
					//	console.log('[...]EDRO.Design: intTotalElements<=1');
						}
					objIndicatorDimensions.objStr.innerHTML	=this.intScreenWidth+'x'+this.intScreenHeight+'<br/>V'+this.intWidthElements+':H'+this.intHeightElements+':T'+this.intTotalElements;
					if(objEvent.arrParams.int1OnPage!=this.intTotalElements)
						{
						//objEvent.arrParams.strName=objPlayer.strStationName; objEvent.arrParams.strStyle=\'\';objEvent.arrParams.intBitrate=\'\';objEvent.arrParams.strCodec=\'\';objEvent._UpdateURLDyn(true);
						//EDRO::strObjInit('Search');
						objSearch	=new Search();
						objEvent.arrParams.strName		=objSearch.strValueInputstrName;
						objEvent.arrParams.strStyle		=objSearch.strValueInputstrStyle;
						objEvent.arrParams.intBitrate		=objSearch.strValueInputintBitrate;
						objEvent.arrParams.strCodec		=objSearch.strValueInputstrCodec;
						objEvent.arrParams.int1OnPage		=this.intTotalElements;
						//console.log(objEvent.arrParams.int1OnPage);
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