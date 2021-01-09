<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class DynaScreen
	{
	public $strHTML;
	public function __construct($_objKIIM, $_arrData)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));

		unset($_arrData);

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strStart($objEDRO, $strSearchForm)
		{

		if($objEDRO->arrEvent['bIzDynamic'])
			{
			$intHeight	=82;
			if($objEDRO->arrReality['bIzApple'])
				{
				$intHeight	=62;
				}
			$str		=$objEDRO->strRealityInit();
			$str		.='				<brickTop 
					class="block" 
					style="width:100%;height:'.$intHeight.'px;margin:0;padding:0;"
					>
				</brickTop>';

			}
		else
			{

			require_once('/home/EDRO.SetOfTools/System/4.Styles/0.CSS.Styles.php');
			require_once('/home/EDRO.SetOfTools/System/5.Templates/0.strKIIM.Template.php');
			require_once('/home/EDRO.SetOfTools/System/6.HTML_Interfaces/0.HTML_HeadInterface.php');
			$str		=$objEDRO->strRealityInit();
			$str		.=$strSearchForm;
			$str		.=Listeners::strHTML($objKIIM, $objEDRO->arrReality['arrCurrentListeners'], $objEDRO->arrEvent['arrReality']);
			$str		.=FileRead::strGetDesignHTML(array(), '/home/EDRO/4.Objects/Read/Cloud/Disk/Pages/_UpdateMessage.php', $objEDRO);
			$str		.='
			<dynaScreen
				id	="DynaScreen"
				class	="fixed block layer_2_1"
				style	="
					top			:0;
					left			:0;
					width			:100%;
					height			:100%;
					display			:block;
					"
				>
				<brickTop 
					class="block" 
					style="width:100%;height:82px;margin:0;padding:0;"
					>
				</brickTop>
				';
			}
		
		//$str.='<marginTop class="block" style="width:100%;height:2%"></marginTop>';
		//$str.='<pageDate id="pageDateTimeServer" style="display:none">'.сКодировать(date('Y-m-d H:i:s').$_SESSION['strListener'], 'вКоманду').'</pageDate>';
		//file_put_contents('/home/HiFiIntelligentClub.Ru/tmp/symbols.txt', сКодировать(date('Y-m-d H:i:s').$_SESSION['strListener'], 'вКоманду'));

		return $str;
		}
	public static function strEnd($bIzDynamic)
		{
		$str='';
		if($bIzDynamic)
			{
			//$str.='<brickBottom class="block" style="width:100%;height:200px"></brickBottom>';
			}
		else
			{
			//$str='<brickBottom class="block" style="width:100%;height:100px"></brickBottom>';
			$str.='</dynaScreen>';
			$str.=DynaScreen::strObjectInit();
			$str.=Design::strObjectInit();
			$str.=Objects::strObjectInit();
			}
		return $str;
		}
	public static function strObjectInit()
		{
		return EDRO::strObjInit('DynaScreen');
		}
	public static function strObjectDeclare()
		{
		$str	= <<<oo2oo
		<script>
		console.log('[V]EDRO.Objects: DynaScreen');
		class DynaScreen
			{
			constructor()
				{
				console.log('[Vv]EDRO.Objects.DynaScreen: construct()');
				this.objXHR		=new XMLHttpRequest();
				this.objHTML		=document.getElementById('DynaScreen');
				this.intHeight		=0;
				this.intWidth		=0;
				this._GetDimensions();
				this.objXHR.onload	=function()
					{
					console.log('[Vvv]EDRO.Objects: DynaScreen.objXHR.onload');
					if(objDynaScreen.objXHR.status==200)
						{	
						if(objReality.bIzDynaScreen)
							{
							objDynaScreen.objHTML.innerHTML	=objDynaScreen.objXHR.response;
							objReality.bIzHistory		=false;
							objReality.bIzDynaScreen	=false;
							objReality.bIzLoading		=false;
							}
						objReality.bIzLoading		=false;
						objReality.bIzHistory		=false;
						objReality.bIzDynaScreen	=false;
						objPlayer.updateOnReload();
						objDynaScreenEventIndicator.objHTML.style.display="none";
						}
					else
						{
						objReality.bIzLoading		=false;
						objReality.bIzHistory		=false;
						objReality.bIzDynaScreen	=false;
						objDynaScreenEventIndicator.objHTML.style.display="none";
						}
					console.log('[...]EDRO.Objects: DynaScreen.objXHR.onload');
					}
				this.objXHR.onProgress		=function(event)
					{
					console.log('[Vvv]EDRO.Objects: DynaScreen.objXHR.onProgress');
					if(event.lengthComputable)
						{
						//console.log('Получено'+event.loaded+'байт из'+event.total+'байт.');
						}
					else
						{
						//console.log('Получено'+event.loaded+'байт');
						}
					console.log('[...]EDRO.Objects: DynaScreen.objXHR.onProgress');
					}
				this.objXHR.onError=function()
					{
					console.log('[Vvv]EDRO.Objects: DynaScreen.objXHR.onError');
					objReality.bIzLoading		=false;
					objReality.bIzDynaScreen	=false;
					objReality.bIzError		=true;
					
					objDynaScreenEventIndicator.objHTML.style.display="none";
					console.log('[...]EDRO.Objects: DynaScreen.objXHR.onError');
					}
				//this.strEvent		='/search';
				//this.strParametrs	='';
				//this.strDynaUpdate	='';
				//this.strUrl		='';
				//this.bIzHistory		=true;
				console.log('[..]EDRO.Objects: DynaScreen.construct()');
				}
			_GetDimensions()
				{
				//console.log('[Vv]EDRO.Objects.DynaScreen:  _GetDimensions()');
				this.intHeight		=this.objHTML.offsetHeight;
				this.intWidth		=this.objHTML.offsetWidth;
				//console.log('[..]EDRO.Objects.DynaScreen:  _GetDimensions()');
				}
			}
		console.log('[.]EDRO.Design: DynaScreen');
		</script>
oo2oo;
		return $str;
		}
	public static function strHTML($_objKIIM, $_objData)
		{
		$objDynaScreen=new DynaScreen($objKIIM, $_objData);
		return $objDynaScreen->strHTML;
		}
	}
?>