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
	public function __construct($_objKIIM, $arrStatrion, $arrPagination, $arrEventParams)
		{
		$objKIIM=$_objKIIM;unset($_objKIIM);
		$objKIIM=KIIM::objStart($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		/*echo '<pre>';
		print_r($arrStatrion);
		echo '</pre>';
		exit;*/


		$strId			=$arrStatrion['strId'];
		$strName		=$arrStatrion['strName'];
		$strAudio		=$arrStatrion['strAudio'];
		$strAudioType		=$arrStatrion['strAudioType'];
		$strAudioBitrate	=$arrStatrion['strAudioBitrate'];
		$strStyle		=$arrStatrion['strStyle'];
		$int0ListNum		=$arrStatrion['int0ListNum'];
		$arrICQR		=$arrStatrion['arrICQR'];
					unset($arrStatrion);

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
				height		:80px;
				max-width	:99vw;
				text-decoration	:none;
				margin-right	:10px;
				margin-bottom	:9px; //Jesus will let off this deviation of 1 from standard.
				"
			>
			<header
				class="block BC1 BC1"
				style="
					width		:398px;
					height		:40px;
					"
				>
				<player
					class="left"
					style="
						width		:40px;
						height		:40px;
						"
					>'.
					Player::strHTML($objKIIM, $strAudio, $strAudioType).
				'</player>
				<stationName
					class="block left tcol1 bcol1"
					style="
						width		:358px;
						height		:40px;
						"
					>'.Header::strHTML($objKIIM,  $strName, $arrEventParams, $strAudioBitrate, $strAudioType, $arrICQR).
				'</stationName>
			</header>
			<genre
				class="block scrollerY"
				style="
					height		:40px;
					"
				>
				<bigFingerSupport 
					title	="Successfull listeners"  
					class	="rel left block BRJ scrollerY" 
					style	="width:40px;height:40px;font-size:xx-small;">
					<overlay 
						title="Feature. Will be avaliable soon."
						class="abs TC1" 
						style="width:100%;height:100%;background-color:rgba(255,255,255,0.7);font-size:large;text-align:center;line-height:39px"
						>'.
						($arrPagination['int0Start']+$int0ListNum+1).
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
				</bigFingerSupport>
				<genresByStationSection
					class="brick ONE"
					>
					<brickText
						class="block left"
						style="
							height:20px;
							"
						>
						<overlay 
							title="Feature. Will be avaliable soon."
							class="abs TC1" 
							style="width:100%;height:100%;background-color:rgba(255,255,255,0.7);font-size:large;text-align:center;"
							>
						</overlay>
						<ifEN>
							Declared styles:
						</ifEN>
						<ifRU>
							Заявленные стили:
						</ifRU>
					</brickText>
					'.
					Tag::strHTML($objKIIM, $strStyle, $arrEventParams, 'strStyle', 11).
					'
				</genresByStationSection>
				<genresByStationSection
					class="brick ONE"
					>
					<brickText
						class="block left"
						style="
							height:20px;
							"
						>
						<overlay 
							title="Feature. Will be avaliable soon."
							class="abs TC1" 
							style="width:100%;height:100%;background-color:rgba(255,255,255,0.7);font-size:large;text-align:center;"
							>
						</overlay>
						<ifEN>
							ICQR DETECT styles:
						</ifEN>
						<ifRU>
							ICQR ОПРЕДЕЛИЛ стили:
						</ifRU>
					
					</brickText>
				</genre>
			</genresByStationSection>
			<genresByStationSection>
				<ICQR_Setup
					class="block border-bottom"
					style="
						height		:20px;
						width		:100%;
						"
					>
				</ICQR_Setup>
			</genresByStationSection>
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
	public static function strHTML($_objKIIM, $arrStatrion, $arrPagination, $arrEventParams)
		{
		$objStationBlock=new StationBlock($_objKIIM, $arrStatrion, $arrPagination, $arrEventParams);
		return $objStationBlock->strHTML;
		}
	}
?>