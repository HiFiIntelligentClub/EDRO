<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class DynaScreenEventIndicator
	{
	public $strHTML;
	public function __construct()
		{
		$this->strHTML='
		<eventIndicator
			id	="DynaScreenEventIndicator"
			class	="brick abs layer_3_2  line"
			style	="
				display			:none;
				top			:0px;
				left			:0px;
				width			:2px;
				background-color	:#fff;
				"
			>
			<light

				class	="brick abs layer_3_4 blink-fast line"
				style	="
					display			:block;
					top			:0px;
					left			:0px;
					width			:2px;
					background-color	:#333;
					"
				>
			</light>
		</eventIndicator>';
		$this->strHTML.=DynaScreenEventIndicator::strObjectInit();
		}
	public static function strObjectInit()
		{
		return Event::strOConstruct('DynaScreenEventIndicator');
		}
	public static function strObjectDeclare()
		{
		$str='
		<script>
			class DynaScreenEventIndicator
				{
				constructor()
					{
					this.objHTML=document.getElementById(\'DynaScreenEventIndicator\');
					console.log(\'Loaded DynaScreen event indicator (objDynaScreenEventIndicator).\');
					}
				}
		</script>';
		return $str;
		}
	public static function strHTML()
		{
		$objDynaScreenEventIndicator=new DynaScreenEventIndicator();
		return $objDynaScreenEventIndicator->strHTML;
		}
	}
?>