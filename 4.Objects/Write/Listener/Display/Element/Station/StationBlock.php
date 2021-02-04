<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class StationBlock
	{
	public  $strHTML;
	public function __construct($_objKIIM, $arrStation, $arrPagination, $arrEventReality)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		/*echo '<pre>';
		print_r($arrStatrion);
		echo '</pre>';
		exit;*/
		//echo '/home/ЕДРО:ПОЛИМЕР/HiFiIntelligentClub/Stations/belongs/Genred/'.$arrStatrion['strId'].'.plmr';
		//$arrStationGenres	=(array)FileRead::objJSON($objKIIM, '/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub/Stations/belongs/Genres/'.$arrStation['strId'].'.plmr');
		//print_r($arrStationGenres);
		$strGenre	='';
		/*if(is_array($arrStationGenres))
			{
			foreach($arrStationGenres as $strGenre)
				{
				$strGenres	.=Tag::strHTML(array(), $strGenre, $arrEventReality, 'strGenre', 11);
				}
			}*/
		$strId			=$arrStation['strId'];
		$strName		=$arrStation['strName'];
		$strAudio		=$arrStation['strAudio'];
		//$strAudioType		=$arrStation['strAudioType'];
		//$strAudioBitrate	=$arrStation['strAudioBitrate'];
		//$strStyle		=$arrStation['strStyle'];
		$int0ListNum		=$arrStation['int0ListNum'];
		$arrICQR		=$arrStation['arrICQR'];
		$strICQR_Q		=$arrStation['strICQR_Q'];
					unset($arStatrion);

		/*if($_SESSION['strListener']=='e1NgS3lCcnYо26')
			{
			echo '<pre>';
			print_r($arrPagination[$int0Start]);
			echo '</pre>';
			}
    			//print_r($arrPagination['int0CurrentStation']);
		*/
		$intListPosition	=$arrPagination['int0CurrentStation'];

		$this->strHTML	='
		<station
			id	="'.$strAudio.'"
			num	="'.$intListPosition.'"
			class	="block left rel layer_1_1 BLL BRJ TC1 BC1"
			style	="
				width		:398px;
				height		:100px;
				max-width	:99vw;
				text-decoration	:none;
				margin-right	:10px;
				margin-bottom	:7px; //Jesus will let off this deviation of 1 from standard.
				margin-top	:0;
				"
			>
			<header
				class="block BC1"
				style="
					width		:100%;
					height		:60px;
					"
				>
				<player
					class="left"
					style="
						width		:40px;
						height		:50px;
						"
					>'.
					Player::strHTML($objKIIM, $strAudio, $strAudioType).
				'</player>
				<stationName
					class="block left TC1 BC1"
					style="
						width		:358px;
						height		:100%;
						"
					>'.
					Header::strHTML($objKIIM,  $strName, $arrEventReality, $strAudioBitrate, $strAudioType, $arrICQR, $strICQR_Q).
				'</stationName>
			</header>
			<genre
				class="block scrollerY"
				style="
					height		:40px;
					"
				>'.
				StatisticIndicator::strDesign($arrPagination, $int0ListNum).
				'
				<blockText
					class="block rel"
					style="
						height		:20px;
						font-size	:xx-small;
						"
					>
					<overlay 
						title=""
						class="abs TC1" 
						style="
							width			:100%;
							height			:100%;
							font-size		:xx-small;
							background-color	:rgba(255,255,255,0.7);
							font-size		:large;
							text-align		:center;
							"
						>
					</overlay>
					<ifEN title="Declared styles:">
						Declared:
					</ifEN>
					<ifRU title="Заявленные стили:">
						Заявленные:
					</ifRU>
					
				</blockText>
				'.
				$strGenres.
				'
				<blockText
					class="block left rel"
					style="
						font-size	:xx-small;
						height		:20px;
						width		:49%;
						"
					>
					<overlay 
						title="Feature. Will be avaliable soon."
						class="
							abs TC1
							" 
						style="
							width			:100%;
							height			:100%;
							font-size		:xx-small;
							text-align		:center;
							background-color	:rgba(255,255,255,0.7);
							"
						>
					</overlay>
					<ifEN>
						ICQR:
					</ifEN>
					<ifRU>
						ICQR:
					</ifRU>
				</blockText>
				<blockText
					class="
						block left rel
						"
					style="
						font-size	:xx-small;
						height		:20px;
						width		:49%;
						"
					>
					<overlay 
						title="Feature. Will be avaliable soon."
						class="abs TC1" 
						style="width:100%;height:100%;background-color:rgba(255,255,255,0.7);font-size:large;text-align:center;"
						>
					</overlay>
					<ifEN>
						Now:
					</ifEN>
					<ifRU>
						Cейчас:
					</ifRU>
					
				</blockText>
			</genre>
			<ICQR_Setup
				class="block border-bottom"
				style="
					height		:20px;
					width		:100%;
					"
				>
			</ICQR_Setup>
			'.
			//HFIC_CreatorsRespect::strHTML($objKIIM, $this->arr['_strCopyrightInfo']).
			''.
			//Shader::strHTML($objKIIM, $this->strLogo).
			''.
			
			''.
			//Overlay::strHTML($objKIIM, 'Loading. Please wait.').
			'
			<description
				class="block rel layer_1_4"
				style="
					display		:none; /*Disabeled untill 31.08.2020 23:59*/
					"
				>'.
				//$this->arr['_strDescription'].
			'</description>
			<!--marquee>Сообщения Сообщения Сообщения</marquee-->
		</station>';
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		//print_r($this);
		}
	public static function strHTML($_objKIIM, $arrStatrion, $arrPagination, $arrEventReality)
		{
		$objStationBlock=new StationBlock($_objKIIM, $arrStatrion, $arrPagination, $arrEventReality);
		return $objStationBlock->strHTML;
		}
	}
?>