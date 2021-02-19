<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
////// 
   //   /\ RCe
  //  <  **> 
 //     Jl   
//////
class Header
	{
	public $strHTML;
	public function __construct($_objKIIM, $_str, $_arrSearch, $_arrICQR, $_strICQR_Q, $objEDRO)
		{
		$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		unset($_objKIIM);
		$str		=сПреобразовать($_str, 'вСтроку');
			   unset($_str);
		$intStrLen	=mb_strlen($str);
		$intStrLenPx	=$intStrLen*12;
		$arrSearch	=$_arrSearch;
			   unset($_arrSearch);
		/*$strBitrate	=$_strBitrate;
			   unset($_strBitrate);*/
		/*$strCodec	=$_strCodec;
			   unset($_strCodec);*/
		$arrICQR	=$_arrICQR;
			   unset($_arrICQR);
		//$strStationLink=strLinkGroove($arrSearch, 'name', $str);
		$this->strHTML='
			<header
				class="rel block TC1 BC1"
				title="'.$str.'"
				style="
					width			:100%;
					height			:100%;
					"
				>
				<whiteBlockPad
					class="abs block left BC3 layer_1_2"
					style="
						top		:0;
						left		:0;
						width		:1px;
						height		:100%;
						"
					>
				</whiteBlockPad>
				<whiteBlock
					class="rel block left layer_1_3"
					style="
						width		:1px;
						height		:100%;
						background-color:#FFF;
						"
					>
				</whiteBlock>
				<blockTitle
					class="block left TC1 BC1 BBV"
					style="
						font-size	:x-small;
						width		:99%;
						height		:9px;
						line-height	:9px;
						"
					>
					<ICQRType
						style="
							width:80%;
							"
						class="block left"
						>
						<ICQR
							class="block left"
							style="padding: 0 5px 0 5px;"
							>
							ICQR:
						</ICQR>
						<ICQR
							class="block left"
							style="margin-left:5px;"
							>
							
							'.ICQRType::strHTML($objKIIM, $_strICQR_Q, $arrSearch, $objEDRO).
							'
						</ICQR>
						<rightBufferBlock 
							class="block left TC2 BC2"
							style="width:76px;height:100%"
							>
						</rightBufferBlock>

					</ICQRType>

				</blockTitle>
				<h2
					class="abs left block scrollerX layer_1_1"
					style="
						top		:10px;
						width		:99.5%;
						height		:40px;
						padding		:0;
						margin		:0;
						font-size	:large;
						font-weight	:unset;
						"
					>
					<strScrolling 
						class="block TC1 BC1"
						style="
							width		:'.$intStrLenPx.'px;
							min-width	:90px;
							height		:20px;
							font-size	:large;
							line-height	:20px;
							"
						>'.
						$str.
					'</strScrolling>
				</h2>'.
				'
				<nextBlockTitle
					class="abs block left TC1 BC1 layer_1_2 BTA"
					style="
						bottom		:0px;
						font-size	:x-small;
						width		:99%;
						height		:29px;
						line-height	:9px;
						"
					>
					<icqr
						class="block left TC1 BC1"
						style="width	:88%"
						>
						<ifRU class="block left">
							'.$arrICQR['RU'].'
						</ifRU>
						<ifEN class="block left">
							'.$arrICQR['EN'].'
						</ifEN>
					</icqr>
					<stationLink
						class="block right sensor no-select TC1 line"
						style="
							width		:10%
							right		:0;
							color		:#FFF;
						
						"
						>'
						.StationQualityUPLink::strHTML($objKIIM, $str, $arrSearch, $objEDRO).
					'</stationLink>
				</nextBlockTitle>
			</header>
			';

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_str, $_arrSearch,$_arrICQR, $_strICQR_Q, $objEDRO=array())
		{
		$objHeader=new Header($_objKIIM, $_str, $_arrSearch, $_arrICQR, $_strICQR_Q, $objEDRO);
		return $objHeader->strHTML;
		}
	}
?>