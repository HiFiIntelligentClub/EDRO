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
class HiFiNavigation
	{
	public $strHTML;
	public function __construct($_objKIIM, $_arrPagination, $arrReality, $objEDRO)
		{
		$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		unset($_objKIIM);

		$intPage		=$_arrPagination['int0Page'];
		$intStart		=$_arrPagination['int0Start'];
		$intEnd			=$_arrPagination['int0Untill'];
		$intPageParamName	='int0Page';
		$intPages		=$_arrPagination['int0Pages'];
		$intTotal		=$_arrPagination['int0Total'];
		$intNextPage		=($intPage+1);
		$intPrevPage		=($intPage-1);
		if($objEDRO->arrReality['strLangSignal']=='RU')
			{
			$arrO['Forward']	='Нажмите, чтобы перейти на следующую страницу.';
			$arrO['Backward']	='Нажмите, чтобы перейти на предидущую страницу.';
			$arrO['Counters']	='[Отображены станции от-до][Не отображено станций до конца списка][Всего станций]';
			$arrO['Selector']	='Введите номер страницы на которую вы хотите перепрыгнуть.';
			}
		else
			{
			$arrO['Forward']	='Press this button, to go to the next page.';
			$arrO['Backward']	='Press this button, to go to the previous page.';
			$arrO['Counters']	='[Showing stations from-to][Stations remain][Total stations]';
			$arrO['Selector']	='Enter the page number to jump to.';
			}
		//echo $intPageParamName;
		//echo $intNextPage;
		//	$arrEventLink=arrEventLink($arrReality, $intPageParamName, $intNextPage, true);
		//	echo $arrEventLink['strHref'];
		
		$str='
		<pageNavShader
			class="
				fixed V1 block layer_4 BC1 TC1 BBV doubleLine
				"
			style="
				left		:0;
				width		:100%;
				"
			>
		</pageNavShader>
		<pageNav
			class="
				fixed V1 block layer_5 BC1 TC1 BBV  doubleLine
				"
			style="
				left		:15%;
				width		:70%;
				text-align	:center;
				margin		:auto;
				"
			>';

			if($intPage<$intPages)
				{
				$arrEventLink=arrEventLink($arrReality, $intPageParamName, $intNextPage, true);
				$str.=
				'<a
				id	="objPageForward"'
				.$arrEventLink['strHref'].' '
				.$arrEventLink['strOnClick'].
				'class="block right BBV BTA BC3 TC3 cursor no-select doubleLine"
					style="
						width		:34%;
						text-align	:center;
						line-height	:39px;
						text-decoration	:none;
						"
					title="'.$arrO['Forward'].'"
					>
					>>
				</a>';
				}
			else
				{
				$str.=
				'<a
					id	="objPageForward"
					href	="#"
					onclick	=""
					class	="block right BBV BTA BC1 TC1 cursor no-select"
					style	="
						width		:34%;
						height		:100%;
						text-align	:center;
						text-decoration	:none;
						"
					>
				</a>';
				}
			$str.=
			'<pagerNum
				class="fix V1 block tcenter BC1 TC1 BLL BRJ BBV BTA no-select doubleLine"
				style="
					left		:36%;
					width		:28%;
					"
				title="'.$arrO['Counters'].'"
				>


				<strPage
					class="brick tcenter"
					>
					<input 
						id	="objPageNumberSelect"
						class	=""
						style	="
							width:40%;
							"
						onChange="
							//bizHiFiNavigationInputSelect	=false; //Need to send result
							objEvent.arrReality.'.$intPageParamName.'=this.value;
							objEvent._UpdateURLDyn();
							return false;
							"
						onFocusin="
							//objHiFiNavigation.bizPageSelectFoucus=true;
							bizHiFiNavigationInputSelect	=true;
							"
						onfocusout="
							//objHiFiNavigation.bizPageSelectFoucus=false;
							bizHiFiNavigationInputSelect	=false;
							"
					type	="number" 
					value	="'.$intPage.'"
					step	="1" 
					min	="0" 
					max	="'.$intPages.'"
					title	="'.$arrO['Selector'].'"
					/>
					<strPages
						id	="objPageMaximum"
						class	="line"
						style="
							font-size	:x-small;
							width:60%;
							"
						>
						<ifRU>из </ifRU>
						<ifEN>of </ifEN>
						<int0Max
							id	="objPageMaximum"
							>
							'.$intPages.'
						</int0Max>
					</strPages>
				</strPage>
			</pagerNum>';
			if($intPage<1)
				{
				$str.='
				<a
					id	="objPageBackward"
					onclick	=""
					class	="block left BBV BTA BC1 TC1 cursor no-select"
					style	="
						width		:34%;
						height		:100%;
						text-align	:center;
						text-decoration	:none;
						"
					>
				</a>';
				}
			else
				{
				$arrEventLink=arrEventLink($arrReality, $intPageParamName, $intPrevPage, true);
				$str.=
				'<a
					id	="objPageBackward"'.
					$arrEventLink['strHref'].' '.
					$arrEventLink['strOnClick'].'
					class="block left BBV BTA BC3 TC3 cursor no-select doubleLine"
					style="
						width		:34%;
						text-align	:center;
						line-height	:39px;
						text-decoration	:none;
						"
					title="'.$arrO['Backward'].'"
					>
					<<
				</a>';
				}
		$str.=
		'</pageNav>';
		$str.=HiFiNavigation::strObjectInit();
		$this->strHTML	=$str;
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strObjectDeclare()
		{
		$str	=<<<oo2oo
		<script>
			console.log('[Vv]HiFiNavigation declare.');
			class HiFiNavigation
				{
				objRight		='';
				objLeft			='';
				//bizPageSelectFoucus	=true;
				int0Page		=0;
				int0PageMaximum		=0;
				constructor()
					{
					this.objXHR		=new XMLHttpRequest();
					this.objRight		=document.getElementById("objPageForward");
					this.objLeft		=document.getElementById("objPageBackward");
					this.int0Page		=document.getElementById("objPageNumberSelect").value;
					this.int0PageMaximum	=document.getElementById("objPageMaximum").innerHTML;
					this.objXHR.onload	=function()
						{
						console.log('[Vvv]EDRO.Objects: objXHR.onload');
						if(objHiFiNavigation.objXHR.status==200)
							{	
							if(objReality.bIzPlayer)
								{
								}
							if(objReality.bIzDynaScreen)
								{
								}
							if(objReality.bIzCheckMaNet)
								{
								}
							}
						else
							{
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
						console.log('[...]EDRO.Objects: objXHR.onError');
						}
					console.log('[..]EDRO.Event: Constructor');
					}
				}
			console.log('[..]HiFiNavigation declare.');
		</script>
oo2oo;
		return $str;
		}
	public static function strObjectInit()
		{
		return EDRO::strObjInit('HiFiNavigation');
		}
	public static function strHTML($_objKIIM, $_arrPagination, $_arrReality, $objEDRO=array())
		{
		$objHiFiNavigation=new HiFiNavigation($_objKIIM, $_arrPagination, $_arrReality, $objEDRO);
		return $objHiFiNavigation->strHTML;
		}
	}
?>