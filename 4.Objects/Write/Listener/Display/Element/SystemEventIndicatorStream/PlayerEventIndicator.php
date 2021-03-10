<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class PlayerEventIndicator
	{
	public $strHTML;
	public function __construct()
		{
		$this->strHTML='
		<eventIndicator
			id	="PlayerEventIndicator1"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:3px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light
				class	="block rel layer_3_4 blink-fast"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator2"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:11px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>

			<light
				class	="block rel layer_3_4 blink-fast1"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator3"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:19px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast2"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator4"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:27px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast3"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator5"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:35px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast4"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator6"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:43px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast5"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML.='
		<eventIndicator
			id	="PlayerEventIndicator7"
			class="block abs layer_3_2 border-bottom"
			style="
				/*display	:none;*/
				top	:0;
				left	:51px;
				width	:5px;
				height	:5px;
				background-color:#FFF;
				"
			>
			<light

				class	="block rel layer_3_4 blink-fast6"
				style	="
					display	:block;
					width	:5px;
					height	:5px;
					background-color:#333;
					"
				>
			
			</light>
		</eventIndicator>';
		$this->strHTML='';
		//$this->strHTML.=PlayerEventIndicator::strInitJs();
		}
	public static function strObjectInit()
		{
		return Event::strOConstruct('PlayerEventIndicator');
		}
	public static function strObjectDeclare()
		{
		$str='
		<script>
			class PlayerEventIndicator
				{
				constructor()
					{
					this.objHTML=document.getElementById(\'PlayerEventIndicator\');
					console.log(\'Loaded Player event indicator (objPlayerEventIndicator).\');
					}
				}
		</script>';
		return $str;
		}
	public static function strHTML()
		{
		$objPlayerEventIndicator=new PlayerEventIndicator();
		return $objPlayerEventIndicator->strHTML;
		}
	}
?>