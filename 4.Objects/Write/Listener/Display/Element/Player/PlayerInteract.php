<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class PlayerInteract
	{
	public $strHTML;
	public function __construct()
		{
		$this->strHTML='';
		}
	public static function strObjectInit();
		{
		return EDRO::strObjInit('PlayerInteract');
		}
	public static function strObjectDeclare()
		{
		?>
		<script>
			class PlayerInteract
				{
				constructor()
					{
					this.objXHR		=new XMLHttpRequest();
					//this.objHTML		=document.getElementById('DynaScreen');
					this.objXHR.onload=function()
						{
						if(objDynaScreen.objXHR.status==200)
							{
							//objDynaScreen.objHTML.innerHTML=objDynaScreen.objXHR.response;
							//objPlayer.updateOnReload();
							//objDynaScreenEventIndicator.objHTML.style.display="none";
							}
						else
							{
							}
						}
					this.objXHR.onProgress=function(event)
						{
						if(event.lengthComputable)
							{
							console.log('Получено'+event.loaded+'байт из'+event.total+'байт.');
							}
						else
							{
						console.log('Получено'+event.loaded+'байт');
						}
						console.log('Progress');
						}
					this.objXHR.onError=function()
						{
						//objDynaScreenEventIndicator.objHTML.style.display="none";
						console.log('Error');
						}
					}
				_CreateUrl()
					{
					console.log('Create DynaUrl');
					//this.strUrl		=this.strEvent+'?'+this.strParametrs;
					this.strUrlDynaUpdate	=this.strURL+'&d=1';
					}
				_Update()
					{
					console.log('Update DynaScreen'+this.strURL);
					objDynaScreenEventIndicator.objHTML.style.display="block";
					this._CreateUrl();
					objEvent.strURL=this.strURL;
					objEvent._Send();
	
					//if(this.bIzHistory)
					//	{
					//	history.pushState(objHiFiNavigation.objNav, this.strEvent, this.strURLShow);
					//	}
					this.bIzHistory=true;
					//this._UpdateUrl();
					this.objXHR.open('POST', this.strUrlDynaUpdate);
					//console.log('LetShowUrl:');
					this.objXHR.send();
					}
				}
		</script>
		<?php
		}
	public static function strHTML()
		{
		$objPlayerInteract=new PlayerInteract();
		return $objPlayerEventIndicator->strHTML;
		}
	}
?>