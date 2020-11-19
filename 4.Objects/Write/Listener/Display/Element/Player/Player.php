<?php
/*© A.A.CheckMaRev assminog@gmail.com tubmulur@yandex.ru*/
//////
   //   /\ RCe
  //  <  **> 
 //     Jl
//////
class Player
	{
	private $arr;
	private $strHTML;
	private $strAudio;
	private $strAudioType;
	public function __construct($_objKIIM, $_strAudio, $_strAudioType)
		{
		$objKIIM=KIIM::objStart($_objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		unset($_objKIIM);
		//exit;
		//$this->strAudio		=strEncode($_strAudio, 'HiFiIntelligentClub', 'e');
		$this->strAudio			=$_strAudio;
					   unset($_strAudio);
		$this->strAudioType		='audio/'.$_strAudioType;
		//$this->arr=$_arrData;
		if(empty($this->strAudio))
			{
			return true;
			}
		//$this->strHTML=VectorKIIM_elementWaiting4Event_statisticalMembrane::strHTML($objKIIM).
		KIIM::objFinish($objKIIM, array('_strClass'=>__CLASS__, '_strMethod'=>__FUNCTION__, '_strMessage'=>''));
		}
	public function strIndicatorTop()
		{
		$strPlayerTop	=$this->strDStateReady();
		$strPlayerTop	.=$this->strDStatePlaying();
		$strPlayerTop	.=$this->strDStateLoading();
		$strPlayerTop	.=$this->strDStateNoConnection();
		return $strPlayerTop;
		}
	public function strDPlayer()
		{
		$strPlayer	=$this->strDIndicatorTopStart();
			$strPlayer	.=$this->strDIndicatorTopReady();
			$strPlayer	.=$this->strDIndicatorTopOverload();
			$strPlayer	.=$this->strDIndicatorTopPlaying();
			$strPlayer	.=$this->strDIndicatorTopNoConnection();
			$strPlayer	.=$this->strDIndicatorTopStopped();
		$strPlayer	.=$this->strDIndicatorTopEnd();
		return $strPlayer;
		}
	private function strDStateReady()
		{
		$str=
		'<ifReady
			class="block cursor no-select TC1 BC1"
			onclick="objPlayer.play(this,\''.$this->strAudio.'\', \''.$this->strAudioType.'\' );"
			style="
				/*background-color:#dddbdb;*/
				/*width		:46px;*/
				/*height	:44px;*/
				text-align	:center;
				"
			>
			<ifOverload
				style="
					display:none;
					"
				>
				<ifEN>
					<marquee style="width:44px;">Station overloaded. Please try another or less bitrate Kbps, this stations
					  sounds with less quality but  this is situable for slower internet.</marquee>
				</ifEN>
				<ifRU>
					<marquee>Станция  перегружена. Попробуйте другую или выиграйте станцию с меньшим качеством КБит/сек, 
					но годной для более медленного интернета.</marquee>
				</ifRU>
			</ifOverload>
			<recordLabelAudioMeta
				class="block no-select"
				style="
					text-align	:center;
					width		:34px;
					height		:34px;
					margin-top	:3px;
					margin-left	:3px;
					"
				>
				<recordLabel
					class="block border"
					style="
						background-color: #6c6c6c;
						color		: #FFF;
						/*border-radius	: 100%;*/
						font-size	: small;
						width		: 32px;
						height		: 32px;
						text-align	: center;
						line-height	: 30px;
						margin		: 0;
						padding		: 0;
						"
					>
					<ifEN
						title="Play station"
						>▷
					</ifEN>
					<ifRU
						title="Нажмите чтобы начать слушать радио."
						>▷
					</ifRU>
				</recordLabel>
			</recordLabelAudioMeta>
		</ifReady>';
		return $str;
		}
	private function strDStatePlaying()
		{
		$str=
		'<ifPlaying
			class="block cursor TC1 BC1 no-select"
			onclick="objPlayer.stop();"
			style="
				/*background-color:#cbdff4;*/
				display		:none;
				width		:100%;
				height		:100%;
				text-align	:center;
				"
			>
			<recordAudioData
				class="block no-select"
				style="
					width		:34px;
					height		:34px;
					text-align	:center;
					margin-top	:3px;
					margin-left	:3px;
					"
				>
				<recordLabel
					class="block border"
					style="
						color		:#2d90f5;
						/*background-color: #282828;*/
						/*background-color: #FFF;*/
						/*border-radius	: 100%;*/
						width		: 32px;
						height		: 32px;
						text-align	: center;
						line-height	: 31px;
						margin		: 0;
						padding		: 0;
						"
					>
					<ifEN
						title="Press to stop playing."
						>
						■
					</ifEN>
					<ifRU
						title="Нажмите чтобы остановить воспроизведение."
						>
						■
					</ifRU>
				</recordLabel>
			</recordAudioData>
		</ifPlaying>';
		return $str;
		}
	private function strDStateLoading()
		{
		$str=
		'<ifLoadingAudio
			class="block cursor no-select"
			onclick="objPlayer.stop();"
			style="
				display		:none;
				width		:100%;
				height		:100%;
				text-align	:center;
				color		:#000;
				background-color:#95bff2; 
				"
			>
			<recordAudioData
				class="block no-select border"
				style="
					width		:34px;
					height		:34px;
					text-align	:center;
					margin-top	:3px;
					margin-left	:3px;
					"
				>
				<recordLabel
					class="block border TC3"
					style="
						/*background-color: #282828;*/
						/*background-color: #FFF;*/
						/*border-radius	: 100%;*/
						width		: 32px;
						height		: 32px;
						text-align	: center;
						line-height	: 31px;
							margin		: 0;
						padding		: 0;
						"
					>
				</recordLabel>
			</recordAudioData>
		</ifLoadingAudio>';
		return $str;
		}
	private function strDStateNoConnection()
		{
		$str=
		'<ifNoConnection
			class="block cursor TC2 BC1 no-select"
			onclick="objPlayer.play(this,\''.$this->strAudio.'\', \''.$this->strAudioType.'\' );"
				style="
				display		:none;
				width		:100%;
				height		:100%;
				text-align	:center;
				background-color:rgba(255,255,255,0.82);
				"
			>
			<ifEN>
				<marquee style="width:36px;">This  station is currently offline. Please try another one.</marquee>
			</ifEN>
			<ifRU>
				<marquee style="width:36px;">"Эта радиостанция сейчас недоступна. Возможно она очень далеко, перегружена или отдыхает. 
				Пока станция недоступна, попробуйте послушать другую.</marquee>
			</ifRU>
		</ifNoConnection>';
		return $str;
		}

	private function strDIndicatorTopStart()
		{
		//Новый год  🎄🎅
		//✰✰
		//★
		//🌠
		$str='
		<playerControlAlwaysVisible
			id	="playerControlAlwaysVisible"
			class	="left no-select ЕС3 BC3"
			style	="
				text-align	:left;
				width		:20px;
				height		:100%;
				margin-right	:1px;
				"
			>';
		return $str;
		}
	private function strDIndicatorTopEnd()
		{
		$str	='</playerControlAlwaysVisible>';
		//$str.=Player::strObjectInit();
		return $str;
		}
	private function strDIndicatorTopReady()
		{
		$str=
		'<ifReady
			class	="abs V99 block cursor BC1 TC1 layer_2_2 select scrollerY"
			style	="
				text-align	:left;
				Width		:100vw;
				height		:40px;
				"
			>
			<Hfic_Samin
				class="block left"
				style="
					width		:40px;
					height		:100%;
					"
				>
				<image
					title="Hfic: Is there any hifi sound can i hear?" 
					src="/Hfic_Samin.jpg" 
					class="block" 
					style="
						height:100%;
						"
				/>
			</Hfic_Samin>
			<ReadyButtonStat
				class	="block right BLL TC3 BC3"
				style	="
					text-align	:left;
					height		:100%;
					width		:100px;
					line-height	:13px;
					"
				>
			</ReadyButtonStat>
			<readyText
				class	="block scrollerY"
				style	="
					height:40px;
					"
				>
				<ifRU>
					<marquee direction="up" scrollamount="1" style="font-size:small"><paragraph></paragraph>Приветствуем вас в HiFI Intelligent Club.<br/><br/><br/>
					Дорогие Бродкастеры. В настоящий момент, мы не поддерживаем станции с длиной названия более 256 символов. По техническим причинам.<br/><br/>
					Просим корректно заполнять поля "Кодек и битрейт".<br/><br/>
					Станции, у которых вместо кодека или битрейта название проекта, не участвуют в поиске по кодеку или битрейту.<br/><br/>
					Чтобы прочитать вступительную речь, <br/><br/>
					нажмите на клавишу МЕНЮ, <br/><br/><br/><br/>
					и прокрутите поля поиска вниз.<br/>
					<br/><br/><br/><br/>
					Эйчфик Самин.<br/><br/>
					Президент <br/><br/>
					<b style="font-size:x-large;">
					HiFi<br/><br/><br/><br/>
					Intelligent<br/><br/><br/>
					Club
					</b>
					</marquee>
				</ifRU>
				<ifEN>
					<marquee direction="up" scrollamount="1" style="font-size:small">
					<paragraph></paragraph>Hello<br/><br/>
					<paragraph></paragraph>at <br/><br/>
					<paragraph></paragraph>HiFiIntelligentClub.<br/><br/><br/>
					Dear broadcasters, by the technical reasons station names with more than 256 symbols length, are not supported now.<br/><br/>
					We are focusing on this problem now. <br/><br/>
					Also, stations with incorrect codec or bitrate filled fields, are not searchable by codec or bitrate.<br/><br/>
					To read our initial words,<br/><br/><br/>
					press "MENU" button ->> <br/><br/><br/><br/>
					Than scroll down the search fields.<br/>
					<br/><br/><br/><br/>
					It\'s only in Russian now.<br/><br/>
					And I can\'t translate it right now. <br/><br/>
					But Il\'l do it as soon as possible.<br/>
					<br/><br/><br/><br/>

					<b style="font-size:x-large;">
					HiFi<br/><br/><br/>
					Intelligent<br/><br/><br/>
					Club
					</b><br/><br/><br/>
					President <br/><br/><br/>
					<b>Hfic Samin</b>.<br/><br/>
					</marquee>
				</ifEN>
			</readyText>
		</ifReady>';
		return $str;
		}
	private function strDIndicatorTopOverload()
		{
		$str=
		'<ifOverload
			class	="abs"
			style	="
				display		:none;
				top		:20px;
				left		:0px;
				width		:100vw;
				height		:20px;
				line-height	:20px;
				color		:#fff;
				background-color:red;
				"
			>
			<playerOverloadStat
				class	="block right BLL TC3 BC3"
				style	="
					text-align	:left;
					height		:100%;
					width		:100px;
					line-height	:13px;
					"
				>
				<loadingDuration
					class="block"
					>
					0
				</loadingDuration>
				<loadingErrors
					class="block"
					>
					0
				</loadingErrors>
			</playerOverloadStat>
			<playerOverloadText
				class	="block scrollerY"
				style	="
					height		:100%;
					text-align	:left;
					"
				>
				<playerOverloadStationName
					id	="playerControlAlwaysVisibleOverloadStationName"
					>
				</playerOverloadStationName>
				<ifEN>
					<marquee>This station rejects playing. May be this station is overload or your internet connection is not enoght. Can\'t stay connected. You can try to listen another station</marquee>
				</ifEN>
				<ifRU>
					<marquee>Не получается подключиться к выбранной радиостанции. Возможно станция перегружена или интернет канал слишком мал, чтобы воспроизводить выбранную станцию. Вы можете попробовать выбрать другую радиостанцию.</marquee>
				</ifRU>
			</playerOverloadText>
		</ifOverload>';
		return $str;
		}
	private function strDIndicatorTopLoading()
		{
		$str=
		'<ifLoadingAudio
			class	="block cursor layer_2_2 no-select"
				onclick	="objPlayer.stop();"
			style	="
				display		:none;
				height		:20px;
				line-height	:20px;
				text-align	:center;
				color		:#000;
				background-color:yellow;
				"
			>
			<ifRU 
				title	="Для отмены загрузки радио станции нажмите."
				>
				☒
			</ifRU>
			<ifEN
				title	="To stop loading this audio stream just press."
				>
				☒
			</ifEN>
		</ifLoadingAudio>
		<ifLoadingAudio
			class	="abs cursor TC3 layer_2_2 no-select"
			style	="
				display		:none;
				top		:20px;
				left		:0px;
				width		:100vw;
				height		:40px;
				text-align	:center;
				line-height	:20px;
				background-color:yellow;
				"
			>
			<playerLoadingButton
				class	="block left BLJ TC3 BC3"
				id	="playerControlAlwaysVisibleLoading"
				onclick	="objPlayer.stop();"
				style	="
					text-align	:center;
					height		:100%;
					width		:40px
					line-height	:38px;
					font-size	:x-large;
					"
				>
				<ifRU
					title="Нажмите чтобы отменить подключение"
					>
					☒
				</ifRU>
				<ifEN
					title="Press to stop connecting"
					>
					☒
				</ifEN>
			</playerLoadingButton>
			<playerLoadingStat
				id	="playerControlAlwaysVisibleLoadingStat"
				class	="block right BLL TC3 BC3"
				style	="
					text-align	:left;
					height		:100%;
					width		:100px;
					line-height	:13px;
					"
				>
				<loadingDuration
					class="block"
					>
					<header
						class="block left"
						>pl
					</header>
					<digit
						id	="playerControlAlwaysVisibleLoadingDuration"
						>
						0
					</digit>
					
				</loadingDuration>
				<loadingErrors
					class="block"
					>
					<header
						class="block left"
						>pe
					</header>
					<digit
						id	="playerControlAlwaysVisibleLoadingErrors"
						>
						0
					</digit>
				</loadingErrors>
			</playerLoadingStat>
			<playerLoadingText
				id	="playerControlAlwaysVisibleLoadingText"
				class="block scrollerY TC1"
				style	="
					height		:100%;
					"
				>
				<marquee>
					<ifRU>
						Подключаюсь к радиостанции...
					</ifRU>
					<ifEN>
						Connecting to radiostation.... 
					</ifEN>
				</marquee>
				<playerLoadingStationName
					id	="playerControlAlwaysVisibleLoadingStationName"
					>
				</playerLoadingStationName>
			</playerLoadingText>
		</ifLoadingAudio>';
		return $str;
		}
	private function strDIndicatorTopPlaying()
		{
		$str=
		'<ifPlaying
			class="block cursor layer_2_2 no-select TC3 BC3"
			onclick	="objPlayer.stop();"
			style	="
				display		:none;
				height		:20px;
				line-height	:21px;
				text-align	:center;
				background-color:#062b88;
				"
			>'.
			//PlayerEventIndicator::strHTML(). Osciloscope - disabled temporary
			'<ifRU 
				title="Для остановки воспроизведения нажмите."
				>
				■
			</ifRU>
			<ifEN
				title="To stop plaing this audio stream just press."
				>
				■
			</ifEN>
		</ifPlaying>
		<ifPlaying
			class	="abs cursor layer_2_2 select TC3 BC3"
			style	="
				display		:none;
				top		:20px;
				left		:0;
				width		:100vw;
				height		:40px;
				text-align	:left;
				background-color:#062b88;
				"
			>
			<playerPlayingButton
				class	="block left TC3 BC3"
				onclick	="objPlayer.stop();"
				style="
					text-align	:center;
					height		:100%;
					width		:40px;
					line-height	:38px;
					"
				>
				■
			</playerPlayingButton>
			<playerPlayingStat
				id	="playerControlAlwaysVisibleLoadingStat"
				class	="block right BLL TC3 BC3"
				style	="
					text-align	:left;
					height		:100%;
					width		:100px;
					line-height	:13px;
					"
				>
				<playingDuration
					id	="playerControlAlwaysVisiblePlayingDuration"
					class="block"
					>
					0
				</playingDuration>
				<lplayingErrors
					id	="playerControlAlwaysVisiblePlayingErrors"
					class="block"
					>
					0
				</playingErrors>
				<lplayingErrorDuration
					id	="playerControlAlwaysVisiblePlayingErrorDuration"
					class="block"
					>
					0
				</playingErrorDuration>
			</playerPlayingStat>
			<!--a 
				class="block left"
				href		="/getStationToTheTop"
				onClick		="
					return false;
					"
				>
				<ifRU>
					В избранные станции
				</ifRU>
				<ifEN>
					To selected stations
				</ifEN>
			</a-->
			<playerPlayingText
				id	="playerControlAlwaysVisiblePlaying"
				class	="block scrollerY"
				onclick	=""
				style="
					height		:100%;
					"
				>
			</playerPlayingText>
		</ifPlaying>';
		return $str;
		}
	private function strDIndicatorTopNoConnection()
		{
		$str=
		'<ifNoConnection
			class	="cursor layer_2_2 no-select TC3 BC3"
			onclick	="objPlayer.play();"
			style	="
				display		:none;
				color		:#000;
				height		:40px;
				text-align	:center;
				"
			>
		</ifNoConnection>
		<ifNoConnection
			class	="abs cursor layer_2_2 no-select BC1 TC1"
			onclick	="objPlayer.play();"
			style	="
				display		:none;
				width		:100vw;
				height		:40px;
				top		:20px;
				left		:0px;
				text-align	:center;
				"
			>
			<playerNoConnectionStat
				class	="block right BLL TC3 BC3"
				style	="
					text-align	:left;
					height		:100%;
					width		:100px;
					line-height	:13px;
					"
				>
				<NoConnectionDuration
					class="block"
					>
					0
				</NoConnectionDuration>
				<NoConnectionErrors
					class="block"
					>
					0
				</NoConnectionErrors>
			</playerNoConnectionStat>
			<playerNoConnectionext
				class	="block scrollerY"
				style	="
					height		:100%;
					text-align	:left;
					"
				>
				<playerNoConnectionStationName
					id	="playerControlAlwaysVisibleNoConnectionStationName"
					>
				</playerNoConnectionStationName>
				<ifRU>
					<marquee>Радиостанция сейчас недоступна. Возможно она очень далеко, перегружена или отдыхает. Попробуйте выбрать выбрать другую радиостанцию из списка.</marquee>
				</ifRU>
				<ifEN>
					<marquee>This station is currently offline. Please chose another station from station\'s list.</marquee>
				</ifEN>
			</playerNoConnectionext>
		</ifNoConnection>';
		return $str;
		}
	private function strDIndicatorTopStopped()
		{
		$str=
		'<ifStopped
			class	="block cursor layer_2_2 BC3 TC3 no-select "
			onclick	="
				/*var objPlayerIndicatorMembrane			=this.nextElementSibling;*/
				/*objPlayer.objAudio.src				=objPlayerIndicatorMembrane.getAttribute(\'playerId\');*/
				objPlayer.play();
				"
			style	="
				display		:none;
				height		:20px;
				text-align	:center;
				line-height	:19px;
				font-size	:small;
				background-color:green;
				"
			>'.
			//PlayerEventIndicator::strHTML(). Osciloscope - disabled temporary
			'
			▷
		</ifStopped>
		<ifStopped
			class	="abs cursor layer_2_2 BC1 select"
			style	="
				display		:none;
				left		:0;
				top		:20px;
				width		:100vw;
				height		:40px;
				line-height	:21px;
				text-align	:center;
				color		:#777;
				"
			>
			<playerPlayButton
				class	="block left TC3 BC3"
				onclick	="
					/*objPlayer.objAudio.src			=this.parentNode.getAttribute(\'playerId\');
					objPlayer.objAudio.play();*/
					objPlayer.play();
					"
				style	="
					text-align	:center;
					height		:100%;
					width		:40px;
					line-height	:38px;
					"
				>
				▷
			</playerPlayButton>
			<playerNoConnectionStat
				class	="block right BLL TC3 BC3"
				style	="
					text-align	:left;
					height		:100%;
					width		:100px;
					line-height	:13px;
					"
				>
				<NoConnectionDuration
					class="block"
					>
					0
				</NoConnectionDuration>
				<NoConnectionErrors
					class="block"
					>
					0
				</NoConnectionErrors>
			</playerNoConnectionStat>
			<playerPlayText
				id	="playerControlAlwaysVisibleStopped"
				class	="block scrollerY"
				style	="
					height		:100%;
					"
				>
			</playerPlayText>
		</ifStopped>';
		return $str;
		}
	public static function strHTML($_objKIIM, $_strAudio, $_strAudioType)
		{
		$objShader=new Player($_objKIIM, $_strAudio, $_strAudioType);
		return $objShader->strHTML;
		}
	public static function strObjectInit()
		{
		return $str;
		}
	public static function strObjectDeclare()
		{
		return $str;
		}
	}
?>