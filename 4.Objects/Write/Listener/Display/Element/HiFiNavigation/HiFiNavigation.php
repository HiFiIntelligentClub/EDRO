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
	public function __construct($_objKIIM, $_arrPagination, $arrReality)
		{
		$objKIIM=$_objKIIM;
		   unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$intPage		=$_arrPagination['int0Page'];
		$intStart		=$_arrPagination['int0Start'];
		$intEnd			=$_arrPagination['int0Untill'];
		$intPageParamName	='int0Page';
		$intPages		=$_arrPagination['int0Pages'];
		$intTotal		=$_arrPagination['int0Total'];
		$intNextPage		=($intPage+1);
		$intPrevPage		=($intPage-1);
		//echo $intPageParamName;
		//echo $intNextPage;
		//	$arrEventLink=arrEventLink($arrReality, $intPageParamName, $intNextPage, true);
		//	echo $arrEventLink['strHref'];
		
		?>
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
			>
			
			<?php

			if($intPage<$intPages)
				{
				?>
				<a
				id	="objPageForward"
				<?php
				$arrEventLink=arrEventLink($arrReality, $intPageParamName, $intNextPage, true);
				echo $arrEventLink['strHref'];
				echo $arrEventLink['strOnClick'];
				?>
					class="block right BBV BTA BC3 TC3 cursor no-select doubleLine"
					style="
						width		:34%;
						text-align	:center;
						text-decoration	:none;
						"
					>
					>>
				</a>
				<?php
				}
			else
				{
				?>
				<a
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
				</a>
				<?php
				}
				?>
			<pagerNum
				class="fix V1 block tcenter BC1 TC1 BLL BRJ BBV BTA no-select doubleLine"
				style="
					left		:36%;
					width		:28%;
					"
				>

				<strPage
					class="TC3 BC3 halfLine" 
				
					>[<?=$intStart?>-<?=$intEnd ?>][<?=$intTotal-$intEnd?>][<?=$intTotal?>]
				</strPage>
				<strPage
					class="block tcenter"
					>
					<input 
						id	="objPageNumberSelect"
						class	=""
						style	="
							width:40%;
							"
						onChange="
							//bizHiFiNavigationInputSelect	=false; //Need to send result
							objEvent.arrReality.<?=$intPageParamName?>=this.value;
							objEvent._UpdateURLDyn();
							return false;
							"
						onFocusin="
							//objHiFiNavigation.bizPageSelectFoucus=true;
							bizHiFiNavigationInputSelect	=true;
							//alert('on');
							"
						onfocusout="
							//objHiFiNavigation.bizPageSelectFoucus=false;
							bizHiFiNavigationInputSelect	=false;
							//alert('off');
							"
					type	="number" 
					value	="<?=$intPage?>"
					step	="1" 
					min	="0" 
					max	="<?=$intPages?>"
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
							<?=$intPages?>
						</int0Max>
					</strPages>
				</strPage>
			</pagerNum>
			<?php
			if($intPage<1)
				{
				?>
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
				</a>
				<?php
				}
			else
				{
				$arrEventLink=arrEventLink($arrReality, $intPageParamName, $intPrevPage, true);
				?>
				<a
					id	="objPageBackward"
					<?php
					echo $arrEventLink['strHref'];
					echo $arrEventLink['strOnClick'];
					?>
					class="block left BBV BTA BC3 TC3 cursor no-select doubleLine"
					style="
						width		:34%;
						text-align	:center;
						text-decoration	:none;
						"
					>
					<<
				</a>
				<?php
				}
			?>
		</pageNav>
		<?php
		echo HiFiNavigation::strObjectInit();
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strObjectDeclare()
		{
		?>
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
		<?php
		}
	public static function strObjectInit()
		{
		return EDRO::strObjInit('HiFiNavigation');
		}
	public static function strHTML($_objKIIM, $_arrPagination, $_arrReality)
		{
		$objHiFiNavigation=new HiFiNavigation($_objKIIM, $_arrPagination, $_arrReality);
		return $objHiFiNavigation->strHTML;
		}
	}
?>