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
	public function __construct($_objKIIM, $_str, $_arrSearch, $_strBitrate=0, $_strCodec='n/a', $_arrICQR)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		$str		=$_str;
			   unset($_str);
		$intStrLen	=mb_strlen($str);
		$intStrLenPx	=$intStrLen*12;
		$arrSearch	=$_arrSearch;
			   unset($_arrSearch);
		$strBitrate	=$_strBitrate;
			   unset($_strBitrate);
		$strCodec	=$_strCodec;
			   unset($_strCodec);
		$arrICQR	=$_arrICQR;
			   unset($_arrICQR);
		//$strStationLink=strLinkGroove($arrSearch, 'name', $str);
		$this->strHTML='
			<header
				class="rel block TC1 BC1"
				title="'.$str.'. Declared bitrate: '.$strBitrate.'kbps."
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
					class="block left TC2 BC2"
					style="
						font-size	:x-small;
						width		:99%;
						height		:10px;
						line-height	:9px;
						"
					>
					<blockText
						class="block left "
						>
						<ifEN>
							Radio station:
						</ifEN>
						<ifRU>
							Радио:
						</ifRU>
					</blockText>

					<bitrate
						class="block right TC1 BC1"
						>
						<ifRU class="block left">
							Заявленный битрейт:
						</ifRU>
						<ifEN class="block left">
							Declared bitrate:
						</ifEN>
						<bitrateValue
							class="block left"
							>
							'.
							$strBitrate.
							'
						</bitrateValue>
						<ifEN class="block left"> kBit/Sec. </ifEN>
						<ifRU class="block left"> кБит/Сек. </ifRU>
						<type
							class="block left"
							style="height		:100%;"
							>'.
							AudioType::strHTML($objKIIM, $strCodec, $arrSearch).
						'</type>
						<rightBufferBlock 
							class="block left TC2 BC2"
							style="width:76px;height:100%"
							>
						</rightBufferBlock>

					</bitrate>

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
						class="block TC3 BC3"
						style="
							width		:'.$intStrLenPx.'px;
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
					class="abs block left TC2 BC2 layer_1_2"
					style="
						bottom		:0px;
						font-size	:x-small;
						width		:99%;
						height		:10px;
						line-height	:9px;
						"
					>
					<icqr
						class="block left TC1 BC1"
						>
						<ifRU class="block left">
							'.$arrICQR['RU'].'
						</ifRU>
						<ifEN class="block left">
							'.$arrICQR['EN'].'
						</ifEN>
					</icqr>
					<!--rightBufferBlock 
						class="block left TC2 BC2"
						style="width:76px;height:100%"
						>
					</rightBufferBlock-->
				</nextBlockTitle>
				<stationLink
					class="abs block sensor no-select TC1"
					style="
						top		:0px;
						right		:0;
						height		:16px;
						color		:#FFF;
						"
					>'
					.StationQualityUPLink::strHTML($objKIIM, $str, $arrSearch).
				'</stationLink>'.
			'</header>
			';

		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public static function strHTML($_objKIIM, $_str, $_arrSearch, $_strBitrate=0, $_strCodec='n/a', $_arrICQR)
		{
		$objHeader=new Header($_objKIIM, $_str, $_arrSearch, $_strBitrate, $_strCodec, $_arrICQR);
		return $objHeader->strHTML;
		}
	}
?>