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
			class	="block abs layer_3_2  line"
			style	="
				display			:none;
				top			:0;
				left			:0;
				width			:2px;
				background-color	:#fff;
				"
			>
			<light

				class	="block abs layer_3_4 blink-fast line"
				style	="
					display			:block;
					top			:0;
					left			:0;
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
		return EDRO::strObjInit('DynaScreenEventIndicator');
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