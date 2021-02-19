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
	public function __construct($_objKIIM, $arrStatrion, $arrPagination, $arrEventReality, $objEDRO)
		{
		$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		unset($_objKIIM);
		/*echo '<pre>';
		print_r($arrStatrion);
		echo '</pre>';
		exit;*/
		$strAudioType	='';
		//echo '/home/ЕДРО:ПОЛИМЕР/HiFiIntelligentClub/Stations/belongs/Genred/'.$arrStatrion['strId'].'.plmr';
		$arrStationGenres	=(array)FileRead::objJSON($objKIIM, '/home/ЕДРО:ПОЛИМЕР/о2о.БазаДанных/HiFiIntelligentClub/Stations/belongs/Genres/'.$arrStatrion['strId'].'.plmr');
		//print_r($arrStationGenres);
		$strGenre	='';
		$strGenres	='';
		if(is_array($arrStationGenres)&&!empty($arrStationGenres))
			{
			foreach($arrStationGenres as $strGenre)
				{
				$strGenres	.=Tag::strHTML(array(), $strGenre, $arrEventReality, 'strGenre', 11, $objEDRO);
				}
			}

		$strId			=$arrStatrion['strId'];
		$strName		=$arrStatrion['strName'];
		$strAudio		=$arrStatrion['strAudio'];
		//$strAudioType		=$arrStatrion['strAudioType'];
		//$strAudioBitrate	=$arrStatrion['strAudioBitrate'];
		//$strStyle		=$arrStatrion['strStyle'];
		$int0ListNum		=$arrStatrion['int0ListNum'];
		$arrICQR		=$arrStatrion['arrICQR'];
		$strICQR_Q		=$arrStatrion['strICQR_Q'];
		$int0PageStart		=$arrPagination['int0Start'];
		$int1ListNum		=($int0PageStart+$int0ListNum)+1;
					unset($arrStatrion);

		/*if($_SESSION['strListener']=='e1NgS3lCcnYо26')
			{
			echo '<pre>';
			print_r($arrPagination[$int0Start]);
			echo '</pre>';
			}
    			//print_r($arrPagination['int0CurrentStation']);
		*/
		$intListPosition	=$int1ListNum;

		$this->strHTML	='
		<station
			id	="'.$strAudio.'"
			num	="'.$int1ListNum.'"
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
					width		:398px;
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
					Header::strHTML($objKIIM,  $strName, $arrEventReality, $arrICQR, $strICQR_Q, $objEDRO).
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
	public static function strHTML($_objKIIM, $arrStatrion, $arrPagination, $arrEventReality, $objEDRO=array())
		{
		$objStationBlock=new StationBlock($_objKIIM, $arrStatrion, $arrPagination, $arrEventReality, $objEDRO);
		return $objStationBlock->strHTML;
		}
	}
?>