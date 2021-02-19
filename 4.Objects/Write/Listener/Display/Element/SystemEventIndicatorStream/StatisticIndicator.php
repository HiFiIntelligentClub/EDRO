<?php
class StatisticIndicator
	{
	public $strD;
	private $int0PageStart	=0;
	private	$int0ListNum	=0;
	private	$int1ListNum	=0;
	public function __construct($_arrPagination='', $_int0ListNum='')
		{
		$this->int0PageStart	= $_arrPagination['int0Start'];
		$this->int0ListNum	= $_int0ListNum;
		$this->int1ListNum	=($this->int0PageStart+$this->int0ListNum)+1;
		$this->strD		=$this->strD();
		}
	private function strD()
		{
		$str='
		<statisticIndicator
			title	="Successfull listeners"  
			class	="rel left block BRJ scrollerY" 
			style	="width:40px;height:40px;font-size:xx-small;">
			<overlay 
				title="Feature. Will be avaliable soon."
				class="abs TC1" 
				style="width:100%;height:100%;background-color:rgba(255,255,255,0.7);font-size:large;text-align:center;line-height:39px"
				>'.
				$this->int1ListNum.
				'<!--indicator
								class="abs"
					style="left:0px;width:10px;height:20%;background-color:rgba(177,177,177,0.9);"
					>
				</indicator>
				<indicator
					class="abs"
					style="left:10px;width:10px;height:20%;background-color:rgba(77,77,77,0.9);"
					>
				</indicator>
				<indicator
					class="abs"
					style="left:20px;width:10px;height:20%;background-color:rgba(0,0,0,0.9);"
					>
				</indicator>
				<indicator
					class="abs"
					style="left:30px;width:10px;height:20%;background-color:rgba(120,120,120,0.9);"
					>
				</indicator-->
			</overlay>
			<played
				title	="Played"
				class	="block"
				>
				<strHeader>+</strHeader>
				<int>0</int>
			</played>
			<avgPlayingTime
				title	="Average playing time"
				class	="block"
				>
				<strHeader>+</strHeader>
				<strFormattedString>0</strFormattedString>
				<strUnit>s</strUnit>
			</avgPlayingTime>
			<liked 
				title	="Liked"
				class	="block"
				>
				<strHeader>+</strHeader>
				<int>0</int>
			</liked>
			<avgLoadingTime
				title	="Average loading time"
				class	="block"
				>
				<strHeader>-</strHeader>
				<strFormattedString>0</strFormattedString>
				<strUnit>s</strUnit>
                	</avgLoadingTime>
			<DropListener
				title	="Drop listener"
				class	="block"
				>
				<strHeader>-</strHeader>
				<int>0</int>
			</DropListener>
			<Reconnects
				title	="Reconnects while playing count"
				class	="block"
				>
				<strHeader>-+</strHeader>
				<int>0</int>
                	</<Reconnects>
			<viewed
				title	="Viewed"
				class	="block"
				>
				<strHeader>_</strHeader>
				<int>0</int>
			</viewed>
		</statisticIndicator>';
		return $str;
		}
	public static function strDesign($_arrPagination='', $_int0ListNum='')
		{
		$obj= new StatisticIndicator($_arrPagination, $_int0ListNum);
		return $obj->strD;
		}
	}
?>